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
        return view('home', compact('content', 'faq'));
    }
    
    public function faq($id)
    {
        $faq = Faq::where('konten_id', $id)->first();
       
        $qna = $faq ? Qna::where('faq_id', $faq->id)->get() : collect();
       
        return view('faqSection.e-pentingFAQ', compact('faq', 'qna'));
    }

}
