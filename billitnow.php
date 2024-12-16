<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="./images/RM favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./contact-style.css">
    <script src="https://kit.fontawesome.com/02ea2f3995.js" crossorigin="anonymous"></script>
    <title>Product</title>
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>(function (w, d) { w.CollectId = "65aa0ec2dbbee2566c6b3ca8"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async = true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    <!-- -----------tab-------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Lato';
            background-color: #F2F4F7;
        }

        .bg-dark {
            height: 70px;
            padding: 13px 0;
            background-color: #fff;
            position: fixed !important;
            width: 100%;
        }

        body h1,
        h2,
        h3,
        h4 {
            font-weight: 600;
        }

        body h2 {
            margin-top: 10px;
            margin-bottom: 44px;
        }

        body h3 {
            margin-top: 10px;
            margin-bottom: 35px;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #000;
            font-size: 18px;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fd363d !important;
        }

        .navbar-dark .navbar-nav .nav-link.active {
            color: #fd363d;
        }

        .foot {
            display: flex;
        }

        @media (max-width:500px) {
            .foot {
                display: block;
                ;
            }
        }

        @media (min-width: 576px) {
            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: 1.5rem;
                padding-left: 1.5rem;
            }

        }

        /* ------------------------ */
        .careerbanner {
            background-image: url(./images/prod/bannerimg.png);
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
            color: #fff;
            padding-bottom: 10rem;
            padding-top: 8rem;
            padding-bottom: 70rem;
        }

        .careerbanner button {
            cursor: pointer;
            margin-top: 1rem;
            border-radius: 2px;
            color: #fff;
            border: none;
        }

        #join {
            padding: 9px 35px;
            border: 1px solid #fff;
            background-color: transparent;
            border-radius: 30px;
        }

        #pos {
            font-size: 14px;
            padding: 9px 20px;
            margin-left: 1rem;
            border: 1px solid #fff;
            background-color: transparent;
            border-radius: 30px;
        }

        #join a,
        #pos a {
            text-decoration: none !important;
            color: #fff !important;
            cursor: pointer;
        }

        h1 {
            margin: 20px auto;
        }

        .imgcontainer {
            position: relative;
            padding-top: 412px;
            width: 80%;
            margin: auto;
            margin-top: -924px;
            text-align: center;
            background-image: linear-gradient(#ffff, #C7CED3);
        }

        #staff {
            background-image: linear-gradient(#2C88FE, #002F75);
            border-radius: 10px;
            padding: 46px 30px 0 62px;
        }

        #staff img {
            width: 100%;
        }

        .imgcontainer img {
            position: absolute;
            top: -12%;
            left: 50%;
            transform: translateX(-50%);
            width: 72%;
        }

        .imgcontainer h2 {
            padding-top: 70px;
            padding-bottom: 20px;
        }

        .gridcontainer {
            text-align: center;
            width: 80%;
            margin: auto;
        }

        .popup {
            width: 45%;
            display: none;
            /* Hide the pop-up by default */
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

        #successMessage {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $business = $_POST["business"];
        $message = $_POST["message"];
        $toEmail = "rmedia1123.info@gmail.com";


        $mailheaders = "Name:" . $name .
            "\r\n Email:" . $email .
            "\r\n Contact Number:" . $phone .
            "\r\n Type of business:" . $business .
            "\r\n Message:" . $message . "\r\n";



        if (mail($toEmail, $name, $mailheaders)) {
            // Form submitted successfully, set a flag to show the pop-up
            echo '<script>window.addEventListener("DOMContentLoaded", function() {
            var popup = document.getElementById("successMessage");
            popup.style.display = "block";
        });</script>';
        }


    }
    ?>

    <script>
        function showPopup(message) {
            alert(message); // You can replace this with a more visually appealing popup if desired
        }
    </script>
    <!----------------Newsletter-------------->
    <?php
    if (isset($_POST["sends"])) {
        $to = "billitnow418@gmail.com"; // Change this to your email address
        $subject = "New email subscription";
        $emailid = $_POST["emailid"];
        $message = "\r\n New email subscription:" . $emailid . "\r\n";

        // Send email
        if (mail($to, $subject, $message)) {
            echo "<script>showPopup('Thank you for your response!');</script>";
        } else {
            echo "<script>showPopup('Sorry, something went wrong. Please try again later.');</script>";
        }
    }
    ?>

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            function validateForm() {
                // Validation logic for each field
                var name = document.forms["emailContact"]["name"].value;
                var phone = document.forms["emailContact"]["phone"].value;
                var email = document.forms["emailContact"]["email"].value;
                var business = document.forms["emailContact"]["business"].value;
                var message = document.forms["emailContact"]["message"].value;

                if (name == "" || phone == "" || email == "" || business == "") {
                    alert("All fields must be filled out");
                    return false; // Return false if any field is empty
                }

                // Additional validation logic for specific fields, if needed

                // Show the success message pop-up
                showSuccessMessage();

                // Return true to allow the form submission
                return true;
            }

            // Function to show the success message pop-up
            function showSuccessMessage() {
                var popup = document.getElementById("successMessage");
                popup.style.display = "block";
            }



        });
        function closeSuccessMessage(event) {
            event.preventDefault(); // Prevent the default form submission behavior
            var popup = document.getElementById("successMessage");
            popup.style.display = "none";
        }
    </script>


    <div class="contact-page" id="about">


        <?php
        include_once "./header.php";
        ?>
        <!-- -------------------------------------------------- -->
        <div class="careerbanner">
            <span style="text-transform: uppercase;">BillIT NOW: Your Ultimate BILLING Solution</span>
            <h1>Billing made simple – try it now!</h1>
            <p>The finest billing software designed to meet all your invoicing needs, providing tailored<br> solutions
                for every aspect of your billing requirements. </p>
            <button type="button" class="btn btn-primary btn-sm" id="join"><a href="#fomecontainer">VIEW
                    MORE</a></button>
            <!-- <button type="button" class="btn btn-secondary btn-sm" id="pos"><a href="#offer">GET STARTED</a></button> -->
            <button type="button" class="button btn btn-secondary btn-sm" id="pos" data-bs-toggle="modal"
                data-bs-target="#exampleModal" data-bs-whatever="@mdo">GET STARTED</button>

        </div>


        <div class="imgcontainer">
            <img src="./images/prod/img.png" class="rounded mx-auto d-block" alt="image">
            <h2>Introducing our cutting-edge billing<br> software solution</h2>
            <video controls>
                <source src="./images/video.mov" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <style>
                video {
                    padding-bottom: 2.3rem;
                    width: 90%;
                    margin: auto;
                }
            </style>
        </div>

        <div class="gridcontainer" id="fomecontainer">
            <span style="text-transform: uppercase;">Features</span>
            <h2>Empower your billing process with<br>
                <span style="color:#2C88FE">next-gen</span> feature set
            </h2>
            <div class="container" id="paperless">
                <div class="row">
                    <div class="col-sm-6" id="column">
                        <span style="text-transform: uppercase;">GO PAPERLESS</span>
                        <h3>Revolutionize your billing with paperless</h3>
                        <p>Streamline your billing process with our cutting-edge paperless billing software. Say goodbye
                            to paperwork and hello to efficiency</p>
                        <!-- <button class="button" id="explore"><a href=""><span>Book Now</span></a></button> -->
                        <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo"><span>Book now</span></button>
                    </div>
                    <div class="col-sm-6">
                        <img src="./images/prod/paperless.png" alt="paperless">
                    </div>
                </div>
            </div>

            <div class="container" id="mobile">
                <div class="row">
                    <div class="col-sm-6">
                        <div id="mob">
                            <div class="mobcont">
                                <img src="./images/prod/mobile.png" alt="mobile">
                            </div>
                            <p>Mobile accessibility</p>
                            <h4>Billing at your fingertips<br> wherever you Go!</h4>
                            <p>Access your billing anywhere, anytime with our mobile-friendly software </p>
                        </div>



                    </div>
                    <div class="col-sm-6">
                        <div id="customer">
                            <div class="mobcont">
                                <img src="./images/prod/customer.png" alt="customer">
                            </div>
                            <p>Instant customer integration</p>
                            <h4>Instant customer integration <br>streamline billing</h4>
                            <p>Seamlessly integrate our billing software with your customer systems for instant data
                                synchronization </p>
                        </div>


                    </div>
                </div>
            </div>


            <div class="container" id="staff">
                <div class="row">
                    <div class="col-sm-6">
                        <span style="text-transform: uppercase;">Staff sales tracking</span>
                        <h3>Ease employee tracking<br> and reporting for sales </h3>
                        <p>Effortlessly monitor staff sales performance and streamline<br> tracking with our intuitive
                            billing software's staff <br>sales tracking feature</p>

                    </div>
                    <div class="col-sm-6">
                        <img src="./images/prod/staff.png" alt="staff">
                    </div>
                </div>
                <div class="row" id="staffs">
                    <div class="col-sm-6">
                        <img src="./images/prod/image.png" alt="image">
                    </div>
                    <div class="col-sm-6">
                        <span style="text-transform: uppercase;">Inventory management</span>
                        <h3>Inventory management <br>solutions for products</h3>
                        <p>Maximize efficiency with our advanced inventory <br>management system: real-time tracking,
                            seamless<br> integration, and actionable insights <br>for profitability
                        <p></p>
                    </div>

                </div>
                <div class="btnbook" style="text-align: center;">
                    <!-- <button class="button" id="explores"><a href=""><span>Book Demo Now</span></a></button> -->
                    <button type="button" id="explores" class="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span>Book demo now</span></button>
                </div>

            </div>



        </div>
        <div class="benefit">
            <div class="row" id="benefitrow">
                <div class="col-md-5 col-sm-6">
                    <span style="text-transform: uppercase;">Benefits</span>
                    <h3>Key benefits of our billing<br>software</h3>

                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>User Friendly</h5>
                    </div>
                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>Mobile Accessibility</h5>
                    </div>
                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>Paperless Billing </h5>
                    </div>
                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>Effortless Invoicing</h5>
                    </div>
                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>Inventory MANAGEMENT</h5>
                    </div>
                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>Customer Integration</h5>
                    </div>
                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>Sales and expense Reports</h5>
                    </div>
                    <div class="wrapper">
                        <img src="./images/prod/tick.png" alt="tick">
                        <h5>Staff Sales Tracking</h5>
                    </div>
                    <style>
                        .benefit {
                            background-image: linear-gradient(to bottom right, #DDFFFF, #FEFFFF, #F6D4FF);
                        }

                        .wrapper {
                            display: flex;
                            align-items: center;
                            gap: 1rem;
                            margin: 25px;
                        }

                        .wrapper h5 {
                            text-transform: uppercase;
                            margin-bottom: 0 !important;
                            font-weight: 600;
                        }

                        .wrapper img {
                            width: 30px !important;
                        }
                    </style>

                </div>
                <div class="col-md-7 col-sm-6">
                    <img src="./images/prod/benefit.png" alt="icon3">
                </div>
            </div>
        </div>
        <!--<div class="benefit">-->
        <!--  <div class="row" id="benefitrow">-->
        <!--    <div class="col-sm-6">-->
        <!--        <span style="text-transform: uppercase;">Benefits</span>-->
        <!--        <h3>Key benefits of our billing<br>software</h3>    <div class="card-block">-->

        <!--    <div class="row " style="background-color: #FFF8F8;">-->
        <!--      <div class="colcard" style="border-right: 1px solid #FF8F8F;padding-right: 20px;">-->
        <!--        <img src="./images/prod/icon.png" alt="icon" style="   width:50px;">-->
        <!--      </div>-->
        <!--      <div class="colcard" style="padding-left:20px;" >-->
        <!--     <h5 style="color: #FF5B5B;">User friendly interface</h5>-->
        <!--     <span>-->
        <!--      User-friendly design for effortless <br>navigation and seamless functionality-->
        <!--     </span>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--   </div>-->
        <!--   <div class="card-block">-->

        <!--    <div class="row " style="background-color: #FFF8F8;">-->
        <!--      <div class="colcard" style="border-right: 1px solid #5B9DFF;padding-right: 20px;">-->
        <!--        <img src="./images/prod/Guides.png" alt="icon"  style="   width:50px;">-->
        <!--      </div>-->
        <!--      <div class="colcard" style="padding-left:20px;" >-->
        <!--     <h5 style="color: #5B9DFF;">Insights tracking</h5>-->
        <!--     <span>-->
        <!--      Monitor revenue streams, and optimize <br>financial performance -->
        <!--     </span>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--   </div>-->
        <!--   <div class="card-block">-->

        <!--    <div class="row " style="background-color: #FFF8F8;">-->
        <!--      <div class="colcard" style="border-right: 1px solid #8254F5;padding-right: 20px;">-->
        <!--        <img src="./images/prod/icon3.png" alt="icon3"  style="   width:50px;">-->
        <!--      </div>-->
        <!--      <div class="colcard" style="padding-left:20px;" >-->
        <!--     <h5 style="color: #8254F5;">Productivity measurement</h5>-->
        <!--     <span>-->
        <!--      Monitor productivity, analyze performance, <br>and enhance workflow -->
        <!--     </span>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--   </div>-->
        <!--    </div>-->
        <!--    <div class="col-sm-6">-->
        <!--        <img src="./images/prod/benefit.png" alt="icon3">-->
        <!--    </div>-->
        <!--</div>-->
        <!--</div>-->
        <div class="reportsec" style="text-align: center;">
            <span style="text-transform: uppercase;">Features</span>
            <h2>Everything you need for your business</h2>
        </div>
        <style>
            .reportsec {
                padding: 35px 0;
            }
        </style>
        <div class="navigationmenu">
            <div class="container">
                <nav class="nav nav-pills flex-column flex-sm-row" id="tabmenu">
                    <a data-toggle="tab" class="flex-sm-fill text-sm-center nav-link active" aria-current="page"
                        href="#home">Invoice summary</a>
                    <a data-toggle="tab" class="flex-sm-fill text-sm-center nav-link" href="#menu1">Invoice detail</a>
                    <a data-toggle="tab" class="flex-sm-fill text-sm-center nav-link" href="#menu2">Staff report</a>
                    <a data-toggle="tab" class="flex-sm-fill text-sm-center nav-link" href="#menu3">Day report</a>
                    <a data-toggle="tab" class="flex-sm-fill text-sm-center nav-link" href="#menu4">Month report</a>
                </nav>
                <div class="tab-content">
                    <div id="home" class="tab-pane  in active">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="./images/prod/summary.png" alt="summary">
                            </div>
                            <div class="col-sm-6 coleft">
                                <h3>Invoice summary</h3>
                                <p>A concise overview detailing essential information such as total amount due,
                                    items/services rendered, payment terms, and invoice number, facilitating efficient
                                    payment processing and record-keeping</p>
                                <!-- <button class="button"><a href=""><span>Book Now</span></a></button> -->
                                <button type="button" class="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span>Book
                                        now</span></button>
                            </div>

                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="./images/prod/detail.png" alt="detail">
                            </div>
                            <div class="col-sm-6 coleft">
                                <h3>Invoice detail</h3>
                                <p>A comprehensive breakdown of individual items or services provided, including
                                    quantities, unit prices, subtotal amounts, and any applicable taxes or discounts,
                                    ensuring transparency and accuracy</p>
                                <button class="button"><a href=""><span>Book now</span></a></button>
                            </div>

                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="./images/prod/staffreport.png" alt="staffreport">
                            </div>
                            <div class="col-sm-6 coleft">
                                <h3>Staff report</h3>
                                <p>A concise overview of employee performance metrics, including sales targets,
                                    achievements, customer interactions, and tasks completed, facilitating evaluation
                                    and decision-making processes</p>
                                <button class="button"><a href=""><span>Book now</span></a></button>
                            </div>

                        </div>

                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="./images/prod/day.png" alt="day">
                            </div>
                            <div class="col-sm-6 coleft">
                                <h3>Day report</h3>
                                <p>A daily summary presenting key metrics such as sales, expenses, transactions, and
                                    customer interactions, offering insights into daily operations and performance for
                                    informed decision-making</p>
                                <button class="button"><a href=""><span>Book now</span></a></button>
                            </div>

                        </div>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="./images/prod/month.png" alt="month">
                            </div>
                            <div class="col-sm-6 coleft">
                                <h3>Month report</h3>
                                <p>A comprehensive overview of performance metrics, including sales, expenses, profits,
                                    and customer trends, enabling analysis and strategic planning based on monthly data
                                    insights</p>
                                <button class="button"><a href=""><span>Book now</span></a></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="sticker">
            <div class="row">
                <div class="col-sm-6" id="columnimg">
                    <span style="text-transform: uppercase;">Customer details</span>
                    <h3>Managing customer relationships</h3>
                    <p>Manage customer relations:
                        Admin role; create, list, edit and delete</p>
                    <img src="./images/prod/Illustration.png" alt="Illustration">
                </div>
                <div class="col-sm-6" id="columnstick">
                    <img src="./images/prod/sticker.png" alt="sticker">
                </div>
            </div>
        </div>
        <div class="query">
            <div class="text-center" style="padding: 60px 19px 10px 19px;">
                <h1 style="font-size:20px;color:#FFC327;">OUR PRICING</h1>
                <p style="font-size:64px;color:#FFFFFF;font-weight: bold;">Pricing & <span
                        style="color:#2C88FE;">Plans</span></p>
                <p style="font-size:20px;color:#E2E2E2;">Choose a plan tailored to your needs</p>
            </div>
            <!-- ------------ -->
            <div class="toggle-container">
                <div class="labels">
                    <span class="label-left">INR</span>
                    <label class="switch">
                        <input type="checkbox" id="currencyToggle">
                        <span class="slider"></span>
                    </label>
                    <span class="label-right">USD</span>
                </div>
            </div>

            <div id="currencyText" class="currency-text">
                <div class="row cardrow">
                    <div class="col pricecard">
                        <div class="card ">

                            <div class="smtext">BASIC</div>
                            <div class="cardhead">
                                <h2 class="subhead">₹ 14,999<sub class="sub">per yr</sub></h2>
                                <p class="cardpara">Renewal ₹ 5,999/- per yr</p>
                            </div>
                            <div class="card-body">
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Dashboard</p>
                                    </div>
                                </div>

                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Service</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Product</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Sale</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Report (Basic)</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Staff</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Customer</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Admin</p>
                                    </div>
                                </div>
                                <!--<a href="#" class="btn btn-primary cardbut">Book Now</a>-->
                                <button type="button" class=" cardbut" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span
                                        style="color: #fff;">Book Now</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="col pricecard">
                        <div class="bigcard"
                            style="text-align: center;background-color: #FFDA16;margin: auto;padding: 10px;  border-radius: .5rem;">
                            <h4 style="font-size: 23px;"> Recommended</h4>
                            <div class="card ">

                                <div class="smtext">Standard</div>
                                <div class="cardhead">
                                    <h2 class="subhead">₹ 17,999<sub class="sub">per yr</sub></h2>
                                    <p class="cardpara">Renewal ₹ 6,999/- per yr</p>
                                </div>
                                <div class="card-body">
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Dashboard</p>
                                        </div>
                                    </div>

                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Service</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Product</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Sale</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Expense</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Report (Advance)</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Inventory</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Staff</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Customer</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Admin</p>
                                        </div>
                                    </div>
                                    <button type="button" class=" cardbut" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span
                                            style="color: #fff;">Book Now</span></button>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col pricecard">

                        <div class="card ">

                            <div class="smtext">ADVANCE</div>
                            <div class="cardhead">
                                <h2 class="subhead">₹ 24,999<sub class="sub">per yr</sub></h2>
                                <p class="cardpara">Renewal ₹ 7,999/- per yr</p>
                            </div>
                            <div class="card-body">
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Dashboard</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Mini CRM</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Service</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Product</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Sale</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Expense</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Report (Advance)</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Inventory</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Staff</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Customer</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Admin</p>
                                    </div>
                                </div>
                                <button type="button" class=" cardbut" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span
                                        style="color: #fff;">Book Now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="currencyText1" class="currency-text hidden">
                <div class="row cardrow">
                    <div class="col pricecard">
                        <div class="card ">

                            <div class="smtext">BASIC</div>
                            <div class="cardhead">
                                <h2 class="subhead">$ 155<sub class="sub">per yr</sub></h2>
                                <p class="cardpara">Renewal $ 72 /- per yr</p>
                            </div>
                            <div class="card-body">
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Dashboard</p>
                                    </div>
                                </div>

                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Service</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Product</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Sale</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Report (Basic)</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Staff</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Customer</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Admin</p>
                                    </div>
                                </div>
                                <button type="button" class=" cardbut" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span
                                        style="color: #fff;">Book Now</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="col pricecard">
                        <div class="bigcard"
                            style="text-align: center;background-color: #FFDA16;margin: auto;padding: 10px;  border-radius: .5rem;">
                            <h4 style="font-size: 23px;"> Recommended</h4>
                            <div class="card ">

                                <div class="smtext">Standard</div>
                                <div class="cardhead">
                                    <h2 class="subhead">$ 180<sub class="sub">per yr</sub></h2>
                                    <p class="cardpara">Renewal $ 84/- per yr</p>
                                </div>
                                <div class="card-body">
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Dashboard</p>
                                        </div>
                                    </div>

                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Service</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Product</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Sale</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Expense</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Report (Advance)</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Inventory</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Staff</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Customer</p>
                                        </div>
                                    </div>
                                    <div class="col" id="col">
                                        <div>
                                            <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                        </div>
                                        <div class="usercontent">
                                            <p style="font-size:18px;color:#161C2D;">Admin</p>
                                        </div>
                                    </div>
                                    <button type="button" class=" cardbut" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span
                                            style="color: #fff;">Book Now</span></button>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col pricecard">

                        <div class="card ">

                            <div class="smtext">ADVANCE</div>
                            <div class="cardhead">
                                <h2 class="subhead">$ 240<sub class="sub">per yr</sub></h2>
                                <p class="cardpara">Renewal $ 96/- per yr</p>
                            </div>
                            <div class="card-body">
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Dashboard</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Mini CRM</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Service</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Product</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Sale</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Expense</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Report (Advance)</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Inventory</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Staff</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Customer</p>
                                    </div>
                                </div>
                                <div class="col" id="col">
                                    <div>
                                        <img src="./images/prod/Check-mark.png" alt="" srcset="">
                                    </div>
                                    <div class="usercontent">
                                        <p style="font-size:18px;color:#161C2D;">Admin</p>
                                    </div>
                                </div>
                                <button type="button" class=" cardbut" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span
                                        style="color: #fff;">Book Now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.getElementById('currencyToggle').addEventListener('change', function () {
                    const currencyText = document.getElementById('currencyText');
                    const currencyText1 = document.getElementById('currencyText1');
                    if (this.checked) {
                        currencyText.classList.add('hidden');
                        currencyText1.classList.remove('hidden');
                    } else {
                        currencyText.classList.remove('hidden');
                        currencyText1.classList.add('hidden');
                    }
                });
            </script>
            <style>
                .currency-text {
                    position: relative;
                    max-width: 1120px;
                    margin: auto;
                }

                .cardrow {
                    width: 100%;
                    margin-top: 6rem;
                    margin-bottom: 5rem;
                }

                .toggle-container {
                    justify-content: center;
                    display: flex;
                    align-items: center;
                }

                .labels {

                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 150px;
                    margin-top: 5px;
                }

                .label-left,
                .label-right {
                    font-size: 18px;
                    color: #fff;
                }

                .switch {
                    position: relative;
                    display: inline-block;
                    width: 60px;
                    height: 34px;
                    margin: 0 10px;
                }

                .switch input {
                    opacity: 0;
                    width: 0;
                    height: 0;
                }

                .slider {
                    position: absolute;
                    cursor: pointer;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: #16B9FF;
                    transition: .4s;
                    border-radius: 34px;
                }

                .slider:before {
                    position: absolute;
                    content: "";
                    height: 26px;
                    width: 26px;
                    left: 4px;
                    bottom: 4px;
                    background-color: white;
                    transition: .4s;
                    border-radius: 50%;
                }

                input:checked+.slider {
                    background-color: #FFDA16;
                }

                input:checked+.slider:before {
                    transform: translateX(26px);
                }

                .currency-text {
                    margin-top: 20px;
                }

                .currency-text.hidden {
                    display: none;
                }

                .card {
                    text-align: center;
                    padding: 20px 20px 10px 20px;
                }

                .card-body {
                    text-align: left;
                }

                .smtext {
                    font-size: 0.8rem;
                    border-radius: 10px;
                    background-color: #EDEBFD;
                    margin: auto;
                    /* width: 70px; */
                    color: #473BF0;
                    padding: 5px 15px;
                    font-weight: 700;
                }

                .cardpara {
                    color: #030D2B;
                }

                .sub {
                    color: #030D2B !important;
                    font-size: 18px;
                }

                .cardbut {
                    background-color: #473BF0 !important;
                    width: 100%;
                    padding-top: 15px;
                    padding-bottom: 15px;
                    margin-top: 18px;
                    border: none;
                    border-radius: 5px;
                    font-size: 18px;
                }

                .cardhead {
                    text-align: left;
                    margin: auto;
                }

                .subhead {
                    margin-bottom: 20px !important;
                    font-size: 43px;
                }

                .pricecard {
                    width: 20rem !important;

                }

                @media (max-width:575px) {
                    .pricecard {
                        margin: auto;
                        width: 25rem !important;
                    }
                }

                .pricecard .card {
                    border-radius: 0.5rem !important;
                }
            </style>
            <style>
                .tags {
                    padding: 0px 100px 0px 100px;
                    text-align: left;
                }

                @media(max-width:575px) {
                    .tags {
                        padding: 0px;

                    }
                }

                .tags p {
                    font-size: 16px;
                    line-height: 42px;
                }

                .footer-icon {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0px;
                    margin-left: auto;
                }

                .footer-logo {
                    margin-bottom: 0px;
                }

                .query {
                    font-family: 'Lato';
                }

                .query {
                    background: linear-gradient(to top, #0835B5, #001960);
                    height: 100%;
                    width: 100%;
                    margin-bottom: 100px;
                }

                #col {
                    display: flex;
                    gap: 1rem;
                }

                .userpara {
                    font-size: 17px;
                    color: #FFFFFF;

                }

                .usercontent {
                    width: 80%;
                }

                #mail {
                    background-color: #4B34D9;
                    border-radius: 25px;

                }

                #mailcontent {
                    padding: 32px 74px;
                    width: 66%;
                }

                .sendmail {
                    background-color: #6D3FFF;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 10px;
                    font-family: 'Source Sans Pro';
                    font-weight: bold;
                    font-size: 20px;
                    color: #FFFFFF;
                }

                #row2 {
                    padding: 40px;
                    /* gap: 2rem; */
                }

                #input {
                    border: none;
                }

                .billitnow {
                    font-size: 75px;
                    font-weight: 200;
                    color: #A9A1DC;
                }

                @media screen and (max-width:1000px) {
                    .sendmail {
                        padding: 10px 9px;
                        font-size: 19px;
                    }

                    #col3 {
                        width: 100%;
                    }
                }

                @media screen and (max-width:765px) {
                    .billitnow {
                        text-align: center;
                    }

                    .sendmail {
                        padding: 10px 9px;
                        font-size: 19px;
                    }
                }

                @media screen and (max-width:600px) {
                    .row {
                        gap: 2rem;
                        flex-direction: column !important;
                    }

                    .usercontent {
                        width: 98%;
                    }

                    #row2 {
                        padding: 40px 12px;
                    }

                    .coleft {
                        padding-left: 2rem !important;
                    }
                }

                .usercontent h3 {
                    margin-bottom: 5px;
                }

                @media (max-width:575px) {
                    #navbarCollapse {
                        background-color: #fff;
                    }

                    .box {
                        width: 100%;
                    }
                }

                #emailid {
                    height: auto;
                }

                .input-group {
                    gap: 10px;
                }
            </style>
            <!-- ---------------- -->
            <div class="text-center" style="padding: 60px 19px;">
                <h1 style="font-size:20px;color:#FFC327;">USER QUERY</h1>
                <p style="font-size:64px;color:#FFFFFF;font-weight: bold;">Ready to get <span
                        style="color:#2C88FE;">started</span></p>
                <p style="font-size:20px;color:#E2E2E2;">Product FAQs: Your questions answered</p>
            </div>
            <div class="container">
                <div class="row g-2 mb-5">
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">What is billing software?</h3>
                            <br>
                            <p class="userpara">Billing software automates invoicing, payment processing, and financial
                                tracking, enhancing efficiency</p>
                        </div>
                    </div>
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">Why use billing software?</h3>
                            <br>
                            <p class="userpara">Streamlines billing processes, reduces errors, and enhances efficiency
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-5">
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">Is billing software suitable for
                                small businesses?</h3><br>
                            <p class="userpara">Yes, billing software caters to businesses of all sizes</p>
                        </div>
                    </div>
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">What features does billing
                                software offer?</h3><br>
                            <p class="userpara">Invoicing, payment processing, expense tracking, reporting, and customer
                                management</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-5">
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">Is billing software secure?</h3>
                            <br>
                            <p class="userpara">Yes, reputable billing software employs encryption and secure data
                                storage</p>
                        </div>
                    </div>
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">Can I customize invoices with
                                billing software?</h3><br>
                            <p class="userpara">Yes, most billing software allows for customization of invoices</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-5">
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">Is billing software
                                user-friendly?</h3><br>
                            <p class="userpara">Yes, modern billing software prioritizes intuitive interfaces for ease
                                of use</p>
                        </div>
                    </div>
                    <div class="col" id="col">
                        <div>
                            <img src="./images/prod/small-right.png" alt="" srcset="">
                        </div>
                        <div class="usercontent">
                            <h3 style="font-size:21px;color:#FFFFFF;font-weight: bold;">How do I choose the right
                                billing software?</h3><br>
                            <p class="userpara">Consider business size, features, pricing, support, and reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center" style="font-size:17px;color:#FFFFFF;padding: 60px 19px;">Haven’t got your answer?
                <span style="color:#68D585;">Contact our team now</span>
            </p>
        </div>
        <div class="container" id="mail">
            <div class="row" id="row2">
                <div class="col-md-7" id="col2">
                    <div style="font-size:40px;color:#FFFFFF;font-weight: bold;">Book free demo with us</div><br>
                    <div style="font-size:18px;color:#FFFFFF;">Get the most recent informations, features and deals from
                        BILL IT NOW<br>
                        In order to get the latest news from us, please enter your email address below</div><br>
                    <div class="row">
                        <div class="col-md-9" id="col3">
                            <div class="card p-4" style="border-radius: 16px;">
                                <form id="emailForm" method="post">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="emailid" id="emailid"
                                            placeholder="Your Email Address" aria-label="Your Email Address"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="sendmail" type="submit" name="sends">GET STARTED</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container col-md-3">
                    <p class="billitnow">BILL IT NOW</p>
                </div>
            </div>
        </div>
        <style>
            #mail {
                font-family: 'Lato';
            }

            #columnimg {
                padding: 50px;
            }

            #sticker {
                margin: 5rem auto;
                background-color: #1A5198;
                color: #fff;
                border-radius: 10px;
            }

            #columnstick img {
                width: 100%;
                margin-left: 3rem;
            }

            @media (max-width:575px) {
                #columnstick img {
                    width: 100%;
                    margin-left: 0rem;
                }
            }

            .nav-pills .nav-link {
                color: #fff;
                text-transform: uppercase;
            }

            .coleft {
                padding-left: 5rem !important;
            }

            .nav-pills .nav-link.active {
                background-color: #EDFF1D;
                color: #000;
                text-transform: uppercase;
            }

            #tabmenu {
                border: 1px solid #FFFFFF;
                padding: 15px;
                margin-bottom: 2rem;
            }

            .tab-content img {
                width: 100%;
            }

            .tab-content button {
                background-color: #FE842C;
                border-radius: 50px;

            }

            .tab-content button span {
                color: #fff;
            }

            .navigationmenu {
                padding: 3rem 0;
                background-image: linear-gradient(to top right, #2C88FE, #9E51FF, #1A5198);
                color: #fff;
            }

            .card-block {
                margin: 15px 0;
            }

            .card-block .row {
                border-radius: 5px;
                padding: 15px;
                width: 80%;
            }

            .colcard {
                padding: 7px 10px;
            }

            .colcard img {
                padding-top: 7px;
            }

            .colcard h5 {
                font-weight: 600;
            }

            #benefitrow {
                width: 80%;
                margin: auto;
                padding-top: 5rem;
            }

            #benefitrow img {
                width: 100%;
                height: 100%;
            }

            .benefit {
                width: 100%;
                background-color: #fff;
            }

            #explores {
                width: 215px;
                margin-top: 20px;
                margin-bottom: 50px;
            }

            .col-sm-6 {
                padding-right: 0px;
                padding-left: 0px;
            }

            #customer,
            #mob {
                border-radius: 10px;
                padding: 30px;

            }

            #mob {
                margin-right: 10px;
                background-color: #A21F91;
            }

            #customer {
                margin-left: 10px;
                background-color: #2C88FE;
            }

            #customer img {
                padding-top: 30px;
            }

            .mobcont {
                text-align: center;
                height: 500px;
            }

            .mobcont img {
                width: 80%;

            }

            .gridcontainer .container {

                color: #fff;
                text-align: left;
            }

            #explore {
                width: 170px;
            }

            #paperless {
                background-color: #1F4783;
                padding: 46px 30px 0 62px;
                border-radius: 10px;
            }

            #paperless img {
                width: 100%;
            }

            .button {
                border-radius: 8px;
                background-color: #FFFFFF;
                border: none;
                color: #1F4783;
                text-align: center;
                font-size: 20px;
                padding: 10px 15px;
                width: 170px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .button a {
                color: #1F4783;
            }

            .button a:hover {
                color: #1F4783;
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }

            #column {

                padding-top: 70px;
            }

            #mobile {
                margin: 2rem auto;
            }

            #staffs {
                margin-top: 9rem;
            }

            #staffs img {
                width: 60%;
            }

            .colcard img {

                height: 50px;
            }

            @media(max-width:575px) {

                .mobcont {
                    height: auto;
                }

                #customer {
                    margin-left: 0px;
                    margin-top: 10px;
                }

                #mob {
                    margin-right: 0px;

                }

                body h4 {
                    padding: 5px;
                    font-size: 20px;
                }

                .careerbanner {
                    padding-top: 3rem;
                    padding-bottom: 20rem;
                }

                .imgcontainer {
                    padding-top: 64px;
                    margin-top: -268px;
                }

                .imgcontainer h2 {
                    padding-bottom: 35px;
                }

                .mobcont {
                    height: auto;
                }

                #staffs {
                    margin-top: 3rem;
                }

                .card-block .row {
                    width: 100%;
                }

                .gridcontainer {
                    padding-top: 1rem;
                }
            }

            #navcontainer {
                background-color: transparent;
            }

            .gridcontainer {
                padding-top: 3rem;
            }
        </style>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-header">

                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-content">
                    <div class="box">
                        <img src="./images/prod/butn.png" alt="logo">
                        <span style="visibility:hidden">Get from</span> <span style="visibility:hidden">Get
                            from</span><span>Get from</span> <img src="./images/prod/but.png" alt="logo1">
                    </div>

                    <div class="modal-body">
                        <form method="post" name="emailContact" onsubmit="return validateForm()">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5 col-lg-6"> <label for="name"
                                            class="col-form-label">First & last name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"> <label for="email"
                                            class="col-form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5 col-lg-6"> <label for="phone"
                                            class="col-form-label">Phone number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" maxlength="10"
                                            required>
                                    </div>
                                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"> <label
                                            for="business" class="col-form-label">Type of business</label>
                                        <input type="text" class="form-control" id="business" name="business" required>
                                    </div>
                                </div>
                                <!-- <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea> -->
                            </div>
                            <div class="mb-3">
                                <div class="row" id="meg">
                                    <label for="message" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message" name="message"></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!--<button type="submit" class="btn btn-primary" name="send">Submit</button>-->
                        <input class="btn btn-primary" type="submit" name="send" value="Submit">

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="successMessage" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closeSuccessMessage(event)">&times;</span>
                <p>Successfully submitted form!</p>
                <button onclick="closeSuccessMessage(event)">OK</button>
            </div>
        </div>


        <?php
        include_once "./footer.php";
        ?>
</body>
<!-- <script src="./slide.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>


</html>