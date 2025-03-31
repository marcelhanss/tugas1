@extends('Base.base')
@section('content')
@extends('navbar')

<div class="max-w-lg mx-auto p-6 mt-20">
    <h1 class="text-2xl font-bold mb-4">Edit Catalog</h1>

    <form action="{{ route('books.update', $catalog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full" value="{{ $catalog->title }}" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" class="mt-1 block w-full" required>{{ $catalog->description }}</textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Catalog</button>
    </form>
</div>

@endsection
