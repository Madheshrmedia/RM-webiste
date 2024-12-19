<style>
   
    .btn-secondary{
    background-color: #B71C1C !important;
    color: #FFFFFF !important;
    border-radius: 7px !important;
    border: none !important;
    padding: 14px 22px !important;
    margin-top:2rem;

  }
  .butrow{
    text-align:center;
  }
  .centered {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.containercenter {
  position: relative;
  text-align: center;
  color: white;
}
.choosecontent{
    text-align: center;
    color:#D32F2F;
    background-color: #F6F6F6;
    padding:2rem 0;
}
.card-img-top{
    width:66px !important;
    height:50px !important;
    padding-left: 14px;
}
.card-body{
    text-align:left;
   
}
.card-text{
    margin-top:1rem;
}
.card{
    border:none !important;
    background-color: transparent !important;
    color:#FFFFFF !important;
}
.reback{
    background-color: #D32F2F;
    padding:5rem 0;
}
.card-title{
    margin:1rem 0 ;
}
.opportunity{
    text-align:center;
    padding:4rem 0;
}
.opportunity h1{
    color: #D32F2F;
}
.parawidth{
    color: #425466;
    width:50%;
    margin:auto;
}
.fullwidth img{
    width: 100%;
}
.rowframe{
    margin-top:4rem;
    padding:5rem 0;
}
.padleft{
        padding-left:2rem !important;
    }
@media (max-width: 767px) {
			.aligncenter{
				text-align:center !important;
                margin-top:1rem;
			}
            .padleft{
        padding-left:10px !important;
    }

}
.colleft
{
    text-align:left;
}
.h3head{
    color: #0D0E10;
    font-size:29px;
}
.rowfpara{
    color: #2A2B2C !important;
}
.aref{
   
    color: #2A2B2C !important;
    text-decoration:none;
}

</style>
<?php
  if(!empty($_POST["send"])){
$name=$_POST["name"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$job=$_POST["job"];
$exp=$_POST["exp"];
$message=$_POST["message"];
$toEmail="rmedia1123.info@gmail.com";


$mailheaders="Name:" .$name.
"\r\n Date of Birth:" .$birthday.
"\r\n Gender:" .$gender.
"\r\n Contact Number:" .$phone.
"\r\n Email:" .$email.
"\r\n Job Title:" .$job.
"\r\n Experience in Years:" .$exp;
"\r\n Cover letter:" .$message. "\r\n";



if(mail($toEmail,$name,$mailheaders)){
  // Form submitted successfully, set a flag to show the pop-up
        echo '<script>window.addEventListener("DOMContentLoaded", function() {
            var popup = document.getElementById("successMessage");
            popup.style.display = "block";
        });</script>';
    }


  }
  ?>
<?php
include_once "./header.php";
?>
<body>
    <!-- --------------------- -->
     <div class="bannerframe containercenter">
   
  <img src="./image/Hero-Stack.webp" alt="Hero-Stack" style="width:100%;">

  <div class="centered"> <button type="button" class="btn btn-secondary"><a href="#applyform" class="applybut">Apply Now</a></button></div>

     </div>
     <style>
      .applybut{
        color: #FFFFFF;
        text-decoration: none;
      }
     </style>
    <!-- --------------------- -->
    <div class="choosecontent">
            <h1>Why Choose Rainbow Media?</h1>
        </div>
     <div class="container">
     
</div>
    <!-- --------------------- -->
     <div class="reback">
        <div class="container">
            <div class="row">
            <div class="col-md-4 col-sm-12 aligncenter">
            <div class="card" style="width: 18rem;">
  <img src="./image/fi_1087840.png" alt="fi_1087840" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Innovative Environment</h5>
    <p class="card-text">We foster creativity and innovation in everything we do. You'll work with forward-thinking individuals who embrace new challenges and trends</p>
   
  </div>
</div>
            </div>
            <div class="col-md-4 col-sm-12 aligncenter">
            <div class="card" style="width: 18rem;">
   <img src="./image/fi_9467019.png" alt="fi_9467019" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Career Growth</h5>
    <p class="card-text">We believe in growing together. At Rainbow Media, you'll have endless opportunities to expand your skill set, take on exciting projects, and advance your career</p>
   
  </div>
</div>
            </div>
            <div class="col-md-4 col-sm-12 aligncenter">
            <div class="card" style="width: 18rem;">
   <img src="./image/fi_9693685.png" alt="fi_9693685" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Flexible Work Environment</h5>
    <p class="card-text">We understand the need for a healthy work-life balance. With flexible working hours and hybrid options, you can thrive both personally and professionally</p>
   
  </div>
</div>
            </div>
            </div>
        </div>
     </div>
    <!-- --------------------- -->
     <div class="opportunity">
        <h1>
        Current Opportunities
        </h1>
        <p class="parawidth">We’re always looking for talented, driven individuals to join our team. Check out our latest job openings below and apply today!</p>
        <div class="rowframe" style="background-color:#FCF6F6">
            <div class="container">
                <div class="row">
                <div class="col-md-6 col-sm-12 aligncenter fullwidth">
                <img src="./image/carimage3.webp" alt="carimage3">
                </div>
                <div class="col-md-6 col-sm-12 aligncenter colleft padleft d-flex justify-content-center align-items-center">
                <div class="centercol">
<p class="h3head">Social Media Manager</p>
<p class="rowfpara">Manage multi-platform social media campaigns, analyze performance, and grow engagement</p>
<a class="icon-link aref" href="#">
    <i class="bi bi-geo-alt-fill"></i>
    Chennai
</a><br>
    <a class="aref" href="#">
    <i class="bi bi-book"></i>
    3+ years
</a><br>
 <button type="button" class="btn btn-secondary"> <a href="#applyform" class="applybut">Apply Now</a></button>
 </div>
                </div>
                </div>
           
            </div>
        </div>

  <!-- --------------------- -->
  <div class="rowframe">
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 aligncenter colleft padleft d-flex justify-content-center align-items-center">
          <div class="centercol">
    <p class="h3head">Telecallers</p>
    <p class="rowfpara">Assist in managing and creating engaging social media content across platforms. Work with the marketing team to increase audience engagement and brand visibility. Learn the latest trends and tools in digital marketing</p>
    <a class="aref" href="#">
    <i class="bi bi-geo-alt-fill"></i>
    Chennai
    </a><br>
    <a class="aref" href="#">
    <i class="bi bi-book"></i>
    Freshers/0+ years
    </a><br>
    <button type="button" class="btn btn-secondary"><a href="#applyform" class="applybut">Apply Now</a></button>
    </div>
          </div>
      <div class="col-md-6 col-sm-12 aligncenter fullwidth">
      <img src="./image/carimage2.webp" alt="carimage2">
      </div>
     
      </div>
 
  </div>
</div>
 <!-- --------------------- -->
 <div class="rowframe" style="background-color:#FCF6F6">
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 aligncenter fullwidth">
          <img src="./image/carimage1.webp" alt="carimage1">
          </div>
        <div class="col-md-6 col-sm-12 aligncenter colleft padleft d-flex justify-content-center align-items-center">
          <div class="centercol">
    <p class="h3head">Social Media Interns</p>
    <p class="rowfpara">Assist in managing and creating engaging social media content across platforms. Work with the marketing team to increase audience engagement and brand visibility. Learn the latest trends and tools in digital marketing</p>
    <a class="aref" href="#">
    <i class="bi bi-geo-alt-fill"></i>
    Chennai
    </a><br>
    <a class="aref" href="#">
    <i class="bi bi-book"></i>
    Freshers/0+ years
    </a><br>
    <button type="button" class="btn btn-secondary"><a href="#applyform" class="applybut">Apply Now</a></button>
    </div>
          </div>
     
     
      </div>
 
  </div>
</div>
   <!-- --------form------------- -->
   <div class="application" id="applyform">
  <h2 class="red">Join Our Team – Application Form</h2>
  <div class="container" id="fomecontainer">
  <form method="post" name="emailContact" onsubmit="return validateForm()">
  <div class="row"  >
    <div class="col-sm-6 ">
      <div class="inputrow">
      <label for="name">Name <em>*</em></label><br>
                                <input type="text" name="name"  placeholder="Your Name" required>
      </div>
  </div>
  <div class="col-sm-6">
  <div class="inputrow">
  <label for="birthday">DOB <em>*</em></label><br>
                                <input type="date" id="birthday" name="birthday">
                                </div>
  </div>
  </div>
  
  <div class="row"  >
    <div class="col-sm-6 ">
      <div class="inputrow">
      <label for="gender">Gender <em>*</em></label><br>
      <select id="gender" name="gender">
                                  <option value="">Select</option>
                                  <option value="Female">Female</option>
                                  <option value="Male">Male</option>
                                </select>
      </div>
  </div>
  <div class="col-sm-6">
  <div class="inputrow">
  <label for="phone">Contact Number <em>*</em></label>
                                <input type="tel" name="phone" placeholder="1234567890" maxlength="10" required>
                                </div>
  </div>
  </div>
  
  <div class="row"  >
  <div class="col-sm-6">
  <div class="inputrow">
  <label for="email">Email <em>*</em></label>
                                <input type="email" name="email" placeholder="user@gmail.com" required>
                                </div>
  </div>
    <div class="col-sm-6 ">
      <div class="inputrow">
      <label for="job">Job Title <em>*</em></label><br>
      <select id="job" name="job">
                                  <option value="">Select</option>
                                  <option value="Social Media Manager">Social Media Manager</option>
                                  <option value="Developer">Digital Marketer</option>
                                  <option value="UX/UI Designer">Telecaller</option>
                                </select>
      </div>
  </div>
  
  
  </div>
  
  <div class="row"  >
    <div class="col-sm-6 ">
      <div class="inputrow">
      <label for="exp">Years of Experience <em>*</em></label><br>
      <select id="exp" name="exp">
                                  <option value="">Select</option>
                                  <option value="0 yr - 1 yr">0 yr - 1 yr</option>
                                  <option value="1 yr - 2 yr">1 yr - 2 yr</option>
                                  <option value="2 yr - 3 yr">2 yr - 3 yr</option>
                                  <option value="3 yr - 4 yr">3 yr - 4 yr</option>
                                  <option value="4 yr - 5 yr">4 yr - 5 yr</option>
                                  <option value="above 5 yr">above 5 yr</option>
                                </select>
      </div>
  </div>
  <div class="col-sm-6">
  <div class="inputrow">
  <label for="message">Cover Letter </label><br>
  <textarea name="message" id="message" cols="5" rows="5" placeholder="Please do not exceed 200 words"></textarea>
                                </div>
  </div>
  </div>
  
  <!--<div class="row" id="resumrow" >-->
  <!--<h6>Upload Your Resume *</h6>-->
  <!--</div>-->
  <div class="row"  >
    <div class="col-md-12 col-sm-12">
  <div class="inputrow">
      <p style="color:red">Send your resume to "rmedia1123.info@gmail.com"</p> 
  <!--<input type="file" name="resume" accept=".pdf,.doc,.docx,.png" required>-->
                                </div>
  </div>
  </div>
  <div class="row" id="resumrow1" >
  <input class="btn btn-primary" type="submit" name="send" value="Submit" class="submit">
  <div id="successMessage" class="popup">
                  <div class="popup-content" >
                      <span class="close" onclick="closeSuccessMessage(event)">&times;</span>
                      <p>Successfully submitted form!</p>
                      <button onclick="closeSuccessMessage(event)" >OK</button>
                  </div>
              </div>
  </div>
  
  </div>
                            </form>
  </div>


<style>
    #resumrow1 input{
        margin:1rem auto 0 auto !important;
        width: 20% !important;
    }
    .red{
        color:#D32F2F;
    }
    .application{
text-align:center;
margin:4rem 0 2rem 0;
}
#fomecontainer{
padding: 40px 30px;
background-color: #FCF6F6;
border-radius: 8px;
}
#fomecontainer .inputrow{
background-color: #FFFFFF;
margin:0.5rem;
border-radius: 5px;
text-align:left;
padding: 18px;
}
#fomecontainer .inputrow input ,#fomecontainer .inputrow select,#fomecontainer .inputrow textarea{
width:100%;
border: none;
border-bottom: 1px dotted #000;
margin-top:13px ;
height:50px;
}
.application h2{
margin:2rem 0;
}
.inputrow label,#resumrow h6{
font-weight:600;
}
#resumrow,#resumrow1{
text-align:center;
}
.popup {
  width: 45%;
    display: none; /* Hide the pop-up by default */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    border: 1px solid #000000;
    padding: 20px;
    z-index: 1000;
}

.popup-content {
    text-align: center;
}

.close {
    position: absolute;
    top: 5px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
}
</style>
    <!-- --------------------- -->
    <!-- --------------------- -->
    <!-- --------------------- -->
    <!-- --------------------- -->
    <!-- --------------------- -->
        
    </div>
</body>
<?php
include_once "./footer.php";
?>