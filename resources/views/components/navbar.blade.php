<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center items-center h-16"> <!-- Centrat vertical i horitzontal -->
            <div class="flex space-x-8"> <!-- Espai entre enllaços -->
                <a href="{{ url('/') }}" class="text-3xl font-semibold text-white">Laravel ASIX Iris</a>
                <a href="{{ route('books.index') }}" class="text-xl font-semibold text-white">Llibres</a>
                <a href="{{ route('games.index') }}" class="text-xl font-semibold text-white">Jocs de Sonic</a>
            </div>
        </div>
    </div>
</nav>
