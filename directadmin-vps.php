<?php
$page = 'directadmin-vps';
include('inc/header.php');
?>

<style>
  .row.align-items-center.reverse-column {
    margin-top: 20px;
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
    padding: 0;
    margin-top: 30px;
    margin-bottom: 78px;
  }

  section.operating-sytems {
    padding-top: 0;
    padding-bottom: 0;
    margin-top: 100px;
  }

  section.review-content,
  .customer-review {
    margin-bottom: 80px;
  }
</style>


<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg">
  <div class=" container">
    <div class="row align-items-center reverse-column cpanel-power cpanel-two">
      <div class="col-md-6">
        <div class="banner-left-content">
          <p class="experience"> 15% Discount first annual purchase</p>
          <h1 class="Banner-Heading padding-heading robust">DirectAdmin VPS Hosting
            Managed NVMe SSD VPS for Opensource Apps</h1>
          <p class="Banner-title p-0">Explore the immense expanse of the Open Source Universe, which our DirectAdmin VPS
            Hosting Plans offer to you with speed, stability, and security!</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/cutting-edge-technology.svg" alt="tick"
                  class="tick-square">Multilangual Interface

              </li>
              <li class="purple-text_dark"><img src="assets/img/stability.svg" alt="tick" class="tick-square">Friendly
                Control Panel
              </li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/NVMeSSD-Drive.svg" alt="tick"
                  class="tick-square">Cutting-Edge Technologies
              </li>
              <li class="purple-text_dark"><img src="assets/img/easy-to-manage.svg" alt="tick" class="tick-square">Easy
                Scalability of resources</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan"> Start Now <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/directadmin-vps-hero-image.png" alt="Banner" srcset="">
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
<section class="explore-section vps hosting-plan" id="explore">
  <div class="container">
    <div class="text-center margin-top-bottom ideak-choice">
      <h2 class="server-heading shared-heading-plan">An Ideal Choice For an Ideal DirectAdmin VPS Hosting</h2>
      <p class="server-title">Custom-made plan with your choice of the control panel. Get quotations of<br
          class="remove-mobile"> YouStable’s DirectAdmin VPS Hosting now.</p>
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

      <div class="tab-pane fade tab-titles" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
        <!-- start monthly tab plan -->
        <div class="row flex_unset">
          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>
                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1149</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>14.46</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=monthly"
                  class="indian-host-price" target="_self" class="link-color-black"><button
                    class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=341&billingcycle=monthly"
                  class="usa-host-price" target="_self" class="link-color-black"><button
                    class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>

                <div class="hosting_specification vps-specification">
                  <div class="d-flex gap-2 specifications vps-speci">
                    <img src="assets/img/speci-tick.png" class="specification-tick vps-tick vps-tick vps">
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
              <div class="upper-card upper-card-vps" style="background: #FEFDFF;">
                <!--<img class="hosting-icons" src="assets/img/vps-hosting.png" alt="vps hosting">-->
                <h4 class="hosting-heading">vProfessional</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1999</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>25.14</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=monthly"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=342&billingcycle=monthly"
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

                <!--<div class="free_setup btn-light-purple" bis_skin_checked="1">-->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading ">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3499</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>44.02</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=monthly"
                  class="indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                    Started</button></a>
                <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=343&billingcycle=monthly"
                  class="usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
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

                <!--<div class="free_setup btn-yellow " bis_skin_checked="1"> -->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>


          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card upper-card-vps">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
                  <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>59.11</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->
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

                <!--<div class="free_setup btn-yellow " bis_skin_checked="1">-->
                <!--    <p class="m-0">50% Off</p>-->
                <!--</div>-->

              </div>
            </div>
          </div>
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


<div class="container customer-support-container">
  <section class="bg-light-yellow" style="padding: 15px;">
    <div class="row reverse ">
      <div class="col-lg-6 support-rev">
        <div class="mt-4">
          <h2 class="ay_heading text-start">You Can also Install DirectAdmin for Yourself on CentOS now!</h2>
          <p class="server-titles py-4">Manage your server effortlessly by Installing DirectAdmin Hosting Panel. You may
            also configure the server with the default Apache Server or OpenLiteSpeed by setting them up.</p>
        </div>
      </div>
      <div class="col-lg-6 support-rev">
        <img class="thinking-girl support-imgs" src="https://youstable.in/assets/images/plan-host.svg" height="300px">
      </div>
    </div>
  </section>
</div><br>

<!--direct admin-->
<!-- <section class="direct-admin-box">
  <div class="container">
    <div class="row direct-bg">
      <div class="col-lg-6">
        <img src="assets/img/direct-adminn.png" class="direc-box direc-box floting-imagee" alt="admin-image" />
      </div>
      <div class="col-lg-6">
        <h2 class="ay_heading text-start centos-now">You Can also Install DirectAdmin for Yourself on CentOS now!</h2>
        <p class="cus-support-title">Manage your server effortlessly by Installing DirectAdmin Hosting Panel. You may
          also configure the server with the default Apache Server or OpenLiteSpeed by setting them up.</p>
      </div>
    </div>
  </div>

</section> -->
<!--direct admin-->





<!--Feature in Market-->

<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">DirectAdmin VPS Hosting Features</h2>
        <p class="server-title title_sides_width pb-3">With its cutting-edge technology and accelerated site loading,
          YouStable stands out in the <br> industry and is fully prepared to provide comprehensive support.</p>
        <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
        <P></P>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Easy-of-use.svg" alt="root-access">
              <h5 class="ay-heading">Ease of Use</h5>
              <p class="ay-title m-0 w-100">The control panel for VPS hosting is designed to be incredibly
                user-friendly. With just a single click, you can modify design layouts, allowing for swift and
                effortless alterations to the interface. This control panel offers intuitive tools that are accessible
                and easy to operate, even for individuals without extensive technical knowledge.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Lightweight-speed.svg" alt="free-migration">
              <h5 class="ay-heading">Lightweight Speed</h5>
              <p class="ay-title m-0 w-100">DirectAdmin is widely recognized as one of the swiftest and most
                resource-efficient running control panels available today. Its exceptional speed makes it an ideal
                choice for various systems, including VPS units. We encourage you to personally experience the notable
                disparity in performance by giving DirectAdmin a try.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Everlasting-Stability.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">Everlasting Stability</h5>
              <p class="ay-title m-0 w-100">DirectAdmin utilizes automated self-repair mechanisms to mitigate downtime
                caused by crashes, while also promptly notifying the system administrator for necessary follow-up
                actions. It functions as a comprehensive standalone control panel, enabling administrators to
                efficiently manage service upgrades, downgrades, libraries, and more.</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Free-Migration.svg" alt="ssl">
              <h5 class="ay-heading">Free Migration</h5>
              <p class="ay-title m-0 w-100">YouStable offers free migration services to its DirectAdmin VPS Hosting
                users. You can effortlessly move your website from your previous hosting providers to ours, without any
                loss of data! Simply get in touch with our technical support team, and they will take care of the rest.
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Highly-scalable.svg" alt="granted-resources">
              <h5 class="ay-heading">Highly Scalable</h5>
              <p class="ay-title m-0 w-100">You have the flexibility to easily adjust your server's configurations,
                increasing or decreasing resources based on your specific needs. As the owner of your hosting, you will
                have access to all the necessary facilities, enabling you to have a seamless experience.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/24x7-customer-support.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">24*7 Customer Support</h5>
              <p class="ay-title m-0 w-100">When you work with YouStable, there's no need to worry. They provide
                round-the-clock technical support for hosting, as well as support in Hindi and English. YouStable offers
                various communication options, including phone calls, chat, email, and tickets.</p>
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
      <h2 class="Banner-Heading">Maximum Available Operating Systems</h2>
      <p class="operating-title-width"> Manage your website effortlessly without any limitations, thanks to the seamless
        compatibility of our Indian<br class="remove-mobile"> VPS servers with your preferred operating system. Our
        servers are designed to work smoothly with all <br>operating systems currently available in the market.
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
        <h2 class="server-heading">Technologies YouStable Works With</h2>
        <p class="server-title title_sides-width">We are committed to delivering top-notch hosting in India by
          harnessing industry-leading technologies that will optimize your website's speed to the fullest.</p>
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
    <h2 class="text-center faq-question">FAQs
    </h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">



      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            How do I get started with DirectAdmin VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Simply place an order for the desired DirectAdmin VPS plan and entrust the rest to
            YouStable. From the initial setup to configuration and initiation, all aspects will be meticulously handled
            by YouStable.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Which Operating System is available for my DirectAdmin VPS Server plan?

          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">YouStable offers a range of operating system choices, including CentOS, Ubuntu,
            Fedora, and Windows.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Will I get a free domain name and email service included with my VPS?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">While you will receive free email services, it's important to note that
            YouStable's VPS plans do not include a free domain.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            What’s the difference between VPS Hosting, Shared Hosting, and Dedicated Server Hosting?

          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Shared Hosting is a type of hosting where you obtain a portion or allocation on a
            server alongside multiple other users. VPS Hosting, on the other hand, provides you with an exclusive
            portion of the server solely for your use. <br />
            The resources you receive are not intended to be shared with anyone else; they belong entirely to you.
            Dedicated Hosting entails having complete control over the entire server without sharing it with others,
            ensuring absolute privacy and unrestricted access to all available resources.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            Is there a trial period or money-back guarantee?

          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, YouStable offers a 3-day trial period, as well as a 30-day money-back
            guarantee for first-time sign-ups on their VPS hosting services.</div>
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