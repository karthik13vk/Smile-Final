<?php
$title = 'Smile | Retail  ';

$description = 'Smile';

$keyword = "Smile";
$canonical = "retail.php";
include ('include/head.php')
?>


<?php

include ('header.php') ;
require("include/service-details.php");
if(isset($_REQUEST["title"]))
{
  $k = $_REQUEST["title"];

}

?>


<section class="about-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-head">
                    <h1>
                        Retail
                    </h1>
                    <ul>
                        <li>
                            <a href="index.php" title=" Home">Home</a>
                        </li>

                        <li>
                            |
                        </li>

                        <li class="circle">
                            Retail
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-head wow fadeInDown infinite" data-wow-duration="3s" data-wow-delay="0.2s"
                    style="visibility: visible; animation-duration: 3s; animation-delay: 0.2s; animation-name: fadeInDown;">
                    <h1>Our Products</h1>
                    <h5>
                        Gifts that
                        <span class="color">Speak</span>
                        Your <span class="color"> Heart</span>
                        <img src="assets/images/retail/Group.png" alt="img">

                    </h5>

                </div>

            </div>
        </div>

        <div class="row prodcuts-row">
            <?php 
                   foreach ($productArrays as $productarray) { 
                   ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="product-box  wow fadeInDown infinite" data-wow-duration="3s" data-wow-delay="0.2s"
                    style="visibility: visible; animation-duration: 3s; animation-delay: 0.2s; animation-name: fadeInDown;">


                    <div class="img-wrapper">
                        <img src="<?= $productarray["url"] ? $productarray["url"] : "" ?>" alt="img">
                    </div>
                    <div class="product-details">
                        <h5>
                            <?= $productarray["product-title"] ? $productarray["product-title"] : "" ?>

                        </h5>
                        <P>
                            <?= $productarray["product-desc"] ? $productarray["product-desc"] : "" ?>

                        </P>
                        <div class="product-btn">
                            <div class="btn-area">
                                <a href="contact.php" class="main-btn" title="Enquire Now">Enquire Now <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-image">
                        <img src="assets/images/retail/Vector.png" alt="img">
                    </div>

                </div>

            </div>


            <?php } ?>









        </div>
    </div>
</section>

<section class="float-section-2">
    <div class="container">
        <!-- <div class="row">
                    <div class="float-head">
                        <h5>
                            Dummy Content <span class="color">here</span>
                        </h5>
                    </div>
                </div> -->
        <div class="row float-row">
            <div class="col-lg-12">
                <div class="float-image">
                    <img src="assets/images/retail/banner.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('footer.php') ?>

<button class="scroll-top" style="display: inline-block;">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</main>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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