@extends('Base.base')
@section('content')
@extends('navbar')


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10 mb-16 px-6">
    @foreach ($catalogs as $catalog)
    <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex flex-col items-center">
        <h1 class="text-lg font-bold mb-2">{{ $catalog->title }}</h1>

        <div class="w-full h-64 flex justify-center items-center bg-gray-100 rounded">
            <img src="{{ asset('storage/' . $catalog->image) }}" alt="{{ $catalog->title }}" class="max-h-full max-w-full object-contain rounded">
        </div>

        <div class="mt-4 flex flex-row justify-center gap-2 w-full">
            <a href="{{ route('books.edit', $catalog->id) }}" class="text-white bg-gray-800 hover:bg-gray-300 rounded-lg text-sm px-4 py-2 transition duration-300 text-center">Edit</a>
            <form action="{{ route('books.destroy', $catalog->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white bg-red-600 hover:bg-red-200 rounded-lg text-sm px-4 py-2 transition duration-300">Delete</button>
            </form>
            <a href="{{ route('books.show', $catalog->id) }}" class="text-white bg-blue-600 hover:bg-blue-200 rounded-lg text-sm px-4 py-2 transition duration-300 text-center">Detail</a>
        </div>
        
    </div>
    @endforeach
</div>
@endsection  

