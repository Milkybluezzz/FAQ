<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Form</title>
    <link rel="icon" href="{{ asset('/img/bandungappLogo.png') }}" type="image">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <!-- Error Alert -->
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-6 rounded-md">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form -->
        <form action="{{url('/admin/content', @$content->id )}}" method="post" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @if (!empty($content))
            @method('patch')
            @endif

            <!-- Title Input -->
            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul</label>
                <input type="text" id="title" name="title" placeholder="Judul"
                    value="{{ old('title', @$content->title) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Description Input -->
            <div>
                <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsi" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('deskripsi', @$content->deskripsi) }}</textarea>
            </div>

            <!-- Image Upload -->
            <div>
                <label for="gambar" class="block text-gray-700 font-medium mb-2">Gambar</label>
                <div class="flex items-center space-x-4">
                    <input type="file" id="gambar" name="gambar"
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    @if (!empty($content->gambar))
                    <div class="w-20 h-20 rounded-md overflow-hidden shadow-md">
                        <img src="{{ old('gambar', asset('img/' . @$content->gambar)) }}" alt="Preview"
                            class="object-cover w-full h-full">
                    </div>
                    @endif
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
