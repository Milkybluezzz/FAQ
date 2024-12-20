<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QnA Form</title>
    <link rel="icon" href="{{ asset('/img/bandungappLogo.png') }}" type="image">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-lg">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">QnA Form</h1>

        <!-- Error Alert -->
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-6 rounded-lg shadow-sm" role="alert">
            <ul class="list-disc pl-6 space-y-1">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form -->
        <form action="{{ empty($qna) ? url('/admin/QnA/store/'. $faq_id) : url('/admin/QnA/update/' . $qna->id) }}" method="POST" class="space-y-6">
            @csrf
            @if (!empty($qna))
            @method('PATCH')
            @endif

            <!-- Input Pertanyaan -->
            <div>
                <label for="pertanyaan" class="block text-gray-700 font-medium mb-2">Pertanyaan</label>
                <input type="text" id="pertanyaan" name="pertanyaan" placeholder="Masukkan pertanyaan" value="{{ old('pertanyaan', $qna->pertanyaan ?? '') }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Input Jawaban -->
            <div>
                <label for="jawaban" class="block text-gray-700 font-medium mb-2">Jawaban</label>
                <textarea id="jawaban" name="jawaban" placeholder="Masukkan jawaban" rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('jawaban', $qna->jawaban ?? '') }}</textarea>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition">
                {{ empty($qna) ? 'Tambah QnA' : 'Update QnA' }}
            </button>
        </form>
    </div>
</body>
</html>
