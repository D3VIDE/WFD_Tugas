@extends('base')

@section('content')
<div class="max-w-6xl mx-auto my-8 p-6 bg-transparent shadow-lg rounded-md relative">

    <div class="absolute top-4 right-4">
        <a href="{{ route('promotions.index') }}" 
           class="text-yellow-400 inline-flex items-center font-semibold hover:text-yellow-600 transition duration-200">
            Back
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 12H5"></path>
                <path d="M12 5l-7 7 7 7"></path>
            </svg>
        </a>
    </div>

    <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-12 mt-10">

        <!-- Gambar Kiri - Mengisi Ruang Sepenuhnya -->
        <div class="md:w-1/2 w-full">
            <img class="w-full h-full object-cover rounded-lg shadow-md" 
                 src="{{ $promotion->image ? asset('storage/' . $promotion->image) : 'https://dummyimage.com/720x400' }}" 
                 alt="promotion image">
        </div>

        <!-- Teks di Kanan -->
        <div class="md:w-1/2 w-full text-center md:text-left">
            <h2 class="text-3xl font-semibold text-orange-500 mb-3">{{ $promotion->title }}</h2>
            <p class="text-white mb-4">{{ $promotion->description }}</p>
        </div>
    </div>
</div>
@endsection
