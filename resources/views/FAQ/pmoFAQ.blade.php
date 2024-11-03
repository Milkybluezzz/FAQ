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

    @include('component.navbar')

    <img src="/img/batik biru final.png" alt="Batik Biru" class="fixed top-0 right-0 w-96 h-auto pt-[60px] ">
    {{-- <img src="/img/3d model.png" alt="" class="fixed bottom-0 right-0 z-0  w-96 h-auto"> --}}
        <img src="/img/batik biru final.png" alt="Batik Biru" class="fixed bottom-0 left-0 w-96 h-auto transform scale-x-[-1] scale-y-[-1]">
        <img src="/img/batik kuning final.png" alt="Batik kuning" class="fixed bottom-0 right-0 w-96 h-auto">
        <img src="/img/batik kuning final.png" alt="Batik kuning"  class="fixed top-0 left-0 w-96 h-auto pt-[60px] transform scale-x-[-1] scale-y-[-1]">

    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">PMO(Project Manager Office) FAQs</h1>
        <p class="mb-4">Berikut adalah daftar pertanyaan umum mengenai aplikasi e-penting dan bagaimana penggunaannya dapat membantu dalam pencatatan stunting. Untuk melihat informasi lebih lanjut tentang penggunaan aplikasi e-penting, <a href="#" class="text-blue-600">Anda dapat membaca artikel lengkapnya di sini.</a></p>
        
        @php
            $faqs = [
                [
                    'question' => 'Bagaimana cara login ke aplikasi PMO?',
                    'answer' => '  1. Buka Browser: Gunakan browser yang biasa Anda gunakan, seperti Google Chrome, Mozilla Firefox, atau Safari.<br>
                                   2. Kunjungi Situs Web PMO: Ketik alamat situs web PMO Kota Bandung di kolom pencarian browser Anda. Alamat yang benar adalah: https://pmo.bandung.go.id/<br>
                                   3. Cari Formulir Login: Setelah halaman utama terbuka, carilah formulir login yang biasanya terletak di bagian atas atau kanan halaman. Formulir ini biasanya berisi kolom untuk memasukkan username dan password.<br>
                                   4. Masukkan Username dan Password: Masukkan username dan password yang telah Anda daftarkan sebelumnya pada kolom yang disediakan. Pastikan Anda mengetik dengan benar, termasuk huruf besar dan kecil.<br>
                                   5. Klik Tombol Login: Setelah mengisi username dan password, klik tombol "Login" atau "Masuk" untuk masuk ke akun Anda.'
                ],
                [
                    'question' => 'Apa itu PMO Kota Bandung?',
                    'answer' => 'PMO Kota Bandung adalah singkatan dari Project Management Office Kota Bandung. <br>
                                Ini adalah unit kerja yang bertanggung jawab mengelola berbagai proyek pembangunan dan pengembangan<br>
                                di Kota Bandung. Tujuannya adalah memastikan proyek-proyek tersebut berjalan efektif, efisien, dan <br>
                                sesuai dengan target yang telah ditetapkan.'
                ],
                [
                    'question' => 'Apa saja tugas utama PMO Kota Bandung?',
                    'answer' => ' 1. Perencanaan Proyek: Menyusun rencana proyek yang detail, termasuk tujuan, lingkup, jadwal, dan anggaran.<br>
                                  2. Pengelolaan Proyek: Mengkoordinasikan berbagai tim dan sumber daya yang terlibat dalam proyek, serta memantau kemajuan proyek.<br>
                                  3. Evaluasi Proyek: Melakukan evaluasi terhadap kinerja proyek secara berkala, mengidentifikasi kendala, dan mencari solusi.<br>
                                  4. Pengembangan Sistem: Mengusulkan dan mengembangkan sistem informasi untuk mendukung pengelolaan proyek.'
                ],
                [
                    'question' => 'Apa manfaat adanya PMO Kota Bandung bagi masyarakat?',
                    'answer' => ' 1. Proyek Berkualitas: Proyek-proyek yang dikelola PMO cenderung memiliki kualitas yang lebih baik karena adanya perencanaan dan pengawasan yang ketat.<br>
                                  2. Efisiensi: Pengelolaan proyek yang efektif dapat menghemat waktu dan biaya.<br>
                                  3. Transparansi: PMO mendorong transparansi dalam pengelolaan proyek sehingga masyarakat dapat mengetahui perkembangan proyek.<br>
                                  4. Akuntabilitas: PMO memastikan adanya akuntabilitas terhadap penggunaan anggaran dan sumber daya.'
                ],
            ];
        @endphp

        @foreach ($faqs as $index => $faq)
            <div class="border border-gray-300 rounded-md mb-2">
                <button class="w-full text-left p-4 flex justify-between items-center z-100" onclick="toggleAnswer('answer{{ $index }}', this)">
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
