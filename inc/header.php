<?php
// Include the meta data
include ('meta.php');

// Determine the current page
   $page = basename($_SERVER['PHP_SELF'], ".php");
// Check if the meta data for the current page exists
if (!isset($meta_data[$page])) {
    // Fallback to a default meta data if the page is not defined
       $page = 'default';
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Dynamic Meta Tags -->
    <title><?php echo $meta_data[$page]['title']; ?></title>
    <meta name="description" content="<?php echo $meta_data[$page]['description']; ?>">
    <meta name="keywords" content="<?php echo $meta_data[$page]['keywords']; ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:url" content="https://www.youstable.com/<?php echo $page; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta_data[$page]['title']; ?>">
    <meta property="og:description" content="<?php echo $meta_data[$page]['description']; ?>">
    <meta property="og:image" content="<?php echo $meta_data[$page]['og_image']; ?>">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="youstable.com">
    <meta property="twitter:url" content="https://www.youstable.com/<?php echo $page; ?>">
    <meta name="twitter:title" content="<?php echo $meta_data[$page]['title']; ?>">
    <meta name="twitter:description" content="<?php echo $meta_data[$page]['description']; ?>">
    <meta name="twitter:image" content="<?php echo $meta_data[$page]['twitter_image']; ?>">

    <!-- JSON-LD Schema -->
        <?php echo $meta_data[$page]['schema']; ?>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '& l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM - T7Q6LH2');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<style>

</style>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7Q6LH2" height="0" width=“0”
      style=“display:none;visibility:hidden”></iframe></noscript>

  <div class="main-container">
    <!-- Header (navbar) -->
     <div class="sticky-top">
      <nav class="top-nav">
        <div class="container">
            <button class="btn btn-close  text-white pulse-shrink-on-hover" onclick="closeNav()"></button>
          <div class="d-flex justify-content-between   top-nav-items">
            <div class="d-flex gap-2 grab-heading" style="align-items: baseline;">
              <div>
               <p class="youstable-offer m-0 text-white offer-off " style="text-align: center;padding-left: 8px;"><strong>New Customer?:</strong> Get Free Domain Name with 1st yearly web hosting subscription! 😋</p>
              </div>
              <div>
                <a href="https://www.youstable.com/free-domain.php" class="button-deal"><button>Grab deal</button></a>
              </div>

            </div>

            


            <div class="d-flex gap-5 align-items-center position-relative">
              <div>
                <a href="/contact-us" class="text-white phone-1">Contact Us</a>
              </div>

              <div>
                <a href="https://www.youstable.com/blog/" class="text-white phone-1">Blog</a>
              </div>
            </div>


          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
          <a class="navbar-brand" href="https://www.youstable.com/"><img src="assets/img/logo_youstable.svg" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 ">

              <li class="nav-item dropdown hover-effect">
                <a class="nav-link dropdown-toggle header-links" role="button" data-bs-toggle=" " aria-expanded="false">
                  Web Hosting
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item first-shared" href="shared-hosting.php"><Span Class="icon-drop"><img
                          src="assets/img/shared.png" alt="hosting-icon" /></Span> <span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> Shared Hosting </p>
                        <p class="dropdown-menu-main-description">Perfect Fit for Low-Traffic Blogs</p>
                      </span></a></li>
                  <li><a class="dropdown-item first-shared" href="wordpress-hosting.php"><Span Class="icon-drop"><img
                          src="assets/img/wordpress.png" alt="hosting-icon" /></Span> <span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> Wordpress Hosting </p>
                        <p class="dropdown-menu-main-description">Boosts WP Speed & Security</p>
                      </span></a></li>
                  <li><a class="dropdown-item first-shared" href="cpanel-hosting.php"><Span Class="icon-drop"><img
                          src="assets/img/cpanel.png" alt="hosting-icon" /></Span> <span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> cPanel Hosting </p>
                        <p class="dropdown-menu-main-description">UserFriendly cPanel Interface</p>
                      </span></a></li>
                  <li><a class="dropdown-item first-shared-one" href="python-hosting.php" style="border-bottom:0px;"><Span
                        Class="icon-drop"><img src="assets/img/python.png"
                          alt="hosting-icon" /></Span>
                      <span class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> Python Hosting </p>
                        <p class="dropdown-menu-main-description"> Launch your Python App</p>
                      </span></a></li>

                </ul>
              </li>
              <li class="nav-item dropdown hover-effect">
                <a class="nav-link dropdown-toggle header-links" role="button" data-bs-toggle="" aria-expanded="false">
                  VPS
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item first-shared" href="vps-hosting.php"><span class="icon-drop">
                      <img src="assets/img/VPS-server.png" alt="hosting-icon"></span>
                      <span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> VPS Hosting </p>
                        <p class="dropdown-menu-main-description">Get Reliable Web Resources</p>
                      </span></a></li>
                  <!-- <li><a class="dropdown-item first-shared" href="cyberpanel-vps.php"><span class="icon-drop"><img
                          src="assets/img/cyberpanel.png" alt="hosting-icon"></span><span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> CyberPanel VPS </p>
                        <p class="dropdown-menu-main-description">Free Addon’s worth $94 (WP Optimized)</p>
                      </span> </a></li> -->
                  <!-- <li><a class="dropdown-item first-shared" href="directadmin-vps.php"><span class="icon-drop"><img
                          src="assets/img/direct.png" alt="hosting-icon"></span><span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> DirectAdmin VPS </p>
                        <p class="dropdown-menu-main-description">Fast and Reliable Panel</p>
                      </span> </a></li> -->
                  <li><a class="dropdown-item first-shared-one" href="cpanel-vps.php" style="border-bottom:0px;"><span
                        class="icon-drop"><img src="assets/img/cpanel.png" alt="hosting-icon"></span><span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> cPanel VPS </p>
                        <p class="dropdown-menu-main-description">With Built-in cPanel/ WHM</p>
                      </span> </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link header-links" href="dedicated-servers.php">Dedicated</a>
              </li>

              <li class="nav-item dropdown hover-effect">
                <a class="nav-link dropdown-toggle header-links" role="button" data-bs-toggle="" aria-expanded="false">
                  Domain
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item first-shared-one" href="domain-registration.php"
                      style="border-bottom:0px;"><span class="icon-drop"><img src="assets/img/search-icon.png"
                          alt="hosting-icon"></span><span class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> Search Domain </p>
                        <p class="dropdown-menu-main-description">Starting @ ₹99/ Year</p>
                      </span></a></li>

                </ul>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link header-links" href="affiliate.php">Affiliates</a>
              </li> -->

              <li class="nav-item dropdown hover-effect">
                <a class="nav-link dropdown-toggle header-links" role="button" data-bs-toggle="" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item first-shared" href="vps-hosting.php"><span class="icon-drop">
                      <img src="assets/img/VPS-server.png" alt="hosting-icon"></span>
                      <span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> About Us </p>
                        <!-- <p class="dropdown-menu-main-description">Get Reliable Web Resources</p> -->
                      </span></a></li>
                  <li><a class="dropdown-item first-shared" href="cyberpanel-vps.php"><span class="icon-drop"><img
                          src="assets/img/cyberpanel.png" alt="hosting-icon"></span><span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> Contact Us</p>
                        <!-- <p class="dropdown-menu-main-description">Free Addon’s worth $94 (WP Optimized)</p> -->
                      </span> </a></li>
                  <li><a class="dropdown-item first-shared" href="directadmin-vps.php"><span class="icon-drop"><img
                          src="assets/img/direct.png" alt="hosting-icon"></span><span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav"> Affiliate</p>
                        <!-- <p class="dropdown-menu-main-description">Fast and Reliable Panel</p> -->
                      </span> </a></li>
                  <li><a class="dropdown-item first-shared-one" href="cpanel-vps.php" style="border-bottom:0px;"><span
                        class="icon-drop"><img src="assets/img/cpanel.png" alt="hosting-icon"></span><span
                        class="dropdown-menu-link-conatiner">
                        <p class="dropdown-menu-main-nav">Datacenter</p>
                        <!-- <p class="dropdown-menu-main-description">With Built-in cPanel/ WHM</p> -->
                      </span> </a>
                  </li>

                </ul>
              </li>

                  <p class="Existing-Customer">Existing Customer, Login</p>
              <li class="nav-item login-remover-bd">
                <div class="nav-login-item">
                  <a href="https://www.youstable.com/manage/index.php?rp=/login"
                    class="nav-link header-links phone-1">LOGIN</a>
                </div>
              </li>

            </ul>
          </div>
              <!-- <li class="nav-item flag-border login-remover-bd" style="position: relative;">
                
                <span class="select" id="select">
                  <img src="assets/img/india-f.png" alt="flag-icon" class="flag-i">
                </span>
                
                <ul class="list" id="list">
                  <li id="rupee"><img src="assets/img/india-f.png" title="RUPEE" alt="" class="flag-i" /></li>
                  <li id="usd"><img src="assets/img/usd-f.png" alt="" title="USD" class="flag-i" /></li>
                </ul>

                
              </li>  -->
        </div>
      </nav>
      </div>


    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--slick slider js (index)-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--close button-->
    
<!--nav hide cross-->
<script>
  function closeNav() {
    var topNav = document.querySelector('.top-nav');
    if (topNav.style.display !== 'none') {
      topNav.style.display = 'none';
      localStorage.setItem('topNavVisibility', 'hidden'); // Store the state
    }
  }

</script>
<!--nav hide cross-->