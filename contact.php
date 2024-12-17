<?php
include_once "./header.php";
?>

<style>
    label {
        font-size: 14px;
        font-family: 'Inter';
        font-weight: 300;
    }

    .form-control {
        border-top: none;
        border-left: none;
        border-right: none;
        border-radius: 0px;

    }

    .form-control:focus {
        box-shadow: none;
        /* Removes the shadow */
        outline: none;
        /* Removes the outline */
    }

    .cont_img {
        background-image: url("./image/contimg.webp");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .mbih_p {
        font-size: 18px;
        margin-bottom: 0px;
    }

    .mbih_img {
        height: 100%;
        width: 100%;
    }

    .mbih_row {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .list_img {
        width: 29px;
        margin-right: 15px;
    }

    .cont_img {
        color: white;
    }

    .cont-para {
        line-height: 25px;
        font-weight: 200;
    }

    .cont-head {
        font-size: 24px;
    }

    .cont-btn {
        background: #B71C1C;
        border: none;
        padding: 10px 31px;
        color: white;
        font-size: 17px;
        margin-top: 31px;
    }

    .cont_form {
        position: relative;
        margin-top: -250px;
        margin-bottom: 30px;
    }

    .fuh_head {
        font-size: 50px;
        color: #D32F2F;
    }

    .fuh_cont {
        color: #425466;
    }

    .gmap {
        width: 100%;
        height: 500px;
    }
</style>

<body>

    <!-- contact us banner -->
    <div class="container-fluid contact_banner">
        <img src="./image/cont-ban.webp" class="img-fluid" alt="top digital marketing agency">
    </div>

    <!-- contact us form  -->
    <div class="container cont_form">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 cont_img p-5">
                                <h3 class="cont-head">
                                    Contact Information
                                </h3>
                                <p class="cont-para">
                                    Fill up the form and our Team will get back to you within 24 hours
                                </p>

                                <p class="mbih_p"><span><img src="./image/con1.png" class="list_img"
                                            alt="best digital marketing agency"></span>+91 73058 21333</p>
                                <p class="mbih_p"><span><img src="./image/con2.png" class="list_img"
                                            alt="best digital marketing agency"></span>rmedia1123.info@gmail.com</p>
                                <p class="mbih_p"><span><img src="./image/con3.png" class="list_img"
                                            alt="best digital marketing agency"></span>https://rainbowmedia.co.in</p>
                                <p class="mbih_p"><span><img src="./image/con4.png" class="list_img"
                                            alt="best digital marketing agency"></span>Guindy, Chennai</p>

                                <h3 class="cont-head  mt-4">
                                    When We’re Available
                                </h3>

                                <img src="./image/con5.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-7 p-5">
                                <div class="row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="input_label">First Name</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="input_label">Last Name</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="input_label">Mail</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="input_label">Phone</label>
                                        <input type="tel" class="form-control" id="inputEmail4">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="input_label mb-3">What service do you
                                            need?</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="Web Design">
                                            <label class="form-check-label" for="inlineRadio1">Web Design</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="App/Product Design">
                                            <label class="form-check-label" for="inlineRadio2">App/Product
                                                Design</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">Graphic Design</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 mt-2">

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio4" value="Digital Marketing">
                                            <label class="form-check-label" for="inlineRadio4">Digital Marketing</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio5" value="Other">
                                            <label class="form-check-label" for="inlineRadio5">Other</label>
                                        </div>

                                    </div>

                                    <div class="form-group col-md-12 mt-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="2"></textarea>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button type="submit" class="cont-btn">Send Message</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- find us here -->
    <div class="container-fluid">
        <h3 class="text-center fuh_head">
            Find Us Here
        </h3>
        <p class="text-center fuh_cont">
            Use the interactive map below to locate our office. We’re looking forward to meeting you!
        </p>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.6977851573574!2d80.21177628845118!3d13.010463110183538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267245a3ed16f%3A0xe21d6ed23645a3c1!2sRainbow%20Media!5e0!3m2!1sen!2sin!4v1734426470562!5m2!1sen!2sin"
            class="gmap" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php
    include_once "./footer.php";
    ?>
</body>

</html>