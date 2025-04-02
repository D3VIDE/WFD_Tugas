@extends('base')

@section('content')
<section class="text-gray-600 body-font mt-5">
  <div class="container px-5 mx-auto">
    <div class="flex flex-wrap -m-4">
      @foreach ($promotions as $promotion)
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden shadow-lg">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" 
               src="{{ $promotion->image ? asset('storage/' . $promotion->image) : 'https://dummyimage.com/720x400' }}"
               alt="promo">
          <div class="p-6">
            <h1 class="title-font text-lg font-bold text-orange-500 mb-3">{{ $promotion->title }}</h1>
            <p class="leading-relaxed mb-3 text-white">{{ Str::limit($promotion->description) }}</p>
            <div class="flex items-center flex-wrap">
              <a href="{{ route('promotions.show', $promotion->id) }}" 
                 class="text-indigo-500 inline-flex items-center font-semibold hover:text-indigo-700 transition duration-200">
                Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
