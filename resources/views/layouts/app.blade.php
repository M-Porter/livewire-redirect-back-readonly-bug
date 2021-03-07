<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel | Livewire Input Read-Only Back Bug</title>
    @livewireStyles
</head>
<body>
    @yield('content')
    @livewireScripts
</body>
</html>
