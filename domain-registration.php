<?php
$page = 'domain-registration';
include ('inc/header.php');
?>

<style>
    .bg-purple {
        margin-top: 5px;
    }

    .banner-left-content h1 strong {
        font-weight: 800;
    }

    .banner-left-content h1 {
        font-weight: 400;
        padding-bottom: 26px;
    }

    input.form-control.find-domain {
        background: #FFFEFC;
        border: 1px solid #292929;
        width: 84%;
        border-radius: 100px;
        padding: 12px;
        padding-left: 50px;
    }


    input.form-control.find-domain::placeholder {
        text-align: start;
        color: #6D6D6D;
        font-size: 18px;
        font-weight: 400 !important;
    }

    .row.banner-col {
        width: 83%;
    }

    .fa-magnifying-glass:before,
    .fa-search:before {
        content: "\f002";
        font-size: 24px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 56px;

        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #292929;
        margin-top: 6px;
    }

    .form-group.has-search {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
    }


    div#domain-btn button {
        margin: auto;
        display: block;
        background: #EAE3FF;
        padding: 6px 15px;
        border: 0px;
        border-radius: 50px;
        color: #6B46F2;
        width: 16%;
    }

    .row.domain p {
        text-align: center;
    }

    .row.domain h3 {
        text-align: center;
        color: #000000;
        font-size: 52px;
    }

    p.price {
        border: 1px solid #CACACA;
        padding: 25px 0px;
        border-radius: 12px;
        color: #292929;
        font-size: 52px;
        font-weight: 700;
    }

    div#flex-div div {
        width: 50%;
    }

    div#flex-div {
        width: 95%;
        margin: 0 auto;
    }

    button.register-btn {
        width: 94%;
        background: #FFC235;
        border-radius: 100px;
        border: 0px;
        padding: 10px;
        color: #292929;
        font-size: 18px;
        font-weight: 600;
    }

    button.transfer-btn {
        width: 94%;
        background: #ffffff;
        border-radius: 100px;
        border: 1px solid #CACACA;
        padding: 10px;
        color: #292929;
        font-size: 18px;
        font-weight: 600;
    }

    button.domain-btn::after {
        content: '';
        position: absolute;
        left: 85px;
        top: 31px;
        border-top: 16px solid #eae3ff;
        border-left: 16px solid transparent;
        border-right: 16px solid transparent;
    }

    button.domain-btn {
        position: relative;
    }

    div#domain-btn {
        margin-bottom: 15px;
    }

    .domain-slide {
        display: none;
        animation: slideIn .8s ease-in-out forwards;
    }

    @keyframes slideIn {
        from {
            left: 100%;
        }

        to {
            left: 0;
        }
    }

    .domain-slide:first-child {
        display: block;
    }

    .domain-prev-btn,
    .domain-next-btn {
        transform: translateY(-50%);
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 17px;
        color: #292929;
    }

    .buttons button {
        background: #F0ECFF;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-weight: 200;

    }


    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }

    .cream-bg {
        background: #FFFDF6;
        padding: 80px 82px 0px 82px;
        border: 1px solid #CECECE;
        border-radius: 20px;
        margin-top: 100px;
        margin-bottom: 90px;
    }

    .domain-slide h2 {
        font-size: 38px;
        text-align: center;
    }

    .domain-slide p {
        text-align: center;
        font-size: 20px;
        color: #292929;
        padding-top: 10px;
    }

    .buttons {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin: 0 auto;
        justify-content: center;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    span.slide-number {
        background: #6B46F2;
        padding: 7px 10px 10px 10px;
        border-radius: 50%;
        color: #fff;
        width: 40px;
        height: 40px;
        text-align: center;
        position: relative;
        top: -20px;
    }

    @media only screen and (max-width: 768px) {
        input.form-control.find-domain {
            width: 100%;
        }

        .buttons {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 0 auto;
            justify-content: center;
            padding-top: 30px;
            padding-bottom: 0px;
        }

        .cream-bg {
            background: #FFFDF6;
            padding: 80px 82px 0px 82px;
            border: 1px solid #CECECE;
            border-radius: 20px;
            margin-top: 80px;
            margin-bottom: 36px;
        }
    }

    img.dedi-image {
        margin-top: 0px;
    }

    section.awesome-youstable.affiliate-two {
        margin-top: 76px;
        margin-bottom: 82px !important;
    }

    section.review-content {
        margin: 30px 0;
    }
</style>

<!-- Banner section (shared hosting) -->
<section class="banner-sec share-bg">
    <div class=" container">
        <div class="row align-items-start reverse-column">
            <div class="col-md-6 domain-wid">
                <div class="banner-left-content margin-top dedicated-margin domain-reg">
                    <!--<p class="experience">Experience</p>-->
                    <h1 class="doamin-reg mobile-domain-heading desk-domain-heading "> <strong>Domain</strong><br>
                        Registration</h1>
                    <p class="domain-banner-title p-0">Get a perfect domain name for your website that represents <br
                            class="remove-mobile">your brand online.</p>
                    <div class="d-flex gap-3 lists-hosting server-listing">
                        <form action="https://www.youstable.com/manage/cart.php?a=add&domain=register&query="
                            method="post" style="width: 100%;">
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" autocomplete="off" class="form-control find-domain "
                                    placeholder="Enter a desired domain name here" name="query">
                                <!--<input type="text" autocomplete="off" id="suggested_names" name="query" placeholder="Enter a desired domain name here" class="form-control">-->

                            </div>
                        </form>
                        <script>

                            var input = document.getElementById("suggested_names");
                            input.addEventListener("keypress", function (event) {
                                if (event.key === "Enter") {
                                    event.preventDefault();
                                    document.getElementById("btnsearch").click();
                                }
                            });
                        </script>


                        <!--<input type="text" class="form-control find-domain" placeholder="Enter a desired domain name here" aria-label="Selectlang" aria-describedby="basic-addon1">-->
                    </div>
                </div>
                <!-- <div class="row banner-col domain-col">
                    <div class="col-md-4 dom ">
                        <div class="box-ribbon">
                            <span class="wdp-ribbon wdp-ribbon-two fade-in-text">Sale</span>

                            <p class="indian-host-price">.CO ₹219.99</p>
                            <p class="usa-host-price">.CO $2.99</p>

                        </div>
                    </div>
                    <div class="col-md-4 dom ">
                        <div class="box-ribbon purple-deal">
                            <span class="wdp-ribbons wdp-ribbon-two fade-in-text purple-light-color">Sale</span>
                            <p class="indian-host-price">.CAM ₹193.99</p>
                            <p class="usa-host-price">.CAM $2.99</p>
                        </div>
                    </div>
                    <div class="col-md-4 dom ">
                        <div class="box-ribbon">
                            <span class="wdp-ribbon wdp-ribbon-two fade-in-text">Sale</span>
                            <p class="indian-host-price">.XYZ ₹219.99</p>
                            <p class="usa-host-price">.XYZ $2.99</p>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-6">
                <img class="domain-reg-img floatings" src="assets/img/domain-hero-image.png" alt="Banner" srcset="">
            </div>
        </div>
    </div>
</section>
<style>
.domain-price{
    border: 1px solid #cacaca;
    border-radius: 18px;
    transition: 0.3s;
    padding: 20px;
    height:300px;
}
.domain-price:hover{
    transform: scale(1.03);
    background: #fff !important;
    box-shadow: 0px 5px 16px #ababab;
    border: 1px solid #292929;
}
.btn-yellow1{
    background-color: #ffc235;
    padding: 10px 40px;
    border: 1px solid #ffc235;
    border-radius: 30px;
}
.btn-yellow2{
    background-color: #fff;
    padding: 10px 30px;
    border: 1px solid #ffc235;
    border-radius: 40px;
}
.btn-yellow1:hover{
    background: #292929;
    color: #fff;
}
.btn-yellow2:hover{
    background-color:#ffc235;
}
.plan-name{
    font-weight:800;
    font-size:35px
}


</style>
<div class="container">
    <div class="">
        <h2 class="ay_heading">Domain Extensions-On Demand</h2>
        <p class="server-title text-center">Looking for gTLD, sTLD & ccTLD domian name extension? YouStable has got it all for you.<br>
        Take a look at some of the most famous Domain name extensions.</p>
        <div class="row mb-5">
            <div class=col-md-4>
                <div class="text-center domain-price">
                    <h4 class="plan-name">
                        .com
                    </h4>
                    <p>
                    The most recognised Domain extension stands for Component Object Model and it was introduced by Microsoft in 1993.
                    </p>
                    <h3>₹873</h3>
                    <div class="mt-4">
                    <a href=""><button class="btn-yellow1 ">Register</button></a>
                    <a href=""><button class="btn-yellow2 ">Transfer</button></a>
                    </div>
                </div>
            </div>
            <div class=col-md-4>
                <div class="text-center domain-price">
                    <h4 class="plan-name">
                    .CO.IN
                    </h4>
                    <p>
                    CO.IN is a country code domain extension. Fulfill various business criteria's by using it.
                    </p>
                    <h3>₹476</h3>
                    <div class="mt-4">
                    <a href=""><button class="btn-yellow1 ">Register</button></a>
                    <a href=""><button class="btn-yellow2 ">Transfer</button></a>
                    </div>
                </div>
            </div>
            <div class=col-md-4>
                <div class="text-center domain-price">
                    <h4 class="plan-name">
                        .online
                    </h4>
                    <p>.online a top-level domain since 2014. The user often uses this generic domain to get their website a proper domain name.</p>
                    <h3>₹714</h3>
                    <div class="mt-4">
                    <a href=""><button class="btn-yellow1 ">Register</button></a>
                    <a href=""><button class="btn-yellow2 ">Transfer</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--<div id="apiData"></div>-->

<!--free service-->

<!-- <section class="awesome-youstable affiliate-two affiliate-domain">
    <div class="container">
        <div class="right-cols-awesome">
            <div class="text-center">
                <h2 class="ay_heading">Free Services Worth ₹5000 with Every<br class="remove-mobile"> Domain Purchase
                </h2>
            </div>
            <div class=" ">
                <div class="row text-left cpanel-awe">
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/servers/Free-Privacy-protection.svg" alt="ssd-storage">
                            <h5 class="ay-heading">Free Privacy Protection</h5>
                            <p class="ay-title m-0 w-100">Get two titan email accounts on a 90-day free trial with every
                                domain name.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/servers/Dns-management.svg" alt="ssl-certificate">
                            <h5 class="ay-heading">DNS Management</h5>
                            <p class="ay-title m-0 w-100">Easily manage your DNS records, website location, emails,
                                sub-domains, aliases, FTP, and more.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/servers/domain-forwarding.svg" alt="speed-web-server">
                            <h5 class="ay-heading">Domain Forwarding</h5>
                            <p class="ay-title m-0 w-100">Redirect visitors to your desired URL so you don’t lose any
                                site traffic while keeping the destination URL on their address bar.</p>
                        </div>
                    </div>
                </div>
                <div class="row text-left mt-4">
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/servers/domain-protection.svg" alt="Free Migration">
                            <h5 class="ay-heading">Domain Theft Protection</h5>
                            <p class="ay-title m-0 w-100">Lock your domain name so it won’t get transferred accidentally
                                or without your permission.</p>
                        </div>
                    </div>
                    <div class="col-md-4 cols-awesome-youstable">
                        <div class="feature_cols_desciption">
                            <img src="assets/img/servers/easy-to-use-cPanel.svg" alt="auto-backup">
                            <h5 class="ay-heading">Easy To Use сPanel</h5>
                            <p class="ay-title m-0 w-100">Easily manage your domain name and other products with our
                                intuitive control panel.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section> -->

<!--free service-->

<!--why domain-->
<section class="why-buy-domain">
    <div class="container">
        <div class="row why-buy-domain-one">
            <div class="col-lg-6">
                <div class="why-serve-domain">
                    <h3>The Top Domain Extensions, You Can Choose From
                    </h3>
                </div>
                <div class="d-flex gap-3 lists-hosting">
                    <p class="server-title">You know it’s all yours, don't you? Register, Transfer or Renew your domain name whenever and however you want!</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/buy-domain.png" class="why-domain-serv" />
            </div>
        </div>
    </div>
</section>
<!--why domain-->

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
                        What is a domain name?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">To simply explain a domain name, it is the name that is given to the
                        website for its unique identification. The name after the “www” while searching for a website is
                        known as a domain name.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        What is domain name registration?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">You will need a registrar to get the available domain name registered on
                        your name so that no one can obtain or steal it after you have your authority on it. So the
                        process of getting your domain name registered is called domain name registration.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        If I register A domain, do I need web hosting to have a website?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, you will need a domain in the first place, but after naming your
                        website and getting it completed, you will need a web hosting provider and their services to get
                        your website live and running on the internet.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        How can I get a free domain registration?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">If you buy one of the annual or triannual web hosting plans offered by
                        YouStable, you’ll get a free domain name registration with it</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                        Is it possible to modify a domain name once it has been registered?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Once you get your domain namer registered, you will not be able to
                        change it. You can either drop that domain name and get another one registered at any time;
                        otherwise, you will have to continue with the same after registration.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive1">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive1" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I Transfer A Domain I Already Own To Youstable?
                    </button>
                </h2>
                <div id="flush-collapseFive1" class="accordion-collapse collapse" aria-labelledby="flush-headingFive1"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, YouStable provides Domain Transfer services.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive2">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive2" aria-expanded="false" aria-controls="flush-collapseFour">
                        How Do I Search If My Domain Name Is Available To Be Registered?
                    </button>
                </h2>
                <div id="flush-collapseFive2" class="accordion-collapse collapse" aria-labelledby="flush-headingFive2"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The search box mentioned at the start of this webpage will help you in searching for a domain name and let you know if it's available in the market or not.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive3">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive3" aria-expanded="false" aria-controls="flush-collapseFour">
                        How Do I Choose The Perfect Domain?
                    </button>
                </h2>
                <div id="flush-collapseFive3" class="accordion-collapse collapse" aria-labelledby="flush-headingFive3"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The search box mentioned at the start of this webpage will help you in searching for a domain name and let you know if it's available in the market or not.There are some aspects you need to keep in mind to decide on a perfect domain name for yourself. Those things are like choosing a short domain name. In this case, the lesser, the better! Incorporate your brand name, research before deciding, think as per your targetted and local audience, and in the last, decide quickly and act even more quick to lay your hands on your desired and decided domain!</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive4">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive4" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I register more than one Domain Name at a time?
                    </button>
                </h2>
                <div id="flush-collapseFive4" class="accordion-collapse collapse" aria-labelledby="flush-headingFive4"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">As soon as you register your domain name, you will receive a mail of successful registration from YouStable to let you know about the completion and implementation of the process.</div>
                </div>
            </div>

            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive5">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive5" aria-expanded="false" aria-controls="flush-collapseFour">
                        Can I modify the DNS server information?
                    </button>
                </h2>
                <div id="flush-collapseFive5" class="accordion-collapse collapse" aria-labelledby="flush-headingFive5"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Go to the YouStable domain management dashboard and modify the DNS server information according to your needs.</div>
                </div>
            </div>

            
            <div class="accordion-item faq-items">
                <h2 class="accordion-header" id="flush-headingFive6">
                    <button class="accordion-button acc-purple-bg collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive6" aria-expanded="false" aria-controls="flush-collapseFour">
                        What is domain privacy, and do I need it?
                    </button>
                </h2>
                <div id="flush-collapseFive6" class="accordion-collapse collapse" aria-labelledby="flush-headingFive6"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Domain privacy protects your personal details from anyone who searches about your domain, safeguarding all confidential information. Yes, you need it to keep your website and your business safe!</div>
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