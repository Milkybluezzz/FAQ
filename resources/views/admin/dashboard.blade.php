<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Ini dashboard admin cms
    <h1>Content CMS</h1>
    <a href="{{url('/admin/content')}}">Tambah Konten</a>
    <table border="1">
        <tr>
            <th>gambar</th>
            <th>judul</th>
            <th>deskripsi</th>
            <th colspan="3">aksi</th>

        </tr>
        @foreach ($content as $content)
        <tr>

            <td>{{ $content->gambar }}</td>
            <td>{{ $content->title }}</td>
            <td>{{ $content->deskripsi }}</td>
            <td>

            <a href="{{url('/admin/FAQ/all/'.$content->id)}}">{{$content->faq ? 'edit faq' : 'tambah faq'}}</a>  
        </td>
            <td>
                <a href="{{url('/admin/content/edit/'.$content->id)}}">Edit</a>
            </td>
            <td><form action="{{url('/admin/content/delete/'.$content->id)}}" method="post">
                @csrf
                <button type="submit">Delete</button>
            </form></td>


        </tr>
        @endforeach

    </table>
</body>
</html>

