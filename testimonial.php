<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper Responsive Demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: auto;
      margin-top: 6rem;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      justify-content: center;
      align-items: center;
      transition: transform 0.3s ease, filter 0.3s ease;
    }

    /* Zoom effect for active slide */
    .swiper-slide-active {
      transform: scale(1.3);
      filter: brightness(1);
      background-color: #B71C1C;
      color: #fff;
      padding: 1rem;
      border-radius: 22px;
    }

    /* Blur effect for non-active slides */
    .swiper-slide:not(.swiper-slide-active) {
      filter: blur(4px);
      transform: scale(0.9);
    }

    .cardrow {
      width: 100%;
    }

    .cardcol {
      text-align: left;
    }

    .fullwidth img {
      width: 80px;
    }

    .arrow {
      width: 50px;
      height: 50px;
    }

    .para {
      color: #dddddd;
      font-size: 14px;
    }

    .botpara {
      font-family: italic;
      font-size: 16px;
    }
  
    @font-face {
      font-family: italic;
      src: url(./font/Inter_18pt-Italic.ttf);
    }

    @media (max-width: 768px) {
      .swiper {
        margin-top: 2rem;
      }

      .swiper-slide {
        font-size: 16px;
      }

      .swiper-slide-active {
        transform: scale(1.2);
      }

      .swiper-slide:not(.swiper-slide-active) {
        filter: blur(3px);
        transform: scale(0.8);
      }

      .arrow {
        width: 40px;
        height: 40px;
      }

      .botpara {
        font-size: 14px;
      }
    }

     @media (max-width: 576px) {
      .swiper {
        margin-top: 1rem;
      }

      .swiper-slide {
        font-size: 14px;
      }

      .swiper-slide-active {
        transform: scale(1.1);
      }

      .swiper-slide:not(.swiper-slide-active) {
        filter: blur(2px);
        transform: scale(0.7);
      }

      .arrow {
        width: 30px;
        height: 30px;
      }

      .botpara {
        font-size: 12px;
      }
    } 
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="row cardrow">
          <div class="col-md-8 sm-8 cardcol">
            <div class="row">
              <div class="col-md-4 sm-8 fullwidth">
                <img src="./image/icon1.png" alt="icon1">
              </div>
              <div class="col-md-8 sm-8">
                <h5>Alan Baker</h5>
                <p class="para">Sarah, CEO of ABC Corp</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 sm-4">
            <img src="./image/arrow.png" class="arrow" alt="arrow">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="text-align: left;">
            <p class="botpara">Rainbow Media transformed our online presence and tripled our lead generation in just 6
              months. Their expertise in digital marketing is unmatched. They are the best decision we made for our
              business!</p>
          </div>
        </div>
      </div>
      <!-- Duplicate Swiper Slides for Demo -->
      <div class="swiper-slide">
      <div class="row cardrow">
          <div class="col-md-8 sm-8 cardcol">
            <div class="row">
              <div class="col-md-4 sm-8 fullwidth">
                <img src="./image/icon2.png" alt="icon2">
              </div>
              <div class="col-md-8 sm-8">
                <h5>John</h5>
                <p class="para">Marketing Director at GlobalTech</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 sm-4">
            <img src="./image/arrow.png" class="arrow" alt="arrow">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="text-align: left;">
            <p class="botpara">The team at Rainbow Media helped us expand our brand globally. Their attention to detail and innovative strategies drove impressive results, making them an invaluable partner for us.</p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
      <div class="row cardrow">
          <div class="col-md-8 sm-8 cardcol">
            <div class="row">
              <div class="col-md-4 sm-8 fullwidth">
                <img src="./image/icon3.png" alt="icon3">
              </div>
              <div class="col-md-8 sm-8">
                <h5>Emily</h5>
                <p class="para">Owner of Luxe Fashion</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 sm-4">
            <img src="./image/arrow.png" class="arrow" alt="arrow">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="text-align: left;">
            <p class="botpara">Rainbow Media’s social media campaigns boosted our engagement by 200%. Their creative ideas and execution have positioned us as a trendsetter in our industry. Truly outstanding work!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper('.swiper', {
  slidesPerView: 3,
  centeredSlides: true,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: { // Tablet
      slidesPerView: 2,
      spaceBetween: 20,
    },
    576: { // Mobile
      slidesPerView: 2, // Match tablet view
      spaceBetween: 20, // Match tablet view
    },
    100: { // Mobile
      slidesPerView: 1, // Match tablet view
      spaceBetween: 10, // Match tablet view
    },
  },
});

  </script>
</body>

</html>
