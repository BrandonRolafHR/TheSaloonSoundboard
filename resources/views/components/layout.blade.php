<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>
<body>
<x-navigation>
</x-navigation>
{{ $slot }}

<x-footer>

</x-footer>
</body>
</html>
