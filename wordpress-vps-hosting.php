<?php
$page = 'wordpress-vps-hosting';
include ('inc/header.php');
?>

<style>
  .row.align-items-center.reverse-column {
    margin-top: 68px;
  }
  
  .vps .exploreplan-btn {
    width: 90% !important;
    padding: 10px;
}

  .contact-hosting {
    font-size: 20px;
    font-weight: 400;
    line-height: 38.73px;
    color: #292929;
  }

  .border-box {
    padding-left: 10px;
    padding-right: 10px;
  }

  .why-choose {
    padding-top: 100px;
  }

  .upper-card {
    padding: 32px 18px;
    border-radius: 18px;
    border: 1px solid #CACACA;
    background: #FFFDF9;
    height: 100%;
    transition: 0.3s;
  }

  .hosting_specification {
    margin-top: 52px;
  }

  img.specification-tick {
    width: 22px;
    margin-right: 8px;
  }

  .specifications p {
    font-size: 19px;
  }

  .lists-hosting {
    margin-top: 28px;
  }

  .padding-heading {
    padding: 0 30px 15px 0;
  }

  /*unknown css*/
  .awesome-youstable {
    margin: 82px 0;
  }

  .rating-section {
    padding: 0;
    margin: 78px 0;
  }

  section.operating-sytems {
    padding-top: 0;
    padding-bottom: 0;
    margin: 120px 0;
  }

  .review-content,
  .customer-review {
    margin-bottom: 80px;
  }
button.nav-link.teb-bg-purple {
 
    padding: 20px 18px;
  
}
button.nav-link.active.teb-bg-purple {
    padding: 20px 18px;
}

  /*unknown css*/
</style>


 
<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
          <p class="experience">WordPress VPS Hosting</p>
          <h1 class="Banner-Heading padding-heading robust">Best VPS Hosting For WordPress</h1>
          <p class="Banner-title p-0">Get YouStable WordPress VPS for high-performance, secure, fast connectivity with NVMe SSD drives, SSL, emails, offsite backups, and enterprise hardware.</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/fast-server-wp-vps-y88.svg" alt="tick"
                  class="tick-square"> Lightning Fast Server</li>
              <li class="purple-text_dark"><img src="assets/img/KVM-WP-VPS-y88.svg" alt="tick"
                  class="tick-square"> KVM Virtualization</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/nvme-ssd-wp-vps-y88.svg" alt="tick"
                  class="tick-square"> NVMe SSD Drives</li>
              <li class="purple-text_dark"><img src="assets/img/uptime-wp-vps-y88.svg" alt="tick"
                  class="tick-square"> 99.99% Uptime</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Explore All Plans <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/wordpress-vps-hosting-hero.png" alt="Banner" srcset="">
      </div>
    </div>
  </div>
</section>

<!-- (Rating section) -->
<section class="rating-section">
  <div class="container">
    <div class="row ">
      <div class="col-md-4 rating-cols">
        <div class="rating-outer-card">
          <img class="rating-img" src="assets/img/trustpilot.png" alt="trust pilot">
          <div>
            <p class="mb-2 mt-1">Rated <span class="rating-count">4.7/5</span></p>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
      </div>
      <div class="col-md-4 rating-cols margin--top">
        <div class="rating-outer-card">
          <img class="rating-img-host" src="assets/img/host-advice.png" alt="host advice">
          <div>
            <p class="mb-2 mt-1">Rated <span class="rating-count">4.6/5</span></p>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
      </div>
      <div class="col-md-4 rating-cols margin--top">
        <div class="rating-outer-card">
          <img class="rating-img" src="assets/img/google-logo.png" alt="google">
          <div>
            <p class="mb-2 mt-1">Rated <span class="rating-count">4.6/5</span></p>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Explore Section-->
<section class="explore-section vps hosting-plan mt-4" id="explore">
<div class="container">
<div class="text-center margin-top-bottom ideak-choice">
<h2 class="server-heading shared-heading-plan">Choose the Best Wordpress VPS Hosting <br class="remove-mobile">Price and Plans</h2>
<p class="server-title">Discover Unbeatable WordPress VPS Hosting Plans with lightning-fast speed, Scalable and Pocket-Friendly Top picks. <br class="remove-mobile">Boost your Website performance Today!</p>
</div>





<div class="row nav nav-pills wid-more" id="pills-tab" role="tablist" style="padding: 4px;">
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true" tabindex="-1">1 Year</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-half-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab" aria-controls="pills-half-yearly" aria-selected="false" tabindex="-1">6 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked " id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false">1 Month</button></div>
    </div>


<div class="tab-content" id="pills-tabContent"> 
<div class="tab-pane fade tab-titles" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">

<div class="row flex_unset">
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vStart</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1149</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>14.46</p>
<p class="per_month">/month</p>
</div>

<p></p>
<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=341&amp;billingcycle=monthly" class="indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=341&amp;billingcycle=monthly" class="usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>4 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>50 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>



</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">



<div class="upper-card" style="background: #FEFDFF;">

<h4 class="hosting-heading">vProfessional</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1999</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>25.14</p>
<p class="per_month">/month</p>
</div>
<p></p>

<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=342&amp;billingcycle=monthly" class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=342&amp;billingcycle=monthly" class="text-white usa-host-price" target="_self" style="display: none;"><button class="btn-purple exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>6 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>100 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1.5 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>



</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading ">vPopular</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3499</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>44.02</p>
<p class="per_month">/month</p>
</div>
<p></p>

<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=343&amp;billingcycle=monthly" class="indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=343&amp;billingcycle=monthly" class="usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>4 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>12 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>150 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2.0 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>



</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vStable</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>59.11</p>
<p class="per_month">/month</p>
</div>
<p></p>

<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=344&amp;billingcycle=monthly" class="indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=344&amp;billingcycle=monthly" class="usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>6 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>16 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>200 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2.5 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>



</div>
</div>
</div>
</div>
</div>

<div class="tab-pane fade tab-titles" id="pills-half-yearly" role="tabpanel" aria-labelledby="pills-half-yearly-tab"> 
<div class="row flex_unset">
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vStart</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>804</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>10.12</p>
<p class="per_month">/month</p>
</div>

<p></p>
<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=341&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=341&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>4 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>50 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-yellow " bis_skin_checked="1">
<p class="m-0">30% Off</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">



<div class="upper-card" style="background: #FEFDFF;">

<h4 class="hosting-heading">vProfessional</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1399</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>17.59</p>
<p class="per_month">/month</p>
</div>
<p></p>

<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=342&amp;billingcycle=semiannually&amp;promocode=VPS30" class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=342&amp;billingcycle=semiannually&amp;promocode=VPS30" class="text-white usa-host-price" target="_self" style="display: none;"><button class="btn-purple exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>6 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>100 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1.5 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-light-purple" bis_skin_checked="1">
<p class="m-0">30% Off</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vPopular</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2449</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>30.81</p>
<p class="per_month">/month</p>
</div>

<p></p>
<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=343&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=343&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>4 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>12 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>150 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2.0 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-yellow " bis_skin_checked="1">
<p class="m-0">30% Off</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vStable</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3289</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>41.37</p>
<p class="per_month">/month</p>
</div>

<p></p>
<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=344&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=344&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>6 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>16 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>200 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2.5 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-yellow " bis_skin_checked="1">
<p class="m-0">30% Off</p>
</div>
</div>
</div>
</div>
</div>
</div> 
<div class="tab-pane fade tab-titles active show" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab"> 
<div class="row flex_unset">
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vStart</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>574</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>7.23</p>
<p class="per_month">/month</p>
</div>

<p></p>
<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=341&amp;billingcycle=annually&amp;promocode=VPS50" class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=341&amp;billingcycle=annually&amp;promocode=VPS50" class="link-color-black usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>4 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>50 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-yellow " bis_skin_checked="1">
<p class="m-0">50% Off</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">



<div class="upper-card" style="background: #FEFDFF;">

<h4 class="hosting-heading">vProfessional</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>999</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>12.57</p>
<p class="per_month">/month</p>
</div>
<p></p>

<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=342&amp;billingcycle=annually&amp;promocode=VPS50" class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=342&amp;billingcycle=annually&amp;promocode=VPS50" class="text-white usa-host-price" target="_self" style="display: none;"><button class="btn-purple exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>6 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>100 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>1.5 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-light-purple" bis_skin_checked="1">
<p class="m-0">50% Off</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vPopular</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1749</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>22.01</p>
<p class="per_month">/month</p>
</div>

<p></p>
<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=343&amp;billingcycle=annually&amp;promocode=VPS50" class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=343&amp;billingcycle=annually&amp;promocode=VPS50" class="link-color-black usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>4 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>12 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>150 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2.0 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-yellow " bis_skin_checked="1">
<p class="m-0">50% Off</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 explore-cols">
<div class="position-relative h-100">
<div class="upper-card">

<h4 class="hosting-heading">vStable</h4>
<div class="price-container">
<p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2349</p>
<p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>29.55</p>
<p class="per_month">/month</p>
</div>

<p></p>
<a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=344&amp;billingcycle=annually&amp;promocode=VPS50" class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=344&amp;billingcycle=annually&amp;promocode=VPS50" class="link-color-black usa-host-price" target="_self" style="display: none;"><button class="btn-yellow exploreplan-btn" type="submit">Get
Started</button></a>
<div class="hosting_specification">
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>6 CPU</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>16 GB RAM</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>200 GB NVMe SSD</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>2.5 TB Bandwidth</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Dedicated IPv4</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Full Root Access</p>
</div>
<div class="d-flex gap-2 specifications">
<img src="assets/img/speci-tick.png" class="specification-tick">
<p>Free Control Panel*</p>
</div>
</div>
<div class="free_setup btn-yellow " bis_skin_checked="1">
<p class="m-0">50% Off</p>
</div>
</div>
</div>
</div>
</div>
</div> 
</div> 
</div>
</section>

<!--new list section-->
<section class="new-list-section container">
    <div class="text-center margin-top-bottom ideak-choice">
<h2 class="server-heading shared-heading-plan">All Wordpress VPS Hosting Plans Come With</h2>
<p class="server-title">From professional business to enterprise, we’ve got you covered!</p>
</div>
    <div class="container ">
        
             <img src="assets/img/rocket-1.png" alt="rocket-icon" class="rocket-icons"/>
            <div class="new-list-sec">
        <div class="row">
            <div class="col-lg-3 list-imp">
                <ul style="list-style: disc;">
                    <li class="support-list">24/7/365 Support</li>
                    <li class="support-list">SSH and SFTP Access</li>
                    <li class="support-list">Weekly Backup</li>
                    <li class="support-list">30-Day Money-Back</li>
                </ul>
            </div>
            <div class="col-lg-3 list-imp">
                <ul style="list-style: disc;">
                    <li class="support-list">CDN Add-on</li>
                    <li class="support-list">24/7 Live Monitor</li>
                    <li class="support-list">Free Migration</li>
                    <li class="support-list">HTTP/2 Enabled</li>
                </ul>
            </div>
            <div class="col-lg-3 list-imp">
                 <ul style="list-style: disc;">
                    <li class="support-list">Reg. Security Patch</li>
                    <li class="support-list">Staging Environment</li>
                    <li class="support-list">SQL Databases</li>
                    <li class="support-list">Multi-DC Network</li>
                </ul>
            </div>
            <div class="col-lg-3 list-imp">
                 <ul style="list-style: disc;">
                    <li class="support-list">Multiple OS</li>
                    <li class="support-list">Enterprise Hardware</li>
                    <li class="support-list">Maria DB</li>
                    <li class="support-list">Guaranteed Resources</li>
                </ul>
            </div>
            <div class="col-lg-3 list-imp">
                 <ul style="list-style: disc;">
                    <li class="support-list">PHP 7 & 8</li>
                    <li class="support-list">Enhanced Security</li>
                    <li class="support-list">Upgrade At Anytime</li>
                    <li class="support-list">Host Unlimited Domains</li>
                </ul>
            </div>
        </div>
    </div>
     <img src="assets/img/rocket-1.png" alt="rocket-icon" class="rocket-icons rocket-icons-1"/>
    </div>
</section>
<!--new list section-->


<!--Feature in Market-->

<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">Powerful WordPress VPS Hosting Server Features</span></h2>
        <p class="server-title title_sides_width pb-3">Enjoy Unmatched website performance! Get powerful NVMe Storage drives, Intel/ AMD EPYC Processor <br class="remove-mobile">for smoother execution and Free SSL plus DDoS protection for Unlimited Security.</p>
       
        <P></P>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/EXPERT-WP.svg" alt="root-access">
              <h5 class="ay-heading">Expert WP Support</h5>
              <p class="ay-title m-0 w-100">Get round-the-clock Expert WordPpress LiveChat and Ticket Support to ensure that your website runs smoothly and efficiently at all times.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/INDUSTRY-LEADING-PERFORMANCE.svg" alt="free-migration">
              <h5 class="ay-heading">Industry Leading Performance</h5>
              <p class="ay-title m-0 w-100">With our Best-in-class NVMe Storage drives, Intel & AMD EPYC processor, LiteSpeed Web Server, Unleash Industry Leading Website performance.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/WEEKLY-BACKUPS-888.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">Weekly Backup</h5>
              <p class="ay-title m-0 w-100">Keep your data safe and secure, thanks to our Weekly Backup plan with One-Click Restoration, enabling you to get back your data whenever you require.</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable mb-4">
            <div class="feature_cols_desciption">
              <img src="assets/img/FREE-MIGRATION-y888.svg" alt="ssl">
              <h5 class="ay-heading">Free Migration</h5>
              <p class="ay-title m-0 w-100">Switch to YouStable! Migrate your website at Zero cost. Get Free Migration service that allows a user to switch from other hosting partner to YouStable.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable mb-4">
            <div class="feature_cols_desciption">
              <img src="assets/img/ADVANCED-CONTROL-PANEL.svg" alt="granted-resources">
              <h5 class="ay-heading">Advance Control Panel </h5>
              <p class="ay-title m-0 w-100">Take Full Control and customise the website performance with Easy to manage control panel, stuffed with powerful features for easy management.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable mb-4">
            <div class="feature_cols_desciption">
              <img src="assets/img/LITESPEED-SERVER-y888.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">LiteSpeed Server</h5>
              <p class="ay-title m-0 w-100">Enjoy Blazing-Speed and superior website performance with YouStable’s top tier LiteSpeed web server that offers speed and efficiency.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/SFTP.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">SFTP & Root Access</h5>
              <p class="ay-title m-0 w-100">Get 100% Admin Secure Access to your web server with SFTP root access! Make changes to your server as per the need to ensure uninterrupted performance.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/UPTIME-y888.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">99.99% Uptime</h5>
              <p class="ay-title m-0 w-100">Ensure your site is available online 24/7, thanks to our rock solid 99.99% committed Uptime. Your site never goes down, Thats our Guarantee!</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/ipv4-y.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Dedicated IPv4</h5>
              <p class="ay-title m-0 w-100">Worried about Site Privacy and safety? Get a Dedicated IPv4 Address that brings you complete isolation letting you run the site securely.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!--performance-->
<section class="performance-sec plans">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading">Wordpress VPS Server - Fully Equipped <br class="remove-mobile">for Seamless Operations!</h2>
      <p class="server-title server-title-width mt-0 mt-p">Enjoy seamless website performance! Get Industry leading processor, Servers built-on KVM Virtualization technology and Highly Scalable Plans. Sign Up Today and Enjoy unlimited Benefit!</p>
    </div>

    <div class="row nav nav-pills mb-3 tab-four-heads" id="pills-tabs" role="tablist">
      <div class="col-lg-3 quality-standard">
        <p class="nav-item" role="presentation">
          <button class="nav-link active teb-bg-purple" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            <li class="color-black-1"><span class="text-dark dot"><img src="assets/img/resources.svg" alt="migration"></span>Scalable Resources</li>
          </button>
        </p>
      </div>
      <div class="col-lg-3 quality-standard">
        <p class="nav-item" role="presentation">
          <button class="nav-link teb-bg-purple" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
            <li class="color-black-1"><span class="text-dark dot"><img src="assets/img/amd.svg" alt="migration"></span>AMD EPYC Processor</li>
          </button>
        </p>
      </div>
      <div class="col-lg-3 quality-standard">
        <p class="nav-item" role="presentation">
          <button class="nav-link teb-bg-purple" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
            <li class="color-black-1"><span class="text-dark dot"><img src="assets/img/kvm.svg" alt="migration"></span>KVM Virtualization</li>
          </button>
        </p>
      </div>
      <div class="col-lg-3 quality-standard">
        <p class="nav-item" role="presentation">
          <button class="nav-link teb-bg-purple" id="pills-uptime-tab" data-bs-toggle="pill" data-bs-target="#pills-uptime" type="button" role="tab" aria-controls="pills-uptime" aria-selected="false" tabindex="-1">
            <li class="color-black-1"><span class="text-dark dot"><img src="assets/img/dedicated-ipv4-y77.svg" alt="migration"></span>Dedicated IPv4 Address</li>
          </button>
        </p>
      </div>
    </div>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active border tab-titles" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        
        <div class="row">
        <div class="col-lg-8">
            <h5 class="heading-servers m-0">Scalable Resources</h5>
        <p class="server-title py-3 m-0">Effortlessly scale as per your website growing demand! Enjoy flexible RAM NVMe Storage and CPU Core allocation that expands with your needs. Ensure your site remains fast and efficient, no matter the strength of website traffic.</p>
      </div>
        <div class="col-lg-4">
       <img src="assets/img/resources.png" alt="free-domain" class="content-images">
      </div>
      </div>
      </div>
      <div class="tab-pane fade border tab-titles" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row">
        <div class="col-lg-8">
            <h5 class="heading-servers m-0">AMD EPYC Processor</h5>
        <p class="server-title py-3 m-0">Power your WordPress site with the Latest AMD EPYC processors. Known for Lightning-fast performance, these processors deliver uparrallel speed and reliability, boosting your website’s efficiency to the greatest height.</p>
      </div>
        <div class="col-lg-4">
       <img src="assets/img/amd.png" alt="free-domain" class="content-images">
      </div>
      </div>
        
      </div>
      <div class="tab-pane fade border tab-titles" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="row">
        <div class="col-lg-8">
            <h5 class="heading-servers m-0">KVM Virtualization</h5>
        <p class="server-title py-3 m-0">Get KVM Virtualization backed servers! Experience the best Website operations and robust security with our Best VPS infrastructure. Virtual servers offers Full root Admin access and dedicated resources, providing isolated WordPress VPS hosting ground.</p>
      </div>
        <div class="col-lg-4">
       <img src="assets/img/kvm.png" alt="free-domain" class="content-images">
      </div>
      </div>
        
      </div>
      <div class="tab-pane fade border tab-titles" id="pills-uptime" role="tabpanel" aria-labelledby="pills-uptime-tab">
           <div class="row">
        <div class="col-lg-8">
             <h5 class="heading-servers m-0">Dedicated IPv4 Address</h5>
        <p class="server-title py-3 m-0">Boost your business presence and incredible security with Dedicated IPv4, ensuring isolated, safe and secure performance.</p>
      </div>
        <div class="col-lg-4">
       <img src="assets/img/dedicated-ipv4-address-y777.png" alt="free-domain" class="content-images">
      </div>
      </div>
       
      </div>
    </div>
  </div>
</section>


<!--Sixth section (High quality Server) -->
<section class="high-q-server">
  <div class=" container">
    <div class="bg-purple purple" style="background: #fff;">
      <div class="text-center">
        <h2 class="server-heading">High Quality Servers with Industry Leading Technologies</h2>
        <p class="server-title title_sides-width">YouStable relies on the most renowned and trusted technologies to
          provide<br class="remove-mobile"> better uptime, unbeatable performance and quality services.</p>
        <div class="width-slider">
          <div class="row autoplay autoplay_slider">
            <div class="col-lg-3 server-cols">
              <div class="bg-lt-black">
                <img src="assets/img/directadmin.png" alt="directadmin">
              </div>
            </div>
            <div class="col-lg-3 server-cols">
              <div class="bg-lt-black">
                <img src="assets/img/CloudLinux.png" class="cloud-linux" alt="CloudLinux">
              </div>
            </div>
            <div class="col-lg-3 server-cols">
              <div class="bg-lt-black">
                <img src="assets/img/encrypt.png" alt="encrypt">
              </div>
            </div>
            <div class="col-lg-3 server-cols">
              <div class="bg-lt-black">
                <img src="assets/img/directadmin.png" alt="directadmin">
              </div>
            </div>
            <div class="col-lg-3 server-cols">
              <div class="bg-lt-black">
                <img src="assets/img/CloudLinux.png" class="cloud-linux" alt="CloudLinux">
              </div>
            </div>
            <div class="col-lg-3 server-cols">
              <div class="bg-lt-black">
                <img src="assets/img/encrypt.png" alt="encrypt">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Review section-->
  <section class="hosting-rating hosting-review">
    <div class="container">

        <div class="d-flex justify-content-between">
            <span class="text-start">
                <img src="assets/img/yellow-circle.png" class="floating yellow-circle">
            </span>
            <span class="text-end">
                <!--<img src="assets/img/floating-imgs.png" class="floating">-->
                <img src="assets/img/cloud-circle.png" class="movingcloud">
            </span>
        </div>
           <?php include ('animate-text.php')?>

        <div class="d-flex justify-content-between">
            <span class="text-start">
                <!--<img src="assets/img/floating-imgs.png" class="floating">-->
                <img src="assets/img/cloud-wave.png" class="movingclouds">
            </span>
            <span class="text-end">
                <!--<img src="assets/img/floating-imgs.png" class="floatingcloud">-->
                <img src="assets/img/wave-yellow.png" class="floating">
            </span>
        </div>


    </div>
</section>

<!--(What our customer says) -->
<?php
include ('inc/customer-reviews.php');
?>



<!--(FAQ)-->
<section class="faq faq-1">
  <div class="container">
    <h2 class="text-center faq-question">FAQs</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What is WordPress VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">WordPress VPS Hosting refers to KVM virtualization-built optimized server hosting that are specifically tailored to boost the performance and security of WordPress websites, 
          ensuring faster loading times and better reliability compared to Basic VPS hosting.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            How does WordPress VPS Hosting differ from Standard VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">WordPress VPS Hosting is designed specifically for WordPress sites, offering optimized server configurations, enhanced security measures, and 24/7 expert WP support for WordPress-related issues. On the other hand, 
          Standard VPS hosting offers general-purpose server configurations to fit basic VPS hosting needs.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
           How much Does WordPress VPS cost?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Just at ₹574 on a monthly basis, Get 1 dedicated CPU core, a minimum 4GB RAM, 50GB NVMe Storage drive for greater web page loading speed, 1Gbps port network connectivity and full root access to 
          help your customise your server to meet the growing needs of your high traffic wordpress website.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Why should I choose YouStable's WordPress VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">You should choose YouStable’s WordPress VPS Hosting as you get high performing LiteSpeed web server along with AMD EPYC processor for greater site performance, 24/7 Expert WP Support, robust Imunify360 Security and effortless 
          scalability, all available at an ideal price.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
           Can I migrate my existing WordPress site to YouStable's WordPress VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, And that too for Free! You can migrate your existing WordPress site to YouStable’s WordPress VPS Hosting at Zero cost, without affecting your website performance with Zero Downtime.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingsix">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapseFive">
            What security features are included in YouStable's WordPress VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">YouStable’s WordPress VPS Hosting Top Tier security features include Advanced DDoS security, Imunify360, BitNinja Security, Enhanced connection Encryption with Free SSLs for your wordpress websites, Virtual Server monitoring 24/7 and regular 
          Malware Scanning, ensuring that your website data and connection is secure. </div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingseven">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseFive">
            Can I scale my resources with YouStable's WordPress VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes! YouStable’s WordPress VPS Hosting plans are extremely Scalable. You can upgrade your web resources like RAM, NMVe storage and CPU threads as your website’s traffic and resource demand grows, ensuring best website performance. </div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingeight">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseFive">
          What is the uptime guarantee for YouStable's WordPress VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">YouStable’s WordPress VPS Hosting guarantees 99.99% Uptime! It ensures that your website is available 24/7. User across the globe can access your wordpress website at all times.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingnine">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapseFive">
          Do YouStable's WordPress VPS Hosting plans include backups?
          </button>
        </h2>
        <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes! YouStable’s WordPress VPS Hosting plans offer Weekly Backup plan ensuring your data is kept safe and secure at every step. Along with that, get One-click Data restoration to get back your previous data as per the requirement.</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--customer support-->
<div class="container customer-support-container">
    <section class="bg-light-yellow" style="padding: 15px;">
        <div class="row reverse ">
            <div class="col-lg-6 support-rev">
                <div class="mt-4">
                    <h2 class="ay_heading text-start">Have Concerns?</h2>
                    <p class="server-titles py-4">Connect to our Best Technical Support Team now! Our Staff is online
                        24/7 and accessible via LiveChat Window, Ticket Support, Call and email.</p>
                </div>
                <div class="d-flex">
                    <div class="contact-hosting one">
                        <img src="assets/img/phone-call.png">
                    </div>
                    <div class="mb-4">
                        <a href="tel:+919616782253" class="contact-hosting one" data-toggle="tooltip" data-placement="top" target="_self" data-bs-original-title="Contact us anytime">+919616782253</a>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="contact-hosting one">
                        <img src="assets/img/newImages/Expert-Support.svg">
                    </div>
                    <div class="mb-4">
                        <a href="javascript:void(Tawk_API.toggle())" class="contact-hosting one" data-toggle="tooltip" data-placement="top" target="_self" data-bs-original-title="Click to Chat">Live Chat with Experts</a>
                    </div>
                </div>
                <div>

                </div>
            </div>
            <div class="col-lg-6 support-rev">
                <img class="thinking-girl support-imgs" src="assets/img/support-new.png">
            </div>
        </div>
    </section>
</div><br>


<?php include ('inc/footer.php') ?>