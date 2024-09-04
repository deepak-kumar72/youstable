<?php
$page = 'dedicated-server-indi';
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
    /*margin-top: 80px;*/
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
          <p class="experience">Dedicated Server Hosting India</p>
          <h1 class="Banner-Heading padding-heading robust">Affordable Dedicated Servers in India</h1>
          <p class="Banner-title p-0">Experience top-notch value with our fast and customizable Indian dedicated server hosting solutions. With our expertise, we craft tailored digital infrastructure that perfectly fits your business needs.</p>
          <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img
                  src="assets/img/choice_of_data_center.svg" alt="tick" class="tick-square"> Choice of Data Center</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/india-nvmessd.svg" alt="tick"
                  class="tick-square"> Fast NVMe SSD Disk</li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3 color-black-1"><img src="assets/img/india-10gbps.svg"
                  alt="tick" class="tick-square">1GBPs Uplink</li>
              <li class="purple-text_dark color-black-1"><img src="assets/img/india-24x7.svg"
                  alt="tick" class="tick-square"> 24/7 Technical Support</li>
            </ul>
          </div>
        </div>
        <a href="#explore"><button class="btn-yellow btn-explore-plan">Get Started Today <i
              class="fa-solid fa-arrow-right"></i></button></a>
        <!-- <p class="Money-Back-Guarantee"><img src="assets/img/ic-shield.png" alt="shield">30-Day Money-Back Guarantee</p> -->
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/dedicated-server-india.png" alt="Banner"
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

<section class="explore-section mt-5 decdicated-plans-server" id="explore">
  <div class="container">
    <div class="text-center">
      <h2 class="server-heading shared-heading-plan">Choose The Best Indian Dedicated Server Plan</h2>
      <p class="server-title">YouStable's affordable dedicated server hosting in India—perfect for boosting your website’s traffic and performance with fully managed, customizable solutions tailored for your business. </p>
    </div>

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
                  <td>10 TB/1Gbps</td>
                  <td class="indian-host-price">₹4999/mo<p class="actual-prize m-0">₹6665/Mo</p>
                  </td>
                  <td class="usa-host-price" style="display: none;">$60.00/mo<p class="actual-prize m-0">$79.97/Mo</p>
                  </td>

                  <td class="indian-host-price"><a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=354" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                  <td class="usa-host-price" style="display: none;"><a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=354" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E3-123x v5/v6-3.2Ghz</td>
                  <td>4</td>
                  <td>32GB DDR4</td>
                  <td>480GB SSD</td>
                  <td>10 TB/1Gbps</td>
                  <td class="indian-host-price">₹6999/mo<p class="actual-prize m-0">₹9332/Mo</p>
                  </td>
                  <td class="usa-host-price" style="display: none;">$84.01/mo<p class="actual-prize m-0">$111.98/Mo</p>
                  </td>
                  <td class="indian-host-price"><a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=346" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                  <td class="usa-host-price" style="display: none;"><a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=346" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E-2136-3.30Ghz</td>
                  <td>6</td>
                  <td>32GB DDR4</td>
                  <td>480GB SSD</td>
                  <td>10 TB/1Gbps</td>

                  <td class="indian-host-price">₹7999/mo<p class="actual-prize m-0">₹10666/Mo</p>
                  </td>
                  <td class="usa-host-price" style="display: none;">$96.01/mo<p class="actual-prize m-0">$127.98/Mo</p>
                  </td>

                  <td class="indian-host-price"><a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=355" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price" style="display: none;"><a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=355" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E-2286G - HEXA CORE-4.0Ghz</td>
                  <td>6</td>
                  <td>32GB DDR4</td>
                  <td>480GB SSD</td>
                  <td>10 TB/1Gbps</td>

                  <td class="indian-host-price">₹9999/mo<p class="actual-prize m-0">₹13332/Mo</p>
                  </td>
                  <td class="usa-host-price" style="display: none;">$120.01/mo<p class="actual-prize m-0">₹159.97/Mo</p>
                  </td>

                  <td class="indian-host-price"><a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=348" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price" style="display: none;"><a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=348" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
                <tr class="border-white country-server-specs top-specs">
                  <td class="purple-color-server">E5-2667v4-3.2Ghz</td>
                  <td>8</td>
                  <td>32GB DDR4</td>
                  <td>960GB SSD</td>
                  <td>10 TB/1Gbps</td>

                  <td class="indian-host-price">₹11999/mo<p class="actual-prize m-0">₹15999/Mo</p>
                  </td>
                  <td class="usa-host-price" style="display: none;">$144.02/mo<p class="actual-prize m-0">$191.98/Mo</p>
                  </td>

                  <td class="indian-host-price"><a href="https://www.youstable.com/manage/order.php?currency=2&amp;a=add&amp;pid=347" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>

                  <td class="usa-host-price" style="display: none;"><a href="https://www.youstable.com/manage/order.php?currency=1&amp;a=add&amp;pid=347" class="link-color-black" target="_self"><button class="buy-now-btn">Buy Now</button></a></td>
                </tr>
 
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>
    
    <section class="explore-section mt-5 decdicated-plans-server" id="explore">
       <div class="text-center">
      <h2 class="server-heading shared-heading-plan">Choose The Best Indian Dedicated Server Plan</h2>
      <p class="server-title">YouStable's affordable dedicated server hosting in India—perfect for boosting your website’s traffic and performance with fully managed, customizable solutions tailored for your business. </p>
    </div>
    </section>





<!--customer-servicess-->

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
                
            <a href="https://www.youstable.com/manage/submitticket.php?step=2&amp;deptid=2" target="_blank"><button class="customer-server-btn " ><span class="phone-mini"><img src="assets/img/phone-mini.png"></span> Request Custom Server <i class="fa-solid fa-arrow-right"></i></button></a>
            
            
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
        <h2 class="ay_heading">What makes YouStable India Dedicated Server different? </h2>
        <p class="server-title title_sides_width pb-3">We go above and beyond to deliver what you need. Our LiteSpeed Servers, Intel/AMD processors, and a range of specialised services are all designed to give your website the performance boost it deserves.
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
</div></section>








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
    <h2 class="text-center faq-question">Dedicated Hosting in India FAQs</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What is Dedicated server in India?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body">In simple words, Dedicated server in India refers to the Physical servers that are located in the internet hubs of India and are equipped with dedicated NVMe Storage, DDR4 RAM, unmetered Bandwidth, Intel Core or Powerful AMD EPYC Processors to ensure greater performance of your websites.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
How much does a dedicated server cost in India?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Cost of Renting a Dedicated Server in India is ₹4999 per month. At this price, you get a 4vCore E3 CPU with a minimum 32GB DDR4 RAM, 480GB SSD storage and 10TB Bandwidth as well.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
How Would I Know Which Dedicated Server Plan Should I choose?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">You should choose Affordable Indian Dedicated Server Plan as per the requirements of your websites. If your websites are visited by high number of traffic, then in that case you need increased NVMe storage for quicker website loading speed, unquestionably advanced DDoS security to prevent any unauthorised traffic, 24/7 server monitoring to detect and fix server related bugs in real time, and increased number of CPU cores for greater performance of your websites.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
What solution do you offer to manage my dedicated server?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body">For managing dedicated servers, we offer you an amazing remote management mechanism that includes IPMI, ILo, KVM to let you seamlessly handle server related configurations remotely.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
            How do I migrate from my existing provider to YouStable’s dedicated servers?</button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body">It is hell an easy process! Simply Contact the Sales Team of YouStable via LiveChat or Ticket Support in order to Migrate from an existing hosting provider to YouStable’s Powerful NVMe storage backed Dedicated servers. 
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingsix">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
What's the difference between VPS Hosting and Dedicated Server?          </button>
        </h2>
        <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body">In VPS Hosting, a user is assigned a Virtual server that is built using Virtualization Technology over an entire physical server. Each Virtual server is allotted with dedicated memory/ CPU/ network connectivity to give you a real feel of a server at a lower price.<br><br>

Whereas, a Dedicated server is an entire physical server that comprises CPU/ RAM/ NVMe Storage and other related web resources that are required to run your websites smoothly. You even get a full chance to control the server in your own way to scale it as per the needs.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingseven">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
Can I upgrade my Dedicated Server in future?
          </button>
        </h2>
        <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample" style="">
          <div class="accordion-body">Absolutely Yes! You can easily Upgrade your dedicated server to match the website requirements, ensuring that your sites run smoothly without any technical loading issues or other glitches.
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