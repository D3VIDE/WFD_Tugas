<nav class="bg-black shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <span class="text-3xl font-bold text-orange-500">Promotion</span>
      
      <!-- Menu (Kanan) -->
      <div class="hidden md:flex items-center space-x-4 ml-auto">
        <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a>
        <span class="text-gray-400">|</span>
        <a href="{{ url('promotions/create') }}" class="text-white hover:text-gray-300">Add List</a>
        
        @if(request()->is('promotions/show/*'))
        <span class="text-gray-400">|</span>
          <a href="{{  route('promotions.edit', $promotion->id) }}" class="text-orange-500 font-bold hover:text-orange-700 !important">Edit</a>
          <span class="text-gray-400">|</span>
          <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 font-bold hover:text-red-800">Delete</button>
          </form>
        @endif
      </div>

      <!-- Menu untuk Mobile (Tidak Ada Separator) -->
      <div class="md:hidden">
        <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a>
        <a href="{{ url('promotions/create') }}" class="text-white hover:text-gray-300">Add List</a>
        @if(request()->is('promotions/show/*'))
          <a href="{{  route('promotions.edit', $promotion->id) }}" class="text-orange-500 hover:text-orange-700 !important">Edit</a>
        @endif
      </div>
    </div>
  </div>
</nav>
