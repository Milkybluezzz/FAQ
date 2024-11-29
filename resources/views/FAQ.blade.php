<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BandungAppFAQ</title>
    <link rel="stylesheet" href="css/FAQ.css">
    <link rel="icon" href="{{ asset('/img/logobandungAppFAQ.png') }}" type="image">
</head>
<body>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 </head>
 <body class="bg-gray-100 font-roboto pt-20 ">
    


    @include('component.navbar')



    {{-- <div class="container mx-auto p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 justify-center">
        @if(isset($applications) && count($applications) > 0)
            @foreach($applications as $app)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img alt="{{ $app['name'] }} image" class="w-8 h-8 rounded-full" src="{{ $app['image'] }}">
                            <div class="ml-2">
                                <h2 class="text-lg font-bold">{{ $app['name'] }}</h2>
                                <p class="text-sm text-gray-500">{{ $app['tagline'] }}</p>
                            </div>
                        </div>
                    </div>
                    <p class="mt-2 text-gray-600">{{ $app['description'] }}</p>
                    <button class="mt-4 bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded" onclick="window.location.href='{{ $app['link'] }}'">Continue</button>
                </div>
            @endforeach
        @else
            <p class="text-gray-500">Tidak ada aplikasi yang ditemukan.</p>
        @endif
    </div> --}}

    <div class="container mx-auto p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 justify-center">
        @if(isset($applications) && count($applications) > 0)
            @foreach($applications as $app)
                <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white border">
                    <!-- Bagian gambar -->
                    <div class="bg-white h-48 flex items-center justify-center">
                        <img alt="{{ $app['name'] }} image" class="object-contain h-full w-full" src="{{ $app['image'] }}">
                    </div>
                    <!-- Bagian konten -->
                    <div class="px-4 py-4">
                        <div class="font-bold text-lg mb-2 ">{{ $app['name'] }}</div>
                        <p class="text-gray-700 text-sm ">{{ $app['description'] }}</p>
                    </div>
                    <!-- Tombol -->
                    <div class="px-4 pb-4 text-end ">
                        <a href="{{ $app['link'] }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded">Selanjutnya</a>                    </div>
                </div>
            @endforeach
        @else
            <p class="text-gray-500">Tidak ada aplikasi yang ditemukan.</p>
        @endif
        <h1>test</h1>
        @if (isset($content))
        
            <p>data ada</p>
        
        
        @else
        <h1>no content</h1>
        @endif

          
    
        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white border">
            <!-- Bagian gambar -->
            <div class="bg-white h-48 flex items-center justify-center">
                <img alt="{{ $app['name'] }} image" class="object-contain h-full w-full" src="">
            </div>
            <!-- Bagian konten -->
            <div class="px-4 py-4">
                <div class="font-bold text-lg mb-2 "></div>
                <p class="text-gray-700 text-sm "></p>
            </div>
            <!-- Tombol -->
            <div class="px-4 pb-4 text-end ">
                <a href="{{ $app['link'] }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded">Selanjutnya</a>                    </div>
        </div>

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