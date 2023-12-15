<style>

    .swiper {
        height: 80vh;
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
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
<div class="swiper z-20">
    <swiper-container class="mySwiper" keyboard="true" space-between="0" loop="true" autoplay="true">
    <swiper-slide>
        <img src="{{ asset('') }}assets/img/billboard4.jpg" alt="">
    </swiper-slide>
    <swiper-slide>
        <img src="{{ asset('') }}assets/img/billboard5.jpg" alt="">
    </swiper-slide>
    <swiper-slide>
        <img src="{{ asset('') }}assets/img/billboard6.jpg" alt="">
    </swiper-slide>
  </swiper-container>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</div>
