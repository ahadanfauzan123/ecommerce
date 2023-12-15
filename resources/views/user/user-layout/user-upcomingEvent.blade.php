<style>
    /* swiper-container {
      width: 100%;
      height: 100%;
    } */
    .swipe {
        display: flex;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: sw </swiper-slidek;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    } */

    swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper {
      height: 80%;
      width: 60%;
    }

    .swipe .mySwiper2 {
      height: 80%;
      width: 40%;
    }

    .mySwiper2 swiper-slide {
      width: 100%;
      height: 20%;
      background: none;
      opacity: 0.6;
      cursor: pointer;
    }

    .mySwiper2 .swiper-slide-thumb-active {
      opacity: 1;
    }
    .mySwiper swiper-slide {
        width: 80%;
        height: 60%;
        margin: auto;
        border-radius: 20px;
    }

    swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 20px;
    }
</style>
<div class="swipe space-x-8">
    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
        thumbs-swiper=".mySwiper2" loop="true" space-between="10" keyboard="true">
        <swiper-slide>
          <img src="{{ asset('') }}assets/img/billboard5.jpg" />
        </swiper-slide>
        <swiper-slide>
            <img src="{{ asset('') }}assets/img/billboard6.jpg" />
        </swiper-slide>
        <swiper-slide>
            <img src="{{ asset('') }}assets/img/billboard7.jpg" />
        </swiper-slide>
        <swiper-slide>
            <img src="{{ asset('') }}assets/img/billboard4.jpg" />
        </swiper-slide>
      </swiper-container>

      <swiper-container class="mySwiper2" direction="vertical" loop="true" space-between="10" slides-per-view="4" free-mode="true"
        watch-slides-progress="true" >
        <swiper-slide>
          <div class="flex items-center justify-start w-full">
            <div class="w-[4px] h-[50px] bg-purple-400 rounded-sm" ></div>
            <div class="ml-[35px] text-left flex flex-col space-y-2">
                <h1 class="text-xl font-semibold">halo</h1>
                <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, vitae!</p>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="flex items-center justify-start w-full">
            <div class="w-[4px] h-[50px] bg-purple-400 rounded-sm" ></div>
            <div class="ml-[35px] text-left flex flex-col space-y-2">
                <h1 class="text-xl font-semibold">halo</h1>
                <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, vitae!</p>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="flex items-center justify-start w-full">
            <div class="w-[4px] h-[50px] bg-purple-400 rounded-sm" ></div>
            <div class="ml-[35px] text-left flex flex-col space-y-2">
                <h1 class="text-xl font-semibold">halo</h1>
                <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, vitae!</p>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="flex items-center justify-start w-full">
            <div class="w-[4px] h-[50px] bg-purple-400 rounded-sm" ></div>
            <div class="ml-[35px] text-left flex flex-col space-y-2">
                <h1 class="text-xl font-semibold">halo</h1>
                <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, vitae!</p>
            </div>
          </div>
        </swiper-slide>
      </swiper-container>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

