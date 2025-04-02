@extends('base')

@section('content')
<div class="max-w-2xl mx-auto my-8 p-4 bg-transparent shadow-lg rounded-md">
    <h2 class="text-2xl font-semibold text-center mb-6 text-orange-500">Add New Promotion</h2>

    <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-white">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full p-2 border-2 border-white rounded-md text-white" required>
            @error('title')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-white">Description</label>
            <textarea name="description" id="description" rows="4" class="w-full p-2 border-2 border-white rounded-md text-white" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
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
            <p class="text-white text-sm mt-1">Unggah gambar dengan format JPG, PNG, atau GIF (maks. 2MB).</p>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-orange-500 text-black font-bold rounded-md hover:bg-orange-600">Add Promotion</button>
        </div>
        <script>
            function updateFileName() {
                const input = document.getElementById('image');
                const fileName = input.files.length > 0 ? input.files[0].name : 'Tidak ada file yang dipilih';
                document.getElementById('file-name').textContent = fileName;
            }
        </script>
    </form>
</div>
@endsection
