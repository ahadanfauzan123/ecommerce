<style>

    .swiper {
        height: 100vh;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    swiper-container {
      width: 100%;
      height: 100%;
      margin-inline: auto;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 80%;
      object-fit: cover;
    }
  </style>
<div class="swiper z-20">
    <swiper-container class="mySwiper" keyboard="true" space-between="0" loop="true" autoplay="true">
    <swiper-slide data-swiper-autoplay="15000">
        <img src="{{ asset('') }}assets/img/billboard4.jpg" alt="">
        <div class="h-[20%] w-full bg-white flex items-center justify-center space-x-[70px]">
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
    </swiper-slide>
    <swiper-slide  data-swiper-autoplay="15000">
        <img src="{{ asset('') }}assets/img/billboard5.jpg" alt="">
        <div class="h-[20%] w-full bg-white flex items-center justify-center space-x-[70px]">
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
    </swiper-slide>
    <swiper-slide  data-swiper-autoplay="15000">
        <img src="{{ asset('') }}assets/img/billboard6.jpg" alt="">
        <div class="h-[20%] w-full bg-white flex items-center justify-center space-x-[70px]">
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
    </swiper-slide>
  </swiper-container>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</div>
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
<script>
    var hari = document.getElementById("hari")
    var jam = document.getElementById("jam")
    var menit = document.getElementById("menit")
    var detik = document.getElementById("detik")
    var countDownDate = new Date("Jan 20, 2024 16:37:52").getTime();
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


</script>
