<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $faq->judul ?? 'FAQ' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .faq-transition {
            transition: all 0.5s ease;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        .faq-visible {
            max-height: 500px;
            opacity: 1;
        }
        .rotate-icon {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans">
    {{-- Check if $faq exists and has a value --}}
    @if($faq ?? false)
        <div class="max-w-4xl mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $faq->judul }}</h1>
            <p class="mb-4">
                {{ $faq->deskripsi }}
                <a href="#" class="text-blue-600">Anda dapat membaca artikel lengkapnya di sini.</a>
            </p>
            
            {{-- Check if $qna exists and is not empty --}}
            @if($qna && $qna->count() > 0)
                @forelse($qna as $index => $q)
                    <div class="border border-gray-300 rounded-md mb-2">
                        <button
                            class="w-full text-left p-4 flex justify-between items-center hover:bg-gray-100"
                            onclick="toggleAnswer('answer{{ $index }}', this)"
                        >
                            <span class="font-semibold">{{ $q->pertanyaan }}</span>
                            <i class="fas fa-chevron-down transition-transform duration-300"></i>
                        </button>
                    
                        <div
                            id="answer{{ $index }}"
                            class="faq-transition p-4"
                        >
                            <p>{{ $q->jawaban }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-600">Belum ada pertanyaan yang tersedia.</p>
                @endforelse
            @else
                <p class="text-gray-600">Tidak ada pertanyaan yang dapat ditampilkan.</p>
            @endif
        </div>
    @else
        <div class="text-center py-10">
            <h1 class="text-xl text-gray-700">FAQ tidak tersedia</h1>
        </div>
    @endif

    <script>
    function toggleAnswer(answerId, button) {
        const answer = document.getElementById(answerId);
        const icon = button.querySelector('i');
       
        if (answer.classList.contains('faq-visible')) {
            answer.classList.remove('faq-visible');
            icon.classList.remove('rotate-icon');
        } else {
            answer.classList.add('faq-visible');
            icon.classList.add('rotate-icon');
        }
    }
    </script>
</body>
</html>