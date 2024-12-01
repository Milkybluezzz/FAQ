<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ini form qna</h1>
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
    action="{{ empty($qna) ? url('/admin/QnA/store/'. $faq_id) : url('/admin/QnA/update/' . $qna->id) }}" 
    method="POST">
    @csrf

    @if (!empty($qna))
        @method('PATCH')
    @endif

    <input type="text" name="pertanyaan" placeholder="Pertanyaan" value="{{ old('pertanyaan', $qna->pertanyaan ?? '') }}">
    <textarea name="jawaban" placeholder="Jawaban">{{ old('jawaban', $qna->jawaban ?? '') }}</textarea>
    <button type="submit">{{ empty($qna) ? 'Tambah qna' : 'Update qna' }}</button>
</form>


</body>
</html>