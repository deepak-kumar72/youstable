<?php
$page = 'dedicated-servers';
include('inc/header.php');
?>

<style>
  .contact-hosting {
    font-size: 20px;
  }

  .country-choose-btn.dedicated-button-click {
    padding: 10px;
    font-size: 18px;
    font-weight: 400;
    line-height: 26px;
    width: 172px;
    border: 1px solid #e5e5e5;
  }

  .country-choose-btn.active {
    color: #fff !important;
  }

  .choose-country-btn1 {
    border-radius: 30px 0 0 30px !important;

  }

  .choose-country-btn2 {
    border-radius: 0 30px 30px 0 !important;
    border-right: none !important;
    border-left: none !important;
  }

  tr.country-server-specs-head th {
    font-size: 20px;
    font-weight: 500;
    line-height: 24.2px;
    color: #292929;
    padding: 18px 8px 18px 8px;
    text-align: center;
  }

  .country-server-specs-head {
    border-bottom: 1px solid #CACACA;
  }

  .country-server-specs td {
    font-family: Inter;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    color: #292929;
    padding-bottom: 0;
    padding-left: 0;
    text-align: center;

  }

  .top-specs td {
    padding: 8px 8px 8px 8px !important;
    vertical-align: middle;
    font-weight: 500;
  }

  .buy-now-btn {
    border: none;
    background: #ffc235;
    font-size: 15px;
    font-weight: 400;
    line-height: 19.36px;
    color: #292929;
    padding: 8px 32px 8px 32px;
    border-radius: 38px;
    transition: 0.3s;
  }

  button.buy-now-btn:hover {
    background: #292929;
    color: #fff;
  }

  .actual-prize {
    font-size: 14px;
    font-weight: 400;
    line-height: 19px;
    color: #FF2121;
    text-decoration: line-through;
  }

  td.purple-color-server {
    font-size: 17px;
    color: #6b46f2;
    text-align: start;
  }

  .margin-top {
    margin-top: 42px;
  }

  tr.border-white.country-server-specs {
    border-bottom: 1px solid #cacaca !important;
  }

  td.purple-color-server {
    width: 300px;
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
  .choose-country-btn3 {
  border-radius: 0px 50px 50px 0px !important;}

  @media screen and (max-width: 768px) {
    img.dedicated-server-hero {
      width: 85%;
    }
  }

  /*.responsive-specs-table{*/
  /*        border-bottom: 1px solid #CACACA;*/
  /*}*/
  /*MEDIA QUERY*/
</style>

<!-- Banner section (shared hosting) -->
<section class="banner-sec">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content margin-top dedicated-margin">
          <p class="experience">Powerful Dedicated Servers</p>
          <h1 class="Banner-Heading padding-heading robust">High-Power Servers
          Ideal for Indian Businesses </h1>
          <p class="Banner-title p-0">Experience peak performance and security with affordable Dedicated Server Hosting in India. Full Root Access, unlimited storage, and top-tier security for your data!</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img
                  src="assets/img/newImages/Premium-Latest-Hardware.svg" alt="tick" class="tick-square"> 24/7/365 Customer Support</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/newImages/DDoS-Protection.svg" alt="tick"
                  class="tick-square"> Hassle-Free Migrations</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img src="assets/img/newImages/1-Gbps-uplink.svg"
                  alt="tick" class="tick-square"> Dedicated 1 IPv4 Address</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/newImages/Multiple-Server-Location.svg"
                  alt="tick" class="tick-square">Lightning Fast Indian Servers</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Compare Plans <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/dedicated-server-hero-image.png" alt="Banner" srcset="">
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
<section class="explore-section mt-5 decdicated-plans-server" id="explore">
  <div class="container">
    <div class="text-center">
      <h2 class="server-heading shared-heading-plan">What if we say you are getting all in one here?</h2>
      <p class="server-title">What makes you choose to host? The rich quality, enough quantity, reasonable prices and extraordinary features?
      What if we say you are getting all in one here?
      </p>
    </div>

    <div class="choose-country-tab">
      <ul class="nav nav-pills my-5 justify-content-center country-choose-pill dedicated-mrgin" id="pills-tab"
        role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active country-choose-btn choose-country-btn1 text-dark dedicated-button-click"
            id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
            aria-controls="pills-home" aria-selected="true"><span class="flag-icons-country"><img
                src="assets/img/206606.png" alt="" /></span> India </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link country-choose-btn choose-country-btn3 text-dark dedicated-button-click"
            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
            aria-controls="pills-profile" aria-selected="false"><span class="flag-icons-country"><img
                src="assets/img/412828.png" alt="" /></span> USA</button>
        </li>
        <!-- <li class="nav-item" role="presentation">
          <button class="nav-link country-choose-btn choose-country-btn2 text-dark dedicated-button-click"
            id="pills-country-tab" data-bs-toggle="pill" data-bs-target="#pills-country" type="button" role="tab"
            aria-controls="pills-country" aria-selected="false"><span class="flag-icons-country"><img
                src="assets/img/2151356.png" alt="" /></span> Netherlands</button>
        </li> -->
      </ul>
      <div class="tab-content pt-4" id="pills-tabContent">
        <!--India-->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="table-responsive responsive-specs-table">
            <table class="table mb-2">
              <thead>
                <tr class="country-server-specs-head">
                  <th scope="col" style="color: #6b46f2;width: 24%;text-align: start;">Server Name</th>
                  <th scope="col" style="color: #292929;width: 12%;" class="wid-space">CPU</th>
                  <th scope="col" style="color: #292929;width: 12%;">Memory</th>
                  <th scope="col" style="color: #292929;width: 12%;">Storage</th>
                  <th scope="col" style="color: #292929;width: 12%;">Bandwidth</th>
                  <th scope="col" style="color: #292929;width: 12%;">Price</th>
                  <th scope="col" style="color: #292929;width: 12%;">Get Started</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E3-1230v3-3.30Ghz</td>
                  <td>4</td>
                  <td>32GB DDR4</td>
                  <td>480GB SSD</td>
                  <td>10 TB/1G</td>
                  <td class="indian-host-price">₹4999/mo<p class="actual-prize m-0">₹6665/Mo</p>
                  </td>
                  <td class="usa-host-price">$60.00/mo<p class="actual-prize m-0">$79.97/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=354"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=354"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E3-123x v5/v6-3.2Ghz</td>
                  <td>8</td>
                  <td>32GB DDR4</td>
                  <td>480GB SSD</td>
                  <td>10 TB/1Gbps</td>
                  <td class="indian-host-price">₹6999/mo<p class="actual-prize m-0">₹9332/Mo</p>
                  </td>
                  <td class="usa-host-price">$84.01/mo<p class="actual-prize m-0">$111.98/Mo</p>
                  </td>
                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=346"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=346"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E-2136-3.30Ghz</td>
                  <td>6</td>
                  <td>32GB DDR4</td>
                  <td>480GB SSD</td>
                  <td>10 TB/1Gbps</td>

                  <td class="indian-host-price">₹7999/mo<p class="actual-prize m-0">₹10666/Mo</p>
                  </td>
                  <td class="usa-host-price">$96.01/mo<p class="actual-prize m-0">$127.98/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=355"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=355"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E-2286G - HEXA CORE-4.0Ghz</td>
                  <td>6</td>
                  <td>32GB DDR4</td>
                  <td>480GB SSD</td>
                  <td>10 TB/1Gbps</td>

                  <td class="indian-host-price">₹9999/mo<p class="actual-prize m-0">₹13332/Mo</p>
                  </td>
                  <td class="usa-host-price">$120.01/mo<p class="actual-prize m-0">₹159.97/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=348"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=348"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E5-2667v4-3.2Ghz</td>
                  <td>8</td>
                  <td>32GB DDR4</td>
                  <td>960GB SSD</td>
                  <td>10 TB/1Gbps</td>

                  <td class="indian-host-price">₹11999/mo<p class="actual-prize m-0">₹15999/Mo</p>
                  </td>
                  <td class="usa-host-price">$144.02/mo<p class="actual-prize m-0">$191.98/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=347"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=347"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E5-2680v4-3.2Ghz</td>
                          <td>28</td>
                          <td>128GB DDR4</td>
                          <td>960GB SSD</td>
                          <td>10 TB/1Gbps</td>

                          <td class="indian-host-price">₹15999/mo<p class="actual-prize m-0">₹21332/Mo</p></td>
                          <td class="usa-host-price">$192.03/mo<p class="actual-prize m-0">$255.97/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=349" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">E5-2680v4-3.2Ghz</td>
                          <td>28</td>
                          <td>256GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>

                           <td class="indian-host-price">₹18999/mo<p class="actual-prize m-0">₹25332/Mo</p></td>
                          <td class="usa-host-price">$228.03/mo<p class="actual-prize m-0">$303.96/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=350" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">AMD EPYC 7313-3.0Ghz</td>
                          <td>16</td>
                          <td>64GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>
                          
                           <td class="indian-host-price">₹24999/mo<p class="actual-prize m-0">₹33332/Mo</p></td>
                          <td class="usa-host-price">$300.05/mo<p class="actual-prize m-0">$399.96/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=351" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">AMD EPYC 7543-2.8Ghz</td>
                          <td>32</td>
                          <td>128GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>

                           <td class="indian-host-price">₹27999/mo<p class="actual-prize m-0">₹33332/Mo</p></td>
                          <td class="usa-host-price">$336.06/mo<p class="actual-prize m-0">$447.96/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=352" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2X AMD EPYC 7543-2.8Ghz</td>
                          <td>64</td>
                          <td>256GB DDR4</td>
                          <td>1.92TB SSD</td>
                          <td>10 TB/1Gbps</td>

                           <td class="indian-host-price">₹37999/mo<p class="actual-prize m-0">₹50665/Mo</p></td>
                          <td class="usa-host-price">$456.08/mo<p class="actual-prize m-0">$607.94/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=353" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>

              </tbody>
            </table>
          </div>
        </div>



        <!--USA-->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="table-responsive responsive-specs-table">
            <table class="table mb-2">
              <thead>
                <tr class="country-server-specs-head">
                  <th scope="col" style="color: #6b46f2;width: 24%;text-align: start;">Server Name</th>
                  <th scope="col" class="wid-space">CPU</th>
                  <th scope="col">Memory</th>
                  <th scope="col">Storage</th>
                  <th scope="col">Bandwidth</th>
                  <th scope="col">Price</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">Intel Quad-Core Xeon E-2274G</td>
                  <td>4 x 4.0GHz</td>
                  <td>32GB DDR4</td>
                  <td>2X480GB SSD</td>
                  <td>10 TB</td>
                  <td class="indian-host-price">₹4999/mo<p class="actual-prize m-0">₹6665/Mo</p>
                  </td>
                  <td class="usa-host-price">$60.00/mo<p class="actual-prize m-0">$79.97/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=354"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=354"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">Intel Hexa-Core Xeon E-2286G</td>
                  <td>6 x 4.0GHz</td>
                  <td>64GB DDR4</td>
                  <td>2x480GB SSD</td>
                  <td>10 TB</td>
                  <td class="indian-host-price">₹6999/mo<p class="actual-prize m-0">₹9332/Mo</p>
                  </td>
                  <td class="usa-host-price">$84.01/mo<p class="actual-prize m-0">$111.98/Mo</p>
                  </td>
                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=346"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=346"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">Intel Octa-Core Xeon E-2278G</td>
                  <td>8 x 3.40GHz</td>
                  <td>64GB DDR4</td>
                  <td>2x480 GB SSD</td>
                  <td>10 TB</td>

                  <td class="indian-host-price">₹7999/mo<p class="actual-prize m-0">₹10666/Mo</p>
                  </td>
                  <td class="usa-host-price">$96.01/mo<p class="actual-prize m-0">$127.98/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=355"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=355"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">2x Intel Deca-Core Xeon E5-2630v4</td>
                  <td>2x 10 cores - 2.20GHz</td>
                  <td>64GB DDR4</td>
                  <td>4x2TB SATA</td>
                  <td>10 TB</td>

                  <td class="indian-host-price">₹9999/mo<p class="actual-prize m-0">₹13332/Mo</p>
                  </td>
                  <td class="usa-host-price">$120.01/mo<p class="actual-prize m-0">₹159.97/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=348"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=348"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">AMD 16-Core EPYC 7302P</td>
                  <td>16 Cores 3.06GHz</td>
                  <td>64GB DDR4</td>
                  <td>2x480GB SSD</td>
                  <td>10 TB</td>

                  <td class="indian-host-price">₹11999/mo<p class="actual-prize m-0">₹15999/Mo</p>
                  </td>
                  <td class="usa-host-price">$144.02/mo<p class="actual-prize m-0">$191.98/Mo</p>
                  </td>

                  <td class="indian-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=347"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price"><a
                      href="https://www.youstable.com/manage/order.php?currency=1&a=add&pid=347"
                      class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>

                <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel 12-Core Xeon Silver 4214</td>
                          <td>2x 12 cores - 2.20GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x480GB SSD</td>
                          <td>10 TB</td>

                           <td class="indian-host-price">₹10,694/mo<p class="actual-prize m-0">₹14259/Mo</p></td>
                          <td class="usa-host-price">$134.0/mo<p class="actual-prize m-0">$171.10/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-2" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel 16-Core Xeon Gold 5218</td>
                          <td>2x 16 cores - 2.30GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x960GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹14,000/mo<p class="actual-prize m-0">₹18667/Mo</p></td>
                          <td class="usa-host-price">$170.0/mo<p class="actual-prize m-0">$223.99/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-3" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x AMD 24-Core EPYC 7402</td>
                          <td>2x 24 cores - 2.80GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x960GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹14,250/mo<p class="actual-prize m-0">₹19000/Mo</p></td>
                          <td class="usa-host-price">$173.0/mo<p class="actual-prize m-0">$227.9/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-4" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <!-- <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel Deca-Core Xeon E5-2630v4</td>
                          <td>2x 10 cores - 2.20GHz</td>
                          <td>64GB DDR4</td>
                          <td>4x2TB SATA</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹22,300/mo<p class="actual-prize m-0">₹29733/Mo</p></td>
                         <td class="usa-host-price">$246.0/mo<p class="actual-prize m-0">$356.77/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-6" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">AMD 16-Core EPYC 7302P</td>
                          <td>16 Cores 3.06GHz</td>
                          <td>64GB DDR4</td>
                          <td>2x480GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹22,900/mo<p class="actual-prize m-0">₹30533/Mo</p></td>
                          <td class="usa-host-price">$279.0/mo<p class="actual-prize m-0">$366.37/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-5" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel 12-Core Xeon Silver 4214</td>
                          <td>2x 12 cores - 2.20GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x480GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹34,600/mo<p class="actual-prize m-0">₹46133/Mo</p></td>
                          <td class="usa-host-price">$420.0/mo<p class="actual-prize m-0">$553.56/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/xeon-e3-1230-intel-quad-core-xeon-e3-1230-8" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x Intel 16-Core Xeon Gold 5218</td>
                          <td>2x 16 cores - 2.30GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x960GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹41,700/mo<p class="actual-prize m-0">₹55600/Mo</p></td>
                          <td class="usa-host-price">$507.0/mo<p class="actual-prize m-0">$667.16/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/intel-quad-core-xeon-e5-1620v4" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr>
                        <tr class="border-white country-server-specs top-specs">
                          <td class="purple-color-server">2x AMD 24-Core EPYC 7402</td>
                          <td>2x 24 cores - 2.80GHz</td>
                          <td>128GB DDR4</td>
                          <td>2x960GB SSD</td>
                          <td>10 TB</td>

                          <td class="indian-host-price">₹47,500/mo<p class="actual-prize m-0">₹63333/Mo</p></td>
                          <td class="usa-host-price">$577.0/mo<p class="actual-prize m-0">$759.95/Mo</p></td>
                          
                          <td><a href="https://www.youstable.com/manage/index.php?rp=/store/dedicated-servers/intel-quad-core-xeon-e5-1620v4-1" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                        </tr> -->

              </tbody>
            </table>
          </div>
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
        <h2 class="ay_heading">Why choose YouStable for your Dedicated
        Server Hosting?</span></h2>
        <p class="server-title title_sides_width pb-3">We offer a lot more than what you are expecting!
        </p>
      </div>
      <div class="why-choose">
        <div class="row text-left">
          <div class="col-md-4 cols">
            <div class="feature_cols_dedicated">
              <img src="assets/img/call-center-copy-2.png" alt="ssd-storage">
              <div class="border-box">
                <h5 class="ay-heading">24/7 on-site Tech Support</h5>
                <p class="ay-title dedicate-content">The dedicated team of YouStable is prepared to resolve any issue, whether it arises beforehand or afterwards, with its high-quality 24/7 technical support.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/CONTROL-1.png" alt="ssl-certificate">
              <div class="border-box">
                <h5 class="ay-heading">Maximum Control</h5>
                <p class="ay-title dedicate-content">With YouStable's user-friendly client portal and API, you have the ability to manage your entire hosting infrastructure effortlessly from a single interface.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/115803-1.png" alt="speed-web-server">
              <div class="border-box">
                <h5 class="ay-heading">99.95% Uptime </h5>
                <p class="ay-title dedicate-content">YouStable's dedicated server comes with Multiple Indian Data Centers, ensuring an impressive 99.95% uptime guarantee for maximum reliability.</p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>


<!--Operating-systems-->

<section class="map-section about-maps awesome-youstable">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading VPS-Hosting-Needss">Dedicated Servers Located Globally</h2>
      <p class="server-title title_sides-width">Our best-in-class dedicated servers offer guaranteed online success,
        with excellent multiple Server Locations ensuring the Highest Uptime.
      </p>
      <div class="row">
        <div class="col">
          <img src="assets/img/dedicatedhsotingimg/map-.png" alt="open cart" class="deploy-app-imgs">
        </div>
      </div>
    </div>

  </div>
</section>



<!--Operating-systems-->
<section class="operating-sytems">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading">Multiple OS Support!</h2>
      <p class="operating-title-width"> YouStable gives you custom OS installation options and lets you choose the OS
        that you find perfect to work with!
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

    <!-- <div class="text-center mt-5 choose-plan-now">-->
    <!--  <button class="btn-yellow   get-tarted-table get-tarted-table-one" type="submit">Choose Plan Now</button>-->
    <!--</div>-->

  </div>
</section>

<!--(Add Ons) -->
<section class="customer-review add-ons">
  <div class="container">
    <div class="available">
      <div class="row">
        <div class="col-md-3 available-cols">
          <ul class="available-points">


            <li class="indian-host-price">BitNinja Server Security <span class="purple-bg">₹1220</span></li>
            <li class="indian-host-price">VPS Offsite Cloud Backup<span class="purple-bg">₹4000</span></li>
            <li class="indian-host-price">LiteSpeed 2-CPU <br> <span class="purple-bg">₹400</span></li>
          </ul>
        </div>

        <div class="col-md-3 available-cols">
          <ul class="available-points">
            <li class="indian-host-price">Load Balancer <span class="purple-bg">₹1600</span></li>
            <li class="indian-host-price">Performance Boost & Analytics <span class="purple-bg">₹800</span></li>
            <li class="indian-host-price">Blesta (unbranded)<span class="purple-bg">₹400</span></li>
          </ul>
        </div>

        <div class="col-md-6 available-cols">
          <h2>Available Add-ons for your Dedicated Server</h2>
          <p class="server-title server-title-width my-0 enhance">Improve your server by incorporating these software add-ons and upgrades.<br>

You can easily add or remove all upgrades and addons by sending an email to our sales team. There will be no downtime during the upgrade process. The only condition is that the addon must remain on your account for a minimum of 30 days.
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
<section class="faq">
  <div class="container">
    <h2 class="text-center faq-question">FAQs</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button acc-purple-bg" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What is a Dedicated Server Hosting?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Dedicated Server Hosting refers to the situation where the business owner who purchased the hosting owns and is provided with the entire (physical) server. The owner has complete authority over the server and can personalize and expand it according to their requirements, maximizing its potential while enjoying complete autonomy and privacy.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            What are the reasons for choosing a Dedicated Server Hosting?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">One of the key advantages of a dedicated server is the exceptional resource capacity it offers for hosting and managing your website. With a dedicated server, you have access to unlimited resources, enabling you to effortlessly attract and handle any amount of web traffic you desire.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Do I need a Dedicated Server for my website?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">The ideal choice for your website will vary based on factors such as your website's characteristics, future plans, needs, and requirements. If your website experiences significant traffic and contains a large amount of content, and you desire to enhance its scalability, dedicated servers would be the most suitable option for you. </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            What is the difference between VPS and a Dedicated Server?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">The fundamental distinction between a VPS (Virtual Private Server) and a dedicated server lies in their resource allocation. VPS servers have relatively constrained resources, whereas dedicated servers offer unlimited resources. This abundance of resources enables dedicated servers to make your website exceptionally fast on the internet.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
            Can I upgrade my VPS to a dedicated server?</button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes! You have the convenience of seamlessly transitioning your VPS services to Dedicated by reaching out to YouStable's customer support. Just get in touch with them, request the upgrade, and patiently await the processing of your request. Your services will be upgraded swiftly and efficiently.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive1">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive1" aria-expanded="false" aria-controls="flush-collapseFour">
            Do you offer control panels for an easy administration of my Dedicated Server?</button>
        </h2>
        <div id="flush-collapseFive1" class="accordion-collapse collapse" aria-labelledby="flush-headingFive1"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, We offer various GUI-based control panel options like DirectAdmin, cPanel, and more. These panels allow you to effortlessly manage and maintain your website, as well as its associated resources!
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive2">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive2" aria-expanded="false" aria-controls="flush-collapseFour">
            Can I upgrade the Configuration of my Dedicated Server Later On?</button>
        </h2>
        <div id="flush-collapseFive2" class="accordion-collapse collapse" aria-labelledby="flush-headingFive2"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, We provide you services with unmetered resources that means you can anytime upgrade to as much resources as you want without any restrictions or interruptions.
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