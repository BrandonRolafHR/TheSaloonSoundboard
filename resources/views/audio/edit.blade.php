<x-layout title="Edit Soundeffect">
    <div class="mx-auto mt-8 max-w-lg rounded-lg bg-gray-100 p-6">
        <h1 class="mb-6 text-2xl font-bold">Edit soundeffect</h1>

        <form action="{{ route('audio.update', $audio->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="mb-1 block">Name</label>
                <input type="text" id="title" name="title" value="{{ old('title', $audio->title) }}"
                       class="w-full rounded border border-gray-300 p-2"/>

                @error('title')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="mb-1 block">Description</label>
                <input type="text" id="description" name="description"
                       value="{{ old('description', $audio->description) }}"
                       class="w-full rounded border border-gray-300 p-2"/>

                @error('description')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="audio" class="mb-1 block">Sound Effect (optional)</label>
                <input type="file" name="audio" id="audio" accept=".mp3,audio/mpeg"
                       class="w-full rounded border border-gray-300 bg-white p-2"/>

                @error('audio')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <input type="submit" value="Save changes"
                   class="cursor-pointer rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"/>
        </form>
    </div>
</x-layout>
