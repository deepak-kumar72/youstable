<?php
$page = 'affiliate';
include ('inc/header.php');
?>
<style>
  /*unknown class change*/
  .awesome-youstable {
    margin: 70px 0 !important;
  }

  div#accordionFlushExample {
    margin-bottom: 60px;
  }

  .feature_cols_dedicated p.ay-title {
    padding: 20px 10px 20px 10px !important;
    font-size: 15px;
    width: 100%;
  }

  /*unknown*/
  .banner-left-content button.btn-purple.btn-explore-plan {
    width: 40%;
    text-align: center;
  }

  .lists-hosting {
    margin-top: 30px;
  }

  .banner-left-content button.btn-yellow.btn-explore-plan {
    width: 40%;
    text-align: center;
  }

  img.affiliate-image.w-100 {
    width: 80% !important;
  }

  /*.dropdown-toggle::after {*/
  /*    margin-top: 0px !important;*/
  /*}*/
  /* -------------------- Start VPS Hosting Plan Css -------------------------------*/

  h2.affiliate-table-heading {
    text-align: center;
  }

  .col-md-12.table-cols {
    background: #FBFAFF;
    border-radius: 20px;
    padding: 80px 82px 45px 82px;
    margin-top: 30px;
  }

  .col-md-12.table-cols h2 {
    font-size: 36px;
    text-align: center;
  }

  .col-md-12.table-cols p {
    padding-top: 20px;
    text-align: center;
  }

  table.affiliate-table {
    width: 100%;
    background: #fff;
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
    box-shadow: 0px 14px 22px 0px #6B46F214;
    margin-top: 68px;
    margin-bottom: 50px;
  }

  table.affiliate-table tr td {
    border: 1px solid #C2C2C2;
    padding: 18px;
    text-align: center;
  }

  table.affiliate-table th:nth-child(2) {
    border: 1px solid #C2C2C2;
    border-top: 0px;
  }

  table.affiliate-table th {
    color: #6B46F2;
    padding: 20px;
    text-align: center;
    width: 33%;
  }

  table.affiliate-table tr td:nth-child(3) {
    border-right: 0px;
  }

  table.affiliate-table tr td:nth-child(1) {
    border-left: 0px;
  }

  table.affiliate-table tr:nth-child(4) td {
    border-bottom: 0px;
  }

  table.affiliate-table tr:hover {
    background: #FFFDF7;
  }

  table.affiliate-table tr:nth-child(1):hover {
    background: none;
  }

  section.explore-section .nav-pills .nav-link.active,
  .nav-pills .show>.nav-link {
    background-color: #6b46f2 !important;
    color: #fff !important;
  }

  div#pills-tab button {
    color: #000;
    font-weight: 500;
  }



  .plan-tab p.nav-item {
    margin-bottom: 0px;
  }

  .plan-tab .col-lg-4 {
    padding-left: 0px;
    padding-right: 0px;
  }

  .plan-tab .nav-item button {
    width: 100%;
  }


  .half-yearly-btn button {
    border-left: 1px solid #cacaca;
    border-radius: 0px !important;
    border-right: 1px solid #cacaca;
  }

  p.per_month {
    padding-bottom: 25px;
  }

  .vps .exploreplan-btn {
    width: 100% !important;
  }

  .plan-tab .montly-btn {
    border-top-left-radius: 20px !important;
    border-bottom-left-radius: 20px !important;
    border-top-right-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
  }

  .plan-tab .yearly-btn {
    border-top-left-radius: 0px !important;
    border-bottom-left-radius: 0px !important;
    border-top-right-radius: 20px !important;
    border-bottom-right-radius: 20px !important;
  }

  @media only screen and (max-width:767px) {
    .vps.hosting-plan .nav .col-lg-4 {
      display: flex;
      width: 33.33%;
      align-items: center;
    }

    .plan-tab p.nav-item {
      margin-bottom: 0px;
      width: 100%;
    }

    .upper-card {
      padding-right: 50px !important;
    }

    .plan-tab .nav-item button {
      width: 100%;
      padding: 10px 5px;
    }

    br {
      display: none;
    }
  }

  /* -------------------- Close VPS Hosting Plan Css -------------------------------*/



  .feature_cols_dedicated {
    width: 100%;
    margin: auto;
  }

  .grey-bg {
    background: #FCFCFC;
    border-radius: 20px;
    margin-top: 40px;
    padding: 80px 82px 45px 82px;
  }

  table.payout {
    width: 100%;
    border-bottom: 1px solid #292929;
  }

  table.payout th {
    padding: 20px;
    text-align: center;
    width: 25%;
    font-weight: 400;
    font-size: 22px;
    border-bottom: 1px solid #292929;
    color: #292929;
  }

  table.payout tr td {
    padding: 20px;
    text-align: center;
    font-size: 22px;
  }


  table.payout tr td:nth-child(1) {
    text-align: left;
  }

  table.payout th:nth-child(1) {
    text-align: left;
  }

  p.revenue {
    box-shadow: 0px 4px 28px 0px #00000017;
    padding: 8px 28px;
    background: #fff;
    color: #292929;
    font-size: 26px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  p.amount {
    background: #292929;
    color: #ffff;
    padding: 8px 28px;
    font-size: 26px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    text-align: center;
  }

  div#total-row .col-lg-8 {
    margin: 0px;
    padding-right: 0px;
  }

  div#total-row .col-lg-4 {
    padding-left: 0px;
  }

  div#total-row {
    margin-top: 28px;
  }

  section.payout {
    padding-top: 110px;
    padding-bottom: 10px;
  }

  .features {
    margin-top: 60px;
  }

  h2.ay_heading.Way-to-Success {
    padding-top: 28px;
    padding-bottom: 36px;
  }

  section.affiliate-one {
    margin-top: 56px !important;
  }

  @media only screen and (max-width: 768px) {
    div#pills-tab {
      margin-top: 36px !important;
      font-size: 12px;
    }
  }

  .review-content {
    margin: 80px 0;
  }

  section.payout {
    padding-top: 0;
  }
</style>

<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg affiliate-one">
  <div class=" container">
    <div class="row align-items-center reverse-column">
      <div class="col-md-6">
        <div class="banner-left-content">
          <!--<p class="experience">Experience</p>-->
          <h1 class="earn-twohundred"> <strong class="usa-host-price">Earn Up To $60</strong> <strong
              class="indian-host-price">Earn Up To ₹5000</strong> <br> Per Sign Up!</h1>
          <p class="Banner-title p-0 banner-content-affiliate" style="margin-top: 36px;">We have an incredible
            opportunity to create an additional income stream for you. Just bring Us a Customer and get a chance to Earn
            a Bonus. Become a Part of our YouStable Team Now!
          </p>
          <div class="d-flex gap-3 lists-hosting affiliate-btn">
            <a href="https://partner.youstable.com/" target="_self"><button class="btn-yellow btn-login">Login <i
                  class="fa-solid fa-arrow-right"></i></button></a>
            <a href="https://partner.youstable.com/signup.php" target="_self"><button class="btn-yellow btn-signup">Sign
                Up <i class="fa-solid fa-arrow-right"></i></button></a>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="banner_img floatings" src="assets/img/affiliates-hero-image.png" alt="Banner" srcset="">
      </div>
    </div>
  </div>
</section>

<!--Explore Section-->
<section class="explore-section vps hosting-plan">
  <div class="container">
    <div class="col-md-12 table-cols">
      <h2>Affiliate Commission Slabs</h2>
      <p>Earn attractive Commission on the sale of every Hosting Plan. For more refer to the Commission Slab
        provided below
      </p>
      <table class="affiliate-table">
        <tr>
          <th>Level</th>
          <th>Monthly Sales</th>
          <th>Commission Per Sale</th>
        </tr>
        <tr>
          <td>Level 1</td>
          <td>1 - 5 Sales</td>
          <td class="fw-bold">₹1,000.00 | $12.50 Per Sale</td>
        </tr>
        <tr>
          <td>Level 2</td>
          <td>6 - 10 Sales</td>
          <td class="fw-bold">₹1,500.00 | $18.95 Per Sale</td>
        </tr>
        <tr>
          <td>Level 3</td>
          <td>11 - 20 Sales</td>
          <td class="fw-bold">₹2,000.00 | $25 Per Sale</td>
        </tr>

      </table>
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


<!--Feature in Market-->

<section class="awesome-youstable affiliate-mobile affiliate-mobiles">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading">Why Join YouStable’s Affiliate Program?</span></h2>
        <p class="server-title title_sides_width pb-3">Earn commissions on every hosting sale you generate. Our
          affiliate program managers in YouStable will collaborate with you to create a personalised commission and
          bonus plan. Apply Now!
        </p>
      </div>
      <div class="why-choose">
        <div class="row text-left">
          <div class="col-md-4 cols">
            <div class="feature_cols_dedicated">
              <img src="assets/img/free-join.png" alt="ssd-storage">
              <div class="border-box">
                <h5 class="ay-heading">Cookie Duration </h5>
                <p class="ay-title dedicate-content">YouStable offers a longer Cookie Duration of 60 days enabling you
                  to earn a commission on every Hosting purchase your viewers make.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/realtime.png" alt="ssl-certificate">
              <div class="border-box">
                <h5 class="ay-heading">Quick PayOut</h5>
                <p class="ay-title dedicate-content">PayOuts take no Time! We release the Commission to partners having
                  ₹7000 affiliate balance within 45 days of Confirmed Sales via PayPal and BankTransfer.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_dedicated">
              <img src="assets/img/affiliate.png" alt="speed-web-server">
              <div class="border-box">
                <h5 class="ay-heading">Instant Setup</h5>
                <p class="ay-title dedicate-content">Willing to Join Our Affiliate Program? Apply Now, as here we value
                  your time. We do not entertain lengthy Documentation and ensure a Quick Setup Process.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  </div>
</section>



<section class="awesome-youstable affiliate-two affiliate-four affiliate-fours">
  <div class="container">
    <div class="right-cols-awesome">
      <div class="text-center">
        <h2 class="ay_heading Way-to-Success unlock-attract">Unlock Attractive Earnings with Top Affiliate Features
        </h2>
      </div>
      <div class="features affiliates-three">
        <div class="row text-left">

          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/attractive.png" alt="ssl-certificate">
              <h5 class="ay-heading">High Incentives</h5>
              <p class="ay-title m-0 w-100">Refer a customer to YouStable and Get a golden chance to earn awesome
                Incentives for Shared, VPS and Dedicated server Hosting services.
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/attractive-nvme.png" alt="ssd-storage">
              <h5 class="ay-heading">Custom Affiliate Slab
              </h5>
              <p class="ay-title m-0 w-100">YouStable’s hosting affiliate program managers collaborate with affiliates
                to create a Scalable Custom commission or a bonus structure to meet your specific needs.
              </p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/server-uptime.png" alt="auto-backup">
              <h5 class="ay-heading">Affiliate Tracking
              </h5>
              <p class="ay-title m-0 w-100">User-friendly affiliate tracking tools are a must for affiliate marketing!
                Affiliates can monitor clicks and conversions ensuring precise commission payments.
              </p>
            </div>
          </div>
        </div>
        <div class="row text-left mt-4">
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/auto-backup-11.png" alt="Free Migration">
              <h5 class="ay-heading">Commission Structure</h5>
              <p class="ay-title m-0 w-100">Get a bonus of ₹1000 onwards for every sale you make! Refer customers to
                YouStable and get a chance to win appealing Rewards as per our attractive bonus Structure.
              </p>
            </div>
          </div>

          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/support24.png" alt="support24">
              <h5 class="ay-heading">Attractive Promotion Tools</h5>
              <p class="ay-title m-0 w-100">Get engaging Affiliate Banners and even get a chance to Create your
                affiliate links to ensure maximum Conversion thereby letting you Earn a High PayOut.</p>
            </div>
          </div>
          <div class="col-md-4 cols-awesome-youstable">
            <div class="feature_cols_desciption">
              <img src="assets/img/speed-web-server.png" alt="speed-web-server">
              <h5 class="ay-heading">UserFriendly Affiliate Control Panel</h5>
              <p class="ay-title m-0 w-100">Get an easy-to-use Affiliate DashBoard that tracks the number of Clicks,
                Visits, Withdrawals and Affiliate balance to ensure 100% Transparency.</p>
            </div>
          </div>
        </div>

      </div>
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
            How long does it take for a sale to show up in my account?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">It should show up immediately. If it doesn't, you can contact the Affiliate
            support team, which is available 24/7 to get your issues resolved.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            I just made a sale. Where can I see it?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Log in to https://partner.youstable.com. On the bottom right, you will see all
            your pending and approved commissions on the bottom right.</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
Is there any minimum amount required to withdraw my affiliate commission? </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Once your affiliate commission reaches $94 or ₹7500, you can withdraw your earnings.
          </div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            Can I PPC bid to promote YouStable Hosting?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes, but please do not bid on our corporate name, variation of our corporate name,
            misspelling, or any keyword that contains a portion of it, including "YouStable", "YouStable Hosting", or
            "YouStable.com".</div>
        </div>
      </div>

      <div class="accordion-item faq-items">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
            I've made a sale. Now when do I get paid?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">After 60 days a valid sale will change from status “Pending” to “Approved”. Once
            the sale is “Approved” it will be paid during the first 7-15 days of the month.</div>
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