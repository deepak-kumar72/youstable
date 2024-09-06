<?php
$page = 'vps-hosting';
include('inc/header.php');
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

  /*unknown css*/
</style>



<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
          <p class="experience">Powerful VPS Hosting</p>
          <h1 class="Banner-Heading padding-heading robust">Blazing Fast & Reliable
          Managed VPS Hosting in India</h1>
          <p class="Banner-title p-0">Effortlessly handle your website with flexible VPS servers in India with Local Data Center that incorporate cutting-edge hardware technologies, ensuring optimal performance.</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/newImages/1-IPv4-IP-Address.svg" alt="tick"
                  class="tick-square"> Easy to manage</li>
              <li class="purple-text_dark"><img src="assets/img/newImages/US-NL-&-India-Locations.svg" alt="tick"
                  class="tick-square">Easy to scale</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/newImages/Easy-to-scale.svg" alt="tick"
                  class="tick-square">Indian Data Center</li>
              <li class="purple-text_dark"><img src="assets/img/newImages/Free-Migration_1.svg" alt="tick"
                  class="tick-square">Free Migration</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/vps-server-hero-image.png" alt="Banner" srcset="">
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
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>574</p>
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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSl all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup(CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSl all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support*</p>
                  </div>

                </div>

                <div class="free_setup btn-light-purple" bis_skin_checked="1">-->
                   <p class="m-0">50% Off</p>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading ">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1749</p>
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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSL all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
                  </div>
                </div>

                <div class="free_setup btn-yellow " bis_skin_checked="1"> -->
                   <p class="m-0">50% Off</p>
                </div>

              </div>
            </div>
          </div>


          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                <h4 class="hosting-heading">vStable</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>2349</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>59.11</p> -->

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->

                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=monthly"
                  class="indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                    Started</button></a>

                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=344&billingcycle=monthly"
                  class="usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                    Started</button></a> -->

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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSL all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
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
      <!-- close monthly plan -->


      <div class="tab-pane fade tab-titles" id="pills-half-yearly" role="tabpanel"
        aria-labelledby="pills-half-yearly-tab"> <!-- start Half Yearly tab plan -->
        <div class="row flex_unset">
          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>804</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>10.12</p> -->

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=341&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->


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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSl all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup(CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
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
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>17.59</p> -->

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=semiannually&promocode=VPS30"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=342&billingcycle=semiannually&promocode=VPS30"
                  class="text-white usa-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->
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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSl all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support*</p>
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
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>30.81</p> -->

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=343&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->

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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSL all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
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
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>41.37</p> -->

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=344&billingcycle=semiannually&promocode=VPS30"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->

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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSL all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
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
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vStart</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>1149</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>7.23</p> -->

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=341&billingcycle=annually&promocode=VPS50"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->

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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSl all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup(CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
                  </div>
                </div>

                <!-- <div class="free_setup btn-yellow " bis_skin_checked="1">
                  <p class="m-0">50% Off</p>
                </div> -->

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
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>12.57</p> -->
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=annually&promocode=VPS50"
                  class="text-white indian-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=342&billingcycle=annually&promocode=VPS50"
                  class="text-white usa-host-price" target="_self"><button class="btn-purple exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->
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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSl all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support*</p>
                  </div>

                </div>

                <!-- <div class="free_setup btn-light-purple" bis_skin_checked="1">
                  <p class="m-0">50% Off</p>
                </div> -->

              </div>
            </div>
          </div>

          <div class="col-md-3 explore-cols">
            <div class="position-relative h-100">
              <div class="upper-card">
                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                <h4 class="hosting-heading">vPopular</h4>

                <div class="price-container">
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>3499</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>22.01</p> -->
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=343&billingcycle=annually&promocode=VPS50"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->

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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSL all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
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
                  <p class="hosting-price vps-price indian-host-price"><span class="hin-rs-1-1">₹</span>4699</p>
                  <!-- <p class="hosting-price vps-price usa-host-price"><span class="hin-rs-1-1">$</span>29.55</p> -->
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=annually&promocode=VPS50"
                  class="link-color-black indian-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a>
                <!-- <a href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=344&billingcycle=annually&promocode=VPS50"
                  class="link-color-black usa-host-price" target="_self"><button class="btn-yellow exploreplan-btn"
                    type="submit">Get
                    Started</button></a> -->

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
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Free SSL all Websites</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Firewall Setup (CSF)</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Optimised Smart Caching</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>Weekly 1 Snapshot</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>99.95% Uptime</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>24X7 Support</p>
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

        </div>
        <div class="col-lg-3 list-imp">
          <ul style="list-style: disc;">
            <li class="support-list">CDN Add-on</li>
            <li class="support-list">24/7 Live Monitor</li>
            <li class="support-list">Free Migration</li>
            <li class="support-list">HTTP/2 Enabled Servers</li>
          </ul>
        </div>
        <div class="col-lg-3 list-imp">
          <ul style="list-style: disc;">
            <li class="support-list">BitNinja Security</li>
            <li class="support-list">Dedicated IP</li>
            <li class="support-list">SQL Databases</li>
            <li class="support-list">Multi-DC Network</li>
          </ul>
        </div>
        <div class="col-lg-3 list-imp">
          <ul style="list-style: disc;">
            <li class="support-list">Higher Google Rank</li>
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

<!--new list section-->


<!--Feature in Market-->
<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">

        <!--<p class="server-title title_sides_width pb-3">Our services are backed by strong features that are especially focused on making your website more fast, secure and steady on the internet so that you can enjoy uncompromised quality.</p>-->
      </div>
      <div class="why-choose">
        <div class="row text-left">

            </div>
            <div class="d-flex gap-3 mt-2 align-items-center border-design-box">
              <div> <img src="assets/img/migration-icon-why.svg" class="icons-why" alt="nvme-ssd"></div>
              <div>
                <h5 class="why-heading">Effortless Migration</h5>
                <p class="why-para">Our team of Technical hosting professionals will seamlessly transfer all your
                  websites to the new server</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="assets/img/why-choose-girl.jpg" alt="why-choose-girl" class="why-choose-girl">
          </div>
        </div>


      </div>
    </div>
  </div>
</section>

<!-- Operating-Systems -->
<section class="operating-sytems">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading">Enhanced VPS Hosting with Powerful Operating Systems
      </h2>
      <p class="operating-title-width">Experience the full potential of your Virtual Private Server with our Enhanced
        KVM VPS Hosting Servers, <br>featuring top-tier Operating Systems and Apps for unmatched performance!</p>
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



<!--Feature in Market-->

<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">Powerful features that will give you superpowers
        </span></h2>
        <p class="server-title title_sides_width pb-3">Our servers are equipped with state-of-the-art features to provide you with optimal performance and exceptional security for your website. We prioritize the importance of safeguarding your data.</p>
        <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
        <P></P>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Root-access.svg" alt="root-access">
              <h5 class="ay-heading">Root Access</h5>
              <p class="ay-title m-0 w-100">With full administrative access, you can easily manage your VPS hosting. It grants you the authority to authorize any modifications to your website.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Free-Migration.svg" alt="free-migration">
              <h5 class="ay-heading">Free Migration</h5>
              <p class="ay-title m-0 w-100">YouStable provides a complimentary migration service for transferring data of up to 5 GB to its Virtual Private Servers, which are equipped with NVMe SSD drives and a user-friendly control</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Enhanced-Control-Panel.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">Friendly Control Panel</h5>
              <p class="ay-title m-0 w-100">Multiple control panels such as cPanel, DirectAdmin, and others are available, providing an improved user interface and enabling you to manage your hosting using a control</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Free-SSL-Cerificate.svg" alt="ssl">
              <h5 class="ay-heading">Let’s Encrypt SSL Certificates</h5>
              <p class="ay-title m-0 w-100">Ensure the reliability of your website and safeguard your customers' data. SSL enhances the credibility of a website and enhances its ranking in SERP.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Guaranteed-Resources.svg" alt="granted-resources">
              <h5 class="ay-heading">Guaranteed Resources</h5>
              <p class="ay-title m-0 w-100">We have optimized important resources such as bandwidth, storage, RAM, and CPU to ensure & experience best VPS Hosting in India.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Monitoring-&-Alerts.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Monitoring & Alerts</h5>
              <p class="ay-title m-0 w-100">Stay updated on your website's performance with timely alerts and receive valuable updates regarding our top-notch VPS hosting India straight to your email inbox.</p>
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
    <h2 class="text-center faq-question">FAQs</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What is Managed VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Indian VPS hosting refers to VPS hosting services provided by datacenters located in India. These datacenters have their servers housed within India, which can offer benefits such as lower latency, faster data transfer, and improved performance for websites targeting an Indian audience.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Which operating system should I choose for my VPS Server?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">When choosing the operating system for your VPS server in India, it's essential to consider the preferences and requirements of the Indian audience.
Here are a few popular operating systems to consider:

Linux (Ubuntu, CentOS, Debian) to ensure reliability and flexibility.
Windows to be compatible and compatibility with Microsoft techniques
Choose based on your needs.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            How many IPs are included with VPS hosting?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">We provide one IP address with our standard VPS hosting plans. However, you have the option to obtain additional IPs by paying $5 per month. This will enable you to manage your website seamlessly and avoid any potential issues. For instance, if one of your IPs experiences a DDoS attack, you can quickly switch to a different IP address to bypass the attack.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Does VPS require a lot of technical knowledge?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">The choice for your website depends on several factors. For instance, if you lack advanced technical knowledge, it is advisable to opt for managed VPS hosting servers in India as they come pre-customized. On the other hand, unmanaged servers demand a high level of technical expertise since you need to customize everything according to your specific requirements.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            How do I Upgrade my VPS plan?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">We offer highly flexible hosting plans that allow you to effortlessly enhance the resources of your SSD VPS hosting plans in India, USA & Europe location. Just get in touch with our team of experts, and they will provide guidance at every step of your online journey.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive1">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive1" aria-expanded="false" aria-controls="flush-collapseFive1">
            What is the money-back guarantee YouStable offers?
          </button>
        </h2>
        <div id="flush-collapseFive1" class="accordion-collapse collapse" aria-labelledby="flush-headingFive1"
          data-bs-parent="#accordionFlushExample">
          <v class="accordion-body">We utilize high-performance servers that are equipped with top-of-the-line features, ensuring that you can enjoy optimal performance. Additionally, to provide you with assurance of our quality, we offer a 30-days money-back guarantee. This allows you to cancel our services at any time within the first 30 days if you are unsatisfied with the quality.</div>
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