@vite(['resources/css/app.css', 'resources/js/app.js'])
<nav class="no-underline p-2">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('manage') }}">Manage</a>
    <a href="{{ route('about') }}">About</a>
</nav>
