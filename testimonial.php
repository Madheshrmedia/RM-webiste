<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
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
      height: 100%;
      margin-top: 6rem;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* display: flex; */
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

    @media (max-width: 760px) {
      .swiper-button-next {
        right: 20px;
        transform: rotate(90deg);
      }

      .swiper-button-prev {
        left: 20px;
        transform: rotate(90deg);
      }
    }
    .cardrow{
        width:100%;
        
    }

   
    .cardcol{
        text-align:left;
    }
    .fullwidth img{
        width: 100%;
    }
    .arrow{
        width: 50px;
        height: 50px;
    }
    .para{
        color:#DDDDDD;
        font-size: 14px;
       
    }
    .botpara{
        font-family:italic; 
        font-size: 16px;
    }
    @font-face {
    font-family:italic;
    src: url(./font/Inter_18pt-Italic.ttf);
}
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="row cardrow" >
            <div class="col-md-8 sm-8 cardcol">
                <div class="row">
                    <div class="col-md-4 sm-8 fullwidth">
                    <img src="./image/icon1.png" alt="icon1">
                    </div>
                    <div class="col-md-8 sm-8" >
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
        <div class="col-md-12" style="  text-align: left;">
           <p class="botpara">Rainbow Media transformed our online presence and tripled our lead generation in just 6 months. Their expertise in digital marketing is unmatched. They are the best decision we made for our business!</p>
        </div>
     </div>
      </div>
      
      <div class="swiper-slide">
		<div class="row cardrow" >
            <div class="col-md-8 sm-8 cardcol">
                <div class="row">
                    <div class="col-md-4 sm-8 fullwidth">
                    <img src="./image/icon1.png" alt="icon1">
                    </div>
                    <div class="col-md-8 sm-8" >
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
        <div class="col-md-12" style="  text-align: left;">
           <p class="botpara">Rainbow Media transformed our online presence and tripled our lead generation in just 6 months. Their expertise in digital marketing is unmatched. They are the best decision we made for our business!</p>
        </div>
     </div>
	  </div>
      <div class="swiper-slide">
		<div class="row cardrow" >
            <div class="col-md-8 sm-8 cardcol">
                <div class="row">
                    <div class="col-md-4 sm-8 fullwidth">
                    <img src="./image/icon1.png" alt="icon1">
                    </div>
                    <div class="col-md-8 sm-8" >
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
        <div class="col-md-12" style="  text-align: left;">
           <p class="botpara">Rainbow Media transformed our online presence and tripled our lead generation in just 6 months. Their expertise in digital marketing is unmatched. They are the best decision we made for our business!</p>
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
      on: {
        resize: function () {
          swiper.changeDirection(getDirection());
        },
      },
    });

    function getDirection() {
      var windowWidth = window.innerWidth;
      return windowWidth <= 760 ? 'vertical' : 'horizontal';
    }
  </script>
</body>

</html>
