@extends('layouts.layout')

@section('content')
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">CRUD de Jocs</h2>
                <div class="flex justify-end mb-4">
                    <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('games.create') }}">Add Game</a>
                </div>
                <div class="overflow-x-auto">
                    <div class="hidden md:block">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plataforma</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Any de Publicació</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripció</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Valoració</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accions</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($games as $game)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('games.show', $game->id) }}">
                                            {{ $game->id }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $game->title }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $game->platform }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $game->release_year }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ Str::limit($game->description, 50) }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $game->rating }}</td>
                                    <td class="px-6 py-4 text-sm flex space-x-2">
                                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('games.edit', $game->id) }}">Edit</a>
                                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="block md:hidden">
                        <ul class="divide-y divide-gray-200">
                            @forelse($games as $game)
                                <li class="py-4 flex flex-col">
                                    <div class="flex justify-between items-center">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('games.show', $game->id) }}">ID: {{ $game->id }}</a>
                                        <div class="flex space-x-2">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('games.edit', $game->id) }}">Edit</a>
                                            <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-900"><strong>Nom:</strong> {{ $game->title }}</p>
                                        <p class="text-sm text-gray-900"><strong>Plataforma:</strong> {{ $game->platform }}</p>
                                        <p class="text-sm text-gray-900"><strong>Any de Publicació:</strong> {{ $game->release_year }}</p>
                                        <p class="text-sm text-gray-900"><strong>Descripció:</strong> {{ Str::limit($game->description, 50) }}</p>
                                        <p class="text-sm text-gray-900"><strong>Valoració:</strong> {{ $game->rating }}</p>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4 text-center text-sm text-gray-500">No hi han dades a la Base de dades!</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
