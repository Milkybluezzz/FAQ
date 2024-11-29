<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Faq;

class PageController extends Controller
{
    public function index()
    {
        $jmlcontent = Content::count();
        $jmlfaq = Faq::count();
        
        return view('home', compact ('jmlcontent', 'jmlfaq'));
    }
}
