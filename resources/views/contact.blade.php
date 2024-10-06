<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-white text-gray-800 pt-20 ">

    @include('component.navbar')

    <div class="max-w-4xl mx-auto p-8">
        <h1 class="text-3xl font-bold text-center mb-6">Hubungi Kami</h1>
        <div class="flex flex-col md:flex-row md:space-x-8">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <p class="mb-4">Ada pertanyaan? Kami di sini untuk membantu! Tim layanan pelanggan kami yang ramah dan berpengetahuan luas ingin memastikan Anda mendapatkan pengalaman terbaik. Jangan ragu untuk menghubungi kami melalui telepon, email, atau formulir di bawah ini. Anda juga bisa melihat halaman FAQ kami untuk mendapatkan jawaban cepat atas pertanyaan yang sering diajukan.</p>
                <p class="mb-4"><i class="fas fa-map-marker-alt"></i> Jl. Wastukencana No.2, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117</p>
                <p class="mb-4"><i class="fas fa-phone"></i> 1 (833) 247 - 4968</p>
                <p class="mb-4"><strong>Pertanyaan Umum:</strong> contact@domain.com</p>
            </div>
            <div class="md:w-1/2">
                <form class="space-y-4">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="first-name" class="block text-sm font-medium">Nama Depan <span class="text-red-500">*</span></label>
                            <input type="text" id="first-name" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                        </div>
                        <div class="w-1/2">
                            <label for="last-name" class="block text-sm font-medium">Nama Belakang</label>
                            <input type="text" id="last-name" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium">Email <span class="text-red-500">*</span></label>
                        <input type="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="anda@domain.com">
                    </div>
                    <div>
                        <label for="department" class="block text-sm font-medium">Departemen <span class="text-red-500">*</span></label>
                        <select id="department" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                            <option>- Pilih -</option>
                        </select>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium">Subjek <span class="text-red-500">*</span></label>
                        <input type="text" id="subject" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium">Pesan <span class="text-red-500">*</span></label>
                        <textarea id="message" class="mt-1 block w-full border border-gray-300 rounded-md p-2 h-32"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded-md">KIRIM</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
