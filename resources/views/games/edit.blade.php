@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Edit Game</h2>
                <form action="{{ route('games.update', $game->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700">Title:</label>
                        <input type="text" name="title" id="title" value="{{ $game->title }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="platform" class="block text-gray-700">Platform:</label>
                        <input type="text" name="platform" id="platform" value="{{ $game->platform }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="release_year" class="block text-gray-700">Release Year:</label>
                        <input type="number" name="release_year" id="release_year" value="{{ $game->release_year }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700">Description:</label>
                        <input type="text" name="description" id="description" value="{{ $game->description }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="rating" class="block text-gray-700">Rating:</label>
                        <input type="number" name="rating" id="rating" value="{{ $game->rating }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Update Game</button>
                        <a href="{{ route('games.index') }}" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
