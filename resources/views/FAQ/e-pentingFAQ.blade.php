<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMO(Project Manager Office)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: max-height 0.5s ease-in-out, opacity 0.5s ease-in-out;
        }
        .faq-answer.show {
            max-height: 500px; /* Sesuaikan dengan tinggi maksimal konten */
            opacity: 1;
        }
        .rotate {
            transform: rotate(180deg);
            transition: transform 0.5s ease;
        }
        .no-rotate {
            transition: transform 0.5s ease;
        }
        /* Untuk browser Webkit (Chrome, Safari, Edge, Opera) */
        ::-webkit-scrollbar {
            display: none;  /* Ini akan menyembunyikan scroll bar */
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans pt-20">

    <img src="/img/batik biru final.png" alt="Batik Biru" class="fixed bottom-0 right-0 w-96 h-auto transform  scale-y-[-1]">
        <img src="/img/batik biru final.png" alt="Batik Biru" class="fixed top-0 left-0 w-96 h-auto scale-x-[-1] pt-[60px]">
        <img src="/img/batik kuning final.png" alt="Batik kuning" class="fixed top-0 right-0 w-96 h-auto transform scale-x-[-1] scale-y-[-1] pt-[60px]">
        <img src="/img/batik kuning final.png" alt="Batik kuning"  class="fixed  bottom-0 left-0 w-96 h-auto pt-[60px]">

    @include('component.navbar')



    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">e-penting FAQs</h1>
        <p class="mb-4">Berikut adalah daftar pertanyaan umum mengenai aplikasi e-penting dan bagaimana penggunaannya dapat membantu dalam pencatatan stunting. Untuk melihat informasi lebih lanjut tentang penggunaan aplikasi e-penting, <a href="#" class="text-blue-600">Anda dapat membaca artikel lengkapnya di sini.</a></p>
        
        @php
            $faqs = [
                [
                    'question' => 'Apa itu aplikasi e-penting?',
                    'answer' => 'E-Penting adalah aplikasi elektronik pencatatan stunting yang digunakan di Kota Bandung.'
                ],
                [
                    'question' => 'Apa tujuan dari aplikasi e-penting?',
                    'answer' => 'Untuk meningkatkan tata kelola data stunting di Kota Bandung sehingga mendapatkan data yang berkualitas.'
                ],
                [
                    'question' => 'Apa manfaat aplikasi ini untuk masyarakat Kota Bandung?',
                    'answer' => '1. Memudahkan mendapatkan hasil pencatatan dan pendataan stunting yang akurat. <br> 2. Sebagai bahan pengambilan keputusan untuk intervensi yang tepat dari setiap kasus stunting yang ada di wilayah Kota Bandung. <br> 3. Membantu memudahkan dalam analisis data, validitas data, publikasi data, integrasi data dan edukasi masyarakat.'
                ],
            ];
        @endphp

        @foreach ($faqs as $index)
            <div class="border border-gray-300 rounded-md mb-2">
                <button class="w-full text-left p-4 flex justify-between items-center" onclick="toggleAnswer('answer{{ $index }}', this)">
                    <span>{{ $faq['question'] }}</span>
                    <i class="fas fa-chevron-down no-rotate"></i>
                </button>
                <div id="answer{{ $index }}" class="faq-answer p-4">
                    <p>{!! $faq['answer'] !!}</p>
                </div>
            </div>
        @endforeach
        
        <div class="pt-12 pr-28">
            <a href="/FAQ" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold pr-4 py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-opacity-50">
               < Kembali
            </a>
        </div>
    </div>
    

    <script>
        function toggleAnswer(id, button) {
            var answer = document.getElementById(id);
            var icon = button.querySelector('i');

            // Toggle the show class for the answer section
            answer.classList.toggle('show');

            // Rotate the icon
            if (icon.classList.contains('no-rotate')) {
                icon.classList.remove('no-rotate');
                icon.classList.add('rotate');
            } else {
                icon.classList.remove('rotate');
                icon.classList.add('no-rotate');
            }
        }
    </script>

</body>
</html>
