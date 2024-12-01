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
    <form action="{{url('/admin/content', @$content->id )}}" method="post" enctype="multipart/form-data">
        @csrf
    @if (!empty($content))
      @method('patch')
    @endif

        <input type="text" name="title" placeholder="judul" value="{{old('title', @$content->title)}}">
        <input type="text" name="deskripsi" id="" placeholder="deskripsi" value="{{old('deskripsi', @$content->deskripsi)}}">
        <input type="file" name="gambar" id="" placeholder="gambar" value="{{old('gambar', @$content->gambar)}}">
        <img src="{{old('gambar', asset('img/'. @$content->gambar))}}" alt="" width="100">

        <button type="submit">submit</button>
    </form>


</body>
</html>