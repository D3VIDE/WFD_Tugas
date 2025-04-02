@extends('base')

@section('content')
<div class="max-w-4xl mx-auto my-8 p-6 bg-transparent shadow-lg rounded-md">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-semibold text-orange-500">Edit Promotion</h2>
        <a href="{{ route('promotions.index') }}" class="text-yellow-400 hover:text-yellow-600 transition duration-200">Back to Promotions</a>
    </div>

    <form action="{{ route('promotions.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-white">Title</label>
            <input type="text" id="title" name="title" class="w-full p-3 mt-2 rounded-md bg-transparent text-white border-2 border-white" value="{{ old('title', $promotion->title) }}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-white">Description</label>
            <textarea id="description" name="description" class="w-full p-3 mt-2 rounded-md text-white border-2 border-white" rows="5" required>{{ old('description', $promotion->description) }}</textarea>
        </div>

        <div class="mb-4">
          <label class="block text-white">Image (Optional)</label>
          <div class="flex items-center space-x-4">
              <label for="image" class="cursor-pointer px-4 py-2 bg-orange-500 text-white font-semibold rounded-md hover:bg-orange-600 inline-block">
                  Pilih Gambar
              </label>
              <span id="file-name" class="text-white font-semibold text-sm">Tidak ada file yang dipilih</span>
          </div>
          <input type="file" id="image" name="image" class="hidden" onchange="updateFileName()">
          <p class="text-white text-sm mt-1">Unggah gambar dengan format JPG, PNG, atau GIF (maks. 7MB).</p>
      </div>

        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-orange-500 text-white font-semibold rounded-md hover:bg-orange-600">
                Update Promotion
            </button>
        </div>
    </form>
    <script>
      function updateFileName() {
          const input = document.getElementById('image');
          const fileName = input.files.length > 0 ? input.files[0].name : 'Tidak ada file yang dipilih';
          document.getElementById('file-name').textContent = fileName;
      }
  </script>
</div>
@endsection
