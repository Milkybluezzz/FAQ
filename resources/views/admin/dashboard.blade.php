<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content CMS Dashboard</title>
    <link rel="icon" href="{{ asset('/img/bandungappLogo.png') }}" type="image">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen py-10">
    <div class="container mx-auto max-w-7xl bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 text-white px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Content CMS</h1>
            <a href="{{url('/admin/content')}}" class="bg-white text-blue-600 px-5 py-2 rounded shadow hover:bg-blue-50 hover:shadow-md transition">
                Tambah Konten
            </a>
        </div>

        <!-- Table Section -->
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full text-left border border-gray-200 rounded-lg">
                    <thead class="bg-gray-50 text-gray-700 uppercase text-sm">
                        <tr>
                            <th class="p-4 border-b">Gambar</th>
                            <th class="p-4 border-b">Judul</th>
                            <th class="p-4 border-b">Deskripsi</th>
                            <th class="p-4 border-b text-center">Edit</th>
                            <th class="p-4 border-b text-center">Tambah FAQ</th>
                            <th class="p-4 border-b text-center">Hapus</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($content as $content)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="p-4 text-center">
                                <div class="w-16 h-16 rounded overflow-hidden mx-auto">
                                    <img src="{{asset('img/'.$content->gambar)}}" alt="{{ $content->title }}" class="w-full h-full object-cover">
                                </div>
                            </td>
                            <td class="p-4 font-medium text-gray-800">{{ $content->title }}</td>
                            <td class="p-4 text-gray-600">{{ $content->deskripsi }}</td>
                            <td class="p-4 text-center">
                                <a href="{{url('/admin/content/edit/'.$content->id)}}" class="text-green-600 hover:text-green-800 font-semibold transition">
                                    Edit
                                </a>
                            </td>
                            <td class="p-4 text-center">
                                <a href="{{url('/admin/FAQ/all/' . $content->id)}}" class="text-blue-600 hover:text-blue-800 font-semibold transition">
                                    Tambah FAQ
                                </a>
                            </td>
                            <td class="p-4 text-center">
                                <form action="{{url('/admin/content/delete/'.$content->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="text-red-600 hover:text-red-800 font-semibold transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
