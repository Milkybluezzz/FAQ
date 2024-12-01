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

public function faq($faq_id)
{
    $content = Content::findOrFail($faq_id);
    
    $faqs = Faq::where('id', $content->faq_id)->get();
    $qna = Qna::whereIn('faq_id', $faqs->pluck('id'))->get();

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
        'pertanyaan' => 'required',
        'jawaban' => 'required',
    ]);

    // Find the content
    $content = Content::findOrFail($id);

    // Get the maximum qna_id for this content and increment
    $maxQnaId = Faq::where('content_id', $content->id)->max('qna_id') ?? 0;
    $nextQnaId = $maxQnaId + 1;

    // Create the FAQ
    $faq = Faq::create([
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'pertanyaan' => $request->pertanyaan,
        'jawaban' => $request->jawaban,
        'content_id' => $content->id,
        'qna_id' => $nextQnaId
    ]);

    return redirect('/admin/FAQ/all/' . $content->id)
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

    $faq = Faq::findOrFail($faq_id);

    Qna::create([
        'pertanyaan' => $request->pertanyaan,
        'jawaban' => $request->jawaban,
        'faq_id' => $faq->id,  // This links to the specific FAQ
        'qna_id' => $faq->qna_id  // This uses the qna_id from the FAQ
    ]);

    return redirect('/admin/FAQ/all/' . $faq->content_id)
        ->with('success', 'Qna berhasil ditambahkan.');
}

    public function editQna($id)
    {
        $qna = Qna::findOrFail($id); // Pastikan ID ditemukan
        $content_id = $qna->faq_id; // Dapatkan content_id untuk digunakan di view
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
    
        return redirect('/admin/FAQ/all/' . $qna->faq_id)->with('success', 'Qna berhasil diperbarui.');
    }
    
    public function deleteQna($id)
    {
        $qna = Qna::find($id);
        $qna->delete();
    
        return redirect()->back()->with('success', 'Qna berhasil dihapus.');
    }

}
