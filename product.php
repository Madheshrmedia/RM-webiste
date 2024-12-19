<style>
  .prodsec{
    background-image: url(./image/prodsec.webp);
		background-repeat: no-repeat;
		background-size: cover;
  }
  .prodsec{
    color: #FFFFFF;
    padding: 5rem 0;
  } 
  .tabframe,.imgframe{
    background-color: #FCF6F6;
    padding:3rem 0;
  } 
  .imgframe{
    background-color: #FCF6F6;
    padding:3rem 0 4rem 0;
  } 
  .btn-secondary{
    background-color: #FCE0DD !important;
    color: #D32F2F !important;
    border-radius: 50px !important;
    border: none !important;
    padding: 14px 22px !important;

  }
  .btn-primary{
		padding: 11px 20px !important;
    border: none !important;
    color: #FFFFFF !important;
    background-color: #B71C1C !important;
	}
    .imgframe img{
        width:100%;
    }
    .imgframe h1{
        color:#D32F2F;
    }
    .padleft{
        padding-left:2rem !important;
    }
    .colorred{
        color: #D32F2F ; 
    }
    .orlist li{
        color: #0D0E10 ;
        margin-top:1rem; 
    }
    .buttonrow{
        margin-top:2rem;   
    }
  @media (max-width: 767px) {
			.aligncenter{
				text-align:center !important;
                margin-top:1rem;
			}
            .padleft{
        padding-left:10px !important;
    }
    .btn-secondary,.imgframe h1{
        margin-top: 1rem;
    }
   
		}
</style>
<?php
include_once "./header.php";
?>
<body>
   <div class="prodsec">
    <div class="container">
    <h1>Innovative IT Solutions for Tomorrow's Businesses</h1>
    </div>

   </div> 
   <!-- --------------------- -->
<div class="tabframe">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
            <div class="row">
            <div class="col-md-3 col-sm-12 aligncenter">
            <button type="button" class="btn btn-secondary">Bill Smarter</button>
            </div>
            <div class="col-md-3 col-sm-12 aligncenter">
            <button type="button" class="btn btn-secondary">Work Faster</button>
            </div>
            <div class="col-md-3 col-sm-12 aligncenter">
            <button type="button" class="btn btn-secondary">Bill Efficiently</button>
            </div>
            <div class="col-md-3 col-sm-12 aligncenter">
            <button type="button" class="btn btn-secondary">Customizable billing</button>
            </div>
      
        </div>
            </div>
      
        </div>
    </div>
</div>
      <!-- --------------------- -->
<div class="imgframe">
<div class="container">
    <div class="row">
    <div class="col-md-6 col-sm-12 aligncenter">
    <img src="./image/imageprod.webp" alt="imageprod">
</div>
<div class="col-md-6 col-sm-12 aligncenter padleft">
<h1>
BILL IT NOW – 
</h1>
<p class="colorred">Redefine Your Billing Experience</p>
<ul class="orlist">
    <li>Billing Made Seamless, Business Made Simple</li>
    <li>Effortless Billing, Powerful Results</li>
    <li>Your All-in-One Billing Solution</li>
</ul>
<div class="buttonrow">
<button type="button firstbut" class="btn btn-primary"><a href="./billitnow.php" class="explore">Explore Now</a></button>
</div>
</div>
    </div>
</div>
</div>
<style>
    .explore{
        color: #FFFFFF;
        text-decoration: none;
    }
</style>
      <!-- --------------------- -->

</body>
<?php
include_once "./footer.php";
?>