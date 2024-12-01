<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
<form 
    action="{{ empty($faq) ? url('/admin/FAQ/store/' . $content_id) : url('/admin/FAQ/update/' . $faq->id) }}" 
    method="POST">
    @csrf

    @if (!empty($faq))
        @method('PATCH')
    @endif

    <input type="text" name="judul" placeholder="Judul" value="{{ old('judul', $faq->judul ?? '') }}">
    <input type="text" name="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi', $faq->deskripsi ?? '') }}">
    <input type="text" name="pertanyaan" placeholder="Pertanyaan" value="{{ old('pertanyaan', $faq->pertanyaan ?? '') }}">
    <textarea name="jawaban" placeholder="Jawaban">{{ old('jawaban', $faq->jawaban ?? '') }}</textarea>
    <button type="submit">{{ empty($faq) ? 'Tambah FAQ' : 'Update FAQ' }}</button>
</form>


</body>
</html>