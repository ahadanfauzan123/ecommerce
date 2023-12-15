@extends('user/user-layout.user-layout')

@section('title')
    ecommerce
@endsection

@section('body')
    @include('user.user-layout.user-header')
    <div class="h-[20vh] w-full bg-white flex items-center justify-center space-x-[70px]">
        <div class="flex items-center">
            <h1 id="hari" class="text-7xl w-[70px] text-right  font-extrabold text-purple-400"></h1>
            <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">hari</p>
        </div>
        <div class="flex items-center">
            <h1 id="jam" class="text-7xl  w-[70px] text-right font-extrabold text-purple-400"></h1>
            <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">jam</p>
        </div>
        <div class="flex items-center">
            <h1 id="menit" class="text-7xl w-[70px] text-right  font-extrabold text-purple-400"></h1>
            <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">menit</p>
        </div>
        <div class="flex items-center">
            <h1 id="detik" class="text-7xl w-[70px] text-right  font-extrabold text-purple-400"></h1>
            <p class="z-20 -ml-2 text-lg font-semibold text-gray-500">detik</p>
        </div>
    </div>

    {{-- categories --}}
    <section class="w-screen min-h-screen">
        {{-- kategori 1 --}}
        <div class="flex overflow-x-scroll overflow-y-hidden items-center justify-start space-x-4 min-w-full h-[400px] bg-gradient-to-r from-pink-300 via-purple-300 to-purple-400">
            <div class="flex flex-col space-y-3 px-12 w-[800px]">
                <h1 class="text-5xl text-white font-extrabold w-[300px]">KATEGORI ANDA</h1>
                <div class="w-[120px] h-[5px] rounded-sm bg-white"></div>
            </div>
                <img src="{{ asset('') }}assets/img/billboard6.jpg" class="w-[400px] h-[300px] rounded-xl object-cover" alt="">
                <img src="{{ asset('') }}assets/img/billboard5.jpg" class="w-[400px] h-[300px] rounded-xl object-cover" alt="">
                <img src="{{ asset('') }}assets/img/billboard4.jpg" class="w-[400px] h-[300px] rounded-xl object-cover" alt="">
        </div>
    </section>
    <script>
        var countDownDate = new Date("Dec 15, 2023 16:37:52").getTime();
        var myfunc = setInterval(function() {
    // code goes here
        var now = new Date().getTime();
        var timeleft = countDownDate - now;

        var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
        document.getElementById("hari").innerHTML = days
        document.getElementById("jam").innerHTML = hours
        document.getElementById("menit").innerHTML = minutes
        document.getElementById("detik").innerHTML = seconds
        }, 1000)
    </script>
@endsection
