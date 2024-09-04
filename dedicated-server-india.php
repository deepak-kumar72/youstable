<?php
$page = 'dedicated-servers';
include ('inc/header.php');
?>

<style>
  .contact-hosting {
    font-size: 20px;
  }

  .country-server-specs-head {
    border-bottom: 1px solid #CACACA;
  }



  .actual-prize {
    font-size: 14px;
    font-weight: 400;
    line-height: 19px;
    color: #FF2121;
    text-decoration: line-through;
  }

  .margin-top {
    margin-top: 42px;
  }

  section.rating-section {
    padding: 0;
    margin: 80px 0;
  }

  section.operating-sytems {
    padding: 0;
    margin-top: 80px;
  }

  section.add-ons {
    margin-bottom: 60px;
  }

  section.review-content {
    margin: 70px 0;
  }

  @media screen and (max-width: 768px) {
    img.dedicated-server-hero {
      width: 85%;
    }
  }

  /*.responsive-specs-table{*/
  /*        border-bottom: 1px solid #CACACA;*/
  /*}*/
  /*MEDIA QUERY*/
  
  .upper-card {
    padding: 32px 18px;
    border-radius: 18px;
    border: 1px solid #CACACA;
    background: #FFFDF9;
    height: 100%;
    transition: 0.3s;
}

div.price-container {
    display: unset;
    align-items: baseline;
    gap: 10px;
}
.d-flex.gap-2.specifications {
    align-items: center;
    margin-bottom: 0px;
    /*border-bottom: 2px dashed #e3e3e3;*/
}
.specifications p {
    margin: 0;
    font-size: 16px;
    font-weight: 400;
    line-height: 41px;
    text-align: left;
}
img.specification-tick {
    width: 22px;
    margin-right: 3px;
}
p.hosting-price {
    color: #292929;
    margin: 22px 0px 12px 0;
    font-size: 58px;
    font-weight: 700;
    line-height: 70.19px;
}

</style>

<!-- Banner section (shared hosting) -->
<section class="banner-sec">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content margin-top dedicated-margin">
          <p class="experience">Dedicated Server Hosting India</p>
          <h1 class="Banner-Heading padding-heading robust">Affordable Dedicated Servers in India</h1>
          <p class="Banner-title p-0">Experience top-notch value with our fast and customizable Indian dedicated server hosting solutions. With our expertise, we craft tailored digital infrastructure that perfectly fits your business needs.</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img src="assets/img/choice_of_data_center.svg" alt="tick" class="tick-square"> Choice of Data Center</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/india-nvmessd.svg" alt="tick" class="tick-square"> Fast NVMe SSD Disk</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img src="assets/img/india-10gbps.svg" alt="tick" class="tick-square">1GBPs Uplink</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/india-24x7.svg" alt="tick" class="tick-square"> 24/7 Technical Support</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i class="fa-solid fa-arrow-right"></i></button></a>
        <!-- <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p> -->
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/dedicated-server-india.png" alt="Banner" srcset="">
      </div>
    </div>
  </div>
</section>

<!-- Third section (Rating section) -->
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



<section class="dedicated-india-plan">
   <div class="text-center">
      <h2 class="server-heading shared-heading-plan">Choose The Best Indian Dedicated Server Plan</h2>
      <p class="server-title">YouStable's affordable dedicated server hosting in India—perfect for boosting your website’s traffic and performance with fully managed, <br class="remove-mobile">customizable solutions tailored for your business.</p>
    </div>
<div class="container">
    <div class="row nav nav-pills wid-more" id="pills-tab" role="tablist" style="padding: 4px;">
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">6 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-half-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab" aria-controls="pills-half-yearly" aria-selected="false" tabindex="-1">3 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false" tabindex="-1">1 Month</button></div>
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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>1149</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>14.46</p>
                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>

                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=341&amp;billingcycle=monthly" class="indian-host-price" target="_self" style="display: inline;"><button class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>

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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>1999</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>25.14</p>
                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->

                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=342&amp;billingcycle=monthly" class="text-white indian-host-price" target="_self" style="display: inline;"><button class="btn-purple exploreplan-btn" type="submit">Get
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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>3499</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>44.02</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->

                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=343&amp;billingcycle=monthly" class="indian-host-price" target="_self" style="display: inline;"><button class="btn-yellow exploreplan-btn" type="submit">Get
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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>4699</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>59.11</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹199/month</span></p>-->

                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=344&amp;billingcycle=monthly" class="indian-host-price" target="_self" style="display: inline;"><button class="btn-yellow exploreplan-btn" type="submit">Get
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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>804</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>10.12</p>

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=341&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black indian-host-price" target="_self" style="display: inline;"><button class="btn-yellow exploreplan-btn" type="submit">Get
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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>1399</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>17.59</p>

                  <p class="per_month">/month</p>
                </div>
                <p></p>
                <!--<p class="regular-price">Regular price<span class="cross-price"> ₹1,149/month</span></p>-->
                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=342&amp;billingcycle=semiannually&amp;promocode=VPS30" class="text-white indian-host-price" target="_self" style="display: inline;"><button class="btn-purple exploreplan-btn" type="submit">Get
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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>2449</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>30.81</p>

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=343&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black indian-host-price" target="_self" style="display: inline;"><button class="btn-yellow exploreplan-btn" type="submit">Get
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
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>3289</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>41.37</p>

                  <p class="per_month">/month</p>
                </div>
                <!--<p class="regular-price ">Regular price<span class="cross-price"> ₹11,590/month</span></p>-->
                <p></p>
                <a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=344&amp;billingcycle=semiannually&amp;promocode=VPS30" class="link-color-black indian-host-price" target="_self" style="display: inline;"><button class="btn-yellow exploreplan-btn" type="submit">Get
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
          <div class="card-servers">
              <div class="one-month-labels">
                  <p>SIX MONTH</p>
              </div>
               <div class="hosting_specification">
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>E3-1230v3-3.30Ghz</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>4 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>32GB DDR4 RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>480GB SSD Storage</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>10 TB/1Gbps Bandwidth </p>
                  </div>
                </div>
               <div class="price-container text-center">
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>29993.76</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>377.28</p>

                </div>
                <div class="d-flex">
                    <div>
                        <img src="assets/img/cart-icon-bk.png" alt="cart" class="cart-icon-bk">
                    </div>
                <div class="button-buy-nows">
                    <button><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=354" target="_blank">Buy Now</a></button>
                </div>
                </div>
          </div>
          </div>
          <div class="col-md-3 explore-cols">
          <div class="card-server">
              <div class="one-month-label">
                  <p>SIX MONTH</p>
              </div>
               <div class="hosting_specification">
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>E3-1230v3-3.30Ghz</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>4 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>32GB DDR4 RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>480GB SSD Storage</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>10 TB/1Gbps Bandwidth </p>
                  </div>
                </div>
               <div class="price-container text-center">
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>41994.29</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>528.23</p>

                </div>
                <div class="d-flex">
                    <div>
                        <img src="assets/img/cart-icon.png" alt="cart" class="cart-icon">
                    </div>
                <div class="button-buy-now">
                    <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=346" target="_blank"><button>Buy Now</button></a>
                </div>
                </div>
          </div>
          </div>
          <div class="col-md-3 explore-cols">
          <div class="card-servers">
              <div class="one-month-labels">
                  <p>SIX MONTH</p>
              </div>
               <div class="hosting_specification">
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>E3-1230v3-3.30Ghz</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>6 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>32GB DDR4 RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>480GB SSD Storage</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>10 TB/1Gbps Bandwidth </p>
                  </div>
                </div>
               <div class="price-container text-center">
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>47994.15</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>603.7</p>

                </div>
                <div class="d-flex">
                    <div>
                        <img src="assets/img/cart-icon-bk.png" alt="cart" class="cart-icon-bk">
                    </div>
                <div class="button-buy-nows">
                    <button><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=355" target="_blank">Buy Now</a></button>
                </div>
                </div>
          </div>
          </div>
          <div class="col-md-3 explore-cols">
          <div class="card-server">
              <div class="one-month-label">
                  <p>SIX MONTH</p>
              </div>
               <div class="hosting_specification">
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>E3-1230v3-3.30Ghz</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>6 CPU</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>32GB DDR4 RAM</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>480GB SSD Storage</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>10 TB/1Gbps Bandwidth </p>
                  </div>
                </div>
               <div class="price-container text-center">
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>59993.88</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>754.64</p>

                </div>
                <div class="d-flex">
                    <div>
                        <img src="assets/img/cart-icon.png" alt="cart" class="cart-icon">
                    </div>
                <div class="button-buy-now">
                    <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=348" target="_blank"><button>Buy Now</button></a>
                </div>
                </div>
          </div>
          </div>

<div class="col-md-3 explore-cols">
          <div class="card-servers">
              <div class="one-month-labels">
                  <p>SIX MONTH</p>
              </div>
               <div class="hosting_specification">
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>E5-2667v4-3.2Ghz</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>8 CPU </p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>32GB DDR4 RAM  </p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>960GB SSD Storage</p>
                  </div>
                  <div class="d-flex gap-2 specifications">
                    <img src="assets/img/speci-tick.png" class="specification-tick">
                    <p>10 TB/1Gbps Bandwidth </p>
                  </div>
                </div>
               <div class="price-container text-center">
                  <p class="hosting-price vps-price indian-host-price" style="display: block;"><span class="hin-rs-1-1">₹</span>71993.6</p>
                  <p class="hosting-price vps-price usa-host-price" style="display: none;"><span class="hin-rs-1-1">$</span>905.5</p>

                </div>
                <div class="d-flex">
                    <div>
                        <img src="assets/img/cart-icon-bk.png" alt="cart" class="cart-icon-bk">
                    </div>
                <div class="button-buy-nows">
                    <button><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=347" target="_blank">Buy Now</a></button>
                </div>
                </div>
          </div>
          </div>

        </div>
      </div> <!-- Close Yearly Plan -->

    </div>
</div>
</section>
<section class="customer-servicess">
   <div class="text-center">
      <h2 class="server-heading shared-heading-plan">Custom Servers In India Built to Your Required Specs</h2>
      <p class="server-title">Get unbeatable value with fast, customizable Indian dedicated server hosting. Tailor your infrastructure <br class="remove-mobile"> for peak performance with our expert support.</p>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="content-server-box">
                <p>Finding the right Indian dedicated server is very easy! Our tech experts are here 24/7 to help you at every stage, whether it’s configuring your software or creating custom hardware.</p>
                <p>We build our bare metal and semi-managed dedicated servers to match exactly what you need. You can customise your OS, link servers for load balancing, and choose storage options that go to 100TB and above. It depends on CPU Processors as well.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="content-server-box">
                <h3>Custom server options consist of:</h3>
                <p class="rams-content"><span class="ram-points">►</span> RAM – Up to 512GB</p>
                <p class="rams-content"><span class="ram-points">►</span> Primary Drive – Up to 16TB</p>
                <p class="rams-content"><span class="ram-points">►</span> Secondary Drive – Up to 16TB</p>
                <p class="rams-content"><span class="ram-points">►</span> Bandwidth – Up to 2 Gbps</p>
                
            <a href="https://www.youstable.com/manage/submitticket.php?step=2&amp;deptid=2" target="_blank"><button class="customer-server-btn "><span class="phone-mini"><img src="assets/img/server-icons-request-onee.png"></span> Request Custom Server <i class="fa-solid fa-arrow-right"></i></button></a>
            
            
            </div>
        </div>
        </div>
    </div>
</section>


<!--Feature in Market-->

<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">What makes YouStable’s Dedicated Server different? </span></h2>
        <p class="server-title title_sides_width pb-3">We deliver something that is beyond your expectations, offering
          you LiteSpeed Servers, Intel/ AMD Processors and a wide range of services exclusively meant to boost your
          website performance.
        </p>
      </div>
      <div class="why-choose">
        <div class="row text-left">
          <div class="col-md-4 cols">
            <div class="feature_cols_dedicated">
              <img src="assets/img/call-center-copy-2.png" alt="ssd-storage">
              <div class="border-box">
                <h5 class="ay-heading">24/7 Support</h5>
                <p class="ay-title dedicate-content">Having no Technical knowledge about handling Servers? Our Dedicated
                  Expert Staff offers you Instant Support to configure the server per your requirements.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/CONTROL-1.png" alt="ssl-certificate">
              <div class="border-box">
                <h5 class="ay-heading">Full Root Control</h5>
                <p class="ay-title dedicate-content">YManage your Dedicated Server infrastructure from CPU to Processor,
                  through YouStable’s Client Portal & scale it as per your need without any interruptions.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/115803-1.png" alt="speed-web-server">
              <div class="border-box">
                <h5 class="ay-heading">24/7 Monitoring </h5>
                <p class="ay-title dedicate-content">Want to Check the performance of your Server? If so, then you are
                  at the right place as at YouStable, you can easily monitor your servers and make changes.</p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>


<!--Operating-systems-->


<section class="awesome-youstable affiliate-two affiliate-four">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">Features to Supercharge Your Dedicated Server in India</h2>
        <p class="server-title title_sides_width pb-3">Experience top-notch server management and expert support with our dedicated hosting in India, delivering unmatched speed, security, and tailored solutions for your websites.</p>
        <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
        <p></p>
      </div>
      <div class="features-vps">
        <div class="row text-left">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/free-website-transfer.svg" alt="root-access">
              <h5 class="ay-heading">Free Website Transfers</h5>
              <p class="ay-title m-0 w-100">Switch to YouStable Now! Get Seamless, Worry-Free website migration with Zero Downtime. Our experts handle all the work at no extra cost.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/india-ssl.svg" alt="free-migration">
              <h5 class="ay-heading">Free SSL Certificate</h5>
              <p class="ay-title m-0 w-100">Secure your website with Free SSL certificate, ensuring greater encrypted connection, protecting your visitors’ data and as a result, boosting SEO.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/one-click.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">One-Click Installs</h5>
              <p class="ay-title m-0 w-100">Launch your favourite plugins to customise your website in just a single click! Enjoy easy, fast and hassle-free instant installation from Softaculous.</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/no-setup-fees.svg" alt="ssl">
              <h5 class="ay-heading">No Setup Fees</h5>
              <p class="ay-title m-0 w-100">Enjoy transparent pricing with Zero SetUp fee! Get started instantly without paying anything extra for setup, letting your focus on the growth of the site.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/ssh-sftp.svg" alt="granted-resources">
              <h5 class="ay-heading">SSH, SFTP Access</h5>
              <p class="ay-title m-0 w-100">Secure and fast access to your server, ensuring full root control and safe data transfers every time. Safe and instant server accessibility improves site performance.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/uptime_1.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">99.99% Uptime</h5>
              <p class="ay-title m-0 w-100">Experience near-perfect guaranteed 99.99% uptime, ensuring your website is always live, reliable, and ready for visitors at all times. </p>
            </div>
          </div>
          </div>
          <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/24x7-monitoring.svg" alt="ssl">
              <h5 class="ay-heading">24/7 Monitoring</h5>
              <p class="ay-title m-0 w-100">Round-the-clock server monitoring for ultimate peace of mind, detecting and resolving issues before they arise. You detect, locate and fix the bug even before they arrive. </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/intel-amd-processors.svg" alt="granted-resources">
              <h5 class="ay-heading">Intel/AMD processors</h5>
              <p class="ay-title m-0 w-100">Overall Power-packed performance with top-tier Intel/AMD processors, delivering faster speed and amazingly efficiently for all your needs.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/dedicated-firewalls.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Dedicated Firewalls</h5>
              <p class="ay-title m-0 w-100">Robust security with custom Firewalls tailored to protect your site from threats, 24/7. Secure highly sensitive client data with dedicated WAP.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<!--Operating-systems-->
<section class="operating-sytems">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading">Multiple OS Support on Indian Dedicated Server!</h2>
      <p class="server-title title_sides_width pb-5"> YouStable lets you customise your experience by offering a range of OS installation options, <br class="remove-mobile">so you can choose the one that works best for you!</p>
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

    <!-- <div class="text-center mt-5 choose-plan-now">-->
    <!--  <button class="btn-yellow   get-tarted-table get-tarted-table-one" type="submit">Choose Plan Now</button>-->
    <!--</div>-->

  </div>
</section>


<section class="awesome-youstable affiliate-two affiliate-four dedicated-india">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">Dedicated Server Hosting Ideal Uses and Goals</h2>
        <!-- <p class="server-title title_sides_width pb-3">123123write here desciption123133</p> -->
        <!--<p class="purple-text_dark see-yourself">See for yourself!</p>-->
        <p></p>
      </div>
      <div class="features-vps">
        <div class="row text-left mt-5">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/high-traffic-india.svg" alt="root-access">
              <h5 class="ay-heading">High-Traffic Websites</h5>
              <p class="ay-title m-0 w-100">Managing large volumes of web traffic without performance degradation.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/e-commerce-india.svg" alt="free-migration">
              <h5 class="ay-heading">Large E-commerce Platforms</h5>
              <p class="ay-title m-0 w-100">Ensuring secure and reliable transactions for online stores.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/resource-india.svg" alt="enhance-control-panel">
              <h5 class="ay-heading">Resource-Intensive Applications</h5>
              <p class="ay-title m-0 w-100">Hosting applications that require substantial CPU, RAM, and storage resources.</p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/devopment-testing-india.svg" alt="ssl">
              <h5 class="ay-heading">Development and Testing Environments</h5>
              <p class="ay-title m-0 w-100">Creating isolated environments for software development, testing, and staging</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/financial-india.svg" alt="granted-resources">
              <h5 class="ay-heading">Financial Services</h5>
              <p class="ay-title m-0 w-100">Meeting stringent security and compliance requirements for banking and financial applications.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/email-india.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Email Servers</h5>
              <p class="ay-title m-0 w-100">Managing large-scale email services with enhanced security and control. </p>
            </div>
          </div>
          </div>
          <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/virtualization-india.svg" alt="ssl">
              <h5 class="ay-heading">Virtualization</h5>
              <p class="ay-title m-0 w-100">Running multiple virtual machines or containers for diverse applications.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/big-data-analytics-india.svg" alt="granted-resources">
              <h5 class="ay-heading">Big Data Analytics</h5>
              <p class="ay-title m-0 w-100">Processing and analyzing large datasets efficiently, without compromising on performance.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/ai-machine-learning-india.svg" alt="monitoring-alerts">
              <h5 class="ay-heading">Ai and Machine Learning</h5>
              <p class="ay-title m-0 w-100">As big data expands, AI and machine learning provide businesses with crucial insights, fueling sustainable growth across industries.</p>
          </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!--(Add Ons) -->
<section class="customer-review add-ons">
  <div class="container">
    <div class="available">
      <div class="row">
        <div class="col-md-3 available-cols">
          <ul class="available-points">


            <li class="indian-host-price">cPanel <span class="purple-bg">₹5200</span></li>
            <li class="usa-host-price" style="display: none;">cPanel <span class="purple-bg">$65</span></li>
            <li class="indian-host-price">DirectAdmin <span class="purple-bg">₹400</span></li>
            <li class="usa-host-price" style="display: none;">DirectAdmin <span class="purple-bg">$5</span></li>
            <li class="indian-host-price">Plesk <br> <span class="purple-bg">₹1200</span></li>
            <li class="usa-host-price" style="display: none;">Plesk <br> <span class="purple-bg">$15</span></li>
          </ul>
        </div>

        <div class="col-md-3 available-cols">
          <ul class="available-points">
            <li class="indian-host-price">Softaculous <span class="purple-bg">₹200</span></li>
            <li class="usa-host-price" style="display: none;">Softaculous <span class="purple-bg">$2.5</span></li>
            <li class="indian-host-price">Immunify 360 <span class="purple-bg">₹960</span></li>
            <li class="usa-host-price" style="display: none;">Immunify 360 <span class="purple-bg">$12</span></li>
            <li class="indian-host-price">Litespeed 2-CPU <span class="purple-bg">₹1600</span></li>
            <li class="usa-host-price" style="display: none;">Litespeed 2-CPU <span class="purple-bg">$20</span></li>
          </ul>
        </div>

        <div class="col-md-6 available-cols">
          <h2>Dedicated Servers in India Premium Add-Ons! </h2>
          <p class="server-title server-title-width my-0 enhance">Boost your server performance with these Premium
            Add-Ons. You can easily scale these Add-Ons by Connecting to our Support Team. Worried about the Uptime?
            Uptime is not affected during the scaling process.
          </p>
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
<section class="faq">
  <div class="container">
    <h2 class="text-center faq-question">FAQs</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What is Dedicated Server Hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Dedicated Server Hosting is a kind of Web hosting solution in which an entire
            server is allocated to a user (with Zero sharing members) with Complete server control and high
            customization options including a choice of OS/ RAM/ CPU/ Storage/ BandWidth along with Enhanced Security
            Technology like DDoS Protection and chances to Scale the web server resources as per the greater
            requirements of the websites.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What can you do with a Dedicated Server?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">With a Dedicated server, you can get uninterrupted website hosting service
            ensuring maximum performance, checking your server status, its Uplink and Data transfer due to its 24/7
            Monitoring feature, and unlimited Web resources for higher website needs. Dedicated servers can even host
            your multiplayer games, trading and enterprise-level websites.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            What are the reasons for choosing a dedicated Server?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Dedicated Servers are specifically chosen by users wanting to get Complete Root
            Access allowing them to make major changes on the server, and to experience uninterrupted server performance
            for higher-traffic websites. Moreover, Users even choose Dedicated Servers as here they get an Exclusive
            chance of scaling resources as needed. </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Do I need a Dedicated Server for my website?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">If you have an Organisational-level website with a heavy influx of visitors, then,
            in that case, you’ll need Dedicated server hosting for your website where you’ll get separate web resources
            like CPU/ Storage/ Bandwidth offering Uninterrupted hosting of your website. You can even monitor the
            performance of your server resources to ensure their functionality.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
            What is the difference between a VPS and a dedicated Server? </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">In very simple words, VPS distributes server resources across multiple virtual
            servers on the same physical machine using virtualisation Technology, whereas dedicated hosting allocates
            all of the physical server's resources to only one User.
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