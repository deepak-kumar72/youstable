<?php
$page = 'cpanel-vps';
include ('inc/header.php');
?>

<style>
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
    padding: 0;
    margin-top: 20px;
    margin-bottom: 78px;
  }

  section.operating-sytems {
    padding: 0;
    margin-top: 100px;
  }

  section.review-content,
  .customer-review {
    margin-bottom: 80px;
  }
</style>



<!-- Banner section (shared hosting) -->
<section class="banner-sec ">
  <div class=" container">
    <div class="row align-items-center reverse-column cpanel-power cpanel-two">
      <div class="col-md-6">
        <div class="banner-left-content">
          <p class="experience">cPanel VPS Hosting</p>
          <h1 class="Banner-Heading padding-heading robust">cPanel VPS Hosting in India</h1>
          <p class="Banner-title p-0">Experience the power and flexibility you need while simplifying hosting management and protecting your site within minutes with YouStable's cPanel VPS</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/New-NGINX-Server-Technology.svg"
                  alt="tick" class="tick-square">24/7 Support</li>
              <li class="purple-text_dark"><img src="assets/img/easy-to-manage-control-panel.svg" alt="tick"
                  class="tick-square">NVMe SSD Drive</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/managed-security-modules.svg" alt="tick"
                  class="tick-square">99.99% Uptime</li>
              <li class="purple-text_dark"><img src="assets/img/Easy-Scalability-of-resources.svg" alt="tick"
                  class="tick-square">cPanel/WHM Optimized VPS</li>
            </ul>
          </div>
        </div>
        <button class="btn-yellow btn-explore-plan" type="submit">Compare Plans<i
            class="fa-solid fa-arrow-right"></i></button>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="w-100 banner_img floatings" src="assets/img/cpanel-VPS-hero-image.png" alt="Banner" srcset="">
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
<section class="explore-section vps hosting-plan cpanel-vps-margin" id="explore">
  <div class="container">
    <div class="text-center margin-top-bottom ideak-choice">
      <h2 class="server-heading shared-heading-plan">cPanel VPS Hosting Plans for Your Growing Business</h2>
      <p class="server-title">Custom-made plan with your choice of the control panel. Get quotations of<br
          class="remove-mobile"> YouStable’s cPanel VPS Hosting now.</p>
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
          <div class="col-md-4 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>979</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>14.46</p> -->
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=monthly"
                  class="indian-host-price" target="_self" class="link-color-black"><button
                    class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=341&billingcycle=monthly"
                  class="usa-host-price" target="_self" class="link-color-black"><button
                    class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a> -->

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
                    <p>750 GB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>CPanel</p>
                  </div>
                  <!-- <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Free Control Panel*</p>
                  </div> -->
                </div>

                <!--<div class="free_setup btn-yellow " bis_skin_checked="1">-->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>

          <div class="col-md-4 explore-cols">
            <div class="position-relative h-100">
              <!--<div class="most-popular-hosting btn-light-purple">-->
              <!--    <p class="m-0">Experts Choice</p>-->
              <!--</div>-->
              <div class="upper-card upper-card-vps" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vProfessional</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1699</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>25.14</p> -->
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=monthly"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=342&billingcycle=monthly"
                  class="text-white usa-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->
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
                    <p>cPanel</p>
                  </div>
                  <!-- <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Free Control Panel*</p>
                  </div> -->
                </div>

                <!--<div class="free_setup btn-light-purple" bis_skin_checked="1">-->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>

          <div class="col-md-4 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading ">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2469</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>44.02</p> -->

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=monthly"
                  class="indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=343&billingcycle=monthly"
                  class="usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                    Started</button></a> -->
                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>4 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>8 GB RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>120 GB NVMe SSD</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>1.75 TB Bandwidth</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>cPanel</p>
                  </div>
                  <!-- <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Full Root Access</p>
                  </div>
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick">
                    <p>Free Control Panel*</p>
                  </div> -->
                </div>

                <!--<div class="free_setup btn-yellow " bis_skin_checked="1"> -->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>


          <!-- <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
          
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>59.11</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
               
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=monthly"
                  class="indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=344&billingcycle=monthly"
                  class="usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
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
          </div> -->
        </div>
      </div>
      <!-- close monthly plan -->


      <div class="tab-pane fade tab-titles" id="pills-half-yearly" role="tabpanel"
        aria-labelledby="pills-half-yearly-tab"> <!-- start Half Yearly tab plan -->
        <div class="row flex_unset">
          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>804</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>10.12</p>

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=341&billingcycle=semiannually&promocode=VPS30"
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
                <h4 class="hosting-heading">vProfessional</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1399</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>17.59</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=semiannually&promocode=VPS30"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=342&billingcycle=semiannually&promocode=VPS30"
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
                <h4 class="hosting-heading">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2449</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>30.81</p>

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=343&billingcycle=semiannually&promocode=VPS30"
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
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3289</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>41.37</p>

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=344&billingcycle=semiannually&promocode=VPS30"
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
                <h4 class="hosting-heading">vStart</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>574</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>7.23</p>

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=341&billingcycle=annually&promocode=VPS50"
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
                <h4 class="hosting-heading">vProfessional</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>999</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>12.57</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=annually&promocode=VPS50"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=342&billingcycle=annually&promocode=VPS50"
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
                <h4 class="hosting-heading">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1749</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>22.01</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=343&billingcycle=annually&promocode=VPS50"
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
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2349</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>29.55</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=344&billingcycle=annually&promocode=VPS50"
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


<!--Feature in Market-->

<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">cPanel VPS Hosting Features</h2>
        <p class="server-title title_sides_width pb-3">Industry-leading technology with faster loading sites, YouStable is ready to support you in all ways.
</p>
        <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
        <P></P>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/migration.png" alt="migration">
              <h5 class="ay-heading">Free Migration</h5>
              <p class="ay-title m-0 w-100">Transfer cPanel accounts from remote servers effortlessly. Migrations are a breeze, and YouStable's in-house technical support team will provide guidance every step of the way.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/secure-domain.png" alt="domain">
              <h5 class="ay-heading">Control Domains</h5>
              <p class="ay-title m-0 w-100">Enabling tech-savvy website owners with the capability to manage their domain network. This feature empowers them to effortlessly add or delete subdomains, efficiently handle DNS</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/email-calendar.png" alt="calendar">
              <h5 class="ay-heading">Create Calendars and Emails</h5>
              <p class="ay-title m-0 w-100">With the powerful email and calendar functionalities integrated into cPanel, users can easily create new email accounts, establish shared calendars, and benefit from multiple layers of spam protection.</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/server-security.png" alt="server-security">
              <h5 class="ay-heading">Security and Protection</h5>
              <p class="ay-title m-0 w-100">By incorporating security measures such as SSL certificates and multi-factor authentication into cPanel VPS Hosting, you can protect both your machines and your clients effectively.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/View-and-Identify-Server-Statistics.svg" alt="server">
              <h5 class="ay-heading">Seamless Scaling</h5>
              <p class="ay-title m-0 w-100">Scale your cPanel VPS hosting seamlessly, effortlessly meeting growing demands and maximizing performance, ensuring smooth and scalable hosting experience.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/create-website.png" alt="monitoring-alerts">
              <h5 class="ay-heading">Guarateed Uptime</h5>
              <p class="ay-title m-0 w-100">Maximize your online productivity with our reliable cPanel VPS Hosting, delivering a rock-solid 99.99% uptime guarantee for consistent website accessibility and optimal user experience</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Operating systems -->
<section class="operating-sytems operating-sytems-one">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading">Maximum Operating System Support!</h2>
      <p class="operating-title-width"> YouStable offers custom operating system installation support! No matter which
        OS you need in our<br class="remove-mobile"> CyberPanel VPS hosting server, YouStable has got it all for you.
      </p>
      <div class="row">
        <div class="col-md-3 server-cols">
          <div class="bg-lt-blacks">
            <img src="assets/img/servers/almalinux.svg" alt="open cart" class="">
          </div>
        </div>
        <div class="col-md-3 server-cols">
          <div class="bg-lt-blacks">
            <img src="assets/img/servers/rocky.svg" alt="open cart" class="">
          </div>
        </div>
        <div class="col-md-3 server-cols">
          <div class="bg-lt-blacks">
            <img src="assets/img/servers/ubuntu.svg" alt="open cart" class="">
          </div>
        </div>
        <div class="col-md-3 server-cols">
          <div class="bg-lt-blacks">
            <img src="assets/img/servers/windows.svg" alt="open cart" class="">
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


<!--Sixth section (High quality Server) -->
<section class="high-q-server">
  <div class=" container">
    <div class="bg-purple purple" style="background: #fff;">
      <div class="text-center">
        <h2 class="server-heading">Industry-leading Technologies For Your Website!!</h2>
        <p class="server-title title_sides-width">YouStable relies on the most renowned and trusted technologies to
          provide better and unbeatable services</p>
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
            What is cPanel VPS Hosting and Its benefits?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">A cPanel VPS is a virtual server equipped with pre-installed cPanel (control panel) and all essential resources, enabling effortless website management on the internet. Virtual private servers can be intricate to operate, but cPanel simplifies the process with its user-friendly interface.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Why Deploy cPanel on a YouStable VPS?

          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">In order to guarantee optimal performance, extremely fast loading speed, and robust security for your website, we operate versatile servers specifically optimized for cPanel. This enables seamless coordination among them, preventing any delays or technical glitches that could lead to downtime for your website.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            What is the Difference Between cPanel VPS and cPanel Hosting?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">The primary distinction between cPanel VPS and cPanel hosting lies in the hosting environment they offer. In cPanel VPS hosting, you receive your own virtual private server that provides dedicated resources and complete root access.
            <br>
            This grants you greater control over your resources, allowing customization to fulfill your specific needs and requirements. On the other hand, cPanel hosting involves hosting your website on a shared server alongside other websites.
            <br>
            Consequently, in cPanel hosting, you have less control over the server's resources and may encounter limitations in installing and running custom software or applications.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Can I Migrate From DirectAdmin to cPanel VPS Hosting?

          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">With the assistance of our dedicated team of certified technical experts, you can effortlessly transfer your website from DirectAdmin to cPanel VPS servers. Our team works around the clock to ensure a swift and seamless migration of your website's data to our reliable servers, minimizing the risk of any data loss or errors.
            <br>
            However, the duration of the migration process may vary depending on the size of your website's files. For instance, if you operate a large-scale e-commerce website with a substantial number of listed products, we take extra care during the migration, which might result in a slight delay.
          </div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            I already have VPS hosting, but I want to switch to cPanel VPS. Any tips?

          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <If class="accordion-body">If you have previously selected a different control panel for your websites, like DirectAdmin, CyberPanel, or any other widely used control panel in the market, your remaining option is to migrate your website to cPanel VPS servers, which are optimized for control panel functionality.
          <br>
          However, if you have recently purchased VPS servers and have not yet installed a control panel, you can effortlessly install cPanel.
          </div>
        </div>
        <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive1">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive1" aria-expanded="false" aria-controls="flush-collapseFive1">
            Do you offer a money-back guarantee?

          </button>
        </h2>
        <div id="flush-collapseFive1" class="accordion-collapse collapse" aria-labelledby="flush-headingFive1"
          data-bs-parent="#accordionFlushExample">
          <If class="accordion-body">We provide a 30-days refund policy alongside our VPS Hosting packages. Our refund policy guarantees a complete reimbursement should you find our service unsatisfactory.
          </div>
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