<?php
$page = 'nvme-ssd-vps';
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



<!-- Banner section (NVMe SSD VPS) -->
<section class="banner-sec share-bg">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
          <!--<p class="experience">NVME SSD VPS</p>-->
          <h1 class="Banner-Heading padding-heading robust">NVMe SSD VPS Hosting</h1>
          <p class="Banner-title p-0">Experience high performance and control with our high-speed NVMe SSD VPS hosting. Enjoy speed and reliability at affordable prices. Upgrade your hosting today!</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/NVMe-SSD-storage-one-y2.svg" alt="tick" class="tick-square"> NVMe SSD Storage</li>
              <li class="purple-text_dark"><img src="assets/img/newImages/1-IPv4-IP-Address.svg" alt="tick" class="tick-square"> Multiple Locations</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/newImages/Easy-to-scale.svg" alt="tick" class="tick-square"> Easy to scale</li>
              <li class="purple-text_dark"><img src="assets/img/newImages/Free-Migration_1.svg" alt="tick" class="tick-square"> Free Migration</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/NVMe-SSD-VPS-Hosting-hero.png" alt="nvme ssd vps">
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
      <h2 class="server-heading shared-heading-plan">Choose Your NVMe SSD VPS Hosting Plan for your Website</h2>
      <p class="server-title">Ideal for those Looking for Virtual Private Server with NVMe SSD for record speed, security and <br>Reliability or anyone seeking full root access at reliable price.</p>
    </div>

<div class="row nav nav-pills wid-more" id="pills-tab" role="tablist" style="padding: 4px;">
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true" tabindex="-1">1 Year</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-half-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab" aria-controls="pills-half-yearly" aria-selected="false" tabindex="-1">6 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked " id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false" tabindex="-1">1 Month</button></div>
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
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
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
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->

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
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->

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
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->

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
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
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
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
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
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
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
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
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



      <div class="tab-pane fade show active tab-titles" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab"> <!-- start Yearly tab plan -->
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
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
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
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
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
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
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
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
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



<!--Feature in Market-->
<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">Why Choose YouStable's for Your NVMe SSD VPS Needs?</span></h2>
        <p class="server-title title_sides_width pb-3">Our budget-friendly high performing NVMe powered SSD VPS hosting comes with robust
          features tailored to enhance your <br>website's speed, security, and stability, ensuring top-notch quality without
          compromise.</p>
        <!--<p class="server-title title_sides_width pb-3">Our services are backed by strong features that are especially focused on making your website more fast, secure and steady on the internet so that you can enjoy uncompromised quality.</p>-->
      </div>
      <div class="why-choose">
        <div class="row text-left">
          <div class="col-md-4 cols">
            <div class="feature_cols_dedicated">
              <img src="assets/img/servers/NVMe-SSD-Powered-Servers.svg" alt="nvme-ssd" class="python-feature">
              <div class="border-box">
                <h5 class="ay-heading">Powerful NVMe SSD</h5>
                <p class="ay-title m-0 w-100">Get faster access and superior storage with NVMe SSD Drives. Boost your
                  website’s performance dramatically by reducing latency and delivering high IOPS</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/servers/DDoS.svg" alt="ddos-protected" class="python-feature">
              <div class="border-box">
                <h5 class="ay-heading">DDos Protected</h5>
                <p class="ay-title m-0 w-100">With the industry’s best DDoS Protected VPS Servers, you can protect your
                  website proactively from malicious and unwanted attacks that drain your resources with illegitimate
                  traffic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/servers/Effortless-migration.svg" alt="migration" class="python-feature">
              <div class="border-box">
                <h5 class="ay-heading">Effortless Migration</h5>
                <p class="ay-title m-0 w-100">Our team of Technical hosting professionals will seamlessly transfer all
                  your websites to the new server at a date & time that aligns with your preferences, completely free of
                  cost.</p>
              </div>
            </div>
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
      <h2 class="Banner-Heading">Operating Systems, Apps For Your <br>NVMe SSD VPS</h2>
      <p class="operating-title-width">Work with your desired Operating system smoothly to manage your website without
        any restrictions, all thanks to<br> flexible KVM NVMe SSD VPS servers which are compatible with all the OS available in
        the market.</p>
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
        <h2 class="ay_heading">Top-Tier Features with YouStable's NVMe SSD VPS Hosting</span></h2>
        <p class="server-title title_sides_width pb-3">We have equipped our servers with the most advanced features so
          that you can experience both high performance and super security for your website because we understand the
          value your data security</p>
        <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
        <P></P>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Root-access.svg" alt="root-access">
              <h5 class="ay-heading">Root Access</h5>
              <p class="ay-title m-0 w-100">Full admin access allows you to manage your NVME SSD VPS easily. It allows
                you to authorise any modification on your website.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Free-Migration.svg" alt="free-migration">
              <h5 class="ay-heading">Free Migration</h5>
              <p class="ay-title m-0 w-100">YouStable offers free migration of up to 5 GB of data to its Virtual Private
                Servers with NVMe SSD drive and user-friendly control panel.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Enhanced-Control-Panel.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">Enhanced Control Panel</h5>
              <p class="ay-title m-0 w-100">Availability of multiple control panels like cPanel, DirectAdmin and more.
                They give an enhanced user interface.</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Free-SSL-Cerificate.svg" alt="ssl">
              <h5 class="ay-heading">Let’s Encrypt SSL Certificates</h5>
              <p class="ay-title m-0 w-100">Ensure the trustworthiness of your website and keep your customer’s data
                safe.A Let's Encrypt SSL certificate meets your HTTPS needs for free and boosts your SERP rankings.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Guaranteed-Resources.svg" alt="granted-resources">
              <h5 class="ay-heading">Guaranteed Resources</h5>
              <p class="ay-title m-0 w-100">Important resources like bandwidth, storage, RAM, and CPU have been
                optimized to guarantee the Best NVMe SSD VPS Hosting.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/servers/Monitoring-&-Alerts.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Monitoring & Alerts</h5>
              <p class="ay-title m-0 w-100">Monitor your website and get important alerts and updates about our best NVMe SSD VPS
                hosting directly in your mailbox.</p>
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
            What is NVMe SSD VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">NVMe SSD VPS Hosting is a type of virtual private server hosting that utilizes Non-Volatile Memory Express (NVMe) SSDs, which offer significantly faster data transfer speeds and lower latency compared to traditional SSDs.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What are the benefit of choosing YouStable's NVMe SSD Virtual Private Server?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Choosing NVMe SSD VPS Hosting offers blazing fast read/write speeds and lower latency, improving load times and user experience. Ideal for resource-intensive applications, NVMe SSDs enhance performance, reliability, and scalability. Faster load times boost SEO rankings, while energy efficiency reduces costs. With better I/O performance and future-proof technology, NVMe SSD VPS Hosting ensures a robust, high-performing hosting solution.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Can I host multiple website on NVMe SSD VPS?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, you can host multiple websites on YouStable's SSD VPS server. VPS (Virtual Private Server) hosting provides dedicated resources and allows you to configure your server as needed. This means you can host multiple websites, each with its own domains, email accounts, and databases.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Why should I choose SSD VPS Hosting over traditional VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">SSD VPS Hosting provides significantly faster read/write speeds, better performance under load, and more reliability due to the lack of moving parts in SSDs compared to traditional HDDs.</div>
        </div>
      </div>
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            Can I upgrade my existing VPS to NVMe SSD VPS Hosting?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, You can easily upgrade to a high-peroforming NVMe SSD VPS Hosting plan from traditional SSD or HDD VPS. All you have to Simply contact our team, and they will handle the upgrade for you.</div>
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