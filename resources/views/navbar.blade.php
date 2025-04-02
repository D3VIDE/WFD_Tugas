<nav class="bg-black shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Left side navigation items -->
      <div class="flex items-center">
        <!-- Logo -->
        <span class="text-xl font-bold text-orange-500 mr-8">Promotion</span>
        
        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-6">
          <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a>
          <span class="text-gray-400">|</span>
          <a href="{{ url('/add') }}" class="text-white hover:text-gray-300">Add List</a>
          <span class="text-gray-400">|</span>
          <a href="{{ url('/edit') }}" class="text-white hover:text-gray-300">Edit List</a>
        </div>
      </div>
    </div>
  </div>
</nav>
