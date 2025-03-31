@extends('Base.base')

@section('content')
    @extends('navbar')

    <div class="flex justify-center items-center min-h-screen pt-20">
        <div class="max-w-xl w-full bg-white p-6 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-bold mb-4">{{ $item['title'] }}</h2>
            <div class="w-full h-64 flex justify-center items-center bg-gray-100 rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['title'] }}" class="max-h-full max-w-full object-contain">
            </div>
            <p class="text-gray-800 mt-4 mb-6">{{ $item['description'] }}</p>
            <a href="{{ route('books.index') }}" class="inline-block text-white bg-blue-600 hover:bg-blue-500 rounded-lg text-sm px-6 py-2 transition duration-300">Back to Catalog</a>
        </div>
    </div>
@endsection  
