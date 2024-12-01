<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini section Faq judul {{ $judul->title }}</h1>
    <a href="{{url('/admin/dashboard')}}">Kembali ke konten</a><br>
    <a href="{{url('/admin/FAQ/create/'.$judul->id)}}">Tambah faq</a>

@if ($faqs)
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>question</th>
            <th>answer</th>
            <th colspan="2">aksi</th>
        </tr>
        @foreach ($faqs as $faq)
            <tr>
                <td>{{ $faq->judul }}</td>
                <td>{{ $faq->deskripsi }}</td>
                <td>{{ $faq->pertanyaan }}</td>
                <td>{{ $faq->jawaban }}</td>
                <td><a href="{{url('/admin/FAQ/edit/'.$faq->id)}}">edit</a></td>
                <td><form action="{{url('/admin/FAQ/delete/'.$faq->id)}}" method="post">@csrf<input type="submit" value="delete"></form></td>
            </tr>
        @endforeach
    </table>
@else
    <p>tidak ada konten</p>

@endif
</body>
</html>