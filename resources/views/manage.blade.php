<x-layout title="Manage">
    <div class="mx-auto max-w-4xl p-6">
        <h1 class="mb-4 text-2xl font-bold">Manage Sound Effects</h1>

        <a href="{{ route('audio.create') }}"
           class="mb-6 inline-block rounded bg-blue-600 px-4 py-2 text-white">
            Add Sound Effect
        </a>

        @forelse($audio as $item)
            <div class="mb-4 rounded border bg-white p-4">
                <h2 class="text-lg font-bold">{{ $item->title }}</h2>
                <p class="mb-3 text-gray-600">{{ $item->description }}</p>

                <a href="{{ route('audio.edit', $item->id) }}"
                   class="mr-2 rounded bg-yellow-500 px-3 py-1 text-white">
                    Edit
                </a>

                <form action="{{ route('audio.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="rounded bg-red-600 px-3 py-1 text-white">
                        Delete
                    </button>
                </form>
            </div>
        @empty
            <p>You haven't added any sound effects yet.</p>
        @endforelse
    </div>
</x-layout>
