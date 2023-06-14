<!DOCTYPE html>
<!-- saved from url=(0049)https://swiperjs.com/demos/200-infinite-loop/core -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="./swiper_files/swiper-bundle.min.css">

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }


    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
<style>.osSwitch{position:relative;display:inline-block;width:34px;height:15.3px}.osSwitch input{opacity:0;width:0;height:0}.osSlider{position:absolute;top:0;left:0;right:0;bottom:0;border-radius:34px;background-color:#93a0b5;transition:0.4s}.osSlider:before{position:absolute;content:'';height:13px;width:13px;left:2px;bottom:1px;border-radius:50%;background-color:white;transition:0.4s}input:checked+.sliderGreen{background-color:#04d289}input:checked+.sliderRed{background-color:#ff3b30}input:not(:checked)+.defaultGreen{background-color:#04d289}input:checked+.osSlider:before{transform:translateX(17px)}
</style><style>
    @font-face {
      font-family: 'SegoeUI_online_security'; 
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui.woff);
    }

    @font-face {
      font-family: 'SegoeUI_bold_online_security'; 
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui-bold.woff);
    }
</style></head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden" style="transform:scale(1);">
    <div class="swiper-wrapper" id="swiper-wrapper-247f2679ab1005276" aria-live="polite">
      <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" data-swiper-slide-index="0" style="width: 1536px; margin-right: 30px;"><img src="<?php echo $_SESSION['film_info']['image'].'1.jpg' ?>" alt=""></div>
      <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9" data-swiper-slide-index="1" style="width: 1536px; margin-right: 30px;"><img src="<?php echo $_SESSION['film_info']['image'].'2.jpg' ?>" alt=""></div>
      <div class="swiper-slide" role="group" aria-label="3 / 9" data-swiper-slide-index="2" style="width: 1536px; margin-right: 30px;"><img src="<?php echo $_SESSION['film_info']['image'].'3.jpg' ?>" alt=""></div>
      
    </div>
    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-247f2679ab1005276"></div>
    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-247f2679ab1005276"></div>
    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span></div>
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

  <!-- Swiper JS -->
  <script src="./swiper_files/swiper-bundle.min.js.download"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>



</body></html>