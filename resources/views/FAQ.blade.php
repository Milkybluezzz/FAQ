<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BandungAppFAQ - FAQ</title>
    <link rel="stylesheet" href="css/FAQ.css">
    <link rel="icon" href="{{ asset('/img/bandungappLogo.png') }}" type="image">
</head>
<body>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-roboto pt-20">


    @include('component.navbar')

    <div class="flex items-center justify-center mt-8">
        <form action="{{ url('/FAQ') }}" method="get" class="flex items-center bg-white shadow-md rounded-lg overflow-hidden">
            <input 
                type="text" 
                name="search" 
                id="search" 
                placeholder="Cari Konten..." 
                class="px-4 py-2 w-80 border-none focus:ring-0 focus:outline-none"
            >
            <button 
                type="submit" 
                class="bg-blue-600 text-white px-4 py-2 hover:bg-blue-700 transition">
                Search
            </button>
        </form>
        <a 
            href="{{ url('/FAQ') }}" 
            class="ml-4 text-sm text-blue-600 hover:text-blue-800 transition underline">
            Refresh
        </a>
    </div>
    
    @if ($content->isEmpty())
    <div class="flex items-center justify-center h-56 bg-gray-100">
        <div class="flex flex-col items-center p-6 bg-white border border-gray-300 rounded-lg shadow-md">
            <div class="flex items-center justify-center w-16 h-16 mb-4 bg-blue-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m2 0a2 2 0 01-2 2h-6a2 2 0 01-2-2h10zm-7-6h6m2 0a2 2 0 01-2 2h-6a2 2 0 01-2-2h10zm3 12h3m0 0v-6m0 6h-3m0 0H3m6 0h3m0 0h6" />
                </svg>
            </div>
            <p class="mb-2 text-lg font-semibold text-gray-800">Tidak ada konten tersedia</p>
        </div>
    </div>
@endif

@if($content)
<div class="container mx-auto p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($content as $content)
    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow border border-gray-200 hover:border-blue-500">
        <div class="flex items-center space-x-4">
            <img 
                alt="Content Image" 
                class="w-12 h-12 rounded-full object-cover" 
                src="{{ asset('img/' . $content->gambar) }}"
            >
            <h2 class="text-xl font-bold text-gray-800 truncate">{{$content->title}}</h2>
        </div>
        <p class="mt-4 text-gray-600 line-clamp-3">{{$content->deskripsi}}</p>
        <div class="mt-6 flex items-center justify-between">
            <a 
            href="{{ url('FAQ/' . $content->id) }}" 
            class="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg shadow-md hover:bg-blue-600 transition hover:shadow-lg">
            Lihat Selanjutnya
        </a>
        
        </div>
    </div>
    @endforeach
</div>
</div>
@endif
</div>

</body>
</html>