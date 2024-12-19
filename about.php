<?php
include_once "./header.php";
?>
<link rel="stylesheet" href="style.css">

<style>
/* .row{
    margin:1rem 0;
} */

@media (max-width: 767px) {
			
            #accordionExample{
       margin-top:1rem;
    }

}
#banrow{
    padding-top:4rem;
}
</style>
<body>
    <div class="container">
    <div class="row g-1" id="banrow">
  <div class="col-sm-6 col-md-7">
    <h2 class="h3heading" style="color:#D32F2F">Provide the best service with out of the box ideas</h2>
  </div>
  <div class="col-sm-12 col-md-5">
    <p>We are a passionate team of digital marketing enthusiasts dedicated to helping businesses succeed in the digital world. With years of experience and a deep understanding of the ever-evolving online landscape, we stay at the forefront of industry trends and technologies</p>
  </div>
</div>
<!-- ----------------- -->
<div class="video-wrapper">
	<div class="video-container" id="video-container">
		<video controls id="video" preload="metadata" poster="//cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/poster.jpg">
			<source src="//cdn.jsdelivr.net/npm/big-buck-bunny-1080p@0.0.6/video.mp4" type="video/mp4">
		</video>

		<div class="play-button-wrapper">
			<div title="Play video" class="play-gif" id="circle-play-b">
				<!-- SVG Play Button -->
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
					<path d="M40 0a40 40 0 1040 40A40 40 0 0040 0zM26 61.56V18.44L64 40z" />
				</svg>
			</div>
		</div>
	</div>
</div>
<style>
    .video-container {
	width:100%;
	border-radius: 27px
	margin: 0 auto;
	position: relative;
	display: flex;
	flex-direction: column;
	justify-content: center;
	box-shadow: 0px 8px 20px rgba(black, 0.4);
	}
	.video-wrapper {
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	video {
		width: 100%;
		height: 100%;
		border-radius: 27px
	}


.play-button-wrapper {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: auto;
	pointer-events: none;
	#circle-play-b {
		cursor: pointer;
		pointer-events: auto;

		svg {
			width: 100px;
			height: 100px;
			fill: #B71C1C;
			stroke: #fff;
			cursor: pointer;
			background-color: #FFFFFF;
			border-radius: 50%;
			
		}
	}
}
.span{
	font-weight: 200 !important;
}
</style>
<script>
    const video = document.getElementById("video");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
	if (video.paused || video.ended) {
		video.play();
	} else {
		video.pause();
	}
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
	circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
	circlePlayButton.style.opacity = 1;
});

</script>
<!-- ----------------- -->
<div class="container" style="background-color:none;">


  <div class="row g-3" id="cardrowcont">
    <div class="col-sm-9" id="cardcontainer">
		
     <div class="cardcont" >
     <h2 class="h3heading">Leverage the potential of digital advertising</h2>
     <p style="margin:2rem 0">With over 3000+ plus brand audits & 100 plus performance marketing strategies under 
     our belt, we understand what it takes to make your brand good & scalable</p>
	 <div class="row" style="margin-top:3rem">
		 <div class="col-3">
<h4>500+</h4>
<p class="span">Projects
Completed</p>
		 </div>
		 <div class="col-3">
		 <h4>100+</h4>
<p class="span">Trusted
Brands</p>
		 </div>
	 </div>
     </div>
    </div>
	
    <div class="col-sm-3">
      
        <div style="background-color: #FF6F61;color: #FFFFFF;border-radius: 27px;padding: 36px;">
		<div class="cardcont" >
		<p>Our mission is to empower businesses through innovative digital marketing strategies that foster growth, engagement, and success</p>
		<a class="navbar-brand" href="#">
      <img src="./image/Group 1000005333.png" alt="mission" width="24" height="24" class="d-inline-block align-text-top">
      Mission
    </a>
		</div>
        </div>
        <div id="cardtop" style="background-color: #4CAF50;color: #FFFFFF;border-radius: 27px;padding: 36px;">
		<div class="cardcont" >
         <p >We envision a future where every business has the tools and expertise to thrive in the digital world</p>
		 <a class="navbar-brand" href="#">
      <img src="./image/Group 1000005334.png" alt="vision" width="24" height="24" class="d-inline-block align-text-top">
	  Vision
    </a>
        </div>
		</div>
      </div>
    </div>
  </div>
  </div>
<style>
	#cardcontainer{
			background-color: #D32F2F;
			color: #FFFFFF;
			padding: 56px;
			border-radius: 27px;
		}
		#cardrowcont{
			margin:4rem 0;
		}
		#cardtop{
			margin-top: 2rem;
		}
		.aligncenter{
				text-align:left !important;
			}
		@media (max-width: 568px) {
			.aligncenter{
				text-align:center !important;
			}
		}

</style>
<!-- ----------------- -->
<div class="performace">
	<div class="container" > 
	
<h3>Our Performance solutions will keep you ahead of the competition</h3>
<p>The industries in which we bring expertise in</p>
	</div>
<div class="black">
<div class="container" > 
<div class="row" id="paddingrow">

<div class="col-md-3 sm-6" >
<div class="row" id="marginnot">
	<div class="col-md-3 sm-3 aligncenter" style="">
	<img src="./image/beach_access.png" alt="image">
	</div>
	<div class="col-md-9 sm-9 aligncenter" style=";padding-top: 4%;">
	<h5 class="header">Beauty & Cosmetic</h5>
	</div>
</div>
</div>

<div class="col-md-3 sm-6" >
<div class="row" id="marginnot">
	<div class="col-md-3 sm-3 aligncenter" >
	<img src="./image/restaurant_menu.png" alt="image">
	</div>
	<div class="col-md-9 sm-9 aligncenter" style="padding-top: 4%;">
	<h5 class="header">Food & Beverages</h5>
	</div>
</div>
</div>
<div class="col-md-3 sm-6" >
<div class="row" id="marginnot">
	<div class="col-md-3 sm-3 aligncenter" >
	<img src="./image/laundry.png" alt="image">
	</div>
	<div class="col-md-9 sm-9 aligncenter" style="padding-top: 4%;">
	<h5 class="header">Fashion & Apparels</h5>
	</div>
</div>
</div>
<div class="col-md-3 sm-6" >
<div class="row" id="marginnot">
	<div class="col-md-3 sm-3 aligncenter" >
	<img src="./image/add_home.png" alt="image">
	</div>
	<div class="col-md-9 sm-9 aligncenter" style="padding-top: 4%;">
	<h5 class="header">Real Estate</h5>
	</div>
</div>
</div>

</div>
</div>
</div>
</div>
<style>

.performace{
	background-color: #D32F2F;
	text-align: center;
	color:#FFFFFF;
	padding: 3rem 0;
}
.black{
	background-color: #000000;
}
#marginnot{
	margin:0 !important;
}
#paddingrow{
	padding:1.8rem 0;
}

</style>
<!-- ----------------- -->
 <div class="testi">
	<div class="head">
	<h1>Testimonials that Speak to Our Results</h1>
	</div>
 
<?php
include_once "./testimonial.php";
?>

 </div>

<style>
	.testi{
		background-image: url(./image/testi.png);
		background-repeat: no-repeat;
		background-size: cover;
		text-align: center;
		padding-bottom:6rem;
	}
	.testi h1{
		color: #D32F2F;
		

	}

	.head{
		width:35%;
		margin:auto;
		padding-top: 8rem;
	}
</style>
<!-- ----------------- -->
 <div class="sidebar">
 <img src="./image/sidebar.png" alt="sidebar">
 </div>
 <!-- ----------------- -->
<div class="global">
<div class="container">

	<div class="row">
	<div class="col-md-6 sm-12" >
		<h2>
		Our Global Business Journey
		</h2>
		<p>At Rainbow Media, we believe in a data-driven approach, creative innovation, and a commitment to excellence. Our global journey is a testament to the trust our clients place in us, and we continue to push boundaries to ensure their success in the digital world</p>
		

	</div>

	</div>
	<div class="row" style="margin-top:3rem">
		
	<div class="col-md-8 sm-12" >
		<div class="row">
		<div class="col-md-4 sm-12 aligncenter" >
		<div class="leftborder">
   <h4>2015</h4>
   </div>
   <div class="paracard">
   <p class="span">Founded with a passion for digital innovation</p>
			</div>
			</div>
			<div class="col-md-4 sm-12 aligncenter" >
				<div class="leftborder">
				<h4>2020</h4>
				</div>
				<div class="paracard">
   <p class="span">Expanded services globally with 100+ clients</p>
			</div>
			</div>
			<div class="col-md-4 sm-12 aligncenter" >
			<div class="leftborder">
			<h4>2023</h4>
			</div>
				<div class="paracard">
   <p class="span">Awarded Best Digital Marketing Agency in City</p>
			</div>
			</div>
			</div>
			</div>
		</div>
</div>
</div>
<style>
	.sidebar{
		background-color: #FCF6F6;
	}
	.global{
		background-image: url(./image/tesbanner.webp);
		background-repeat: no-repeat;
		background-size: cover;
		background-color: #FCF6F6;
		padding:17rem 0 17rem 0;
		}
	.global h2,.global h4{
		color: #FFFFFF;
	}
	.global p{
		color: #F6F6F6;
	}
	.leftborder{
		border-left: 1px solid #ffff;
		padding-left:10px;
	}
	.paracard{
		padding-left:10px;
	}
</style>
<!-- ----------------- -->
 <!-- ----------------- -->
 <div class="sidebar1" style=" text-align: right;background-color: #FFFFFF;">
 <img src="./image/faq.png" alt="faq">
 </div>
 <style>
	.sidebar1{
		padding-top: 3rem;
	}
 </style>
 <!-- ----------------- -->
<div class="faq">
	<div class="container">
	<div class="row">
		<div class="col-md-6 sm-12">
<h1>
Digital Marketing FAQs
</h1>
<p>As a leading digital marketing agency, we are dedicated to providing comprehensive educational resources and answering frequently asked questions to help our clients</p>
<div class="buttonrow">
<button type="button firstbut" class="btn btn-primary"><a href="./contact.php" class="contact">Contanct Us</a></button>
<!-- <button type="button secondbut" class="btn btn-secondary">Contanct Us</button>	 -->
</div>
	<style>
		.contact{
			text-decoration: none;
			color: #FFFFFF;
		}
	</style>
</div>

		<div class="col-md-6 sm-12">
		<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	  <h4>Why is digital marketing important for my business?</h4>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <p>Digital marketing allows businesses to reach and engage with a wider audience, generate leads, drive website traffic, and increase brand visibility. It provides measurable results, allows for targeted marketing efforts, and enables businesses to adapt and optimize their strategies based on data and insights</p>  
	</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	  <h4>How can digital marketing help improve my website's visibility?</h4>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
		<p>
		Digital marketing enhances your website's visibility through SEO techniques that boost rankings on search engine results pages (SERPs). By incorporating targeted keywords and creating high-quality content, you can drive more organic traffic. Strategies like social media marketing, email campaigns, and PPC advertising amplify your reach. 
		</p>
       </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	  <h4> How long does it take to see results from digital marketing efforts?  </h4>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <p>
	The timeline for seeing results from digital marketing efforts depends on the strategies used, like SEO, content marketing, or PPC campaigns. SEO improvements typically show results in 3-6 months as search engines index your content. Immediate traffic can be achieved through paid advertising, while content marketing builds long-term trust and engagement.
	</p>  
	</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
	  <h4> How do you measure the success of digital marketing campaigns?  </h4>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <p>
	The success of digital marketing campaigns is measured using key metrics like website traffic, conversion rates, and engagement levels. Tools like Google Analytics help track SEO performance, audience behavior, and ROI. Social media insights reveal the reach and impact of your content. Monitoring email open rates and click-through rates (CTR) provides actionable data.
	</p>   
	</div>
    </div>
  </div>
</div>
		</div>
	</div>
	</div>

</div>
<style>
	.faq{
		background-color: #FFFFFF;
		padding:7rem 0;
	}
	.faq h1{
		color:#C53535;
	}
	.accordion-body{
		color:#425466;
	}
	.accordion-button{
		font-size: 26px;
	}
	.buttonrow{
		margin-top: 2rem;
	}
	.btn-primary{
		padding: 11px 20px !important;
    border: none !important;
    color: #FFFFFF !important;
    background-color: #B71C1C !important;
	}
	.btn-secondary{
		padding: 11px 20px !important;
    border: 1px solid #B71C1C !important;
    color: #C53535 !important;
    background-color: #FFFFFF !important;
}
</style>
<!-- ----------------- -->

<!-- ----------------- -->

<!-- ----------------- -->

<!-- ----------------- -->
  

</body>
<?php
include_once "./footer.php";
?>