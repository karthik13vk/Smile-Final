<?php
$title = isset($title) ? $title : '';
$description = isset($description) ? $description : '';
$keyword = isset($keyword) ? $keyword : '';
$canonical = isset($canonical) ? $canonical : '';
$base_url = "https://www.sigmaprint.co.in/"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />

    <meta name="author" content="Smile" />
    <title><?php echo $title ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="Title" content="<?php echo $title; ?>" />
    <meta name="Description" content="<?php echo $description; ?>" />
    <meta name="keyword" content="<?php echo $keyword; ?>" />
    <?php if (!$canonical) { ?>
    <link rel="canonical" href="https://www.sigmaprint.co.in/" />
    <?php } else { ?>
    <link rel="canonical" href="<?php echo $base_url,$canonical; ?>" />
    <?php } ?>
    <meta property="og:site_name" content="Smile" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="<?php echo $title; ?>" />

    <?php if (!$canonical) { ?>
    <meta property="og:url" content="https://www.sigmaprint.co.in/" />
    <?php } else { ?>
    <meta property="og:url" content="<?php echo $base_url,$canonical; ?>" />
    <?php } ?>
    <meta property="og:image" content="https://www.sigmaprint.co.in/assets/images/mob-logo.png" />
    <meta property="og:type" content="website" />
    <meta property="og:image:secure_url" content="https://www.sigmaprint.co.in/assetsassets/images/main.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Smile">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="https://www.sigmaprint.co.in/assets/images/mob-logo.png">
    <meta name="robots" content="index,follow" />
    <meta name="author" content="www.sigmaprint.co.in" />
    <meta name="google-site-verification" content="X_lXz2DEip12aboLL1i-ku3fkB9OPZ80JlvRjUUPQ-I" />


    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/flipclock.css" rel="stylesheet" />
    <link href="assets/css/fontawesome6.min.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />

    <!-- Animate CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />



    <!-- fancyBox helpers -->
    <link href="assets/css/fancybox.css" rel="stylesheet" />

    <!-- captcha -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>



</head>