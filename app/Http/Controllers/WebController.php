<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Faq;

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
        $faq = Faq::find($id);

        return view('faqSection.e-pentingFAQ', compact('faq'));
    }

    public function homepage()
    {
        $content = Content::count();
        $faq = Faq::count();
        return view('home', compact('content', 'faq'));
    }


}
