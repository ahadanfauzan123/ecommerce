@extends('user.user-layout.user-layout')

@section('title')
    ecommerce
@endsection

@section('body')
    @include('user.user-layout.user-header')
    {{-- <div class="h-[20vh] w-full bg-white flex items-center justify-center space-x-[70px]">
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
    </div> --}}

    {{-- categories --}}
    <section class="relative w-screen min-h-screen bg-yellow-400">
        {{-- kategori 1 --}}
        <div class="flex overflow-x-scroll overflow-y-hidden items-center justify-start space-x-4 min-w-full h-[400px] bg-gradient-to-r from-pink-300 via-purple-300 to-purple-400">
            <div class="flex flex-col space-y-3 px-12 w-[800px]">
                <h1 class="text-5xl text-white font-extrabold w-[300px]">KATEGORI ANDA</h1>
                <div class="w-[120px] h-[5px] rounded-sm bg-white"></div>
            </div>
                <img src="{{ asset('') }}assets/img/billboard6.jpg" class="btnShowModal w-[400px] h-[300px] rounded-xl object-cover" alt="">
                <img src="{{ asset('') }}assets/img/billboard5.jpg" class="btnShowModal w-[400px] h-[300px] rounded-xl object-cover" alt="">
                <img src="{{ asset('') }}assets/img/billboard4.jpg" class="btnShowModal w-[400px] h-[300px] rounded-xl object-cover" alt="">
        </div> 
        @include('user.user-layout.user-infoModal')
    </section>
    {{-- modal --}}
    {{-- <script>
        var hari = document.getElementById("hari")
        var jam = document.getElementById("jam")
        var menit = document.getElementById("menit")
        var detik = document.getElementById("detik")
        var countDownDate = new Date("Dec 18, 2023 16:37:52").getTime();
        var myfunc = setInterval(function() {
    // code goes here
        var now = new Date().getTime();
        var timeleft = countDownDate - now;

        var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
        hari.innerHTML = days
        jam.innerHTML = hours
        menit.innerHTML = minutes
        detik.innerHTML = seconds
        if (days <= 1) {
            hari.classList.add("text-red-400")
            jam.classList.add("text-red-400")
            menit.classList.add("text-red-400")
            detik.classList.add("text-red-400")
            if (days <= 0) {
                hari.classList.add("animate-none")
            }else{
                hari.classList.add("animate-pulse")
            }
        }
        if (timeleft < 0) {
            hari.innerHTML = "0"
            jam.innerHTML = "0"
            menit.innerHTML = "0"
            detik.innerHTML = "0"

            clearInterval(myfunc);
        }
        }, 1000)


    </script> --}}
@endsection
