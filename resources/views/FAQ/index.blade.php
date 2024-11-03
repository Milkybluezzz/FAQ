
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>FAQ</h1>

    <!-- Formulir Pencarian -->
    <form action="{{ route('faq.index') }}" method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Cari aplikasi..." value="{{ request('search') }}" class="p-2 border border-gray-300 rounded">
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Cari</button>
    </form>

    @if($search)
        <h2>Hasil pencarian untuk: "{{ $search }}"</h2>
    @endif

    <ul>
        @foreach($Faq as $faq)
            <li>{{ $faq->question }} - {{ $faq->application->name }}</li>
        @endforeach
    </ul>

    @if($Faq->isEmpty())
        <p>Tidak ada FAQ ditemukan untuk aplikasi ini.</p>
    @endif
</div>
@endsection