<?php
$title = 'Smile | Contact Us  ';

$description = 'Smile';

$keyword = "Smile";
$canonical = "contact.php";
include ('include/head.php')
?>


<?php include ('header.php') ?>

<section class="about-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-head">
                    <h1>
                        Contact Us
                    </h1>
                    <ul>
                        <li>
                            <a href="index.php" title=" Home">Home</a>
                        </li>

                        <li>
                            |
                        </li>

                        <li class="circle">
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="contact-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="contact-left wow fadeInLeft infinite" data-wow-duration="1s" data-wow-delay="0.2s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft">
                    <div class="contact-head">
                        <h5>We’re Here. <span class="color"> Connect Now!</span></h5>
                        <p>
                            We love to hear from you! Feel free to reach out
                        </p>
                    </div>
                    <div class="contact-box">
                        <h5>
                            Phone
                        </h5>
                        <div class="flex-div">
                            <div class="icon-div">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="parah-div">
                                <p>
                                    <a href="Tel:+919087233555" title="Call Now"> +91 9087233555</a>
                                    |
                                    <a href="Tel:+919087433555" title="Call Now"> +91 9087433555 </a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-box">
                        <h5>
                            Email
                        </h5>
                        <div class="flex-div">
                            <div class="icon-div">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="parah-div">
                                <p>
                                    <a href="mailto:smile3denterprises@gmail.com" title="Mail us">
                                        smile3denterprises@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-box">
                        <h5>
                            Address
                        </h5>
                        <div class="flex-div">
                            <div class="icon-div">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="parah-div">
                                <p>
                                    First Floor, SF No.61/ 5A-B, PVS Complex, Aruna Nagar, <br>
                                    Kurudampalayam Panchayat, K.Vadamadurai,<br>
                                    Coimbatore, Tamil Nadu 641017
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-area wow fadeInRight infinite" data-wow-duration="1s" data-wow-delay="0.2s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight">
                    <form class="row g-3 support-form" id="contactForm" name="contactForm" method="post">

                        <div class="col-md-12 col-md-6">
                            <input type="text" class="form-control" id="h_name" name="h_name" placeholder="Enter Name">
                        </div>

                        <div class="col-md-12">
                            <input type="email" class="form-control" id="h_email" name="h_email"
                                placeholder="Enter Email">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" id="h_phone" name="h_phone"
                                placeholder="Enter Mobile Number">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="h_subject" name="h_subject"
                                placeholder="Enter Subject">
                        </div>
                        <div class="col-12">
                            <textarea name="form_message" class="form-control" id="h_message" name="h_message" rows="7"
                                placeholder="Enter Message"></textarea>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <div class="captcha">
                                <div class="g-recaptcha" data-sitekey="6Lf782ApAAAAAAnhW1V1mgr22QH67n-F3ZOQ7PqU">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="btn-area">
                                <button class="main-btn" type="submit" value="h_submit" id="h_submit"
                                    title="Send Message">
                                    Send Message </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="map-area">
    <div class="container-fluid">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.3986910575304!2d76.92925807377935!3d11.083634453454637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f7cf3adb2dcd%3A0xa05d29f71d9a3f2d!2sSmile%203D%20Enterprises!5e0!3m2!1sen!2sin!4v1704541912155!5m2!1sen!2sin"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>





<?php include ('footer.php') ?>

<button class="scroll-top" style="display: inline-block;">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</main>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- captcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" href="assets/css/jquery-ui.css">

<script src="assets/js/fancybox.js"></script>
<script src="assets/js/flipclock.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints-min.js"></script>
<!-- <script src="assets/js/fontawesome6.min.js"></script> -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
<script>
AOS.init({
    duration: 2000,
});
</script>

</html>