<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Qna;
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





    $content = Content::create([
        'title' => $request->title,
        'deskripsi' => $request->deskripsi,
        'gambar' => $request->gambar->getClientOriginalName(),

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
    $content = Content::findOrFail($id);
    
    $faqs = Faq::where('konten_id', $id)->get();
    $faq_ids = $faqs->pluck('id');
    $qna = Qna::whereIn('faq_id', $faq_ids)->get();

    return view('admin.formFaq', [
        'faqs' => $faqs, 
        'judul' => $content, 
        'qna' => $qna 
    ]);
}

public function createFaq($id)
{
    $content = Content::findOrFail($id);
    return view('admin.storeFaq', ['content_id' => $id]);
}
public function storeFaq(Request $request, $id)
{
    $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',

    ]);

    $faq = new Faq();
    $faq->judul = $request->judul;
    $faq->deskripsi = $request->deskripsi;
    $faq->konten_id = $id;
    $faq->save();

    return redirect('/admin/FAQ/all/'. $id)
        ->with('success', 'FAQ berhasil ditambahkan.');
}
    public function editFaq($id)
        {
            $faq = Faq::findOrFail($id); 
            $content_id = $faq->content_id; 
            return view('admin.storeFaq', compact('faq', 'content_id'));
        }


        public function updateFaq(Request $request, $id)
        {
            $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',

            ]);
        
            $faq = Faq::findOrFail($id); // Validasi ID
            $faq->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,

            ]);
        
            return redirect('/admin/FAQ/all/' . $faq->konten_id)->with('success', 'FAQ berhasil diperbarui.');
        }
        
    public function deleteFaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
    
        return redirect('/admin/dashboard/' )->with('success', 'FAQ berhasil dihapus.');
    }

    public function createQna($faq_id)
    {
        $faq = Faq::findOrFail($faq_id);
        return view('admin.formQna', ['faq_id' => $faq_id]);
    }

    public function storeQna(Request $request, $faq_id)
{
    $request->validate([
        'pertanyaan' => 'required',
        'jawaban' => 'required',
    ]);

    $faqId = Faq::findOrFail($faq_id);

    $qna = new Qna();
    $qna->pertanyaan = $request->pertanyaan;
    $qna->jawaban = $request->jawaban;
    $qna->faq_id = $faqId->id;
    $qna->save();

    return redirect('/admin/FAQ/all/' . $faqId->konten_id)->with('success', 'QnA berhasil dibuat.');
}

    public function editQna($id)
    {
        $qna = Qna::findOrFail($id); // Pastikan ID ditemukan
        $content_id = $qna->faq_id; // Dapatkan content_id untuk digunakan di view

        
        $qna = Qna::findOrFail($id);
        $faq = Faq::findOrFail($qna->faq_id);
        $konten = Content::findOrFail($faq->konten_id);
        

        return view('admin.formQna', compact('qna', 'content_id'));
    }

    public function updateQna(Request $request, $id)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $qna = Qna::findOrFail($id); // Validasi ID
        $qna->update([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
        ]);

        $faq = Faq::findOrFail(Qna::findOrFail($id)->faq_id);
    
        return redirect('/admin/FAQ/all/' . $faq->konten_id)->with('success', 'Qna berhasil diperbarui.');
    }
    
    public function deleteQna($id)
    {
        $qna = Qna::find($id);
        $qna->delete();
    
        return redirect()->back()->with('success', 'Qna berhasil dihapus.');
    }

}
