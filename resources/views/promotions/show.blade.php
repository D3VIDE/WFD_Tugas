@extends('base')

@section('content')
<div class="max-w-4xl mx-auto my-8 p-6 bg-transparent shadow-lg rounded-md relative">

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

        <img class="w-full sm:w-2/3 md:w-1/3 h-60 object-cover rounded-lg" 
             src="{{ $promotion->image ? asset('storage/' . $promotion->image) : 'https://dummyimage.com/720x400' }}" 
             alt="promotion image">

        <div class="md:w-2/3 text-center md:text-left">
            <h2 class="text-3xl font-semibold text-orange-500 mb-3">{{ $promotion->title }}</h2>
            <p class="text-white mb-4">{{ $promotion->description }}</p>
        </div>
    </div>
</div>
@endsection
