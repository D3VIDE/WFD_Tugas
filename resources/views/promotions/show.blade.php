@extends('base')

@section('content')
<div class="max-w-4xl mx-auto my-8 p-6 bg-transparent shadow-lg rounded-md">
    <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-12">
        <!-- Gambar di kiri -->
        <img class="w-full sm:w-2/3 md:w-1/3 h-60 object-cover rounded-lg" 
             src="{{ $promotion->image ? asset('storage/' . $promotion->image) : 'https://dummyimage.com/720x400' }}" 
             alt="promotion image">

        <!-- Judul dan Deskripsi di kanan -->
        <div class="md:w-2/3 text-center md:text-left">
            <h2 class="text-3xl font-semibold text-orange-500 mb-3">{{ $promotion->title }}</h2>
            <p class="text-white mb-4">{{ $promotion->description }}</p>
            <a href="{{ route('promotions.index') }}" class="px-4 py-2 bg-orange-500 text-black font-bold rounded-md">Back</a>
        </div>
    </div>
</div>
@endsection
