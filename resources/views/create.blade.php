@extends('Base.base')
@section('content')
@extends('navbar')

<div class="max-w-lg mx-auto p-6 mt-20">
    <h1 class="text-2xl font-bold mb-4">Add New Catalog</h1>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" class="mt-1 block w-full" required></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add Catalog</button>
    </form>
</div>

@endsection
