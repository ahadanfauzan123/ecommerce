<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ngevent</title>
    @vite('resources/css/app.css')
    <style>
        h1 {
            font-family: 'Anton', sans-serif;
            font-family: 'Koulen', sans-serif;
        }
    </style>
</head>
<body class="w-screen min-h-screen bg-gray-200 text-gray-600 overflow-x-hidden">
    <nav class="h-[90px] w-[90vw] px-6 mx-auto flex items-center justify-between rounded-xl">
        <h1 class="text-lg font-semibold">nge<span class="text-purple-400">vent</span></h1>
        {{-- list --}}
        <div class="flex items-center justify-between space-x-8">
            <h3 class="font-semibold text-sm hover:text-purple-400 duration-200"><a href="">home</a></h3>
            <h3 class="font-semibold text-sm hover:text-purple-400 duration-200"><a href="">about</a></h3>
            <h3 class="font-semibold text-sm hover:text-purple-400 duration-200"><a href="">upcoming event</a></h3>
            <h3 class="font-semibold text-sm hover:text-purple-400 duration-200"><a href="">contact</a></h3>
        </div>
        {{-- auth --}}
        <div class="flex items-center justify-end space-x-6">
            <a href="login" class="px-5 py-2 rounded-lg bg-blue-400 text-white font-semibold text-sm">login</a>
        </div>

    </nav>
    <section class="w-screen min-h-screen bg-ed-400 flex flex-col items-center justify-start py-12">
        <div class="w-[70%]">
            <h1 class="text-[49px] font-extrabold text-center">LET'S JOIN CONCERT OF THE BIGGEST BANDS <span class="bg-gradient-to-r from-pink-500 via-purple-500 to-purple-500 inline-block text-transparent bg-clip-text">IN THE WORLD</span></h1>
        </div>
        <img src="{{ asset("") }}assets/img/header.png" class="w-[50%] -mt-2" alt="">

    </section>
    <section class="bg-white w-screen h-[140px] flex items-center justify-between px-[75px]">
        <h1 class="text-gray-400 text-[30px] font-extrabold">ahadan</h1>
        <h1 class="text-gray-400 text-[30px] font-extrabold">nopal</h1>
        <h1 class="text-gray-400 text-[30px] font-extrabold">rapa</h1>
        <h1 class="text-gray-400 text-[30px] font-extrabold">ahadan</h1>
    </section>
    {{-- upcoming event --}}
    <section class="w-[80%] mx-auto mt-8 h-screen">
        <h1 class="text-[29px] font-extrabold">UPCOMMING EVENTS</h1>
            @include('user.user-layout.user-upcomingEvent')

    </section>
</body>
</html>

