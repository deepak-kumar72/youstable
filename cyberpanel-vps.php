<?php
$page = 'cyberpanel-vps';
include('inc/header.php');
?>

<style>
  .row.align-items-center.reverse-column {
    margin-top: 36px;
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

  section.rating-section {
    padding: 0 !important;
    margin-bottom: 78px;
  }

  section.operating-sytems {
    padding-top: 0;
    padding-bottom: 0;
    margin: 100px 0;
  }

  section.review-content,
  .customer-review {
    margin-bottom: 80px;
  }

  section.banner-sec.share-bg {
    margin-top: 0;
  }

  @media screen and (max-width: 768px) {
    img.cyberpanel-server-hero {
      width: 80%;
    }
  }
</style>



<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
          <p class="experience"> Included with VPS Hosting</p>
          <h1 class="Banner-Heading padding-heading robust">Fast,Easy & Secure CyberPanel VPS Hosting</h1>
          <p class="Banner-title p-0">Get a preconfigured CyberPanel VPS server in India with instant setup. Benefit
            from our CyberPanel Addons, including easy backup, OpenLiteSpeed, and restore features.</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/open-litespeed.svg" alt="tick"
                  class="tick-square">OpenLiteSpeed Optimised VPS</li>
              <li class="purple-text_dark"><img src="assets/img/easy-to-manage-control-panel.svg" alt="tick"
                  class="tick-square">1 IPv4 Dedicated IP</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/managed-security-modules.svg" alt="tick"
                  class="tick-square">Easy Scalability for Resources</li>
              <li class="purple-text_dark"><img src="assets/img/scalability.svg" alt="tick" class="tick-square">Indian
                Data Center</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Start Now <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/cyberpanel-VPS-hero-image.png" alt="Banner" srcset="">
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
<section class="explore-section vps hosting-plan " id="explore">
  <div class="container">
    <div class="text-center margin-top-bottom ideak-choice">
      <h2 class="server-heading shared-heading-plan">Best And Affordable CyberPanel VPS Hosting in India</h2>
      <p class="server-title">Are you in need of CyberPanel VPS Hosting? We have exactly what you're looking for, and
        even more!</p>
    </div>





    <div class="row nav nav-pills wid-more" id="pills-tab" role="tablist" style="padding: 4px;">
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked active" id="pills-monthly-tab"
          data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-monthly"
          aria-selected="true" tabindex="-1">1 Year</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-half-yearly-tab"
          data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab"
          aria-controls="pills-half-yearly" aria-selected="false" tabindex="-1">6 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked " id="pills-yearly-tab"
          data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-yearly"
          aria-selected="false">1 Month</button></div>
    </div>


    <div class="tab-content" id="pills-tabContent"> <!-- start tab content -->

      <div class="tab-pane fade  tab-titles" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
        <!-- start monthly tab plan -->
        <div class="row flex_unset">
          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1149</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>14.46</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=306&billingcycle=monthly"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=306&billingcycle=monthly"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>4 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>50 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Free Control Panel*</p>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <!--<div class="most-popular-hosting btn-light-purple">-->
              <!--    <p class="m-0">Experts Choice</p>-->
              <!--</div>-->
              <div class="upper-card upper-card-vps" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vPro-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1999</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>25.14</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=307&billingcycle=monthly"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=307&billingcycle=monthly"
                  class="text-white usa-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>6 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>100 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1.5 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Free Control Panel*</p>
                  </div>

                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading ">vPopular-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3499</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>44.02</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=308&billingcycle=monthly"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=308&billingcycle=monthly"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>4 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>12 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>150 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2.0 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Free Control Panel*</p>
                  </div>

                </div>


              </div>
            </div>
          </div>


          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading">vStable-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>59.11</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=310&billingcycle=monthly"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=310&billingcycle=monthly"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>6 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>16 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>200 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2.5 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Free Control Panel*</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div> <!-- close monthly plan -->


      <div class="tab-pane fade   tab-titles" id="pills-half-yearly" role="tabpanel"
        aria-labelledby="pills-half-yearly-tab"> <!-- start Half Yearly tab plan -->
        <div class="row flex_unset">
          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>804</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>10.12</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=306&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=306&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>4 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>50 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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
              <div class="upper-card upper-card-vps" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vPro-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1399</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>17.59</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=307&billingcycle=semiannually&promocode=VPS30"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=307&billingcycle=semiannually&promocode=VPS30"
                  class="text-white usa-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>6 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>100 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1.5 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vPopular-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2449</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>30.81</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=308&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=308&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>4 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>12 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>150 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2.0 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStable-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3289</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>41.37</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=310&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=310&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>6 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>16 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>200 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2.5 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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



      <div class="tab-pane fade show active tab-titles" id="pills-yearly" role="tabpanel"
        aria-labelledby="pills-yearly-tab"> <!-- start Yearly tab plan -->
        <div class="row flex_unset">

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>574</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>7.23</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=306&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=306&billingcycle=annually&promocode=VPS50"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>4 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>50 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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
              <div class="upper-card upper-card-vps" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vPro-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>999</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>12.57</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=307&billingcycle=annually&promocode=VPS50"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=307&billingcycle=annually&promocode=VPS50"
                  class="text-white usa-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>6 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>100 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1.5 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vPopular-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1749</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>22.01</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=308&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=308&billingcycle=annually&promocode=VPS50"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>4 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>12 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>150 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2.0 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStable-Cyber</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2349</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>29.55</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=310&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=310&billingcycle=annually&promocode=VPS50"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>6 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>16 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>200 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>2.5 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Dedicated IPv4</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
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





<!-- Operating system -->
<section class="operating-sytems operating-sytems-one">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading">Available Operating Systems</h2>
      <p class="operating-title-width"> Manage your website effortlessly without any limitations, thanks to the seamless
        compatibility of our Indian<br class="remove-mobile"> VPS servers with your preferred operating system. Our
        servers are designed to work smoothly with all <br>operating systems currently available in the market.
      </p>
      <div class="row">
        <div class="col-md-4 server-cols pb-4">
          <div class="bg-lt-blacks">
            <img src="assets/img/servers/almalinux.svg" alt="open cart" class="">
          </div>
        </div>
        <div class="col-md-4 server-cols pb-4">
          <div class="bg-lt-blacks">
            <img src="https://youstable.in/assets/img/os/centos.png" alt="open cart" class="">
          </div>
        </div>
        <div class="col-md-4 server-cols pb-4">
          <div class="bg-lt-blacks">
            <img src="assets/img/servers/ubuntu.svg" alt="open cart" class="">
          </div>
        </div>
        <div class="col-md-4 server-cols pb-4">
          <div class="bg-lt-blacks">
            <img src="https://youstable.in/assets/img/os/windows.png" alt="open cart" class="">
          </div>
        </div>
        <div class="col-md-4 server-cols pb-4">
          <div class="bg-lt-blacks">
            <img src="https://youstable.in/assets/img/os/debian.png" alt="open cart" class="">
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 choose-plan-now">
      <a href="#explore" class="link-color-black"><button class="btn-yellow   get-tarted-table get-tarted-table-one"
          type="submit">Choose Plan Now</button></a>
    </div>

  </div>
</section>



<!--Feature in Market-->

<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">CyberPanel VPS Hosting Features</span></h2>
        <p class="server-title title_sides_width pb-3">YouStable offers cutting-edge technology for faster loading
          websites, and we are fully equipped to provide comprehensive support in every aspect</p>
        <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
        <P></P>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Free-and-open-source.svg" alt="root-access">
              <h5 class="ay-heading">Free and Open Source</h5>
              <p class="ay-title m-0 w-100">CyberPanel, the pioneering open-source control panel that offers seamless
                management of LiteSpeed Enterprise and OpenLiteSpeed. Easily handle your hosting needs with CyberPanel
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Install-with-one-click.svg" alt="free-migration">
              <h5 class="ay-heading">1-Click CyberPanel Install</h5>
              <p class="ay-title m-0 w-100">Provide one-click installation for popular frameworks such as WordPress,
                Joomla, Drupal, Mautic, and various other content management system (CMS) platforms.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Let's-Encrypt-SSL.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">Let's Encrypt SSL</h5>
              <p class="ay-title m-0 w-100">CyberPanel VPS Hosting has default auto-renewal activated to ensure that
                your Certificates are automatically renewed before they expire!</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/cache-LiteSpeed.svg" alt="ssl">
              <h5 class="ay-heading">
                Cache LiteSpeed</h5>
              <p class="ay-title m-0 w-100">The LSCache plugin is unparalleled on a Litespeed server. It ensures fast
                loading times for your websites through efficient page and server-level caching.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Unlimited-installations.svg" alt="granted-resources">
              <h5 class="ay-heading">Unlimited installations</h5>
              <p class="ay-title m-0 w-100">There are no limitations on the number of installations or websites within
                the free CyberPanel control panel.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Monitor-Easy-Resources.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Easy Monitoring</h5>
              <p class="ay-title m-0 w-100">You have the ability to initiate a restart of the LiteSpeed server or
                suspend the troublesome website. You can also monitor your CPU, memory, and disk usage at any time. </p>
            </div>
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
        <h2 class="server-heading">Technologies YouStable Works With</h2>
        <p class="server-title title_sides-width">We are committed to delivering top-notch hosting in India by
          harnessing industry-leading technologies that will <br class="remove-mobile">optimize your website's speed to
          the fullest.</p>
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
    <?php include('animate-text.php') ?>

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
include('inc/customer-reviews.php');
?>



<!--(FAQ)-->
<section class="faq faq-1">
  <div class="container">
    <h2 class="text-center faq-question">Frequently Asked Questions</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What is CyberPanel VPS hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">CyberPanel VPS hosting utilizes the CyberPanel control panel that is installed on
            the Virtual Private Server (VPS). It has an intuitive interface for web site management as well as server
            resource control. With features such as the one-click WordPress installing, LiteSpeed web server, integrated
            email management, as well as security measures CyberPanel VPS hosting offers the most efficient hosting
            experience. <br>Users can manage databases, domains and email accounts, as well as monitor server resources
            and ensure maximum performance for their websites. It's a great option for both businesses and individuals
            who want a straightforward but effective control panel to manage their VPS hosting requirements.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            How to setup CyberPanel manually on VPS Server?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            Follow these steps to set-up your Virtual Private Server (VPS):

            Purchase the best CyberPanel VPS hosting for your site
            <ul style="margin-left:30px;">

              <li style="list-style-type:disc;">
                Root Access Login
              </li>
              <li style="list-style-type:disc;">
                Install the Operating System of your choice
              </li style="list-style-type:disc;">
              <li style="list-style-type:disc;">Install Web Server
              </li>
              <li style="list-style-type:disc;">Install Database of your choice
              </li>
              <li style="list-style-type:disc;">Install PHP with the most compatible version.</li>
            </ul>
            Add a new user to your VPS server in just 5 steps. <ul style="margin-left:30px;">

              <li style="list-style-type:disc;">
                Step 1: Login in to your VPS through SSH
              </li>
              <li style="list-style-type:disc;">
                Step 2: Update your server configurations
              </li style="list-style-type:disc;">
              <li style="list-style-type:disc;">Step 3: Create a new user
              </li>
              <li style="list-style-type:disc;">Step 4: Enable Public key authentication
              </li>
              <li style="list-style-type:disc;">Step 5: Set up your Firewall.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Does YouStable offer CyberPanel VPS hosting with root access?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">TYes, YouStable provides VPS hosting with complete root access, allowing you to
            have a completely unrestricted and isolated environment. You have the freedom to install your preferred
            operating system, along with essential components such as PHP, a database, and a web server. YouStable
            offers VPS hosting with root access to guarantee a premium private space at affordable rates.</div>
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
            <a href="tel:+919616782253" class="contact-hosting one" data-toggle="tooltip" data-placement="top"
              target="_self" data-bs-original-title="Contact us anytime">+919616782253</a>
          </div>
        </div>
        <div class="d-flex">
          <div class="contact-hosting one">
            <img src="assets/img/newImages/Expert-Support.svg">
          </div>
          <div class="mb-4">
            <a href="javascript:void(Tawk_API.toggle())" class="contact-hosting one" data-toggle="tooltip"
              data-placement="top" target="_self" data-bs-original-title="Click to Chat">Live Chat with Experts</a>
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

<?php include('inc/footer.php') ?>