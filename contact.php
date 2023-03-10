<?php
if(isset($GLOBALS['detailsNotSent'])) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Details are not sent. Plsese check the details again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  unset($GLOBALS['detailsNotSent']);
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SOFTMORE_IT | Contact</title>
    <link rel="icon" href="./img/11111.png" type="image/icon type">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
   

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">



    <style>
        #budget {
            border: none;
            width: 80px;

        }

        #budget:focus {
            outline: none;
        }

        input[type=range] {

            width: 80%;
            background: transparent;
        }



        input[type=range]:focus {
            outline: none;
            /* Removes the blue border. You should probably do some kind of focus styling for accessibility reasons though. */
        }



        .form-card {
            display: flex;
            flex-direction: column;
            text-align: left;
            width: max-content;
            height: 70%;
            border-radius: 10px;
            transition: 0.3s;
            box-shadow: -10px 0px 10px #333;
            background-color: #fff;
            padding: 40px;
            width: max-content;


        }

        #contact-submit {
            background-color: blueviolet;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        .form-input {
            padding: 8px;
            display: flex;
            flex-direction: column;
        }

        .form {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            text-align: left;
            height: 100%;
            width: auto;
        }

        .c-1 {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            width: 100%;
            transition: 0.3s;
            background-color: #333;
            color: #fff;
            border-radius: 6px;
            padding: 22px;
        }

        .cont-cards {

            text-align: left;
            height: auto;
            width: fit-content;
            margin-left: 20px;
        }

        @media screen and (max-width: 600px) {
            .form {
                flex-direction: column;
            }


            form {
                display: flex;

                flex-direction: column;
                justify-content: center;
            }

            #message {
                width: 100%;

            }

            .cont-cards {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                height: auto;
                width: auto;
            }

            .main {
                overflow: hidden;
            }

            .info {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                font-size: small;
                width: fit-content;
                padding: 20px;
            }


            .overlap-img {
                width: 100px;
                height: 100px;
                display: none;
            }

            .over-main {
                display: inline;
            }

            .about-mission,
            .about-vision {
                width: 300px;
                height: 200px;

                border-radius: 10px;
                transition: 0.3s;
                box-shadow: -10px 0px 10px blue;
            }

            .number-cards {
                flex-direction: column;
            }

            .c1,
            .c2,
            .c3,
            .c4 {
                width: 100%;

            }

            .geo-info {
                width: 100%;
            }

            .geo-c3,
            .geo-c1,
            .geo-c2 {
                width: 100%;
                padding: 20px;
            }

            .proc {
                flex-direction: column;
            }

            .proc-img {
                width: 60%;
                height: 80%;
            }

            .proc-arrow {
                display: none;
                width: 10%;
                height: 10%;
            }

            .proc-arrow-down {
                display: block;
                width: 10%;
                height: 10%;
            }

            .profile {
                flex-direction: column;
            }

            .profile-img {
                width: 200px;
                height: 200px;
            }

            .form-card {
                width: 100%;
                height: 100%;

            }

            .form-input {
                padding: auto;
                display: flex;
                flex-direction: row;

            }

            #w3review {
                width: 100%;
            }

            .form {
                flex-direction: column;
                align-items: center;
                justify-content: center;
                display: flex;
            }

            .c-1 {
                width: 100%;
                height: 100%;
            }

            .cont-cards {
                flex-direction: column;
            }

            .sub-btn {
                border-radius: 10px;
                margin-top: 10px;
            }

            .sub-box {
                border-radius: 10px;
                margin-top: 10px;

            }


        }
    </style>
   <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/6e5bc804a236ef2508cea1e01/29bc4e77647f66675f2ddfa3e.js");</script>
</head>

<body>
    <div class=" d-flex align-items-center justify-content-center rounded" style="position: fixed; display: none; left: 45px; bottom: 45px;
    z-index: 101; width:40px;">
        <a href="https://wa.me/+919911773747"><img style="width: 40px;" src="./img/tech/whatsapp.png" alt=""></a>
    </div>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker me-2"></i>Work DSID Centre 69,
                        Delhi</small>
                    <small class="me-3 text-light"><i class="fa fa-phone me-2"></i><a href="tel:9911773747">+91
                            9911773747</a></small>
                    <small class="text-light"><i class="fa fa-envelope me-2"></i><a
                            href="mailto:support@softmoreit.com">support@softmoreit.com</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://in.pinterest.com/eklavya0190/"><i class="fa fa-pinterest fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/SoftemoreIT/"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.linkedin.com/company/softmore-it/"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/softmore_it/"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 text-white"
                style="background-color: #242124; ">
                <a href="./index.php" class="navbar-brand p-0">
                    <img src="./img/logo.png" alt="logo" style="height: 80px;padding: 5px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse text-white" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 text-white">
                        <a href="./index.php" class="nav-item nav-link text-white" style="font-size: 22px;">Home</a>

                        <a href="about" class="nav-item nav-link text-white" style="font-size: 22px;">About</a>

                        <div class="nav-item dropdown">
                            <a href="service" class="nav-link dropdown-toggle text-white " style="font-size: 22px;"
                                data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <div class="dropdown-menu">
                                <a href="service" class="dropdown-item">ALL SERVICES</a>
                                <a href="web_application" class="dropdown-item">WEB APPLICATION</a>
                                <a href="seo" class="dropdown-item">SEO</a>
                                <a href="social_media_marketing" class="dropdown-item">SOCIAL MEDIA
                                    MARKETING</a>
                                <a href="ppc" class="dropdown-item">PPC</a>
                                <a href="lead_generation" class="dropdown-item">LEAD GENERATION</a>
                            </div>
                        </div>

                        <a href="blog" class="nav-item nav-link text-white" style="font-size: 22px;">Blog</a>


                        <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price" class="dropdown-item">Pricing Plan</a>
                            <a href="feature" class="dropdown-item">Our features</a>
                            <a href="team" class="dropdown-item">Team Members</a>
                            <a href="testimonial" class="dropdown-item">Testimonial</a>
                            <a href="quote" class="dropdown-item">Free Quote</a>
                        </div>
                    </div> -->
                        <a href="contact.php" class="nav-item nav-link active text-white"
                            style="font-size: 22px;">Contact</a>
                    </div>
                    <button type="button" class="btn text-red ms-3 text-white"
                        style="font-size: 22px; border-radius:50px; background-color:blue"><a href="contact">Get a
                            Quote</a></button>
                    <!-- <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->
                    <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
                </div>
            </nav>

        </div>


        <div class="container-fluid bg-primary py-5 bg-header">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Get Help</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <!--         
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">info@example.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">123 Street, NY, USA</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div> -->
        <!-- Contact End -->


        <!-- Vendor Start -->

        <!-- Vendor End -->

        <div class="form">
            <div class="form-card">
                <section>
                    <h2 style="padding: 5px;">Get In Touch With US</h2>
                    <br>
                    <!-- <form action="https://formsubmit.co/53cd715fab47063b2a5b15ac2ea4d415" method="POST"> -->
                    <form action="partials/_contact.php" method="POST">
                        <section>

                            <div style="float:left;margin-right:30px;">
                                <label class="form-input" for="name">Full Name</label>
                                <input class="form-input" id="name" type="text" value="" name="name"
                                    placeholder="Your Full Name" required>
                            </div>

                            <div style="float:left;">
                                <label class="form-input" for="name">Email</label>
                                <input class="form-input" id="email" type="email" name="email" placeholder="Your Email" required>
                            </div>
                        </section>




                        <br style="clear:both;" />

                        <section>

                            <div style="float:left;margin-right:30px;">
                                <label class="form-input" for="name">Contact Number</label>
                                <input class="form-input" id="phone" type="phone" name="phone"
                                    placeholder="Your Contact Number" required>
                            </div>

                            <div style="float:left;">
                                <label class="form-input" for="name">Whatsapp</label>
                                <input class="form-input" id="whatsapp" type="phone" name="whatsapp"
                                    placeholder="Whatsapp" required>
                            </div>
                        </section>

                        <br style="clear:both;" />


                        <section>

                            <div style="float:left;margin-right:30px;">
                                <label class="form-input" for="name">Skype</label>
                                <input class="form-input" id="skype" type="text" name="skype" placeholder="skype"
                                    >
                            </div>

                            <div style="float:left;">
                                <label class="form-input" for="name">Address Location</label>
                                <input class="form-input" id="address" type="text" name="address"
                                    placeholder="Your Location">
                            </div>
                        </section>

                        <br style="clear:both;" />


                        <section>
                            <div>
                                <label class="form-input" for="name">Project budget</label>

                                <span>
                                    <input  type="range" value="0" 
                                        onchange="updateTextInput(this.value)" max="100000">
                                    ???<input for="budget" id="budget" value="0" name="budget">
                                </span>
                            </div>
                        </section>

                        <br style="clear:both;" />


                        <section>
                            <div style="width: 100%;">
                                <label class="form-input" for="name">Message</label>
                                <textarea id="message" name="message" rows="4" cols="50" name="message"
                                    required></textarea>

                            </div>
                        </section>

                        <br style="clear:both;" />

                        <section>
                            <!-- <div style="float:left;margin-right:30px;">
                            <label class="form-input" for="name">Enter Captcha</label>
                            <input class="form-input" type="text" id="generated-captcha" readonly>

                        </div> -->

                            <!-- <div style="float:left; ">
                            <label class="form-input" for="name" style="visibility: hidden;">Enter Captcha</label>
                            <input class="form-input" type="text" id="entered-captcha"
                                placeholder="Enter the captcha..">


                        </div> -->
                            <!-- <div style="float:left; ">
                            <label class="form-input" for="name" style="visibility: hidden;">Enter Captcha</label>
                            <button type="button" style="padding: 10px; border: none; cursor: pointer;"
                                onclick="check()"><i class="fa fa-refresh" aria-hidden="true"></i></button>


                        </div> -->
                            <!-- <h6 id="status" style="color: #ee7e6a;"></h6> -->
                            <!-- <br style="clear:both;" /> -->
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_next" value="http://testso.softmoreit.com/contact">
                            <input type="hidden" name="_cc" value="pinjatimusaddique@yahoo.com">
                            <div style="float:left; ">

                                <button type="submit" onclick="Thank()">
                                    Send Message <i class="fa fa-arrow-right" aria-hidden="true"
                                        style="background-color:rgb(117, 117, 230); padding: 10px; border-radius: 30px;"></i>
                                </button>
                            </div>
                        </section>

                      
                        
                        
                    </form>
                </section>
            </div>
            <br>
            <br>

            <div class="cont-cards">
                <div class="c-1">
                    <section>
                        <h3 style="color: #29b4df;"><i class="fa fa-phone" aria-hidden="true"></i>
                            Phone</h3>

                        <h5 style="color: white;"><i class="fa fa-flag " style="color:chocolate; "></i>
                            <a href="tel:+91 9911773747">+91 9911773747</a>
                        </h5>
                        <h5 style="color: white;"><i class="fa fa-flag " style="color:chocolate; "></i>
                            <a href="tel:+1 (415) 455-3321">+1 (415) 455-3321</a>
                        </h5>
                        <!-- <p><i class="fa fa-flag" aria-hidden="true"></i>
                        +91-9876543210</p> -->

                    </section>
                </div>
                <br>

                <div class="c-1">
                    <section>
                        <h3 style="color: #29b4df"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Address </h3>

                        <p>Work DSID Centre, 69, west Madipur <br> JJ
                            Colony Janta Colony, Punjabi Bagh, <br> Delhi, 110063 </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.628895363987!2d77.1140245!3d28.6708284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0390bfffffff%3A0xa1061df027587269!2sSoftmore%20It%20Solutions!5e0!3m2!1sen!2sin!4v1674502811918!5m2!1sen!2sin"
                            style="height: 100px; width:100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </section>
                </div>
                <br>

                <div class="c-1">
                    <section>
                        <h3 style="color: #29b4df"><i class="fa fa-skype" aria-hidden="true"></i>
                            Skype </h3>

                        <h5 style="color: white;"><a href="https://join.skype.com/invite/xhjX4hMeEqSG">softmore.it</a>
                        </h5>
                    </section>
                </div>
                <br>
                <div class="c-1">
                    <section>
                        <h3 style="color: #29b4df"><i class="fa fa-envelope" aria-hidden="true"></i> Email</h3>
                        <br>
                        <h5 style="color: white;"><a href="mailto:support@softmore.com">support@softmoreit.com</a></h5>
                    </section>
                </div>
            </div>

        </div>
    </div>


    <!-- Footer Start -->
    <include src="footer"></include>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        function updateTextInput(val) {
            document.getElementById('textInput').value = val;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    <script>
        function updateTextInput(val) {
            document.getElementById('budget').value = val;
        }
    </script>
    <script>
        function Thank() {
          alert("Thanks! For Contacting Us!");
        }
        </script>

    <!-- <script src="https://smtpjs.com/v3/smtp.js">
    </script>

    <script type="text/javascript">

        function sendEmail() {
            var fname = document.querySelector("#name").value;
            var email = document.querySelector("#email").value;
            var phone = document.querySelector("#phone").value;
            var whatsapp = document.querySelector("#whatsapp").value;
            var skype = document.querySelector("#skype").value;
            var address = document.querySelector("#address").value;
            var budget = document.querySelector("#budget").value;
            var message = document.querySelector("#message").value;



            console.log(fname);

            console.log(email);
            let finalmessage = `Name : ${fname} <br>  Email : ${email} <br>  Phone : ${phone} <br> Whatsapp : ${whatsapp} <br> Skype : ${skype} <br>Address : ${address} <br>Budget : ${budget} <br>Message : ${message} <br>`;

            if (fname == "" || email == "" || phone == "" || budget == "" || message == "") {
                alert("Please fill all the fields");
            }
            else {
                Email.send({
                    Host: "smtp.elasticemail.com ",
                    Username: "sanketshevare1607@gmail.com",
                    Password: "C56D08805C0C5B8DDE5B1DF64904AC577069",
                    To: 'itheadmaster@gmail.com',
                    From: "sanketshevare1607@gmail.com",
                    Subject: `Details of Mr.${fname}`,
                    Body: finalmessage,
                })
                    .then(function (message) {
                        alert("Thank You For Contacting Us! \n We will get back to you soon.");
                    });
            }
        }
    </script>
    <script src="https://unpkg.com/htmlincludejs"></script> -->


</body>

</html>