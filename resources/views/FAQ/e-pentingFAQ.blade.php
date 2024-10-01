<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-pentingFAQ</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.5s ease;
        }
        .visible {
            max-height: 500px; /* Sesuaikan dengan tinggi maksimal konten */
            opacity: 1;
            transition: max-height 0.5s ease, opacity 0.5s ease;
        }
        .rotate {
            transform: rotate(180deg);
            transition: transform 0.5s ease;
        }
        .no-rotate {
            transition: transform 0.5s ease;
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">

    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">e-penting FAQs</h1>
        <p class="mb-4">Berikut adalah daftar pertanyaan umum mengenai aplikasi e-penting dan bagaimana penggunaannya dapat membantu dalam pencatatan stunting. Untuk melihat informasi lebih lanjut tentang penggunaan aplikasi e-penting, <a href="#" class="text-blue-600">Anda dapat membaca artikel lengkapnya di sini.</a></p>
        
        <div class="border border-gray-300 rounded-md mb-2">
            <button class="w-full text-left p-4 flex justify-between items-center" onclick="toggleAnswer('answer1', this)">
                <span>Apa itu aplikasi e-penting?</span>
                <i class="fas fa-chevron-down no-rotate"></i>
            </button>
            <div id="answer1" class="hidden p-4">
                <p>E-Penting adalah aplikasi elektronik pencatatan stunting yang digunakan di Kota Bandung</p>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-md mb-2">
            <button class="w-full text-left p-4 flex justify-between items-center" onclick="toggleAnswer('answer2', this)">
                <span>Apa tujuan dari aplikasi e-penting?</span>
                <i class="fas fa-chevron-down no-rotate"></i>
            </button>
            <div id="answer2" class="hidden p-4">
                <p>Untuk meningkatkan tata kelola data stunting di Kota Bandung sehingga mendapatkan data yang berkualitas</p>
            </div>
        </div>
        
        <div class="border border-gray-300 rounded-md mb-2">
            <button class="w-full text-left p-4 flex justify-between items-center" onclick="toggleAnswer('answer3', this)">
                <span>Apa manfaat aplikasi ini untuk masyarakat Kota Bandung?</span>
                <i class="fas fa-chevron-down no-rotate"></i>
            </button>
            <div id="answer3" class="hidden p-4">
                <p>1. Memudahkan mendapatkan hasil pencatatan dan pendataan stunting yang akurat. <br>
                    2. Sebagai bahan pengambilan keputusan untuk intervensi yang tepat dari setiap kasus stunting yang ada di wilayah Kota Bandung. <br>
                    3. Membantu memudahkan dalam analisis data, validitas data, publikasi data, integrasi data dan edukasi masyarakat.</p>
            </div>
        </div>
        
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function toggleAnswer(id, button) {
            var answer = document.getElementById(id);
            var icon = button.querySelector('i');

            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                answer.classList.add('visible');
                icon.classList.add('rotate');
                icon.classList.remove('no-rotate');
            } else {
                answer.classList.remove('visible');
                answer.classList.add('hidden');
                icon.classList.remove('rotate');
                icon.classList.add('no-rotate');
            }
        }
    </script>
</body>
</html>
