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
            $content = Content::all();
        } else {
            $content = Content::where('title', 'LIKE', "%$search%")
                        ->get();
        }


        return view('FAQ', compact('content'));
    }
    public function faq($id)
{
    // Use findOrFail to ensure the FAQ exists
    $faq = Faq::findOrFail($id);
    
    // Get QnAs related to this specific FAQ
    $qna = Qna::where('faq_id', $id)->get();
    
    return view('faqSection.e-pentingFAQ', compact('faq', 'qna'));
}

    public function homepage()
    {
        $content = Content::count();
        $faq = Faq::count();
        return view('home', compact('content', 'faq'));
    }


}
