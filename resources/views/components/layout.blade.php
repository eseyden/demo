<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Demo App') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

    {{ $slot }}

</body>
</html>