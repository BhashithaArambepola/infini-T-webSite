<?php
if (!empty($_POST)) {
    $from_email = $_POST['email'];
    $message = $_POST['message'];
    $recipient_email = "rajithasanuka@gmail.com";

    // Email header
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = "To: $recipient_email";
    $headers[] = "From: $from_email";
    $header = implode('\r\n', $headers);

    mail($recipient_email, "Contact", $message, $header);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Infini-T Solutions</title>
    <link rel="icon" href="src/images/infiniT-logo.png" type="image/x-icon">

    <!--  carousel-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--main Styles-->
    <link rel="stylesheet" href="css/style.css"/>
    <!--    bootstrap css-->
    <link rel="stylesheet" href="src/cdn/bootstrap.min.css"/>
    <!--    fontawesome css-->
    <link rel="stylesheet" href="src/cdn/font-awesome.min.css"/>
    <!--    bootstrap JS-->
    <script defer src="src/cdn/bootstrap.bundle.min.js"></script>
    <!--main Js-->
    <script defer src="js/main.js"></script>
    <!--<script defer src="js/contactform.js"></script>-->
    <!--<script defer src="https://smtpjs.com/v3/smtp.js">-->
    </script>

</head>
<body>
<!-- Navbar -->
<nav id="navbar" class="navbar  navbar-expand-lg  fixed-top ">
    <div class="container-fluid">
        <div class="bg-logo "><a href="index.html" class="navbar-brand">
                <img
                        src="src/images/Logo.png"
                        class="img-fluid1"
                        height="60"
                        alt="CoolBrand"
                />
            </a></div>

        <button
                type="button"
                class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-white" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.html" class="nav-item nav-link  text-center">Home</a>
                <a href="AboutUs.html" class="nav-item nav-link text-center">About Us</a>
                <a href="solutions.html" class="nav-item nav-link text-center">Solutions</a>
                <!--        <a href="Portfolio.html" class="nav-item nav-link text-center">Portfolio</a>-->
                <a href="Careers.html" class="nav-item nav-link text-center">Careers</a>
                <a href="ContactUs.php" class="nav-item nav-link text-center active1">Contact Us</a>
            </div>
        </div>
    </div>
</nav>

<!-- Cover Banner -->
<section id="sub-cover" class="d-flex justify-content-center align-items-center bg-CoverBar nav-space">

    <div class="container-fluid p-0 m-0 bg-CoverBar" id="blue-bar">
        <div class="p-4 row d-flex justify-content-center align-items-center">
            <div
                    class="col-lg-8 col-md-12 col-sm-12 col-12 d-flex justify-content-center justify-content-lg-start justify-content-md-start align-items-center container">
                <h2 class="text-white">
                    Contact Us
                </h2>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex justify-content-end align-items-center">
                <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item">
                        <a class="text-white breadcrumb-item-list" href="index.html">Home</a></li>
                    <li class="breadcrumb-item d-flex justify-content-center align-items-center"><img
                                src="src/images/right-chevron.png" class="img-fluid me-2" width="15"
                                height="10"></li>
                    <li class="breadcrumb-item active-tab">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Address Banner -->
<section id="about-us" class="d-flex justify-content-center align-items-center py-5 bg-ContactForm-section">
    <div class="row container d-flex justify-content-center align-items-center mx-0">
        <div class="col-12 col-md-6 col-lg-5 text-md-start text-center p-0">

            <!--      <h5 class="sub-topics">Just Say</h5>-->
            <h1 class="topics">Connect With Us:</h1>
            <div class="col-12  d-flex justify-content-center justify-content-md-start align-items-center ">
                <div id="sm-pack" class="d-flex ">

                    <div class="sm-box ms-lg-0 mx-3 p-1"><a target="_blank"
                                                            href="https://www.facebook.com/profile.php?id=100078011537730&mibextid=ZbWKwL"><img
                                    src="src/images/facebook.png" class="img-fluid"
                                    width="25" height="25"></a></div>
                    <div class="sm-box ms-lg-0 mx-3 p-1"><a target="_blank"
                                                            href="https://www.linkedin.com/company/infini-t-tech-solutions-pvt-ltd/"><img
                                    src="src/images/icons/twitter.png"
                                    class="img-fluid" width="25" height="25"></a></div>
                    <div class="sm-box ms-lg-0 mx-3 p-1"><a target="_blank"
                                                            href="https://www.linkedin.com/company/infini-t-tech-solutions-pvt-ltd/"><img
                                    src="src/images/icons/linkedin.png"
                                    class="img-fluid" width="25" height="25"></a></div>


                </div>
            </div>
            <div class="py-3">
                <h6 class="contact-topics"> Head Office:</h6>
                <p>Infini-T Tech Solutions (Pvt) Ltd
                    <br>No.83A, Ananda Rajakaruna Mawatha, Colombo-10, Sri Lanka.</p>
                <h6 class="contact-topics"> Email Us: </h6>
                <p>info@infini-tsolutions.com</p>

                <h6 class="contact-topics"> Call Us:</h6>
                <p>+94 77 352 0851</p>
            </div>

            <img src="src/images/Group%20984.png" class="img-fluid">


        </div>
        <div class="col-12 col-md-6 col-lg-6 text-md-start text-center ">

            <div class="row ">
                <div class="col-lg-12 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">

                            <div class="container">
                                <form id="contact-form" method="post" role="form" action="ContactUs.php">


                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">First Name *</label>
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                           placeholder="Please enter your firstname *"
                                                           required="required"
                                                           data-error="Firstname is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Last Name *</label>
                                                    <input id="form_lastname" type="text" name="surname"
                                                           class="form-control"
                                                           placeholder="Please enter your lastname *"
                                                           required="required"
                                                           data-error="Lastname is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Email *</label>
                                                    <input id="form_email" type="email" name="email"
                                                           class="form-control"
                                                           placeholder="Please enter your email *" required="required"
                                                           data-error="Valid email is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Please specify your need *</label>
                                                    <select id="form_need" type="" name="need" class="form-control"
                                                            required="required"
                                                            data-error="Please specify your need.">
                                                        <option value="" selected disabled>--Select Solution</option>
                                                        <option>ERP Services</option>
                                                        <option>Software Development</option>
                                                        <option>Mobile App Development</option>
                                                        <option>Cyber Security</option>
                                                        <option>Consultation & Support
                                                            Services
                                                        </option>
                                                        <option>Learning</option>
                                                        <option>Other</option>


                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Message *</label>
                                                    <textarea id="form_message" name="message" class="form-control"
                                                              placeholder="Write your message here." rows="4"
                                                              required="required"
                                                              data-error="Please, leave us a message."></textarea
                                                    >
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12 pt-3">
                                            <button id="btn-send" type="submit" class="custom-btn light-button"><span>Submit</span>
                                            </button>
                                        </div>

                                    </div>


                                </form>
                            </div>
                        </div>


                    </div>
                    <!-- /.8 -->

                </div>
            </div>
            <!-- /.row-->
        </div>
    </div>
</section>

<!-- Map Banner -->
<section class="d-flex justify-content-center align-items-center p-0">
    <div class="row container-fluid   ">

        <iframe class="col-12 "
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7408752559118!2d79.87163131477291!3d6.9215490949989675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2590a99f82c55%3A0xeb30a54288d647f4!2s83%20Ananda%20Rajakaruna%20Mawatha%2C%20Colombo%2001000!5e0!3m2!1sen!2slk!4v1680671270527!5m2!1sen!2slk"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<footer class="bg-light d-flex justify-content-center align-items-center pt-5 ">
    <div class="row container d-flex justify-content-between align-items-start">


        <div class="col-12 col-md-6 col-lg-4 text-md-start text-center">
            <h3 class="pb-3 footer-heading"> Our Services</h3>
            <a class="footer-nav" href="solutions.html"><p>ERP Services</p></a>
            <a class="footer-nav" href="solutions.html"><p>Software Development</p></a>
            <a class="footer-nav" href="solutions.html"><p>Mobile Application Development</p></a>
            <a class="footer-nav" href="solutions.html"><p>Cyber Security</p></a>
            <a class="footer-nav" href="solutions.html"><p>Consultation & Support Services</p></a>
            <a class="footer-nav" href="solutions.html"><p>Learning</p></a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-md-start text-center">
            <h3 class="pb-3 footer-heading">Quick Links</h3>
            <a class="footer-nav" href="../pages/AboutUs.html"><p>About us</p></a>
            <a class="footer-nav" href="solutions.html"><p> Solutions</p></a>
            <a class="footer-nav" href="Careers.html"><p>Career</p></a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-md-start text-center">
            <img src="src/images/infiniT-logo.png" class="img-fluid footer-logo pb-3 ">
            <div id="sm-pack" class="d-flex pb-3 justify-content-center justify-content-md-start ">
                <div class="sm-box ms-lg-0 mx-3 p-1"><a target="_blank"
                                                        href="https://www.facebook.com/profile.php?id=100078011537730&mibextid=ZbWKwL"><img
                                src="src/images/facebook.png" class="img-fluid"
                                width="25" height="25"></a></div>
                <div class="sm-box ms-lg-0 mx-3 p-1"><a target="_blank"
                                                        href="https://www.linkedin.com/company/infini-t-tech-solutions-pvt-ltd/"><img
                                src="src/images/icons/twitter.png"
                                class="img-fluid" width="25" height="25"></a></div>
                <div class="sm-box ms-lg-0 mx-3 p-1"><a target="_blank"
                                                        href="https://www.linkedin.com/company/infini-t-tech-solutions-pvt-ltd/"><img
                                src="src/images/icons/linkedin.png"
                                class="img-fluid" width="25" height="25"></a></div>


            </div>
            <p></p>
            <div class="row py-2">
                <div class="col-12 col-md-2 d-flex justify-content-center justify-content-md-end align-items-center">
                    <img
                            src="src/images/telephone.png" class="img-fluid"
                            width="25" height="25"></div>
                <div class="col-12 col-md-10"> +94 77 352 0851</div>
            </div>
            <div class="row py-2">
                <div class="col-12 col-md-2 d-flex justify-content-center justify-content-md-end align-items-center">
                    <img
                            src="src/images/email%20(1).png" class="img-fluid"
                            width="25" height="25"></div>
                <div class="col-12 col-md-10">info@infini-tsolutions.com</div>
            </div>
            <div class="row py-2">
                <div class="col-12 col-md-2 d-flex justify-content-center justify-content-md-end align-items-center">
                    <img
                            src="src/images/location.png" class="img-fluid"
                            width="25" height="25"></div>
                <div class="col-12 col-md-10">No.83A,<br> Ananda Rajakaruna Mawatha,<br> Colombo 10, Sri Lanka.</div>
            </div>

        </div>
        <div class="horizontal-line my-2"></div>

    </div>
</footer>
<div class="col-12 copyRight d-flex justify-content-center align-items-center text-white">
    <p class="">Copyright © 2023 Infini-T Solutions All Right Reserved</p>
</div>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div id="foo" class="elfsight-app-7b5108d2-db93-46e4-a1af-3f8eac315749"></div>
</body>
</html>