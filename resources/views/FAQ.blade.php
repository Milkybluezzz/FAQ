<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BandungAppFAQ</title>
    <link rel="stylesheet" href="css/FAQ.css">
</head>
<body>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-roboto pt-20">


    @include('component.navbar')


  <div class="container mx-auto p-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Card 1 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="AngularJS image" class="w-8 h-8 rounded-full" src="/img/logo_pesona.png">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">Pesona</h2>
                        <p class="text-sm text-gray-500">Pengelolaan Surat Online dan Arsip
                            Pemerintah Kota Bandung</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
            </div>
            <p class="mt-2 text-gray-600">Pesona Bandung adalah aplikasi manajemen korespondensi dan arsip digital untuk Pemerintah Kota Bandung. Aplikasi ini memungkinkan pengguna yang memiliki akun email resmi @bandung.go.id untuk mengelola surat dan arsip dengan mudah, sebagai pengganti dari sistem Surat Online sebelumnya.</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='angularjs.html'">Continue</button>
        </div>
        <!-- Card 2 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="Codeigniter image" class="w-8 h-8 rounded-full" src="/img/Logo_kota_Bandung.png">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">PMO</h2>
                        <p class="text-sm text-gray-500">Project Management Officer</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
            </div>
            <p class="mt-2 text-gray-600">PMO Project Management Officer Pemerintah Kota Bandung bertugas untuk mengelola aset, usulan pembuatan, dan pengembangan sistem digital. Project Management Office (PMO) adalah struktur organisasi yang memberikan dukungan untuk proyek. PMO dapat berupa kantor manajemen proyek, program, atau portofolio, tergantung pada apa yang didukung.</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>
        </div>
        <!-- Card 3 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="Laravel image" class="w-8 h-8 rounded-full" src="/img/e-penting logo.png">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">e-penting</h2>
                        <p class="text-sm text-gray-500">Elektronik Pencatatan Stunting</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
            </div>
            <p class="mt-2 text-gray-600">E-Penting adalah aplikasi elektronik pencatatan stunting yang digunakan di Kota Bandung. Aplikasi ini bertujuan untuk meningkatkan tata kelola data stunting dengan mendapatkan data yang akurat dan membantu analisis data.</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='/FAQ/e-pentingFAQ'">Continue</button>
        </div>
        <!-- Card 4 -->
        {{-- <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="NodeJS image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-pH5X72wdD92AmZwSTxbMTjKw.png?st=2024-09-04T10%3A45%3A38Z&se=2024-09-04T12%3A45%3A38Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-03T23%3A27%3A48Z&ske=2024-09-04T23%3A27%3A48Z&sks=b&skv=2024-08-04&sig=anhsBUOy4%2B0qkQIlliPGmSIHRdyQDMQzTIMHnpiaPm8%3D">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">APP 4</h2>
                        <p class="text-sm text-gray-500">app4</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
            </div>
            <p class="mt-2 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur fugiat eligendi dignissimos cumque maiores rem delectus aut. Nulla fuga atque, ad aliquid quisquam autem consectetur illo tempora? Ipsa, fugiat mollitia.</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='nodejs.html'">Continue</button>
        </div>
        <!-- Card 5 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="Sketch image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-EaeVVhhP499IvEldVwUbA6SB.png?st=2024-09-04T10%3A45%3A34Z&se=2024-09-04T12%3A45%3A34Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-03T23%3A47%3A42Z&ske=2024-09-04T23%3A47%3A42Z&sks=b&skv=2024-08-04&sig=mLDbGQr0iNYKZMmF%2B9Lt4qgAytWE1Tx4PFUn2WvA24M%3D">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">APP 5</h2>
                        <p class="text-sm text-gray-500">app5</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
            </div>
            <p class="mt-2 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis atque accusantium aliquam eaque est accusamus rerum dolore reiciendis nesciunt, rem quasi consequuntur dignissimos commodi consectetur maiores, id natus quis tempora?</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>
        </div>
        <!-- Card 6 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="Bootstrap image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-TYQnomvuayDdIBy0iOgkigFS.png?st=2024-09-04T10%3A45%3A37Z&se=2024-09-04T12%3A45%3A37Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-04T00%3A49%3A13Z&ske=2024-09-05T00%3A49%3A13Z&sks=b&skv=2024-08-04&sig=DFM6cSfPaJWyicWll2aMu7XSLE9zHEWhAHwILdFATrQ%3D">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">APP 6</h2>
                        <p class="text-sm text-gray-500">app6</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
            </div>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque consequuntur, vero dolore rerum possimus aliquid in dignissimos consequatur molestiae ab. Quasi at est minima deleniti dolore libero explicabo. Explicabo, iusto.</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>        </div>
        <!-- Card 7 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="Firebase image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-lZvY2loSucrGTJv6rC7gPpBS.png?st=2024-09-04T10%3A45%3A35Z&se=2024-09-04T12%3A45%3A35Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-04T00%3A12%3A03Z&ske=2024-09-05T00%3A12%3A03Z&sks=b&skv=2024-08-04&sig=uP7IygOj5wuR5MGcVHmswtYUmzx9gnxBHhBnCIy1Emg%3D">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">APP 7</h2>
                        <p class="text-sm text-gray-500">app7</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
             </div>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur dignissimos nihil illo ratione. Aperiam, voluptas perspiciatis temporibus, vel asperiores excepturi rem sequi ipsam explicabo nemo cupiditate similique repellendus reiciendis magni.</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>        </div>
        <!-- Card 8 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img alt="Firebase image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-lZvY2loSucrGTJv6rC7gPpBS.png?st=2024-09-04T10%3A45%3A35Z&se=2024-09-04T12%3A45%3A35Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-04T00%3A12%3A03Z&ske=2024-09-05T00%3A12%3A03Z&sks=b&skv=2024-08-04&sig=uP7IygOj5wuR5MGcVHmswtYUmzx9gnxBHhBnCIy1Emg%3D">
                    <div class="ml-2">
                        <h2 class="text-lg font-bold">APP 8</h2>
                        <p class="text-sm text-gray-500">app8</p>
                    </div>
                </div>
                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
            </div>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque quam velit dolores atque hic, voluptate, tempora numquam error distinctio, qui excepturi. Illo fuga minus atque libero magni, maxime incidunt?</p>
            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>        </div>
<!-- Card 9 -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img alt="Firebase image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-lZvY2loSucrGTJv6rC7gPpBS.png?st=2024-09-04T10%3A45%3A35Z&se=2024-09-04T12%3A45%3A35Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-04T00%3A12%3A03Z&ske=2024-09-05T00%3A12%3A03Z&sks=b&skv=2024-08-04&sig=uP7IygOj5wuR5MGcVHmswtYUmzx9gnxBHhBnCIy1Emg%3D">
                        <div class="ml-2">
                            <h2 class="text-lg font-bold">APP 9</h2>
                            <p class="text-sm text-gray-500">app8</p>
                        </div>
                    </div>
                    <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
                </div>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque quam velit dolores atque hic, voluptate, tempora numquam error distinctio, qui excepturi. Illo fuga minus atque libero magni, maxime incidunt?</p>
                <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>        </div>
<!-- Card 10 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="Firebase image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-lZvY2loSucrGTJv6rC7gPpBS.png?st=2024-09-04T10%3A45%3A35Z&se=2024-09-04T12%3A45%3A35Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-04T00%3A12%3A03Z&ske=2024-09-05T00%3A12%3A03Z&sks=b&skv=2024-08-04&sig=uP7IygOj5wuR5MGcVHmswtYUmzx9gnxBHhBnCIy1Emg%3D">
                            <div class="ml-2">
                                <h2 class="text-lg font-bold">APP 10</h2>
                                <p class="text-sm text-gray-500">app8</p>
                            </div>
                        </div>
                        <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
                    </div>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque quam velit dolores atque hic, voluptate, tempora numquam error distinctio, qui excepturi. Illo fuga minus atque libero magni, maxime incidunt?</p>
                    <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>        </div>
<!-- Card 11 -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <img alt="Firebase image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-lZvY2loSucrGTJv6rC7gPpBS.png?st=2024-09-04T10%3A45%3A35Z&se=2024-09-04T12%3A45%3A35Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-04T00%3A12%3A03Z&ske=2024-09-05T00%3A12%3A03Z&sks=b&skv=2024-08-04&sig=uP7IygOj5wuR5MGcVHmswtYUmzx9gnxBHhBnCIy1Emg%3D">
                                <div class="ml-2">
                                    <h2 class="text-lg font-bold">APP 11</h2>
                                    <p class="text-sm text-gray-500">app8</p>
                                </div>
                            </div>
                            <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
                        </div>
                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque quam velit dolores atque hic, voluptate, tempora numquam error distinctio, qui excepturi. Illo fuga minus atque libero magni, maxime incidunt?</p>
                        <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>        </div>
<!-- Card 12 -->
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <img alt="Firebase image" class="w-8 h-8 rounded-full" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-lZvY2loSucrGTJv6rC7gPpBS.png?st=2024-09-04T10%3A45%3A35Z&se=2024-09-04T12%3A45%3A35Z&sp=r&sv=2024-08-04&sr=b&rscd=inline&rsct=image/png&skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-09-04T00%3A12%3A03Z&ske=2024-09-05T00%3A12%3A03Z&sks=b&skv=2024-08-04&sig=uP7IygOj5wuR5MGcVHmswtYUmzx9gnxBHhBnCIy1Emg%3D">
                                    <div class="ml-2">
                                        <h2 class="text-lg font-bold">APP 12</h2>
                                        <p class="text-sm text-gray-500">app8</p>
                                    </div>
                                </div>
                                <span class="bg-blue-100 text-blue-500 text-xs font-semibold px-2 py-1 rounded">Ongoing</span>
                            </div>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt cumque quam velit dolores atque hic, voluptate, tempora numquam error distinctio, qui excepturi. Illo fuga minus atque libero magni, maxime incidunt?</p>
                            <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='sketch.html'">Continue</button>        </div> --}}
    </div>
    </div>

</body>
</html>