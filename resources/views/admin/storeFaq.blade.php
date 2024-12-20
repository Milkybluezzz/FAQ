<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Form</title>
    <link rel="icon" href="{{ asset('/img/bandungappLogo.png') }}" type="image">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Tambah FAQ</h1>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded" role="alert">
            <ul class="list-disc pl-4">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ empty($faq) ? url('/admin/FAQ/store/' . $content_id) : url('/admin/FAQ/update/' . $faq->id) }}" method="POST" class="space-y-4">
            @csrf

            @if (!empty($faq))
            @method('PATCH')
            @endif

            <input type="text" name="judul" placeholder="Judul" value="{{ old('judul', $faq->judul ?? '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

            <textarea name="deskripsi" placeholder="Deskripsi" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi', $faq->deskripsi ?? '') }}</textarea>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                {{ empty($faq) ? 'Tambah FAQ' : 'Update FAQ' }}
            </button>
        </form>
    </div>
</body>
</html>