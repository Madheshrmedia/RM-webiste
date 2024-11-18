<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainbow Media</title>
    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="./image/Kimaya Fav icon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <style>
        * {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        #headerall {
            background: #ffffff !important;
            z-index: 7;
            position: relative;
        }


        .header .navbar .navbar-nav .nav-item .nav-link {
            color: #D32F2F;
            font-size: 18px;
        }

        .header {
            padding: 0px;
        }

        .header-cont a {
            margin-right: 15px;
            /* Adjust spacing as needed */
        }

        .header-cont a:last-child {
            margin-right: 0;
            /* Removes margin from the last item */
        }

        .header-logo {
            width: 183px;
        }

        .getstart {
            color: white !important;
        }

        .topbar {
            background-color: #B71C1C;
        }

        /* .header-logo {
            width: 70px;
            height: 70px;
        } */

        .header-icon {
            width: 40px;
            margin-right: 10px;
        }

        .contact-info {
            color: black;
            text-decoration: none;
        }

        .contact-info p {
            margin: 0;
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-left: 8px;
        }

        .booknow-btn {
            text-decoration: none;
            padding: 8px 17px;
            background: #D32F2F;
            color: white;
            margin-left: 30px;
            border-radius: 5px;
        }

        .header .navbar .navbar-nav .nav-item .nav-link {
            margin-left: 25px;
            font-weight: 400;
        }

        .ctn-btn {
            font-weight: 400;
            font-size: 18px;
        }

        /* .navbar-brand {
            display: none;
        } */

        .header-icon {
            width: 25px;
        }

        h2,
        h4,
        h5 {
            font-weight: 500 !important;
        }

        @media only screen and (max-width: 600px) {


            /* .navbar-brand {
                display: block;
            } */

            .navbar {
                padding: 5px !important;
                background: #040404;
            }

            .navbar-toggler {
                border-color: white;
                margin-right: 10px;
            }

            .nav-container {
                padding: 0px;
            }

            .navbar-collapse {
                padding: 10px 30px;
            }

            .header-cont {
                display: block !important;
            }

            .contact-info {
                margin-bottom: 25px;
            }

            .booknow-btn {
                margin-left: 0px;
            }

            .pop_upicon {
                display: none !important;
            }

            .modal-title {
                font-size: 28px !important;
            }

            .pop_upimg {
                display: none !important;
            }

            .header-cont {
                display: none !important;
            }


        }

        .header-text {
            margin-bottom: 0rem !important;
            color: white;
        }

        .header-link {
            color: white;
        }

        .ctn-btn {
            color: #D32F2F;
            ;
        }
    </style>
</head>


<body>
    <header class="header header-sticky" id="headerall">

        <div class="topbar py-3 d-none d-lg-flex">
            <div class="container-fluid d-flex justify-content-center align-items-center text-center">
                <p class="header-text mx-3">
                    Limited Time Offer: Boost Your Business with 20% Off Our Marketing Packages!
                    <span><a href="#" class="header-link mx-3">Get early access →</a></span>
                </p>

            </div>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light shadow px-5 py-3 sticky-top">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="./index.php"><img src="./image/logo.png" alt="cogni logo"
                        class="header-logo"></a>
                <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span><i class="fas fa-bars" style="color:white"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">About </a>
                        </li>
                    </ul>
                    <div class="d-flex header-cont align-items-center">
                        <a href="#" class="contact-info form-inline d-flex">
                            <img src="./image/fb.png" class="header-icon" alt="">
                        </a>
                        <a href="#" class="contact-info form-inline d-flex">
                            <img src="./image/ig.png" class="header-icon" alt="">
                        </a>
                        <a href="#" class="contact-info form-inline d-flex">
                            <img src="./image/x.png" class="header-icon" alt="">
                        </a>
                        <a href="#" class="contact-info form-inline d-flex" style="border-right: 1px solid;">
                            <img src="./image/lin.png" class="header-icon" alt="">
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="ctn-btn">
                            Contact us
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="booknow-btn">
                            Get started
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">MAKE AN <span class="span_title">
                            APPOINMENT
                        </span></h5>
                    <img src="./image/popup.png" class="pop_upicon ms-auto" alt="">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="./image/popl.webp" class="img-fluid pop_upimg" alt="">
                        </div>
                        <div class="col-md-7">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="email" placeholder="Full name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="email" placeholder="Enter Phone No">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="email" placeholder="Full name">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Service</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Service">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea name="message" class="form-control" rows="3" cols="" id=""></textarea>
                                    </div>
                                    <div class="col-md-6 mt-3 position-relative">
                                        <i class="fas fa-map-marker-alt position-absolute icon-select ms-3"></i>
                                        <select class="form-select ps-5" aria-label="Default select example"
                                            id="validationCustom04">
                                            <option selected>Select Location</option>
                                            <option value="Anna nagar">Anna nagar</option>
                                            <option value="Adyar">Adyar</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a location
                                        </div>
                                    </div>

                                    <div class="col-md-6 ms-auto mt-3">
                                        <button class="btn btn_pop" type="submit">Confirm Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>