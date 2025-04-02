@extends('base')
@section('title', content: 'Main Page')
@section('content')
<section class="text-gray-600 body-font mt-5">
  <div class="container px-5 mx-auto">
    <div class="flex flex-wrap -m-4">
      @foreach ($promotions as $promotion)
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-lg flex flex-col">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" 
               src="{{ $promotion->image ? asset('storage/' . $promotion->image) : 'https://dummyimage.com/720x400' }}"
               alt="promo">
          <div class="p-6 flex flex-col flex-grow">
            <h1 class="title-font text-lg font-bold text-orange-500 mb-3">{{ $promotion->title }}</h1>
            <p class="leading-relaxed mb-3 text-white flex-grow">{{ Str::limit($promotion->description, 100) }}</p>
            <div class="flex items-center flex-wrap mt-auto">
              <a href="{{ route('promotions.show', $promotion->id) }}" 
                 class="text-yellow-400 inline-flex items-center font-semibold hover:text-yellow-600 transition duration-200">
                View Content
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            <div class="mt-2 text-sm text-white text-right">
              {{ $promotion->updated_at->diffForHumans() }}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
