<x-layout title="Home">
    <div class="mx-auto max-w-5xl px-4 py-8">
        <h1 class="mb-2 text-3xl font-bold">Welcome to The Saloon Soundboard</h1>
        <p class="mb-8 text-gray-600">Choose your favourite sound effect!</p>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
            @foreach($audio as $item)
                <div class="rounded-lg border bg-white p-4 shadow-sm">
                    <h2 class="text-lg font-semibold">{{ $item->title }}</h2>
                    <p class="mt-2 text-sm text-gray-600">{{ $item->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
