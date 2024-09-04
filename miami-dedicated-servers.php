<?php
$page = 'miami-dedicated-servers';
include ('inc/header.php');
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
          <!--<p class="experience">Experience</p>-->
          <h1 class="Banner-Heading padding-heading robust">Dedicated Servers Miami, Florida </h1>
          <p class="Banner-title p-0">Explore the versatility of our premium dedicated servers in Miami, Florida. YouStable offers complete scalability and customization options tailored to suit your unique projects.</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img
                  src="assets/img/newImages/Premium-Latest-Hardware.svg" alt="tick" class="tick-square"> Premium Latest Hardware</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/newImages/DDoS-Protection.svg" alt="tick"
                  class="tick-square"> Multiple Server Location</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img src="assets/img/newImages/1-Gbps-uplink.svg"
                  alt="tick" class="tick-square"> DDoS Protection</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/newImages/Multiple-Server-Location.svg"
                  alt="tick" class="tick-square"> 1 Gbps uplink</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/miami-dedicated-servers.png" alt="Banner"
          srcset="">
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
<!--Explore Section-->
<section class="explore-section mt-5 decdicated-plans-server" id="explore">
  <div class="container">
    <div class="text-center">
      <h2 class="server-heading shared-heading-plan">Choose Dedicated Servers in Miami, Florida Plans</h2>
      <p class="server-title">By opting for our Best Miami Dedicated Servers, you can host your applications or services with confidence. Our high-performing servers empower your business to thrive and grow..
      </p>
    </div>

    <div class="choose-country-tab">
      <div class="tab-content pt-4" id="pills-tabContent">
        <!--India-->
        <div class="tab-pane fade show active miami-set" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                  <td class="purple-color-server">Intel Quad-Core Xeon E-2274G</td>
                  <td>4 x 4.0GHz</td>
                  <td>32GB DDR4</td>
                  <td>2x480GB SSD</td>
                  <td>10 TB</td>
                  <td class="indian-host-price">₹10,694/mo<p class="actual-prize m-0">₹14,259/Mo</p>
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
                  <td class="indian-host-price">₹14000/mo<p class="actual-prize m-0">₹18667/Mo</p>
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

                  <td class="indian-host-price">₹14,250/mo<p class="actual-prize m-0">₹19000/Mo</p>
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

                  <td class="indian-host-price">₹22,300/mo<p class="actual-prize m-0">₹29733/Mo</p>
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

                  <td class="indian-host-price">₹22,900/mo<p class="actual-prize m-0">₹30533/Mo</p>
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
        <h2 class="ay_heading">Why Choose YouStable’s Miami Dedicated Server?</span></h2>
        <p class="server-title title_sides_width pb-3">We offer a lot more than what you are expecting!</p>
      </div>
      <div class="why-choose">
        <div class="row text-left">
          <div class="col-md-4 cols">
            <div class="feature_cols_dedicated">
              <img src="assets/img/call-center-copy-2.png" alt="ssd-storage">
              <div class="border-box miami-box">
                <h5 class="ay-heading">24/7 Support</h5>
                <p class="ay-title dedicate-content">YouStable’s dedicated team is ready to solve any problem before or after it occurs with its premium round-the-clock technical support.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/CONTROL-1.png" alt="ssl-certificate">
              <div class="border-box miami-box">
                <h5 class="ay-heading">Total Control</h5>
                <p class="ay-title dedicate-content">You can control your whole hosting infrastructure from a single interface through YouStable’s simple client portal and API. It’s easy!</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/115803-1.png" alt="speed-web-server">
              <div class="border-box miami-box">
                <h5 class="ay-heading">Monitoring </h5>
                <p class="ay-title dedicate-content">All dedicated servers are monitored by a free add-on monitoring service. It provides you with all the information about your website.</p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>


<!--map-->

<!-- <section class="map-section about-maps awesome-youstable">
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
</section> -->



<!--Operating-systems-->
<section class="operating-sytems">
  <div class="container">
    <div class="text-center">
      <h2 class="Banner-Heading">Operating System Support!</h2>
      <p class="operating-title-width">YouStable offers custom operating system installation support! No matter which OS you need in our CyberPanel VPS hosting server, YouStable has got it all for you.
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


            <li class="indian-host-price">BitNinja Server Security <span class="purple-bg">₹5200</span></li>
            <li class="usa-host-price">BitNinja Server Security <span class="purple-bg">$65</span></li>
            <li class="indian-host-price">Blesta (unbranded) <span class="purple-bg">₹400</span></li>
            <li class="usa-host-price">Blesta (unbranded) <span class="purple-bg">$5</span></li>
            <li class="indian-host-price">Search Engine Optimization <br> <span class="purple-bg">₹1200</span></li>
            <li class="usa-host-price">Search Engine Optimization <br> <span class="purple-bg">$15</span></li>
          </ul>
        </div>

        <div class="col-md-3 available-cols">
          <ul class="available-points">
            <li class="indian-host-price">Performance Boost and Analytics <span class="purple-bg">₹200</span></li>
            <li class="usa-host-price">Performance Boost and Analytics <span class="purple-bg">$2.5</span></li>
            <li class="indian-host-price">VPS Offsite Cloud Backup <span class="purple-bg">₹960</span></li>
            <li class="usa-host-price">VPS Offsite Cloud Backup <span class="purple-bg">$12</span></li>
            <li class="indian-host-price">Litespeed 2-CPU <span class="purple-bg">₹1600</span></li>
            <li class="usa-host-price">Litespeed 2-CPU <span class="purple-bg">$20</span></li>
          </ul>
        </div>

        <div class="col-md-6 available-cols">
          <h2>Available Add-Ons!l</h2>
          <p class="server-title server-title-width my-0 enhance">Enhance your server with these software addons and upgrades.<br>

All upgrades and addons can be added or removed from by simply emailing our sales team. No downtime is involved during any upgrade process. The only requirement is the addon must remain on your account for the minimum of 30 days.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>




<!--Review section-->
<section class="hosting-rating">
  <div class="container">

    <div class="d-flex justify-content-between">
      <span class="text-start">
        <img src="assets/img/yellow-circle.png" class="floating yellow-circle">
      </span>
      <span class="text-end">
        <img src="assets/img/cloud-circle.png" class="movingcloud">
      </span>
    </div>
    <?php include ('animate-text.php') ?>
    <div class="d-flex justify-content-between">
      <span class="text-start">
        <img src="assets/img/cloud-wave.png" class="movingclouds">
      </span>
      <span class="text-end">
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
           What is a Miami Dedicated Servers?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Miami Dedicated Servers refer to powerful and exclusive hosting solutions where an entire server is devoted to a single user or client. These servers are located in Miami, providing users with a strategic location in the central business district of the USA. The dedicated nature ensures that all server resources, 
          such as processing power, storage, and bandwidth, are exclusively available for the use of the client's specific web projects or applications.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
           What are the benefits of choosing a Florida, Miami Dedicated Server in USA?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Choosing a Miami Dedicated Server in the USA comes with numerous advantages. The central location of Miami in the country's business district ensures minimized latency and swift loading times, providing optimal performance for users nationwide. These dedicated servers offer customization options, scalability, and robust security features, contributing to a reliable and stable hosting environment.
          With 24/7 customer support, users can address any technical concerns promptly, making Miami Dedicated Servers an excellent choice for those prioritizing
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Does Miami Dedicated Server is Secured?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, Miami Dedicated Servers are secure, featuring robust measures such as DDoS protection and malware detection to safeguard hosted data and applications. The dedicated nature of these servers also minimizes risks associated with shared hosting environments,
          enhancing overall security. Users can further enhance security by implementing best practices, including regular updates and proper access controls.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Can I get different specifications from the ones mentioned on your website?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, YouStable provides the fastest & powerful dedicated servers to meet your specific requirements. If you don't find the exact specifications you need on our website, feel free to reach out to us via phone, 
          live chat, or email. We'll promptly respond with the closest matching specifications and pricing to cater to your unique hosting needs.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
            How Can I migrate my website to YouStable?</button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">If you already have a website, consider transferring it to YouStable, recognized as the premier web hosting company. We acknowledge that website migration can be a challenging and time-consuming process. Nevertheless, YouStable provides completely free website migration(upto 5GB*) to their quality servers. So if you are stuck with a low-quality service provider, you can shift to a better choice.
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