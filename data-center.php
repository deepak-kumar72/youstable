<?php
$page = 'data-center';
include ('inc/header.php');
?>
<style>
    /* Style the tab */
.tab {
    overflow: hidden;
    display: flex;
    justify-content: space-between;
}

.tab button.tablinks.button_slide.slide_right:hover {

    color: #fff;
}
/* Create an active/current tablink class */
.tab button.tablinks.button_slide.slide_right.active {
  box-shadow: inset 400px 0 0 0 #6b46f2;
      color: #fff;
}
.tabcontent {
    display: none;
    padding: 0px 62px;
    border: 1px solid #ccc;
    border-radius: 20px;
    padding-bottom: 22px;
    margin-top: 26px;
    padding-top: 32px;
}
.container.global-hosting-local {
    background-image: url(assets/img/map-bg.png);
    background-size: cover;
}

</style>
<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg data-centers">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
 
          <h1 class="Banner-Heading padding-heading robust"> Our Green Data Center Location</h1>
          <p class="Banner-title p-0 mb-4">Our global data centers allow you to host your data precisely where you need it. Strategically located at key internet hubs, our data centers provide high-speed connectivity and uninterrupted accessibility.</p>
          
           <div class="d-flex gap-3 lists-hosting">
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/best-in-class-hardware.svg" alt="tick" class="tick-square">Best-IN-Class Hardware</li>
              <li class="purple-text_dark"><img src="assets/img/NVMe-ssd-drive-y66.svg" alt="tick" class="tick-square">NVMe SSD Drive </li>
            </ul>
            <ul class="banner-list list-unstyled">
              <li class="purple-text_dark mb-3"><img src="assets/img/fast-connecivity-and-low-latency 1.svg" alt="tick" class="tick-square">Fast Connectivity & Low Latency</li>
              <li class="purple-text_dark"><img src="assets/img/kvm-virtualization.svg" alt="tick" class="tick-square">KVM Virtualization</li>
            </ul>
          </div>
          
        </div>
       <a href="#explore"><button class="btn-yellow btn-explore-plan">DataCenter Location <i class="fa-solid fa-arrow-right"></i></button></a>
        
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/data-center-hero.png" alt="Banner"
          srcset="">
      </div>
    </div>
  </div>
</section>

<!--rating-->
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
<!--rating-->

<!--Global Hosting Location-->
<section class="global-hosting-locate" id="explore">
    <div class="container global-hosting-local">
        <div class="row">
           
            <div class="col-lg-5">
                <div class="globe-image">
                    <img src="assets/img/global-hosting-locations.jpg" alt="image" class=""/>                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-globe">
                     <h2 class="lobal-hosting-locates">Global Hosting Locations</h2>
                    <p>Launch your website with YouStable in one of our top-tier hosting locations worldwide. <br class="remove-mobile"><br class="remove-mobile">Each of our data centers is directly connected to our Enterprise Edge providers, ensuring the best performance for your site.</p>
                </div>
                
                <div class="global-ul-list">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="lisy-design-global">
                            <ul>
                                <li>Asia </li></strong>
                                <p style="margin-bottom: 0;font-weight: 600;">India</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- Mumbai</p>
                                    <p>- Indore, MP</p>
                                </ul>
                                
                                <li>Europe </li>
                                <p style="margin-bottom: 0;font-weight: 600;">Netherlands</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- North Holland</p>
                                    <p>- Amsterdam</p>
                                </ul>
                                
                            </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="lisy-design-globals">
                            <ul>
                                <li>USA</li>
                                <div class="d-flex gap-4">
                                    <div>
                                        <p style="margin-bottom: 0;font-weight: 600;">United States</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- California</p>
                                    <p style="margin-bottom: 0;">- San Francisco</p>
                                
                                </ul>
                                        <p style="margin-bottom: 0;font-weight: 600;">Florida</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- Miami</p>
                                    <p style="margin-bottom: 0;">- Tampa</p>
                                
                                </ul>
                                </div>
                                <div>
                                        <p style="margin-bottom: 0;font-weight: 600;">New York</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- New York City</p>
                                </ul>
                                        <p style="margin-bottom: 0;font-weight: 600;">Texas</p>
                                <ul style="padding-left: 10px !important;">
                                    <p style="margin-bottom: 0;">- Dallas</p>
                                    <p style="margin-bottom: 0;">- Irving</p>
                                </ul>
                                
                                    </div>
                                </div>
                            </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Global Hosting Location-->
<!--tabs -->
<section class="tabs-main">
<div class="container">

<div class="tab">
  <button class="tablinks button_slide slide_right" onclick="openCity(event, 'Power-system')">Fast connectivity</button>
  <button class="tablinks button_slide slide_right" onclick="openCity(event, 'High-redundancy')">Optimized Edge Servers</button>
  <button class="tablinks button_slide slide_right" onclick="openCity(event, 'Fast-connectivity')">Scalability & Reliability</button>
  <button class="tablinks button_slide slide_right" onclick="openCity(event, 'Global-CDN-network')">Robust Infrastructure</button>
</div>

<div id="Power-system" class="tabcontent">
    <div class="row">
        <div class="col-lg-8">
             <h3>Fast connectivity</h3>
             <hr class="power-line">
  <p>Experience lightning-fast speeds with our best-in-class data centers located worldwide. Our network is tailored to provide top-level performance ensuring that your website loads quickly for visitors around the globe. 
  Benefit from multiple high-speed connectivity, ultra-low latency and enhanced accessibility.</p>
        </div>
        <div class="col-lg-4">
            <div class="tabs-images-with-content">
                <img src="assets/img/fast-connectivity.png" alt="powersystem"/>
            </div>
        </div>
    </div>
 
</div>

<div id="High-redundancy" class="tabcontent">
   <div class="row">
        <div class="col-lg-8">
             <h3>Optimized Edge Servers</h3>
             <hr class="power-line">
  <p>Our Optimised Edge Servers bring your website’s content closer to your visitors. Caching mechanism at prime internet hubs ensures rapid delivery of your site’s data, no matter wherever your audiences are. Enjoy reduced Web Page 
  loading times, low latency and Overall High in Performance with our cutting-edge server technology. </p>
        </div>
        <div class="col-lg-4">
            <div class="tabs-images-with-content">
                <img src="assets/img/optimised-edge-server.png" alt="powersystem"/>
            </div>
        </div>
    </div>
</div>

<div id="Fast-connectivity" class="tabcontent">
  <div class="row">
        <div class="col-lg-8">
             <h3>Scalability & Reliability</h3>
             <hr class="power-line">
  <p>At YouStable, you get a chance to Scale effortlessly with our Multiple server location and Flexible Hosting solutions. Wanting to meet greater
  website needs or Experiencing traffic hikes, our data infrastructure adjusts as per your needs. Get Ultimate Peace of mind with our 99.99% uptime guarantee for Maximum Reliability.
</p>
        </div>
        <div class="col-lg-4">
            <div class="tabs-images-with-content">
                <img src="assets/img/scalibility-and-flexibility.png" alt="powersystem"/>
            </div>
        </div>
    </div>
</div>

<div id="Global-CDN-network" class="tabcontent">
  <div class="row">
        <div class="col-lg-8">
             <h3>Robust Infrastructure</h3>
             <hr class="power-line">
  <p>Our Robust Infrastructure is specifically built to handle the demands of modern businesses. With enterprise-grade Hardware, Advanced DDoS security and unparalleled power & data server cooling system, 
  we offer a Rock-Solid base for your online presence. Experience superior Uptime with our World-class Infrastructure.</p>
        </div>
        <div class="col-lg-4">
            <div class="tabs-images-with-content">
                <img src="assets/img/robust-infrastucture.png" alt="powersystem"/>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Show the default tabcontent and add 'active' class to the corresponding tablink
  document.getElementById("Power-system").style.display = "block";
  document.getElementsByClassName("tablinks")[0].className += " active";
});

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;

  // Hide all tabcontent elements
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove 'active' class from all tablinks
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tabcontent and add 'active' class to the clicked tablink
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</section>
<!--tabs -->


<!--we offer-->
<section class="explore-section plans-mobile-one shared-explore data-center-sec">
  <div class="text-center data-center-head">
    <h2 class="server-heading shared-heading-plan">Services We Offer</h2>
  </div>
  <div class="container">
<div class="row flex_unset new-data-center" style="flex-direction: row-reverse;">
<div class="col-md-4 explore-cols cards-data-cent">
<div class="position-relative h-100">
<div class="upper-card home-uppercard data-upper">

<h4 class="hosting-heading">DEDICATED SERVER</h4>
<div class="price-container">
<p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>4999</p>
<p class="hosting-price usa-host-price" style="display: none;"><span class="hin-rs">$</span>60.00</p>
<p class="per_month">/month</p>
</div>
<!--<p class="regular-price regular-indian-price">Regular price<span class="cross-price">-->
<!--₹6,665/month</span></p>-->
<!--<p class="regular-price regular-usa-price" style="display: none;">Regular price<span class="cross-price">-->
<!--$79.97/month</span></p>-->

<p>Experience high traffic with the need for an isolated server for your incredible website.</p>
<a href="dedicated-servers.php"><button class="btn-yellow exploreplan-btn data-button" type="submit">Get
Started</button></a>
<div class="free_setup btn-yellow ">
<p class="m-0">Free Set-up</p>
</div>

</div>
</div>
</div>
<div class="col-md-4 explore-cols cards-data-cent">
<div class="position-relative h-100">
<div class="upper-card home-uppercard data-upper" style="background: #FEFDFF;">
<!--<div class="most-popular-hosting btn-light-purple">-->
<!--<p class="m-0">Most Popular</p>-->
<!--</div>-->

<h4 class="hosting-heading">VPS HOSTING</h4>
<div class="price-container">
<p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>574</p>
<p class="hosting-price usa-host-price" style="display: none;"><span class="hin-rs">$</span>7.23</p>
<p class="per_month">/month</p>
</div>
<!--<p class="regular-price regular-indian-price">Regular price<span class="cross-price">-->
<!--₹1,149/month</span></p>-->
<!--<p class="regular-price regular-usa-price" style="display: none;">Regular price<span class="cross-price">-->
<!--$13.779/month</span></p>-->
<p>Experience the ultimate VPS hosting solution, equipped with robust dedicated resources.</p>
<a href="vps-hosting.php"><button class="btn-purple exploreplan-btn data-button" type="submit">Get
Started</button></a>
<div class="free_setup btn-light-purple">
<p class="m-0">Sale 50%</p>
</div>


</div>
</div>
</div>
<div class="col-md-4 explore-cols cards-data-cent">
<div class="position-relative h-100">
<div class="upper-card home-uppercard data-upper">

<h4 class="hosting-heading">Shared Hosting</h4>
<div class="price-container">
<p class="hosting-price indian-host-price"><span class="hin-rs">₹</span>49</p>
<p class="hosting-price usa-host-price" style="display: none;"><span class="hin-rs">$</span>0.6</p>
<p class="per_month">/month</p>
</div>
<!--<p class="regular-price regular-indian-price">Regular price<span class="cross-price">-->
<!--₹199/month</span></p>-->
<!--<p class="regular-price regular-usa-price" style="display: none;">Regular price<span class="cross-price">-->
<!--$2.38/month</span></p>-->
<p>Experience the simplest & most cost-effective solution for launching and expanding your website.</p>
<a href="shared-hosting.php"><button class="btn-yellow exploreplan-btn data-button" type="submit">Get
Started</button></a>
<div class="free_setup btn-yellow ">
<p class="m-0">Sale 75%</p>
</div>


</div>
</div>
</div>
</div>
</div>
</section>
<!--we offer-->


<!--what make youstable-->
<section class="explore-section plans-mobile-one shared-explore data-center-sec data-Awesome">

<div class="container">
<div class="right-cols-awesome">
<div class="padding-r-l text-center">
<h2 class="ay_heading">What Makes YouStable<span class="awesome-q line-1 anim-typewriter">
Awesome?</span></h2>
<p class="server-title title-sides-width">At YouStable, get everything for your online business, from
static websites to e-commerce stores or CRMs. <br class="remove-mobile"> Enjoy lightning-fast
performance, unmatched security, scalable plans, and 24/7 customer support.</p>
</div>
<div class="sides-width">
<div class="row">
<div class="col-md-4 cols-aws-you">
<div class="left-cols-awesome">
<img src="assets/img/newImages/incredible-security.svg" alt="uptime">
<h5 class="ay-heading">Incredible Security</h5>
<p class="ay-title">Get advanced security with DDoS Protection, offering attack detection
and mitigation to block harmful traffic from accessing your website.</p>
</div>
</div>
<div class="col-md-4 cols-aws-you">
<div class="left-cols-awesome">
<img src="assets/img/newImages/123.svg" alt="refund">
<h5 class="ay-heading">Multiple Data Centers</h5>
<p class="ay-title">Targeting a global audience? YouStable lets you select a data center
location to enhance your website's local search visibility.</p>
</div>
</div>
<div class="col-md-4 cols-aws-you">
<div class="left-cols-awesome">
<img src="assets/img/newImages/uptime.svg" alt="support">
<h5 class="ay-heading">99.99% Uptime</h5>
<p class="ay-title">Ensure your website is available 24/7 to the visitors of your website.
Get 99.99% committed Uptime and enjoy uninterrupted services at YouStable.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--what make youstable-->

<!--(What our customer says) -->
<?php
include ('inc/customer-reviews.php');
?><br>

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
    </section><br>
</div><br><br>
<!--customer support-->

<?php include ('inc/footer.php') ?>