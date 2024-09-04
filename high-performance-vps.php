<?php
$page = 'high-performance-vps';
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
    padding: 20px 10px;
}
 .hero-con img{
    width: 10%;
 }


  /*unknown css*/
</style>



<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
          <p class="experience">Unbeatable Performance VPS</p>
          <h1 class="Banner-Heading padding-heading robust">High Performance VPS Hosting
          </h1>
          <p class="Banner-title p-0">Experience unbeatable High Performance VPS Hosting with advanced DDoS protection, NVMe storage, root access, and 24/7 support!
          </p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 hero-con"><img src="assets/img/DEDICATED1-IPV4.svg" alt="tick"
                  class="tick-square"> Dedicated 1 IPv4</li>
              <li class="purple-text_dark hero-con"><img src="assets/img/multiple-control-panel.svg" alt="tick"
                  class="tick-square"> Multiple Control panel</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 hero-con"><img src="assets/img/Nvme-ssd-storage1.svg" alt="tick"
                  class="tick-square">NVMe SSD Storage
                  </li>
              <li class="purple-text_dark hero-con"><img src="assets/img/litespeed-based-server.svg" alt="tick"
                  class="tick-square">LiteSpeed Based Server </li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/high-performance_NVMeSSD-Dedicated.png" alt="Banner" srcset="">
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
<h2 class="server-heading shared-heading-plan">Pick the Best High Performance VPS Hosting Plans
<br class="remove-mobile">Price and Plans</h2>
<p class="server-title">Unleash unparalleled power, enjoy 24/7 expert support, and scale effortlessly with our Affordable High-Performance VPS plans. Choose the perfect fit for your needs today!
</p>
</div>




<div class="row nav nav-pills wid-more" id="pills-tab" role="tablist" style="padding: 4px;">
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true" tabindex="-1">1 Year</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-half-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab" aria-controls="pills-half-yearly" aria-selected="false" tabindex="-1">6 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked " id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false">1 Month</button></div>
    </div>


    <div class="tab-content" id="pills-tabContent"> <!-- start tab content -->

      <div class="tab-pane fade tab-titles" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
        <!-- start monthly tab plan -->
        <div class="row flex_unset">
          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1149</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>14.46</p>
                  <p class="per_month">/month</p>
                </div>
                <!-- <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p> -->
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

                <!--<div class="free_setup btn-yellow " bis_skin_checked="1">-->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <!--<div class="most-popular-hosting btn-light-purple">-->
              <!--    <p class="m-0">Experts Choice</p>-->
              <!--</div>-->
              <div class="upper-card" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vProfessional</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1999</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>25.14</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!-- <p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p> -->

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

                <!--<div class="free_setup btn-light-purple" bis_skin_checked="1">-->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading ">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3499</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>44.02</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!-- <p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p> -->

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

                <!--<div class="free_setup btn-yellow " bis_skin_checked="1"> -->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>


          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>59.11</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!-- <p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p> -->

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

                <!--<div class="free_setup btn-yellow " bis_skin_checked="1">-->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- close monthly plan -->


      <div class="tab-pane fade tab-titles" id="pills-half-yearly" role="tabpanel" aria-labelledby="pills-half-yearly-tab"> <!-- start Half Yearly tab plan -->
        <div class="row flex_unset">
          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>804</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>10.12</p>

                  <p class="per_month">/month</p>
                </div>
                <!-- <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p> -->
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
              <!--<div class="most-popular-hosting btn-light-purple">-->
              <!--    <p class="m-0">Experts Choice</p>-->
              <!--</div>-->
              <div class="upper-card" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vProfessional</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1399</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>17.59</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!-- <p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p> -->
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
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2449</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>30.81</p>

                  <p class="per_month">/month</p>
                </div>
                <!-- <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p> -->
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
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3289</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>41.37</p>

                  <p class="per_month">/month</p>
                </div>
                <!-- <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p> -->
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
      </div> <!-- Close Half Yearly Plan -->



      <div class="tab-pane fade tab-titles active show" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab"> <!-- start Yearly tab plan -->
        <div class="row flex_unset">

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>574</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>7.23</p>

                  <p class="per_month">/month</p>
                </div>
                <!-- <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p> -->
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
              <!--<div class="most-popular-hosting btn-light-purple">-->
              <!--    <p class="m-0">Experts Choice</p>-->
              <!--</div>-->
              <div class="upper-card" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vProfessional</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>999</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>12.57</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!-- <p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p> -->
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
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1749</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>22.01</p>
                  <p class="per_month">/month</p>
                </div>
                <!-- <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p> -->
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
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2349</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>29.55</p>
                  <p class="per_month">/month</p>
                </div>
                <!-- <p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p> -->
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
      </div> <!-- Close Yearly Plan -->

    </div> <!-- close all tab content -->
  </div>
</section>

<!--new list section-->
<section class="new-list-section container">
    <div class="text-center margin-top-bottom ideak-choice">
<h2 class="server-heading shared-heading-plan">All High Performance VPS Plans Come With
</h2>
<p class="server-title">From professional business to enterprise, we’ve got you covered!
</p>
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
                    <li class="support-list">30-Day Money-Back Guarantee</li>
                </ul>
            </div>
            <div class="col-lg-3 list-imp">
                <ul style="list-style: disc;">
                    <li class="support-list">CDN Add-on</li>
                    <li class="support-list">24/7 Real-time Monitoring
                    </li>
                    <li class="support-list">Free Migration</li>
                    <li class="support-list">HTTP/2 Enabled Servers</li>
                </ul>
            </div>
            <div class="col-lg-3 list-imp">
                 <ul style="list-style: disc;">
                    <li class="support-list">Regular Security Patching
                    </li>
                    <li class="support-list">Staging Environment</li>
                    <li class="support-list">Unlimited SQL Databases
                    </li>
                    <li class="support-list">Multiple Datacenter Network</li>
                </ul>
            </div>
            <div class="col-lg-3 list-imp">
                 <ul style="list-style: disc;">
                    <li class="support-list">Ubuntu 20.04/22.04</li>
                    <li class="support-list">Enterprise Hardware</li>
                    <li class="support-list">MariaDB</li>
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
        <h2 class="ay_heading">Top High Performance VPS Hosting Features </h2>
        <p class="server-title title_sides_width pb-3">Experience high scalable resources, 99.99% guaranteed uptime, and cutting-edge server hardware with High Performance VPS Server Hosting. <br class="remove-mobile"> Benefit from full root access and free migration—all at an affordable cost.
        </p>
       
        <P></P>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/scalable-resources-y7777.svg" alt="root-access">
              <h5 class="ay-heading">Scalable Resources</h5>
              <p class="ay-title m-0 w-100">Effortlessly scale your resources to meet the demands of your growing business. Our High-Performance VPS Hosting ensures optimal flexibility and top-tier performance, tailored to your specific needs.
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/99.99_-uptime-y7777.svg" alt="free-migration">
              <h5 class="ay-heading">99.99% Server Uptime</h5>
              <p class="ay-title m-0 w-100">Rely on industry-leading 99.99% uptime, ensuring your website remains accessible 24/7. Our High-Performance VPS Hosting delivers unmatched reliability, so your site is always online for your visitors.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/amd-epyc-processors.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">AMD EPYC Processors</h5>
              <p class="ay-title m-0 w-100">Harness the power of AMD EPYC processors, offering superior speed and performance. Experience a significant boost in your website's productivity with High-Performance VPS Hosting.</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable mb-4">
            <div class="feature_cols_desciption">
              <img src="assets/img/multiple-server-location-y7777.svg" alt="ssl">
              <h5 class="ay-heading">Multiple Server locations</h5>
              <p class="ay-title m-0 w-100">Choose from over 10+ strategically located servers worldwide. Our European-based servers, especially in the Netherlands, further minimise latency and provide the fastest connection speeds for your website visitors.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable mb-4">
            <div class="feature_cols_desciption">
              <img src="assets/img/full-root-access-y7777.svg" alt="granted-resources">
              <h5 class="ay-heading">Full Root Access</h5>
              <p class="ay-title m-0 w-100">Get 100% authority over your VPS server! Enjoy complete control over your server with full root access, allowing you to customize and configure your High-Performing VPS to perfectly fit your website's needs. 
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable mb-4">
            <div class="feature_cols_desciption">
              <img src="assets/img/weekly-backup-y7777.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Weekly Backup</h5>
              <p class="ay-title m-0 w-100">Secure your website's data with weekly backups, enabling quick and easy data recovery when needed, further ensuring that your critical information is always highly protected and safe from accidental loss.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/dedicated-ipv4-y7777.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Dedicated IPv4 Address</h5>
              <p class="ay-title m-0 w-100">Enhance your website’s performance and security with a dedicated IPv4 address. It offers complete isolation, thereby improving SEO, providing better security, and ensuring reliable online performance.
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/free-migration-y7777.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Free Migration </h5>
              <p class="ay-title m-0 w-100">Switch Now!! to our High-Performance VPS Hosting with ease. We offer free website migration services, ensuring a smooth transition to our platform without any hassle and zero downtime.
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/24X7-support-y7777.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">24*7 Support</h5>
              <p class="ay-title m-0 w-100">Receive round-the-clock help from our VPS expert support team. VPS Hosting plans include 24/7 Local support via LiveChat and the Ticket system, ensuring any server-related issues are resolved swiftly.</p>
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
      <h2 class="Banner-Heading">High-Performance VPS Hosting <br class="remove-mobile"> Engineered for Peak Efficiency!</h2>
      <Experience class="server-title server-title-width mt-0 mt-p">Experience unparalleled performance with our High performance VPS hosting, specifically designed to deliver maximum speed, high reliability and 100% efficiency at no hidden cost. Enjoy premium features that elevate your server’s capabilities without compromising quality.
      </p>
    </div>

    <div class="row nav nav-pills mb-3 tab-four-heads" id="pills-tabs" role="tablist">
      <div class="col-lg-4 quality-standard">
        <p class="nav-item" role="presentation">
          <button class="nav-link active teb-bg-purple" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            <li class="color-black-1"><span class="text-dark dot"><img src="assets/img/cutting-edge.svg" alt="migration"></span>Cutting-Edge Performance</li>
          </button>
        </p>
      </div>
      <div class="col-lg-4 quality-standard">
        <p class="nav-item" role="presentation">
          <button class="nav-link teb-bg-purple" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" tabindex="-1">
            <li class="color-black-1"><span class="text-dark dot"><img src="assets/img/global.svg" alt="migration"></span>Global Data Centers</li>
          </button>
        </p>
      </div>
      <div class="col-lg-4 quality-standard">
        <p class="nav-item" role="presentation">
          <button class="nav-link teb-bg-purple" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" tabindex="-1">
            <li class="color-black-1"><span class="text-dark dot"><img src="assets/img/ipv4.svg" alt="migration"></span>Dedicated 1 IPv4</li>
          </button>
        </p>
      </div>

    </div>

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active border tab-titles" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        
        <div class="row">
        <div class="col-lg-8">
            <h5 class="heading-servers m-0">Cutting-Edge Performance</h5>
        <p class="server-title py-3 m-0">Super-charge your website’s productivity with our latest high-performance VPS server giving advanced computing power, enhanced security and seamless scalability that is perfectly ideal for resource-intensive applications and demanding workloads.

</p>
      </div>
        <div class="col-lg-4">
       <img src="assets/img/cutting-edge.png" alt="free-domain" class="content-images">
      </div>
      </div>
      </div>
      <div class="tab-pane fade border tab-titles" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row">
        <div class="col-lg-8">
            <h5 class="heading-servers m-0">Global Data Centers</h5>
        <p class="server-title py-3 m-0">Our High Performance VPS Hosting offers multiple data center locations, including European-located servers in the Netherlands, USA, and in India, ensuring global outreach, lowest latency, and optimal performance no matter where your audience is located.
        </p>
      </div>
        <div class="col-lg-4">
       <img src="assets/img/global.png" alt="free-domain" class="content-images">
      </div>
      </div>
        
      </div>
      <div class="tab-pane fade border tab-titles" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="row">
        <div class="col-lg-8">
            <h5 class="heading-servers m-0">Dedicated 1 IPv4</h5>
        <p class="server-title py-3 m-0">Boost your online presence with a Dedicated IPv4 address, providing an isolated, secure, and consistent website performance for your important e-business operations.
        </p>
      </div>
        <div class="col-lg-4">
       <img src="assets/img/dedicated-ip.png" alt="free-domain" class="content-images">
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
            What is High-Performance VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">High-Performance VPS Hosting is like having a super turbo-charged virtual server for your website that offers powerful web resources like RAM/ Storage/ Bandwidth/ CPU using virtualization technology, ensuring your website runs faster, handles more traffic, and performs best at peak times. 
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What are the Benefits of Choosing a High-performance VPS Server?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Choosing a High-Performance VPS means you get blazing-fast website speed, enhanced reliability, and the ability to handle the fluctuating traffic without any interruption. Plus you have 100% server control which allows you to fully customise your server as per your need.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            How much Does High Performance VPS cost?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">The cost of High Performance VPS depends upon what specifics you require. However, starting price of High Performance VPS is ₹574 per month wherein you’ll get 1vCore CPU, 4GB RAM, 50GB NVMe SSD storage, 1TB Bandwidth, 1 dedicated IPv4 address along with 100% Full root server access and Free control Panel for easy website management.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            How does High-Performance VPS Hosting enhance website security?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">High Performance VPS Hosting boosts your website’s security by isolating your server resources using virtualization technology, which further reduces the risk of vulnerabilities from neighbouring websites. Along with that, your website gets dedicated Firewall, advanced DDoS protection and regular security updates, ensuring your website is safe from emerging threats.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            What is a money-back guarantee for high-performance VPS hosting?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Get a 30 days money-back guarantee for high performance VPS hosting services, allowing you to test the performance, features and support services. You can cancel the services unquestionably and get a quick refund, if you are not satisfied with the services.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingsix">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapseFive">
            Are backups included with High-Performance VPS Hosting plans?
          </button>
        </h2>
        <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, Automated Backups are part of the High Performance VPS hosting package. These backups are very important for safeguarding your data, allowing you to quickly restore your website in case of data loss or security breaches.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingseven">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseFive">
            Is High-Performance VPS Hosting suitable for eCommerce websites?
          </button>
        </h2>
        <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Absolutely Yes! High Performance VPS Hosting is perfect for eCommerce websites as it offers speed, security and scalability needed to handle high traffic and bulky transaction volumes. Dedicated web resources and enhanced performance offers your store with smooth shopping experience, thereby boosting sales.</div>
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