<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function view()
    {
        $content = Content::all();
        return view('FAQ', compact('content'));
    }
}
