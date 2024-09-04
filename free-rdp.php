<?php
$page = 'Home';
include ('inc/header.php');
?>

<style>
    .section-p {
        height: 30vh !important;
        top: 300px !important;
        margin-top: 80px;
    }

    .customer-support-container {
        margin-bottom: 30px;
    }

    section.rating-section {
        padding: 0;
        margin: 78px 0;
    }

    #pills-tab {
        justify-content: center;
    }

    section.performance-sec.plans {
        margin-top: 0;
    }

    .tab-pane {
        border-radius: 30px;
    }

    img.hero-image {
        width: 94% !important;
    }

    .free_setup {
        top: 90px;
        right: -64px;
        width: fit-content;
        width: -moz-fit-content;
    }
    .upper-card {
    padding: 32px 18px;
    border-radius: 18px;
    border: 1px solid #CACACA;
    background: #FFFDF9;
    height: 100%;
    transition: 0.3s;
}
</style>

<!-- Banner section -->
<section class="banner-sec share-bg-four">
    <div class=" container">
        <div class="row reverse">
            <div class="col-md-6">
                <div class="banner-left-content ">
                    <!-- <p class="experience">Free RDP Server</p> -->
                    <h1 class="Banner-Heading padding-heading">Free RDP Server</h1>
                    <p class="Banner-title">Buy High Performace Free RDP Server service with admin access for just
                        $15/month. Enjoy top-notch security, fast servers, and seamless remote desktop experience.
                        Unlock full control now!</p>
                    <div class="d-flex gap-3 lists-hosting">
                        <ul class="banner-list list-unstyled">
                            <li class="purple-text_dark mb-3 color-black-1"><span class="text-dark dot"><img
                                        src="assets\img\newImages\instant-setup_1.svg" alt="ssd"></span>Instant Setup
                            </li>
                            <li class="purple-text_dark color-black-1"><span class="text-dark dot"><img
                                        src="assets\img\newImages\dedicated-ip-address_1.svg"
                                        alt="manage"></span>Dedicated IP Address</li>
                        </ul>
                        <ul class="banner-list list-unstyled">
                            <li class="purple-text_dark mb-3 color-black-1"><span class="text-dark dot"><img
                                        src="assets\img\newImages\access-from-anywhere_1.svg"
                                        alt="migration"></span>Access From Anywhere</li>
                            <li class="purple-text_dark color-black-1"><span class="text-dark dot"><img
                                        src="assets\img\newImages\1gbps-internet.svg" alt="support"></span>1GBPS
                                Internet Speed
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i
                            class="fa-solid fa-arrow-right"></i></button></a>
                <!-- <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back
                    Guarantee</p> -->
            </div>
            <div class="col-md-6">
                <img class="floatings w-75" src="assets/img/newImages/Free-RDP-Server-With-Full-Admin-Access.png"
                    alt="Banner">
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
<section class="explore-section vps hosting-plan mt-4" id="explore">
    <div class="container">
        <div class="text-center margin-top-bottom ideak-choice">
            <h2 class="server-heading shared-heading-plan">Check Out Our Free RDP Server Plans</h2>
            <p class="server-title">We offer High high-performance free RDP Servers, with great prices,
                <br>Dedicated IP Address premium products and quality service for your business.
            </p>
        </div>


       <div class="row nav nav-pills wid-more" id="pills-tab" role="tablist" style="padding: 4px;">
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked active" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true" tabindex="-1">3 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked" id="pills-half-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-half-yearly" type="button" role="tab" aria-controls="pills-half-yearly" aria-selected="false" tabindex="-1">6 Month</button></div>
      <div class="col-lg-4 nav-button-plans"><button class="nav-link nav-linked " id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="false" tabindex="-1">12 Month</button></div>
    </div>


        <div class="tab-content" id="pills-tabContent">
            <!-- start tab content -->

            <div class="tab-pane fade tab-titles" id="pills-monthly" role="tabpanel"
                aria-labelledby="pills-monthly-tab">
                <!-- start monthly tab plan -->
                <div class="row flex_unset">
                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                                <h4 class="hosting-heading">Starter RDP</h4>
                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>15</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>15</p>
                                    <p class="per_month">/month</p>
                                </div>
                                <!--<p class="regular-price ">Regular price<span class="cross-price"> $11,590/month</span></p>-->
                                <p></p>
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=quarterly&pid=334&promocode=FREERDP"
                                    class="" target="_self" class="link-color-black"><button
                                        class="btn-yellow exploreplan-btn" type="submit">Get Started</button></a>

                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>2 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>50 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">90 days Free RDP</p>
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
                                <h4 class="hosting-heading">Standard RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>20</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>20</p>
                                    <p class="per_month">/month</p>
                                </div>
                                <p></p>
                                <!--<p class="regular-price">Regular price<span class="cross-price"> $1,149/month</span></p>-->
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=monthly&pid=335&promocode=FREERDP"
                                    class="text-white" target="_self"><button class="btn-purple exploreplan-btn"
                                        type="submit">Get Started</button></a>
                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>2 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>6 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>75 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-light-purple" bis_skin_checked="1">
                                    <p class="m-0">90 days Free RDP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                                <h4 class="hosting-heading ">Premium RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>25</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>25</p>

                                    <p class="per_month">/month</p>
                                </div>
                                <p></p>
                                <!--<p class="regular-price">Regular price<span class="cross-price"> $199/month</span></p>-->
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=monthly&pid=336&promocode=FREERDP"
                                    class="" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                                        Started</button></a>
                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>8 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>100 GB NVMe SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019/2022</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">90 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/shared-plan.png" alt="shared plan">-->
                                <h4 class="hosting-heading">Enterprise RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>30</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>30</p>

                                    <p class="per_month">/month</p>
                                </div>
                                <p></p>
                                <!--<p class="regular-price">Regular price<span class="cross-price"> $199/month</span></p>-->
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=monthly&pid=337&promocode=FREERDP"
                                    class="" target="_self"><button class="btn-yellow exploreplan-btn" type="submit">Get
                                        Started</button></a>
                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>12 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>150 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">90 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close monthly plan -->


            <div class="tab-pane fade tab-titles" id="pills-half-yearly" role="tabpanel"
                aria-labelledby="pills-half-yearly-tab">
                <!-- start Half Yearly tab plan -->
                <div class="row flex_unset">
                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                                <h4 class="hosting-heading">Starter RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>15</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>15</p>

                                    <p class="per_month">/month</p>
                                </div>
                                <!--<p class="regular-price ">Regular price<span class="cross-price"> $11,590/month</span></p>-->
                                <p></p>
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=semiannually&pid=334&promocode=FREERDP"
                                    class="link-color-black" target="_self"><button class="btn-yellow exploreplan-btn"
                                        type="submit">Get Started</button></a>


                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>2 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>50 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>


                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">60 days Free RDP</p>
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
                                <h4 class="hosting-heading">Standard RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>20</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>20</p>

                                    <p class="per_month">/month</p>
                                </div>
                                <p></p>
                                <!--<p class="regular-price">Regular price<span class="cross-price"> $1,149/month</span></p>-->
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=semiannually&pid=335&promocode=FREERDP"
                                    class="text-white" target="_self"><button class="btn-purple exploreplan-btn"
                                        type="submit">Get Started</button></a>
                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>2 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>6 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>75 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-light-purple" bis_skin_checked="1">
                                    <p class="m-0">60 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                                <h4 class="hosting-heading">Premium RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>25</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>25</p>

                                    <p class="per_month">/month</p>
                                </div>
                                <!--<p class="regular-price ">Regular price<span class="cross-price"> $11,590/month</span></p>-->
                                <p></p>
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=semiannually&pid=336&promocode=FREERDP"
                                    class="link-color-black" target="_self"><button class="btn-yellow exploreplan-btn"
                                        type="submit">Get Started</button></a>

                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>8 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>100 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019/2022</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">60 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                                <h4 class="hosting-heading">Enterprise RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>30</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>30</p>

                                    <p class="per_month">/month</p>
                                </div>
                                <!--<p class="regular-price ">Regular price<span class="cross-price"> $11,590/month</span></p>-->
                                <p></p>
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=semiannually&pid=337&promocode=FREERDP"
                                    class="link-color-black" target="_self"><button class="btn-yellow exploreplan-btn"
                                        type="submit">Get Started</button></a>

                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>12 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>150 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0" style="">60 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- Close Half Yearly Plan -->



            <div class="tab-pane fade show active tab-titles" id="pills-yearly" role="tabpanel"
                aria-labelledby="pills-yearly-tab">
                <!-- start Yearly tab plan -->
                <div class="row flex_unset">

                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                                <h4 class="hosting-heading">Starter RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>15</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>15</p>

                                    <p class="per_month">/month</p>
                                </div>
                                <!--<p class="regular-price ">Regular price<span class="cross-price"> $11,590/month</span></p>-->
                                <p></p>
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=annually&pid=334&promocode=FREERDP"
                                    class="link-color-black" target="_self"><button class="btn-yellow exploreplan-btn"
                                        type="submit">Get Started</button></a>

                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>2 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>50 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">30 days Free RDP</p>
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
                                <h4 class="hosting-heading">Standard RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>20</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>20</p>
                                    <p class="per_month">/month</p>
                                </div>
                                <p></p>
                                <!--<p class="regular-price">Regular price<span class="cross-price"> $1,149/month</span></p>-->
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=annually&pid=335&promocode=FREERDP"
                                    class="text-white" target="_self"><button class="btn-purple exploreplan-btn"
                                        type="submit">Get Started</button></a>
                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>2 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>6 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>75 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-light-purple" bis_skin_checked="1">
                                    <p class="m-0">30 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                                <h4 class="hosting-heading">Premium RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>25</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>25</p>
                                    <p class="per_month">/month</p>
                                </div>
                                <!--<p class="regular-price ">Regular price<span class="cross-price"> $11,590/month</span></p>-->
                                <p></p>
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=annually&pid=336&promocode=FREERDP"
                                    class="link-color-black" target="_self"><button class="btn-yellow exploreplan-btn"
                                        type="submit">Get Started</button></a>

                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>8 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>100 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019/2022</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">30 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 explore-cols">
                        <div class="position-relative h-100">
                            <div class="upper-card">
                                <!--<img class="hosting-icons" src="assets/img/dedicated-server.png" alt="dedicated server">-->
                                <h4 class="hosting-heading">Enterprise RDP</h4>

                                <div class="price-container">
                                    <p class="hosting-price vps-price indian-host-price"><span
                                            class="hin-rs-1-1">$</span>30</p>
                                    <p class="hosting-price vps-price usa-host-price"><span
                                            class="hin-rs-1-1">$</span>30</p>
                                    <p class="per_month">/month</p>
                                </div>
                                <!--<p class="regular-price ">Regular price<span class="cross-price"> $11,590/month</span></p>-->
                                <p></p>
                                <a href="https://www.youstable.com/manage/order.php?a=add&billingcycle=annually&pid=337&promocode=FREERDP"
                                    class="link-color-black" target="_self"><button class="btn-yellow exploreplan-btn"
                                        type="submit">Get Started</button></a>

                                <div class="hosting_specification">
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>4 Core Processor</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>12 GB RAM</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>150 GB SSD</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>1 TB Bandwidth</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Windows Server 2019</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>99.9% Service Uptime</p>
                                    </div>
                                    <div class="d-flex gap-2 specifications">
                                        <img src="assets/img/speci-tick.png" class="specification-tick">
                                        <p>Admin Access</p>
                                    </div>
                                </div>

                                <div class="free_setup btn-yellow " bis_skin_checked="1">
                                    <p class="m-0">30 days Free RDP</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- Close Yearly Plan -->

        </div> <!-- close all tab content -->

        <div class="text-center margin-top-bottom ideak-choice">
            <p class="server-title">* Price shown reflects 3 month billing cycle with discount valid first month only.
            </p>
        </div>
    </div>
</section>



<!-- Fifth sction (What Makes YouStable Awesome?)-->
<section class="awesome-youstable affiliate-two affiliate-four">
    <div class="container">
        <div class="right-cols-awesome">
            <div class="padding-r-l text-center">
                <h2 class="ay_heading">Why Buy our <span class="awesome-q line-1 anim-typewriter">Free RDP Server with
                        Full Admin Access From US?</span></h2>
                <p class="server-title title-sides-width">Our full admin access Free RDP hosting offer four incredible
                    features that will revolutionise your online experience.<br class="remove-mobile"> With complete
                    administrative access, you
                    can customise your server settings,<br class="remove-mobile"> install software, and manage resources
                    effortlessly.</p>
            </div>
            <div class="sides-width">
                <div class="row">
                    <div class="col-md-4 cols-aws-you">
                        <div class="left-cols-awesome">
                            <img src="assets/img/newImages/Low-Latency.svg" alt="uptime">
                            <h5 class="ay-heading">Low Latency</h5>
                            <p class="ay-title">Experience lightning-fast speeds with our low latency, No single point
                                of failure.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-aws-you">
                        <div class="left-cols-awesome">
                            <img src="assets/img/newImages/pure-ssd-storage.svg" alt="refund">
                            <h5 class="ay-heading">Pure SSD storage</h5>
                            <p class="ay-title">Experience blazing-fast performance with our Pure SSD storage.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-aws-you">
                        <div class="left-cols-awesome">
                            <img src="assets/img/newImages/uptime-(1).svg" alt="support">
                            <h5 class="ay-heading">99.99% Uptime</h5>
                            <p class="ay-title">Enjoy uninterrupted service with our exceptional 99.99% server uptime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--why domain-->
<section class="why-buy-domain">
    <div class="container">
        <div class="row why-buy-domain-one">
            <div class="col-lg-6">
                <div class="why-serve-domain">
                    <h3>Let the Experts Setup Your RDP Server.</h3>
                </div>
                <div class="d-flex gap-3 lists-hosting">
                    <ul class="banner-list list-unstyled">
                        <li class="purple-text_dark mb-3 free-rdp-one" style="color: #292929;">Don't waste your time and
                            energy setting up your own windows free RDP server. Let our experts do it for you!
                            We have the experience and expertise to get your server up and running quickly and
                            efficiently.</li>

                        <li class="purple-text_dark mb-3 free-rdp-one" style="color: #292929;">We'll take care of everything, from
                            choosing the right hardware and software to configuring your security settings. You can
                            relax knowing that your best free RDP server with full admin access is in good hands.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/newImages/setup-rdp.svg" class="why-domain-serv" />
            </div>
        </div>
    </div>
</section>
<!--why domain-->



<!-- ninth section (Hosting rating) -->
<section class="hosting-rating">
    <div class="container">

        <div class="d-flex justify-content-between">
            <span class="text-start">
                <!--<img src="assets/img/floating-imgs.png" class="floating">-->
                <img src="assets/img/yellow-circle.png" class="floating yellow-circle">
            </span>
            <span class="text-end">
                <!--<img src="assets/img/floating-imgs.png" class="floating">-->
                <img src="assets/img/cloud-circle.png" class="movingcloud">
            </span>
        </div>

        <!--<div class="text-center outer-anim highlight-on-scroll">-->
        <!--    <p class="hosting-rating-title">Experience's top-rated SMB Hosting provider with a <span class="fw-bold font-style-italic purple-text_dark"><em>4.7-star rating</em></span>, powering websites from over 200 countries.</p>-->
        <!--</div>-->
        <!--<section class="highlight-text-scroll">-->

        <!-- <p class="reveal-type" data-bg-color="#cccccc" data-font-family="poppins" data-fg-color="#6B46F2">Experience's top-rated SMB Hosting provider with a <em class="fw-bold" style="color:#6B46F2;">4.7-star rating</em> powering websites from over 200 countries.</p>-->

        <!--</section>-->
        <?php include ('animate-text.php') ?>

        <!--<div class="text-start">-->
        <!--     <img src="assets/img/floating-imgs2.png" class="floating">-->
        <!--     </div>-->

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
<section class="established">
    <div class="container">
        <div class="border text-center gap-top ">
            <div class=" years-with-customer">
                <div class="row row-up">
                    <div class="col-md-4">
                        <div class="customer-rating-hosting">
                            <img src="assets/img/happy.png" alt="" class="customer-attach-img">
                            <p class="purple-text_dark fw-bold working-counter mb-1">100k</p>
                            <p class="how-much-time">Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="customer-rating-hosting">
                            <img src="assets/img/newImages/supp-1.svg" alt="" class="customer-attach-img">
                            <p class="purple-text_dark fw-bold working-counter mb-1">24/7</p>
                            <p class="how-much-time">Expert Support</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="customer-rating-hosting">
                            <img src="assets/img/established.png" alt="" class="customer-attach-img">
                            <p class="purple-text_dark fw-bold working-counter mb-1">2015</p>
                            <p class="how-much-time">Established</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="sea">
    <div class="wave"></div>
</div>



<!--Sixth section (High quality Server) -->
<section class="high-q-server">
    <div class=" container">
        <div class="bg-purple">
            <div class="text-center">
                <h2 class="server-heading">Our Industry Leading Technology Partners</h2>
                <p class="server-title title_sides-width">Our hosting infrastructure uses top-tier technologies: Dell
                    servers, AMD & Intel processors, <br class="remove-mobile"> BitNinja for security, and LiteSpeed for
                    20x faster website speeds.
                </p>
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




<!-- Seventh sction (Features that Make Your Website Powerful)-->
<section class="awesome-youstable affiliate-two affiliate-four">
    <div class="container">
        <div class="right-cols-awesome">
            <div class="text-center">
                <h2 class="ay_heading">What’s Included in Our Free RDP Server Plans?</span></h2>
                <p class="server-title title_sides_width">We’re here to make sure your Free RDP Server Hosting
                    experience is top-notch!<br class="remove-mobile">
                    We offer all the best features to ensure your remote connections are smooth and efficient.</p>
            </div>
            <div class="features-awesome ">
                <div class="row text-left">
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/newImages/instant-activation.svg" alt="ssd-storage">
                            <h5 class="ay-heading">Instant Activation</h5>
                            <p class="ay-title m-0 w-100">Are you worried about the RDP’s Activation Period? We offer
                                instant activation of the RDP servers upon successful payment completion.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/newImages/Full-admin-access.svg" alt="ssl-certificate">
                            <h5 class="ay-heading">Full Admin Access</h5>
                            <p class="ay-title m-0 w-100">With Full Admin Access to your RDP servers, you may view
                                remotely accessible data and even manage your system from anywhere at any time.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/newImages/Expert-support-(2).svg" alt="speed-web-server">
                            <h5 class="ay-heading">Expert Support</h5>
                            <p class="ay-title m-0 w-100">We have the Best Dedicated Expert Support Team that works
                                backstage to troubleshoot RDP-related issues via LiveChat and the Ticket system.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row text-left mt-4">
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/newImages/99.99%-server-uptime.svg" alt="Free Migration">
                            <h5 class="ay-heading">99.99% Server Uptime</h5>
                            <p class="ay-title m-0 w-100">Get the Highest guaranteed Uptime, ensuring that your RDP
                                servers are accessible online 24/7 with Zero lagging experience.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/newImages/Enterprise-server.svg" alt="auto-backup">
                            <h5 class="ay-heading">Enterprise Server</h5>
                            <p class="ay-title m-0 w-100">Access limitless data, Add multiple Users, and Enjoy other
                                enterprise-grade RDP server features with zero points of failure.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/newImages/NVMe-SSD.svg" alt="support24">
                            <h5 class="ay-heading">NVMe SSD Drive</h5>
                            <p class="ay-title m-0 w-100">The Latest NVMe storage Drive ensures quick Server loading
                                speed and smoother data transmission, boosting users’ experience.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- Tenth section (What our customer says) -->
<?php
include ('inc/customer-reviews.php');
?>

<!-- Eleventh section (FAQ) -->
<section class="faq">
    <div class="container">
        <h2 class="text-center faq-question">FAQs</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What are Free RDP servers?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Free RDP servers refer to the Remote Desktop Protocol servers that are
                        absolutely available at Zero cost and require a user to make no investment when wanting to use
                        RDP Hosting servers.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        What are the benefits of using RDP?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Accessing remotely available Files, Troubleshooting Tech issues on
                        clients’ servers from far-off locations, and playing PC-enabled Games using smartphones located
                        at a distance are some of the benefits of using RDP servers.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Can Windows RDP be used on Mac or Linux?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Absolutely Yes! You can use Windows RDP servers on MAC, LINUX and other
                        OS platforms as well.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        When can I expect my RDP details after making a payment?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">As soon as you complete the payment process, you will receive your RDP
                        server details and instant RDP server access.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I use YouStable Windows Free RDP on another OS?

                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes! You can use YouStable’s Windows Free RDP servers on other operating
                        System platforms like Linux/ MAC.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseFour">
                        What are the accepted payment methods?

                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">BankTransfer/ Credit or Debit Card/ PayPal/ and BitCoin Transactions are
                        a few of the accepted payment methods when purchasing RDP servers.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Twelveth section-->
<div class="container customer-support-container">
    <section class="bg-light-yellow">
        <div class="row reverse">
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
                        <a href="https://wa.me/+919616782253" class="contact-hosting one" data-toggle="tooltip"
                            data-placement="top" title="Chat On Whatsapp" target="_self">+919616782253</a>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="contact-hosting one">
                        <img src="assets/img/newImages/Expert-Support.svg">
                    </div>
                    <div class="mb-4">
                        <a href="javascript:void(Tawk_API.toggle())" class="contact-hosting one" data-toggle="tooltip"
                            data-placement="top" title="Click to Chat" target="_self">Live Chat with Experts</a>
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
</div>


<?php include ('inc/footer.php') ?>