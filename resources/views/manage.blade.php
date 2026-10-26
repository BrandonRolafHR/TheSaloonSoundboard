@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-layout title="Manage">
    <h1>Manage Sound Effects</h1>

    <a href="{{ route('audio.create') }}">Create Sound Effect</a>

    {{--    <a href="{{ route('audio.edit') }}">Edit Sound Effects</a>--}}

    {{--    <a href="{{ route('audio.delete') }}">Delete Sound Effects</a>--}}
</x-layout>
