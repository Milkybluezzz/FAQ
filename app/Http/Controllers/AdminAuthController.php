<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Content;
use App\Models\Faq;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Pastikan Anda membuat tampilan login di resources/views/admin/login.blade.php
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard'); // Redirect ke dashboard admin
        }

        return back()->withErrors([
            'email' => 'Login failed, please check your credentials',
        ]);
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        $content = Content::with('faq')->get();

        
        return view('admin.dashboard', compact('content'));
    }
    public function addContent()
    {
        return view('admin.formContent');
    }
    public function createContent(Request $request)
{
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'required',
        'deskripsi' => 'required',
    ]);


    $nextFaqId = Content::max('faq_id') + 1;


    $content = Content::create([
        'title' => $request->title,
        'deskripsi' => $request->deskripsi,
        'gambar' => $request->gambar->getClientOriginalName(),
        'faq_id' => $nextFaqId, 
    ]);


    $request->gambar->move(public_path('img'), $request->gambar->getClientOriginalName());


    return redirect('/admin/dashboard')->with('success', 'Content berhasil ditambahkan.');
}

    public function editContent($id)
    {
        $content = Content::find($id);
        
        return view('admin.formContent', compact('content'));
    }

    public function updateContent(Request $request, $id)
{
    $request->validate([
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'required',
        'deskripsi' => 'required',
    ]);

    $content = Content::find($id);

    if (!$content) {
        return redirect('/admin/dashboard')->with('error', 'Content tidak ditemukan.');
    }

    if ($request->hasFile('gambar')) {

        $oldImagePath = public_path('img/' . $content->gambar);

        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        $newImageName = $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('img'), $newImageName);


        $content->gambar = $newImageName;
    }

    $content->title = $request->title;
    $content->deskripsi = $request->deskripsi;
    $content->save();

    return redirect('/admin/dashboard')->with('success', 'Content berhasil diperbarui.');
}


    public function deleteContent($id)
{

    $content = Content::find($id);


    if ($content) {

        $gambarPath = public_path('img/' . $content->gambar);


        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }

        $content->delete();
    }


    return redirect('/admin/dashboard')->with('success', 'Content berhasil dihapus.');
}

    public function faq($id)
    {
        $faqs = Faq::where('content_id', $id)->get();
        $judul = Content::find($id);
        return view('admin.formFaq', compact('faqs', 'judul'));
    }

    public function createFaq($id)
    {

        return view('admin.storeFaq', ['content_id' => $id]);
    }
    public function storeFaq(Request $request, $id)
{

    $request->validate([
        'pertanyaan' => 'required',
        'jawaban' => 'required',
        'judul' => 'required',
        'deskripsi' => 'required',
    ]);


    $content = Content::findOrFail($id); 


    Faq::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'pertanyaan' => $request->pertanyaan,
        'jawaban' => $request->jawaban,
        'content_id' => $content->id, 
    ]);


    return redirect('/admin/FAQ/all/' . $content->id)->with('success', 'FAQ berhasil ditambahkan.');
}
    public function editFaq($id)
        {
            $faq = Faq::findOrFail($id); // Pastikan ID ditemukan
            $content_id = $faq->content_id; // Dapatkan content_id untuk digunakan di view
            return view('admin.storeFaq', compact('faq', 'content_id'));
        }


        public function updateFaq(Request $request, $id)
        {
            $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
                'pertanyaan' => 'required',
                'jawaban' => 'required',
            ]);
        
            $faq = Faq::findOrFail($id); // Validasi ID
            $faq->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban,
            ]);
        
            return redirect('/admin/FAQ/all/' . $faq->content_id)->with('success', 'FAQ berhasil diperbarui.');
        }
        
    public function deleteFaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
    
        return redirect('/admin/FAQ/all/' . $faq->content_id )->with('success', 'FAQ berhasil dihapus.');
    }

}
