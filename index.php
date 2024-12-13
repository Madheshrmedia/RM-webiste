<?php
include_once "./header.php";
?>

<style>
    body {
        background: #FCF6F6;
    }

    .smm-head {
        color: #D32F2F;
    }

    .smm-head {
        font-size: 40px;
        font-weight: 700;
        color: #D32F2F;
    }

    .smm-cont {
        color: #425466;
        font-size: 17px;
    }

    .smm-link {
        color: white;
        text-decoration: none;
        background: #B71C1C;
        padding: 13px 20px;

    }

    .top_ser_frame {
        background: #FCF6F6;
    }



    .hidden {
        display: none;
    }

    .gombsao {
        margin-top: 100px !important;
    }

    .uxui-content {
        font-size: 17px;
        color: #425466;
    }

    .uxui_card_1 {
        background-color: #29B6F6;
        color: white;
    }

    .uxui_card_title {
        font-size: 24px;
    }

    .uxui_card_text {
        font-size: 17px;
    }

    .uxui_card_2 {
        background-color: #AB47BC;
        color: white;
    }

    .uxui_card_3 {
        background-color: #66BB6A;
        color: white;
    }

    .uxui_frame {
        position: relative;
        overflow: hidden;
        padding: 80px 0px;
    }

    .uxui_frame::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        background: #FFFFFF;
        /* Gradient background */
        /* Gradient background */
        clip-path: polygon(0% 5%, 100% 0%, 100% 95%, 0% 100%);
        /* Top and bottom angles */
        z-index: -1;
    }

    .fsd_frame {
        color: #B71C1C;
        text-decoration: none;
        background: #FFFFFF;
        padding: 13px 20px;
        position: absolute;
    }

    .uxui-topimg {
        width: 200px;
    }

    .uxui-topimg {
        position: absolute;
        /* Position the image absolutely within the parent */
        top: 0;
        /* Aligns the top of the image with the parent container */
        right: 0;
        /* Aligns the image with the right edge of the screen */
        max-width: 100%;
        /* Ensures the image does not exceed its container's width */
        height: auto;
        /* Maintains the aspect ratio */
        z-index: 1;
        /* Ensures the image stays on top of other elements if needed */
        padding-top: 40px;
    }

    .fstd_frame {
        position: relative;
        overflow: hidden;
        /* background-color: #FFFFFF; */
        /* White color for the outside area */
    }

    .fstd_frame::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #B71C1C;
        /* Red color for the clipped area */
        clip-path: polygon(0% 5%, 100% 0%, 100% 95%, 0% 100%);
        z-index: -1;
        /* Ensure it stays behind the content */
        pointer-events: none;
        /* Prevent any interaction issues */
    }




    .fsd-head {
        color: #FFFFFF;
        font-size: 40px;
        font-weight: 700;
    }

    .fsd-content {
        color: #F6F6F6;
    }

    .fsd_workflow {
        padding-top: 150px;
    }

    .fs-img {
        width: 50px;
    }

    .fs-sec-head {
        margin-top: 15px;
        font-size: 18px;
        font-weight: 500;
        color: white;
    }

    .fs-sec-cont {
        color: white;
        font-size: 16px;
        font-weight: 300;
    }

    .fsd_flow {
        padding: 100px 0px;
    }

    /* .oad_frame {
        padding: 0px 0px;
    } */

    .oad_head {
        font-size: 50px;
        font-weight: 700;
        color: #D32F2F;
    }

    .uxui_frame {
        background-color: white;
    }

    .oa_img {
        width: 123px;
    }

    .oa_card_1 {
        /* background: linear-gradient(90deg, #FFD748 0%, #FFCD48 54%, #FFCB48 100%); */
        background: #F5A623;
        border: none;
    }

    .oa_card_2 {
        border: none;
        background: #BD10E0;
    }

    .oat_card_title {
        margin: 20px 0px;
        font-size: 25px;
        color: white;
    }

    .oat_card_text {
        color: white;
        font-size: 17px;
    }

    .oa_left_frame_col2 {
        margin-top: 32px;
    }

    .oa_img2 {
        width: 175px;
    }

    .oa_card_3 {
        background: #4A90E2;
        border: none;
    }

    .oa_img3 {
        width: 161px;
    }

    .oa_card_4 {
        background: #7ED321;
    }

    .oa_img4 {
        width: 130px;
    }

    .oa_left {
        margin-top: 75px;
    }


    .op_frame {
        position: relative;
        overflow: hidden;
        /* background-color: #FFFFFF; */
        /* White color for the outside area */
    }

    .op_frame::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #B71C1C;
        /* Red color for the clipped area */
        clip-path: polygon(0% 5%, 100% 0%, 100% 100%, 0% 100%);
        z-index: -1;
        /* Ensure it stays behind the content */
        pointer-events: none;
        /* Prevent any interaction issues */
    }

    .op_spl_hd {
        font-size: 50px;
        background-color: white;
        color: black;
    }

    .op_head {
        font-size: 50px;
        color: white;
    }

    .op_row {
        margin-top: 150px;
    }

    .era_row {
        margin-top: 100px;
    }

    .era_head {
        font-size: 50px;
        font-weight: 700;
        color: #D32F2F;
    }

    /* .smm_right_col {
        position: fixed;
        top: 0;
        right: 0;
    } */

    /* .fixed-position {
        position: fixed;
        top: 0;
        right: 0;
    } */

    .smm_other_img {
        position: relative;
        z-index: 2;
    }

    /* Default styles for the smm_right_col */
    .smm_right_col {
        width: 50%;
        /* Example width, adjust as needed */
        transition: all 0.3s ease-in-out;
        /* Smooth transition */
    }

    /* Class to apply fixed positioning when scrolling */
    .fixed-position {
        position: fixed;
        top: 0;
        right: 0;

    }
</style>

<body>
    <img src="./image/banner.webp" class="img-fluid" alt="best digital marketing company in chennai">

    <div class="container-fluid top_ser_frame mt-5">
        <div class="row ">

            <!-- social media marketing frame -->
            <div class="col-md-10 mx-auto">
                <div class="row mt-5">
                    <div class="col-md-6 my-auto">
                        <div class="smm-head">
                            Social Media <br> Marketing
                        </div>
                        <p class="smm-cont mt-4 mb-5">
                            Our team crafts tailored social media strategies to <br> increase your brand's visibility.
                            From
                            organic growth to <br>paid ads, we help you connect with your audience <br> effectively
                        </p>
                        <a href="#" class="smm-link">
                            Grow Your Audience
                        </a>
                    </div>
                    <div class="col-md-6 smm_right_col">
                        <img src="./image/sm-img.webp" id="smm-image" class="img-fluid"
                            alt="best digital agency company in chennai">
                    </div>
                </div>
            </div>

            <!--Website Creation & Management  -->
            <div class="col-md-10  mx-auto webcret-manag">
                <div class="row mt-5">
                    <div class="col-md-6 my-auto">
                        <div class="smm-head">
                            Website Creation & <br>
                            Management
                        </div>
                        <p class="smm-cont mt-4 mb-5 wcm_cont">
                            We create professional, high-performing websites <br> tailored to your business needs. From
                            design to <br> management, we ensure your website runs <br> smoothly, is SEO-optimized, and
                            mobile-responsive
                        </p>
                        <a href="#" class="smm-link">
                            Get Your Website
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img src="./image/wb.webp" id="smm-image" class="img-fluid smm_other_img"
                            alt="best web development company in chennai">
                    </div>
                </div>
            </div>

            <!-- Google My Business Setup & Optimization -->
            <div class="col-md-10 my-5 mx-auto gombsao">
                <div class="row my-5">
                    <div class="col-md-6 my-auto">
                        <div class="smm-head">
                            Google My <br> Business Setup & <br> Optimization
                        </div>
                        <p class="smm-cont mt-4 mb-5">
                            We help you set up and optimize your Google My <br> Business profile so your local customers
                            can
                            find you <br> easily. Improve your local SEO and drive more in-store <br> traffic with a
                            complete
                            and
                            verified profile
                        </p>
                        <a href="#" class="smm-link">
                            Claim Your Listing
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img src="./image/gmb.webp" id="smm-image " class="img-fluid smm_other_img"
                            alt="best software development company in chennai">
                    </div>
                </div>
            </div>

            <!-- Search Engine Optimization (SEO) -->
            <div class="col-md-10 my-5 mx-auto gombsao">
                <div class="row my-5">
                    <div class="col-md-6 my-auto">
                        <div class="smm-head">
                            Search Engine <br> Optimization <br> (SEO)
                        </div>
                        <p class="smm-cont mt-4 mb-5">
                            We optimize your website to rank higher on search <br> engines like Google, driving more
                            traffic and increasing <br> your online visibility
                        </p>
                        <a href="#" class="smm-link">
                            Start with Connect
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img src="./image/seo.webp" id="smm-image" class="img-fluid smm_other_img"
                            alt="best digital marketing company india">
                    </div>
                </div>
            </div>

            <!-- Branding & Creative Design -->
            <div class="col-md-10 my-5 mx-auto gombsao">
                <div class="row my-5">
                    <div class="col-md-6 my-auto">
                        <div class="smm-head">
                            Branding & <br> Creative Design
                        </div>
                        <p class="smm-cont mt-4 mb-5">
                            Our creative team brings your brand to life with <br> impactful designs and branding
                            strategies
                            that stick <br>in the minds of your audience
                        </p>
                        <a href="#" class="smm-link">
                            Transform Your Brand
                        </a>
                    </div>
                    <div class="col-md-6 bcd_col">
                        <img src="./image/bcd.webp" id="smm-image" class="img-fluid smm_other_img"
                            alt="top digital marketing company in chennai">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- UX/UI frame-->
    <div class="container-fluid uxui_frame">
        <div class="text-end">
            <img src="./image/uxui-top.webp" class="uxui-topimg img-fluid" alt="top webdevelopment company">
        </div>
        <div class="row uxui_frame_row py-5">

            <div class="col-md-10 mx-auto ">
                <div class="smm-head">
                    The UX/UI Design Process
                </div>
                <div class="uxui-content my-4">
                    Our UX/UI design process ensures a seamless, user-centric approach to creating digital products that
                    not only look beautiful but also provide intuitive functionality. From research and wireframes to
                    testing and final designs, we craft experiences that drive engagement and achieve business goals
                </div>

                <div class="row uxui_card_frame">
                    <div class="col-md-4">
                        <div class="card uxui_card_1">
                            <img src="./image/uxui-1.webp" class="card-img-top p-1" alt="best UXUI company in chennai">
                            <div class="card-body uxui_card_body">
                                <h5 class="card-title uxui_card_title">Research & Ideation</h5>
                                <p class="card-text uxui_card_text">We begin by understanding your users and business
                                    goals. This involves user research, competitor analysis, and brainstorming
                                    innovative ideas that align with your brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card uxui_card_2">
                            <img src="./image/uxui-2.webp" class="card-img-top p-1" alt="best UXUI company in chennai">
                            <div class="card-body uxui_card_body">
                                <h5 class="card-title uxui_card_title">Wireframes & Prototyping</h5>
                                <p class="card-text uxui_card_text">In this stage, we create wireframes and prototypes
                                    that map out the user journey and core functionality. These blueprints help
                                    visualize the structure before adding the final design elements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card uxui_card_3">
                            <img src="./image/uxui-3.webp" class="card-img-top p-1" alt="best UXUI company in chennai">
                            <div class="card-body uxui_card_body">
                                <h5 class="card-title uxui_card_title">Design & Testing</h5>
                                <p class="card-text uxui_card_text">We finalize the design, bringing it to life with
                                    high-fidelity visuals. After that, we test the UI with real users, making
                                    adjustments to ensure it meets both user needs and business objectives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- full stack developr frame -->
    <div class="container-fluid fstd_frame">
        <div class="col-md-10 mx-auto">
            <div class="row fsd_workflow">
                <div class="col-md-6 my-auto">
                    <div class="fsd-head">
                        Full-Stack <br> Development <br> Workflow
                    </div>
                    <div class="fsd-content my-4">
                        Our development process integrates cutting-edge technologies with a structured workflow,
                        ensuring that each phase—frontend, backend, testing, and deployment—is executed efficiently.
                        This approach delivers secure, scalable, and robust applications tailored to meet business needs
                    </div>
                    <div class="mb-3"></div>
                    <a href="#" class="smm-link fsd_frame">
                        Let’s Build Together
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="./image/fsdw.webp" class="img-fluid" alt="web development agency near me">
                </div>
            </div>

            <div class="row fsd_flow">
                <div class="col-md-3">
                    <img src="./image/fs-1.png" class="fs-img" alt="Top IT company near me">
                    <p class="fs-sec-head">
                        Crafting User Interfaces
                    </p>
                    <p class="fs-sec-cont">
                        We build responsive, visually appealing interfaces that offer seamless interactions for users
                        across all devices. Utilizing the latest frameworks, we ensure performance and accessibility are
                        top priorities
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="./image/fs-2.png" class="fs-img" alt="Top IT company near me">
                    <p class="fs-sec-head">
                        Building the Backbone
                    </p>
                    <p class="fs-sec-cont">
                        Our backend development focuses on creating secure and scalable server-side logic, database
                        management, and API integrations. This is the core of your application, ensuring that data flows
                        smoothly and efficiently
                    </p>
                </div>

                <div class="col-md-3">
                    <img src="./image/fs-3.png" class="fs-img" alt="Top IT company near me">
                    <p class="fs-sec-head">
                        Ensuring Quality
                    </p>
                    <p class="fs-sec-cont">
                        We conduct rigorous testing to ensure your application is bug-free, secure, and functioning as
                        expected. From unit tests to end-to-end testing, we guarantee a flawless user experience
                    </p>
                </div>

                <div class="col-md-3">
                    <img src="./image/fs-4.png" class="fs-img" alt="Top IT company near me">
                    <p class="fs-sec-head">
                        Seamless Launch
                    </p>
                    <p class="fs-sec-cont">
                        After development and testing, we focus on deploying your application smoothly to ensure it runs
                        efficiently in live environments. Our team follows best practices to ensure uptime, security,
                        and scalability
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Our App Design frame -->
    <div class="container-fluid oad_frame">
        <div class="text-end">
            <img src="./image/app.webp" class="img-fluid" alt="top webdevelopment company">
        </div>
        <div class="row oad_row">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-8">
                        <p class="oad_head">
                            Our App Design & <br> Development Process
                        </p>
                        <p class="oad-cont">
                            We turn your app ideas into reality with a streamlined process that ensures both creativity
                            and functionality. From initial research and user experience design to robust development
                            and thorough testing, we deliver high-quality apps that engage users and drive business
                            success
                        </p>
                    </div>
                    <div class="col-md-4 mt-5 text-center">
                        <a href="#" class="smm-link">
                            Build Your Future App
                        </a>
                    </div>
                </div>

                <div class="row uxui_card_frame mt-3">
                    <!-- left -->
                    <div class="col-md-6 oa_left">
                        <div class="row oa_left_frame">
                            <div class="col-md-12 oa_left_frame_col1">
                                <div class="card oa_card_1">
                                    <img src="./image/oa1.webp" class="card-img-top p-1"
                                        alt="best UXUI company in chennai">
                                    <div class="card-body oat_card_body p-4">
                                        <img src="./image/oab1.png" alt="Best App near me" class="oa_img">
                                        <h5 class="card-title oat_card_title">Designing Seamless Experiences</h5>
                                        <p class="card-text oat_card_text">Wireframing, Prototyping, User Flow Mapping,
                                            Visual Design</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card oa_card_2 oa_left_frame_col2">
                                    <img src="./image/oa2.webp" class="card-img-top p-1"
                                        alt="best UXUI company in chennai">
                                    <div class="card-body oat_card_body p-4">
                                        <img src="./image/oab2.png" alt="Best App near me" class="oa_img2">
                                        <h5 class="card-title oat_card_title">Quality Assurance & Launch</h5>
                                        <p class="card-text oat_card_text">All Testings, Deployment to App Stores
                                            (Google Play, Apple App Store)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- right -->
                    <div class="col-md-6">
                        <!-- right -->
                        <div class="row oa_left_frame">
                            <div class="col-md-12 oa_left_frame_col1">
                                <div class="card oa_card_3">
                                    <img src="./image/oa3.webp" class="card-img-top p-1"
                                        alt="best UXUI company in chennai">
                                    <div class="card-body oat_card_body p-4">
                                        <img src="./image/oab3.png" alt="Best App near me" class="oa_img3">
                                        <h5 class="card-title oat_card_title">Planning & Research</h5>
                                        <p class="card-text oat_card_text">Requirement Gathering, Market Research,
                                            Target Audience Definition, Feature Planning</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card oa_card_4 oa_left_frame_col2">
                                    <img src="./image/oa4.webp" class="card-img-top p-1"
                                        alt="best UXUI company in chennai">
                                    <div class="card-body oat_card_body p-4">
                                        <img src="./image/oab4.png" alt="Best App near me" class="oa_img4">
                                        <h5 class="card-title oat_card_title">Building a Strong Foundation</h5>
                                        <p class="card-text oat_card_text">Frontend: React Native, Flutter | Backend:
                                            Node.js, Python, Ruby on Rails</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="text-end">
            <img src="./image/app.webp" class="img-fluid" alt="top webdevelopment company">
        </div>
    </div>

    <!-- our project -->
    <div class="container-fluid op_frame">
        <div class="col-md-10 mx-auto">
            <div class="row op_row">
                <h4 class="op_head mb-5">
                    Here’s some of our <span class="op_spl_hd">pro</span>jects,<br> created for our beloved clients
                </h4>

                <div class="col-md-5 mb-3">
                    <img src="./image/oa-1.webp" alt="Best billing software" class="img-fluid">
                </div>
                <div class="col-md-7 mb-3">
                    <img src="./image/oa-2.webp" alt="Top billing software" class="img-fluid">
                </div>
                <div class="col-md-7 mb-3">
                    <img src="./image/oa-3.webp" alt="Best billing software" class="img-fluid">
                </div>
                <div class="col-md-5 mb-3">
                    <img src="./image/oa-4.webp" alt="Best billing software" class="img-fluid">
                </div>
                <div class="col-md-5 mb-3">
                    <img src="./image/oa-5.webp" alt="Best billing software" class="img-fluid">
                </div>
                <div class="col-md-7 mb-3">
                    <img src="./image/oa-6.webp" alt="Best billing software" class="img-fluid">
                </div>
            </div>


        </div>
    </div>

    <!-- We are experts in Running Ads -->
    <div class="container-fluid era_frame">

        <div class="row era_row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-8 ">
                        <p class="era_head">
                            We are experts in Running Ads
                        </p>
                        <p class="era-cont">
                            Maximize your brand's reach and engagement with targeted social media ads.
                            Our expert team designs and manages campaigns across platforms like Facebook, Instagram,
                            LinkedIn, and more. We focus on creating high-converting ads that capture attention, drive
                            traffic, and increase sales. Whether it’s brand awareness, lead generation, or retargeting,
                            we have the strategies to make your campaigns successful
                        </p>



                    </div>
                    <style>
                        .era_card {
                            border: none;
                            background: transparent;
                            width: 25rem;
                            padding-left: 40px;
                            padding-top: 50px;
                        }

                        .era_card1 {
                            border: none;
                            background: transparent;
                            width: 25rem;
                            padding-left: 40px;
                        }

                        .era_card_title {
                            font-size: 24px;
                            color: #D32F2F;
                            border-left: 2px solid #B71C1C;
                            padding-left: 10px;
                        }

                        .era_card_text {
                            color: #425466;
                            font-size: 15px;
                            padding-left: 12px;
                        }
                    </style>
                    <div class="row era_btm_cont">
                        <div class="col-md-6 era_btm_cont_left">
                            <div class="card era_card">
                                <div class="card-body era_card_body">
                                    <h5 class="card-title era_card_title">Targeted Campaigns</h5>
                                    <p class="card-text era_card_text">Reach the right audience with precision targeting
                                        based on demographics, interests, and behavior</p>
                                </div>
                            </div>
                            <div class="card era_card1">
                                <div class="card-body era_card_body">
                                    <h5 class="card-title era_card_title">2000+</h5>
                                    <p class="card-text era_card_text">Successful campaigns run for diverse industries
                                    </p>
                                </div>
                            </div>
                            <div class="card era_card1">
                                <div class="card-body era_card_body">
                                    <h5 class="card-title era_card_title">Performance Tracking</h5>
                                    <p class="card-text era_card_text">Monitor and optimize your campaigns in real-time
                                        to ensure maximum ROI
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 era_btm_cont_right">
                            <img src="./image/era.webp" class="img-fluid" alt="Google ads">
                        </div>
                    </div>

                </div>


            </div>

            <!-- social image -->
            <img src="./image/soc_link.webp" class="img-fluid mb-5" alt="instagram ads">
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // $(document).ready(function () {
        //     $(window).on('scroll', function () {
        //         const smmRightCol = $('.smm_right_col');
        //         const bcdCol = $('.uxui_card_1');
        //         const webcretManag = $(".webcret-manag");

        //         const triggerPoint = webcretManag.offset().top; // Get the top offset of the smm_right_col element
        //         const bcdColPoint = bcdCol.offset().top; // Get the top offset of the bcd_col element

        //         // Add a threshold value to prevent jittering when scrolling near the trigger points
        //         const threshold = 50;  // 50px threshold for smoother effect, adjust as needed

        //         // Check if smm_right_col is in view (scroll down past the triggerPoint)
        //         if ($(window).scrollTop() + $(window).height() > triggerPoint + threshold) {
        //             smmRightCol.addClass('fixed-position');
        //         } else {
        //             smmRightCol.removeClass('fixed-position');
        //         }

        //         // Check if bcd_col is in view (scroll down past the bcdColPoint) and remove the fixed-position class
        //         if ($(window).scrollTop() + $(window).height() > bcdColPoint + threshold) {
        //             smmRightCol.removeClass('fixed-position');
        //         }
        //     });
        // });
    </script>
    <?php
    include_once "./footer.php";
    ?>

</body>

</html>