<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Qna;

class WebController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        if (empty($search)) {
            $content = Content::with('faq')->get();
        } else {
            $content = Content::where('title', 'LIKE', "%$search%")
                        ->get();
        }


        return view('FAQ', compact('content'));
    }
    
    public function homepage()
    {
        $content = Content::count();
        $faq = Faq::count();
        $qna = Qna::count();
        $MostContent =  Content::with('faq')->orderBy('most_view', 'desc')->get();
        $MostView = Content::with(['faq.qna'])
        ->get()
        ->map(function ($content) {
            return [
                'judul' => $content->title,
                'jumlah_qna' => $content->faq ? $content->faq->qna->count() : 0,
            ];
        });
        return view('home', compact('content', 'faq','qna', 'MostContent', 'MostView'));
    }
    
    public function faq($id)
    {
        $faq = Faq::where('konten_id', $id)->first();
       
        $qna = $faq ? Qna::where('faq_id', $faq->id)->get() : collect();

        // Cari data Content berdasarkan ID
        $most_view = Content::findOrFail($id);

        // Tambahkan nilai most_view
        $most_view->increment('most_view');
       
        return view('faqSection.e-pentingFAQ', compact('faq', 'qna'));
    }



}
