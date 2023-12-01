<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="w-screen min-h-screen bg-blue-400 text-gray-700">
    @include('user/user-layout.user-navbar')
    @yield('body')
</body>
</html>
