<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gradient-to-r from-blue-900 to-blue-500 py-4 px-8 fixed top-0 left-0 w-full shadow-lg z-50 flex justify-between items-center">
        <div class="text-white text-2xl font-bold tracking-wider">
            <a href="/">BandungAppFAQ</a>
        </div>
        <!-- Mobile Menu Toggle -->
        <div class="md:hidden">
            <button id="menuToggle" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Menu Items -->
       <div class="flex items-center space-x-10 list-none">
            <li>
                <a href="/" class="text-white text-lg relative group">
                    Beranda
                    <span class="block absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
            <li>
                <a href="/FAQ" class="text-white text-lg relative group">
                    FAQ
                    <span class="block absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>
        </ul>
        <!-- Search Form -->
        <div class="hidden md:block">
            <form action="{{ route('faq.index') }}" method="GET" class="flex items-center">
                <input type="text" name="search" placeholder="Cari aplikasi..." class="p-2 border border-gray-300 rounded" aria-label="Search">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded ml-2">Cari</button>
            </form>
        </div>
    </nav>
    
</body>
</html>
