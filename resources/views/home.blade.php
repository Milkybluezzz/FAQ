<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BandungAppFAQ - Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('/img/logologo.png') }}" type="image" class="rounded">
    <script src="https://cdn.tailwindcss.com">
    </script>
</head>
<style>
    body{
        
    }
    ::-webkit-scrollbar {
            display: none;  /* Ini akan menyembunyikan scroll bar */
        }

        .hero-section {
        position: relative;
        height: 30vh;
        background-image: linear-gradient(to bottom, #004db1, #4fadec); /* Add a subtle gradient to the background */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        overflow: hidden;
        opacity: 0;
        animation: fadeIn 2s forwards;
        }


        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .typewriter {
            font-family: monospace;
            white-space: nowrap;
            overflow: hidden;
            font-size: 15px;
            border-right: 3px solid;
            animation: typing 3.5s steps(40, end), blink 0.75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink {
            from, to { border-color: transparent; }
            50% { border-color: rgb(255, 255, 255); }
        }


        .zoom-in {
        animation: zoomIn 1.5s ease-in-out forwards;
        max-width: 20rem;
    }

    @keyframes zoomIn {
        from { transform: scale(0.5); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }


        .hero-section-inner {
        overflow: hidden;
        height: 100%;
        }

        .hero-section .content {
        position: relative;
        z-index: 1;
        padding: 20px; /* Add some padding to the content */
        font-family: 'Open Sans', sans-serif; /* Use a more modern font */
        }

        .hero-section .content h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
        }

        .hero-section .content p {
        font-size: 18px;
        margin-bottom: 20px;
        }


        .hero-section .wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 250%;
        height: 120px;
        line-height: 10%;
        z-index: 0;
        }

        .hero-section .wave svg {
        position: relative;
        display: block;
        width: calc(180% + 2px);
        height: 145px;
        }

        @keyframes waveAnimation {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
}

        .wave > svg > path {
            animation: waveAnimation 11s linear infinite;
        }
</style>
<body class="bg-gray-100 font-roboto">
    
    @include('component.navbar')

    
    <header class="hero-section">
        <div class="content">
            <div class="flex justify-center">
                <img src="/img/—Pngtree—vector icon gedung sate bandung_6584866.png" alt="Deskripsi Gambar" class="zoom-in">
            </div>
            <h1 class="typewriter">Selamat Datang di BandungAppFAQ </h1>
            <p>Platform informasi lengkap terkait Aplikasi Bandung.</p>
            <a href="#about" class="btn">Baca Selanjutnya</a>
        </div>
        <div class="wave">
            <svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,60 C150,120 350,0 500,60 C650,120 850,0 1000,60 C1150,120 1350,0 1500,60 L1500,100 L0,100 Z" style="fill:#ffffff;"></path>
            </svg>
        </div>
    </header>


    <!-- Statistik Section -->
    <div class="w-11/12 mx-auto p-5">
        <h1 class="text-4xl font-bold text-center text-gray-800">BandungAppFAQ Stats</h1>
    
        <div class="flex justify-around mt-6 mx-6">
            <div class="bg-white rounded-lg shadow-md p-5 w-1/3 text-center mx-6">
                <h2 class="text-xl font-semibold text-gray-600">Jumlah Aplikasi</h2>
                <p id="total-apps" class="text-4xl text-blue-800 mt-2">{{ $jmlcontent }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-5 w-1/3 text-center mx-6">
                <h2 class="text-xl font-semibold text-gray-600">Jumlah FAQ Terdaftar</h2>
                <p id="total-faqs" class="text-4xl text-blue-800 mt-2">{{ $jmlfaq }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-5 w-1/3 text-center mx-6">
                <h2 class="text-xl font-semibold text-gray-600">FAQ yang Sering Diakses</h2>
                <p id="most-accessed-faq" class="text-4xl text-blue-800 mt-2">Loading...</p>
            </div>
        </div>
    
        <div class="mt-8">
            <div class="text-center text-lg font-semibold text-gray-600 mb-4">Aplikasi yang Paling Sering Diakses</div>
            <div id="chart" class="bg-white p-5 rounded-lg shadow-md "></div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <section id="about" class="content-section relative">
        <img src="/img/batik biru final.png" alt="Batik Biru" class="absolute top-0 right-0 w-96 h-auto">
        <img src="/img/batik biru final.png" alt="Batik Biru" class="absolute bottom-0 left-0 w-96 h-auto transform scale-x-[-1] scale-y-[-1]">
        <img src="/img/batik kuning final.png" alt="Batik kuning" class="absolute bottom-0 right-0 w-96 h-auto">
        <img src="/img/batik kuning final.png" alt="Batik kuning"  class="absolute top-0 left-0 w-96 h-auto transform scale-x-[-1] scale-y-[-1]">
        <div class="relative z-10 flex items-center justify-center">
            <h2 class="text-black text-3xl font-bold">Tentang BandungAppFAQ</h2>
        </div>
        <p class="mt-4 text-lg text-center max-w-2xl mx-auto relative z-10">BandungAppFAQ adalah sebuah platform yang dirancang khusus untuk membantu pengguna aplikasi-aplikasi di Kota Bandung dengan menyediakan
           informasi dan jawaban atas pertanyaan yang sering diajukan (FAQ). Melalui situs ini, pengguna dapat dengan mudah menemukan solusi atas
           berbagai masalah yang mungkin mereka hadapi saat menggunakan aplikasi yang disediakan oleh pemerintah atau organisasi lain di kota ini.</p>
    </section>
    

    <section id="faq" class="content-section relative">
        <img src="/img/batik biru final.png" alt="Batik Biru" class="absolute bottom-0 right-0 w-96 h-auto transform  scale-y-[-1]">
        <img src="/img/batik biru final.png" alt="Batik Biru" class="absolute top-0 left-0 w-96 h-auto scale-x-[-1]">
        <img src="/img/batik kuning final.png" alt="Batik kuning" class="absolute top-0 right-0 w-96 h-auto transform scale-x-[-1] scale-y-[-1]">
        <img src="/img/batik kuning final.png" alt="Batik kuning"  class="absolute bottom-0 left-0 w-96 h-auto ">
        <h2>Frequently Asked Questions</h2>
        <ul>
            <li>
                <a class="question" onclick="toggleAnswer(1)">Apa itu BandungAppFAQ?</a>
                <p id="answer1" class="answer" style="display:none;">
                    BandungAppFAQ adalah platform yang menyediakan informasi dan FAQ mengenai aplikasi-aplikasi yang ada di Kota Bandung.
                </p>
            </li>
            <li>
                <a class="question" onclick="toggleAnswer(2)">Bagaimana cara menggunakan platform ini?</a>
                <p id="answer2" class="answer" style="display:none;">
                    Anda dapat mencari aplikasi yang tersedia, membaca FAQ terkait, dan mempelajari cara menggunakan aplikasi melalui platform ini.
                </p>
            </li>
            <li>
                <a class="question" onclick="toggleAnswer(3)">Di mana saya dapat menemukan informasi lebih lanjut?</a>
                <p id="answer3" class="answer" style="display:none;">
                    Informasi lebih lanjut dapat ditemukan di halaman "Kontak" atau melalui dukungan pelanggan kami.
                </p>
            </li>
        </ul>
    </section>

    <section id="contact" class="content-section relative">
        <img src="/img/batik biru final.png" alt="Batik Biru" class="absolute top-0 right-0 w-96 h-auto">
        <img src="/img/batik biru final.png" alt="Batik Biru" class="absolute bottom-0 left-0 w-96 h-auto transform scale-x-[-1] scale-y-[-1]">
        <img src="/img/batik kuning final.png" alt="Batik kuning" class="absolute bottom-0 right-0 w-96 h-auto">
        <img src="/img/batik kuning final.png" alt="Batik kuning"  class="absolute top-0 left-0 w-96 h-auto transform scale-x-[-1] scale-y-[-1]">
        <h2>Hubungi kami</h2>
        <p>Jika Anda memiliki pertanyaan, jangan ragu untuk <a href="mailto:support@bandungappfaq.com">Hubungi kami</a>.</p>
    </section>

    @include('component.footer')

    <script src="js/stats.js"></script>
</body>
</html>