<!doctype html>
<html lang="es" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-screen flex-col bg-slate-100 selection:bg-sky-600 selection:text-sky-50 dark:bg-slate-950">

@include('layouts.blog-navigation')

@session('status')
<div class="bg-green-600 p-4 text-xl text-green-50 dark:bg-green-800">{{ $value }}</div>
@endsession

<main class="flex-1 p-4">
    {{ $slot }}
</main>
</body>
</html>
