<x-layout title="Add Soundeffect">
    <h1>Add new soundeffect</h1>
    <form action="{{ route('audio.store') }}" method="post">
        <label for="title">Name</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}"/>
        @error('title')
        <span class="text-red-600">{{ $message }}</span>
        @enderror

        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="{{ old('description') }}"/>

        {{--        voor de audio file--}}
        {{--        <label for="name">Name</label>--}}
        {{--        <input type="text" id="name" name="name" />--}}

        <input type="submit" value="Save"/>
    </form>
</x-layout>
