<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/testimonials/testimonial-3/assets/css/testimonial-3.css" />

  <!--review slider links starts-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!--review slider links ends-->

  <style>
    :root {
      --bs-blue: #0d6efd;
      --bs-indigo: #6610f2;
      --bs-purple: #6f42c1;
      --bs-pink: #d63384;
      --bs-red: #dc3545;
      --bs-orange: #fd7e14;
      --bs-yellow: #ffc107;
      --bs-green: #198754;
      --bs-teal: #20c997;
      --bs-cyan: #0dcaf0;
      --bs-white: #fff;
      --bs-gray: #6c757d;
      --bs-gray-dark: #343a40;
      --bs-primary: #0d6efd;
      --bs-secondary: #6c757d;
      --bs-success: #198754;
      --bs-info: #0dcaf0;
      --bs-warning: #ffc107;
      --bs-danger: #dc3545;
      --bs-light: #f8f9fa;
      --bs-dark: #131418;
      /*#212529*/
      --bs-body-bg:unset!important;
      --bs-table-bg: unset!important;
      --ys-violet: #5424d2;
      --ys-light: #EDE7F6;
      --bs-font-sans-serif: sans-serif;
      ;
      --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));

    }

    /* body {}

    nav {
       background-color: var(--ys-violet); 
    } */

    section h2 {font-size:2rem;font-weight: 500;}

    .nav-container,
    .herosection,
    #features,
    .faq-section {
      background-color: var(--bs-dark);
    }

    table,.technologysec,
    .pricesectionhr,.price-section, {
      background-color: var(--ys-light);
    }

    .compheighlight h2{margin-top:7rem;}
    
    .technologysec{padding:4%;}
    .hero-heighlighted-text {
      background-image: linear-gradient(90deg, rgb(247, 14, 199), rgb(24, 34, 250));
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .compheighlight {
      background-color:#ede7f6;
      color:#000;
    }

    @media screen and (min-width: 1400px) 
    { 
      .compheighlight
      {
      background-image: url("img/wavenw.png");
      background-repeat: no-repeat;
      background-size: cover;
      background-position:top;
      color:white;
      }
    }

    
    

    .faq-left{background:url("img/faq-bg-nw.jpg");background-repeat: no-repeat;background-position: center;background-size: cover;}

    .technologysec .techbox {
      /* box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; */
    }

    /* button css starts*/

    .btn-vp{
        padding:15px 40px!important;
        font-size: 18px;
    }

    .button-pr {

      background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
      /*#c2fbd7;*/
      border-radius: 100px;
      /* box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px; */
      box-shadow: 0 0 0.25rem rgba(0, 0, 0, 0.5), -0.125rem -0.125rem 1rem rgba(239, 71, 101, 0.5), 0.125rem 0.125rem 1rem rgba(255, 154, 90, 0.5);
      color: green;
      cursor: pointer;
      display: inline-block;
      font-family: inherit;
      /*CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;*/
      padding: 10px 30px;
      text-align: center;
      text-decoration: none;
      transition: all 250ms;
      border: 0;
      font-size: 16px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .sign-btn:hover ,.button-pr:hover {
      /* box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px; */
      box-shadow: 0 0 0.25rem rgba(0, 0, 0, 0.5), -0.125rem -0.125rem 1rem rgba(239, 71, 101, 0.5), 0.125rem 0.125rem 1rem rgba(255, 154, 90, 0.5);
      transform: scale(1.05) rotate(-0.2deg);
    }

    /* button css ends */

    form {
      background-image: linear-gradient(45deg, rgb(139, 59, 210), rgb(47, 30, 152));
      box-shadow: 0px 3px 6px 0px rgba(255,255,255,1), 0px 3px 6px 0px rgba(0,0,0,0.23);
    }

    form input,form textarea,form label,form ::placeholder{color:#fff!important;}
    

    .form-floating>.form-control:focus 
    {
      border:color:none;box-shadow:none;
    }

    .sign-btn,
    .priceview-ptn {
      /* background-image: linear-gradient(45deg, rgb(217, 134, 15), rgb(225, 99, 66)); */
      background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
    }


    /** review slider css starts */
    .yorum {
      display: flex;
      height: 90vh;
      align-items: center;
      background: var(--ys-light);
    }

    .main-card {
      background: var(--bs-dark);
      border-radius: 30px;
      /*box-shadow: 20px 0px 20px -20px rgba(0,0,0,0.45),
-20px 0px 20px -20px rgba(0,0,0,0.45);*/
    }

    .card {
      border: none;
      /* box-shadow: 0 0 3px #0000001a; */
     
    }

    .owl-item {
      padding: 10px;
    }

    .card-yazı p {
      padding: 30px 40px 50px 40px;
      font-family: inherit;
      /*'Montserrat', sans-serif;*/
      font-weight: 500;
    }

    .card-yazı p::after {
      content: url("https://i.hizliresim.com/ODgyXA.png");
      width: 40px;
      height: 40px;
      position: absolute;
      margin: 10px 0 0 5px;
    }

    .card-yazı p::before {
      content: url("https://i.hizliresim.com/zMXJz4.png");
      width: 30px;
      height: 30px;
      position: relative;
      top: -10px;
      left: -18px;
    }

    .card-yazı {
      /* background-image: linear-gradient(135deg, rgb(255, 247, 32) 10%, rgb(60, 213, 0) 100%); */
      background-image: linear-gradient(45deg, rgb(139, 59, 210), rgb(47, 30, 152));
      position: relative;
      min-height: 300px;
      display: flex;
      align-items: center;
    }

    .favicon {
      width: 100%;
      height: auto;
    }

    .favicon img {
      height: 90px;
      width: 90px !important;
      position: absolute;
      bottom: -45px;
      left: 39%;
      border-radius: 100px;
      border: 8px solid white;
    }

    .puan {
      margin-top: 20px;
    }

    .puan img {
      height: 20px;
      width: 20px !important;
      margin: 30px 5px 0 0;
    }

    .isim h1 {
      font-size: 15px;
      font-family: inherit;
      /*'Montserrat', sans-serif;*/
      font-weight: 700;
      margin-top: 20px;
    }

    .isim p {
      font-size: 12px;
      font-family: inherit;
      /*'Montserrat', sans-serif;*/
      font-weight: 400;
      font-family: inherit;
      /*sans-serif;*/
    }

    /** review slider css ends */



   /* pricing table css starts */

   table tbody tr:nth-child(even) {
    background-image: radial-gradient(73% 147%, #EADFDF 59%, #ECE2DF 100%), radial-gradient(91% 146%, rgba(255,255,255,0.50) 47%, rgba(0,0,0,0.50) 100%);
    background-blend-mode: screen;
  }

  table thead{background: linear-gradient(45deg, rgb(139, 59, 210), rgb(47, 30, 152));}

  table thead th{padding:1% 0.5% !important;}

  table th{color:white!important;}
  table td{vertical-align:middle!important;}

  .table tr:nth-child(even):hover {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    border-left: 3px solid rgb(47, 30, 152);
  }

  .table tr:nth-child(odd):hover {
    box-shadow: 0px 9px 30px 0px rgba(201,145,217,0.82);
    border-left: 3px solid rgb(47, 30, 152);
  }


  .table-responsive{
    box-shadow: 0px 12px 28px 0px rgba(140, 149, 159, 0.3);
    border-radius:5px;
  }

   /* pricing tabls css ends  */



    /**pricing css starts */

   @import url("https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap");

  .pricesection {
   background-color:var(--ys-light);  

  font-family: "Play", sans-serif;
  }

  .container {
  width: 100%;
  }

  .packages {
  margin: 20px;
  width: 270px;
  padding-bottom: 1.5em;
  height: 100%;
  background-color:var(--bs-dark);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 19px 38px rgba(30, 35, 33, 1), 0 15px 12px rgba(30, 35, 33, 0.2);
  flex-wrap: wrap;
  color: #f4f4f4;
  }

  h1,
   h2 {
  font-size: 2.2em;
   }

  .list li {
  font-size: 20px;
  list-style: none;
  border-bottom: 1px solid #f4f4f4;
  padding-inline-start: 0;
  border-width: 1px;
  padding: 10px;
  }

  .first {
  margin-top: 40px;
  border-top: 1px solid #f4f4f4;
   }

  .list {
  width: 80%;
   }

  ol,
  ul {
  padding: 0;
  }

 .top {
  display: flex;
  flex-direction: column;
  align-items: center;
   }

  input,
  label {
  display: inline-block;
  vertical-align: middle;
  margin: 10px 0;
  }

  .button {
  padding: 10px 30px;
  text-decoration: none;
  font-size: 1.4em;
  margin: 15px 15px;
  border-radius: 50px;
  color: #f4f4f4;
  transition: all 0.3s ease 0s;
  }

  .button:hover {
  transform: scale(1.2);
   }

  .button1 {
  background-image: linear-gradient(90deg, rgb(252, 108, 53),rgb(170, 18, 159));
  background-color: ;/*#00cc99*/
    box-shadow: 0 0 10px 0 #00cc99 inset, 0 0 20px 2px #00cc99; 
  box-shadow: 0 0 10px 0 #ff007c inset, 0 0 20px 2px #ff007c;
  }

  .button2 {
  background-image: linear-gradient(90deg, rgb(252, 108, 53),rgb(170, 18, 159));
  background-color:; /*#ff007c*/
  box-shadow: 0 0 10px 0 #ff007c inset, 0 0 20px 2px #ff007c;
   }

  .button3 {
  background-image: linear-gradient(90deg, rgb(252, 108, 53),rgb(170, 18, 159));
  background-color: ;/*#ffae42*/
  box-shadow: 0 0 10px 0 #ff007c inset, 0 0 20px 2px #ff007c;
  /* box-shadow: 0 0 10px 0 #ffae42 inset, 0 0 20px 2px #ffae42; */
   }

  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  }

  .switch input {
  opacity: 0;
  width: 0;
  height: 0;
   }

   .slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #1e2321;
  -webkit-transition: 0.4s;

  box-shadow: 2px 6px 25px #1e2321;
  transform: translate(0px, 0px);
  transition: 0.6s ease transform, 0.6s box-shadow;
   }

  .slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: 0.4s;
  transition: 0.4s;
   }

   input:checked + .slider {
  background-color:#8b3bd2; /*#50bfe6*/
  }

   input:focus + .slider {
  box-shadow: 0 0 1px #50bfe6;
  }
   
  input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
  }

  .slider.round {
  border-radius: 34px;
  }

 .slider.round:before {
  border-radius: 50%;
  }

  .package-container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  }

    /**pricing css ends  */


    /* features section starts */

     /* #features .icon img {box-shadow: 0px 1px 2px 0px rgba(0,255,255,0.7), 1px 2px 4px 0px rgba(0,255,255,0.7), 2px 4px 8px 0px rgba(0,255,255,0.7), 2px 4px 16px 0px rgba(0,255,255,0.7);}  */
       /* #features .icon img {box-shadow: 0px 1px 2px 0px rgba(0,255,255,0.7), 1px 2px 4px 0px rgba(0,255,255,0.7), 2px 4px 8px 0px rgba(0,255,255,0.7), 2px 4px 16px 0px rgba(0,255,255,0.7);}   */
     /* #features .icon img  {box-shadow: -5px -5px 30px 5px red, 5px 5px 30px 5px blue;} */
   
      /* #features .icon  img {box-shadow: 4px 5px 8px 5px rgb(117, 37, 246),0px 10px 15px -3px rgba(0,0,0,0.1)!important;} */

    #features h4{font-weight: 100;}
    .features-area a,
    .features-area a:hover,
    .features-area a:focus,
    .features-area a:active {
      text-decoration: none;
      outline: none;
    }

    .features-area ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .features-area .bg-gray {
      background-color: #f9f9f9;
    }

    .features-area .site-heading h2 {
      display: block;
      /* font-weight: 700; */
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .features-area .site-heading h2 span {
      /*color:#c207eb;*#ffaf5a*/

    }

    .features-area .site-heading h4 {
      display: inline-block;
      padding-bottom: 20px;
      position: relative;
      text-transform: capitalize;
      z-index: 1;
    }

    .features-area .site-heading h4::before {
      /* background: #ffaf5a none repeat scroll 0 0;
      bottom: 0;
      content: "";
      height: 2px;
      left: 50%;
      margin-left: -25px;
      position: absolute;
      width: 50px; */
    }

    .features-area .site-heading {
      /*margin-bottom: 60px;*/
      /* overflow: hidden; */
      margin-top: -5px;
    }

    .features-items,
    .features-items .items-box {
      /* overflow: hidden; */
    }

    .features-area .equal-height::after {
      background: #e7e7e7 none repeat scroll 0 0;
      content: "";
      height: 100%;
      position: absolute;
      right: -1px;
      top: 0;
      width: 1px;
    }

    .features-area.item-full .equal-height::before {
      /* background: #e7e7e7 none repeat scroll 0 0;
      content: "";
      height: 1px;
      position: absolute;
      bottom: -1px;
      right: 0;
      width: 100%; */
    }

    .features-area .features-items .col-md-5,
    .features-area .features-items .col-md-7 {
      display: table-cell;
      float: none;
      vertical-align: middle;
    }

    .features-area .features-items.reversed .col-md-5,
    .features-area .features-items.reversed .col-md-7 {
      display: inline-block;
      float: left;
    }

    .features-area .features-items.reversed .info-box {
      float: right;
    }

    .features-area .features-items .item {
      padding: 15px 30px;
    }

    .features-area.item-full .features-items .item {
      padding: 30px;
    }

    .features-area .features-items .item h4 {
      position: relative;
    }

    .features-area.bottom-small {
      padding-bottom: 25px;
    }

    .features-area.default-padding.bottom-none {
      padding-bottom: 30px;
    }

    .features-area .item .icon {
      margin-bottom: 20px;
    }

    .features-area .item .info {
      box-shadow: 0px 2px 4px 0px rgba(144,19,254,1), 0px 7px 13px -3px rgba(0,0,0,0.3), 0px -3px 0px 0px rgba(0,0,0,0.2) inset;
      border-radius:30px;
    }


    .features-area .item .info:hover{background-color: indigo;}



    .features-area .item .icon i {

      /* background-image: linear-gradient(45deg, #8b3bd2, rgb(47, 30, 152)); */
      background-image: linear-gradient(90deg, rgb(165, 5, 189), rgb(239, 87, 203));
      /* background: #ffffff none repeat scroll 0 0; */
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      border-radius: 50%;
      -moz-box-shadow: 0 0 10px #cccccc;
      -webkit-box-shadow: 0 0 10px #cccccc;
      -o-box-shadow: 0 0 10px #cccccc;
      box-shadow: 0 0 10px #cccccc;
      color: #ffaf5a;
      display: inline-block;
      font-size: 30px;
      height: 100px;
      line-height: 100px;
      position: relative;
      text-align: center;
      width: 100px;
      z-index: 1;
    }

    .features-area .features-items .items-box i {
      background: transparent;
    }

    .features-area .item .icon {
      margin-bottom: 25px;
    }

    .features-area .features-items.icon-solid i {
      border-radius: inherit;
      -moz-box-shadow: 0 0 10px #cccccc;
      -webkit-box-shadow: 0 0 10px #cccccc;
      -o-box-shadow: 0 0 10px #cccccc;
      box-shadow: 0 0 10px #cccccc;
      color: #ffaf5a;
      display: inline-block;
      font-size: 50px;
      height: 80px;
      line-height: 80px;
      position: relative;
      text-align: center;
      width: 80px;
    }


    .features-area .item .info h4 {
      font-weight: 600;
      text-transform: capitalize;
      font-size: 20px;
    }

    .features-area .item .info p {
      margin: 0;
    }

    .features-area .features-items.less-icon .items-box.inc-cell .item .info {
      
      padding-left: 0;
    }

    .features-area .features-items .items-box.inc-cell .item .info a {
      color: #666666;
      display: inline-block;
      margin-top: 15px;
      text-transform: uppercase;
    }

    .features-area .features-items .items-box.inc-cell .item .info a:hover {
      color: #ffaf5a;
    }

    /* features section ends */



    /* faq section css starts  */


    .faq-section {
      /* background: #fdfdfd; */
      min-height: 90vh;
      padding: 10vh 0 0;
    }

    .faq-title h2 {
      position: relative;
      margin-bottom: 40px;
      margin-top:50px;
      display: inline-block;
      /* font-weight: 600; */
      line-height: 1;
    }

    .faq-title h2::before {
      content: "";
      position: absolute;
      left: 50%;
      width: 60px;
      height: 2px;
      background: #7b1ee9; /*#E91E63*/
      bottom: -25px;
      margin-left: -30px;
    }

    .faq-title p {
      padding: 0 190px;
      margin-bottom: 10px;
    }

    .faq {
      /* background: #FFFFFF; */
      box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
      border-radius: 4px;
    }

    .faq .card {
      border: none;
      background: none;
      border-bottom: 1px dashed #CEE1F8;
    }

    .faq .card .card-header {
      padding: 0px;
      border: none;
      background: none;
      -webkit-transition: all 0.3s ease 0s;
      -moz-transition: all 0.3s ease 0s;
      -o-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s;
    }

    .faq .card .card-header:hover {
      /* background: rgba(233, 30, 99, 0.1); */
      background-image: linear-gradient(45deg, rgb(139, 59, 210), rgb(47, 30, 152));
      padding-left: 10px;
    }

    .faq .card .card-header .faq-title {
      width: 100%;
      text-align: left;
      padding: 0px;
      padding-left: 30px;
      padding-right: 30px;
      font-weight: 400;
      font-size: 16px;
      letter-spacing: 1px;
      color: #fff;
      /*#3B566E*/
      text-decoration: none !important;
      -webkit-transition: all 0.3s ease 0s;
      -moz-transition: all 0.3s ease 0s;
      -o-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s;
      cursor: pointer;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .faq .card .card-header .faq-title .badge {
      display: inline-block;
      width: 20px;
      height: 20px;
      line-height: 14px;
      float: left;
      -webkit-border-radius: 100px;
      -moz-border-radius: 100px;
      border-radius: 100px;
      text-align: center;
      background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
      /*background: #410093; #E91E63*/
      color: #fff;
      font-size: 12px;
      margin-right: 20px;
    }

    .faq .card .card-body {
      padding: 30px;
      padding-left: 35px;
      padding-bottom: 16px;
      font-weight: 400;
      font-size: 16px;
      color: #fff;
      /*#6F8BA4*/
      line-height: 28px;
      letter-spacing: 1px;
      border-top: 1px solid #F3F8FF;
    }

    .faq .card .card-body p {
      margin-bottom: 14px;
    }



    @media (max-width: 991px) {
      .faq {
        margin-bottom: 30px;
      }

      .faq .card .card-header .faq-title {
        line-height: 26px;
        margin-top: 10px;
      }
    }

    .faq-section .row {
      justify-content: center
    }

    /* faq section css ends */
  </style>

</head>



<body>

  <div class="container-fluid nav-container">

    <nav class="navbar navbar-expand-sm justify-content-center container py-4">
         
         
        <a class="navbar-brand" href="#">
          <img src="https://res.cloudinary.com/youstable/image/upload/v1696407443/youstable-logo-w_t0ygds.svg" alt="youstable Logo" style="width:300px;" class="rounded-pill">
        </a>
    
    </nav>

  </div>

  <section class="herosection">
    <div class="container col-xl-12 col-xxl-12 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5 ">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3 text-white ">Scale Your Business 10x With <span class="hero-heighlighted-text">Powerful Dedicated Servers</span> Tailored For Startups, SMB’s & Enterprises</h1> <!--text-body-emphasis-->
          <div class="d-flex justify-content-lg-start  justify-content-md-center justify-content-sm-center  my-5 align-items-center">
            <div class="pe-4"><button class="btn btn-lg btn-vp button-pr text-white">View Price</button></div><!--priceview-ptn-->
            <div class="pe-4"><img src="img/trustpilot-whitestars.png" width="100px" /></div>
            <div class="text-white">Most Trusted with 4.8 Rating</div>
          </div>
        </div>
        <div class="mx-auto col-lg-5">

          <form action="mail.php" method="post" class="p-4 p-md-5 rounded-3 bg-body-tertiary text-center text-white"> <!--border-->

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingName" name="name" placeholder="" required>
              <label for="floatingName">Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingEmail" name="email"  placeholder="" required>
              <label for="floatingEmail">Email address</label>
            </div>

            <div class="form-floating mb-3">
              <input type="tel" class="form-control" id="floatingPhone" name="phone" maxlength="10"  placeholder=""  pattern="[0-9]{1}[0-9]{9}" required> 
              <label for="floatingPhone">Phone No.</label>
            </div>

            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"  placeholder="Message"></textarea>
            </div>


            <button class="w-100 btn btn-lg sign-btn text-white" type="submit" name="send">Sign up</button>

            <hr class="my-4">
            <small class="text-center text-white">By clicking Sign up, you agree to the terms of use.</small>

          </form>
        </div>
      </div>
    </div>
  </section>


  <section class="yorum">
    <div class="container">

      <h2 class="text-center text-dark mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
          <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1" />
        </svg>
        <br />
        Customer Love Us
      </h2>


      <div class="col-12">

        <div class="owl-carousel">
          <div class="">
            <div class="card main-card">
              <div class="card-block">
                <div class="card-yazı">
                  <p class="text-center text-white">I'm quite impressed with their customer support team, who helped me with an issue I was experiencing while uploading files on my website.
                  </p>
                  <div class="card-sahip">
                    <div class="favicon">
                      <img height="40" width="40" src="https://youstable.com/assets/assets/img/reviews/satish-kushwaha.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="puan d-flex justify-content-center">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                </div>
                <div class="isim text-center text-white">
                  <h1>Satish Kushwaha</h1>
                  <p><i>Youtuber | Content Creator</i></p>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <div class="card main-card">
              <div class="card-block">
                <div class="card-yazı">
                  <p class="text-center text-white">Since I chose YouStable my site loading time has decreased drastically. It has helped my site with SERP ranking and I am absolutely loving it!
                  </p>
                  <div class="card-sahip">
                    <div class="favicon">
                      <img height="40" width="40" src="https://youstable.com/assets/assets/img/reviews/kushal-arora.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="puan d-flex justify-content-center">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/JD1Ogn.png" alt="">
                </div>
                <div class="isim text-center text-white">
                  <h1>Kushal Arora</h1>
                  <p><i>Blogger</i></p>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <div class="card main-card">
              <div class="card-block">
                <div class="card-yazı">
                  <p class=" text-center text-white">Being a Domain Consultant I recommend YouStable as the right choice for Domain Transfer. They offer easy email forwarding and DNS management.
                  </p>
                  <div class="card-sahip">
                    <div class="favicon">
                      <img height="40" width="40" src="https://youstable.com/assets/assets/img/reviews/jai.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="puan d-flex justify-content-center">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                </div>
                <div class="isim text-center text-white">
                  <h1>Jay Gupta</h1>
                  <p><i>Domain Consultant</i></p>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <div class="card main-card">
              <div class="card-block">
                <div class="card-yazı">
                  <p class=" text-center text-white">Cheap web hosting for beginners and professionals alike. They offers amazing service and it was a great experience with YouStable.
                  </p>
                  <div class="card-sahip">
                    <div class="favicon">
                      <img height="40" width="40" src="https://youstable.com/assets/assets/img/reviews/sudha.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="puan d-flex justify-content-center">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/JD1Ogn.png" alt="">
                </div>
                <div class="isim text-center text-white">
                  <h1>Sudha Yadav</h1>
                  <p><i>Social Entrepreneur</i></p>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <div class="card main-card">
              <div class="card-block">

                <div class="card-yazı">

                  <p class="text-center text-white">I registered with YouStable affiliate program and with the help of the promotional material they provide I was able to get started to earn passively.
                  </p>
                  <div class="card-sahip">
                    <div class="favicon">
                      <img height="40" width="40" src="https://youstable.com/assets/assets/img/reviews/akash-singh.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="puan d-flex justify-content-center">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                  <img src="https://i.hizliresim.com/GDVyr3.png" alt="">
                </div>
                <div class="isim text-center text-white">
                  <h1>Akash Singh Rajpoot</h1>
                  <p><i>Affiliate Marketer</i></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <center>
          <img class="mx-auto" src="img/trustpilot-star.png" width="100px">
        </center>
      </div>

    </div>
  </section>

  
  <section class="compheighlight pt-5 pb-5">
    <h2 class="text-center px-5 text-wrap">
      With Over 11,000+ Clients,Youstable Is The #1 Choice Of Startups & Enterprises!
  </h2>

        <div class="container">
          <img class="mx-auto" src="" width="auto">
        </div>
  </section>



   <section class="pricesection py-5">
   <div class="container py-5 ">
    <div class="top">
      <h1>Plans & Pricing</h1>
       <h3>Get Servers that Deliver Results</h3>
      <div class="toggle-btn">
        <span style="margin: 0.8em;">Annually</span>
        <label class="switch">
          <input type="checkbox" id="checbox" onclick="check()" ;/>
          <span class="slider round"></span>
        </label>
        <span style="margin: 0.8em;">Monthly</span></div>
    </div>

    <div class="package-container">
      <div class="packages pt-5">
        <h1>vStart</h1>
        <h2 class="text1">&#8377;1149</h2>
        <h2 class="text2">&#8377;574</h2>
        <ul class="list">
          <li class="first">1 CPU</li>
          <li>4 GB RAM</li>
          <li>50 GB NVMe SSD</li>
          <li>1 TB Bandwidth</li>
          <!-- <li>Free SSL</li> -->
          <li>24X7 Support</li>        
        </ul>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=monthly" class="button button1 text1">Start Now</a>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=341&billingcycle=annually&promocode=VPS50" class="button button1 text2">Start Now</a>
      </div>
      <div class="packages pt-5">
        <h1>vProfessional</h1>
        <h2 class="text1">&#8377;1999</h2>
        <h2 class="text2">&#8377;999</h2>
        <ul class="list">
          <li class="first">2 CPU</li>
          <li>6 GB RAM</li>
          <li>100 GB NVMe SSD</li>
          <li>1.5 TB Bandwidth</li>
          <!-- <li>Free SSL</li> -->
          <li>24X7 Support</li>
        </ul>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=monthly" class="button button2 text1">Start Now</a>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=342&billingcycle=annually&promocode=VPS50" class="button button2 text2">Start Now</a>
      </div>

      <div class="packages pt-5">
        <h1>vPopular</h1>
        <h2 class="text1">&#8377;3499</h2>
        <h2 class="text2">&#8377;1749</h2>
        <ul class="list">
          <li class="first">4 CPU</li>
          <li>12 GB RAM</li>
          <li>150 GB NVMe SSD</li>
          <li>2.0 TB Bandwidth</li>
          <!-- <li>Free SSL</li> -->
          <li>24X7 Support</li>
        </ul>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=monthly" class="button button3 text1">Start Now</a>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=343&billingcycle=annually&promocode=VPS50" class="button button3 text2">Start Now</a>
      </div>


       <div class="packages pt-5">
        <h1>vStable</h1>
        <h2 class="text1">&#8377;4699</h2>
        <h2 class="text2">&#8377;2349</h2>
        <ul class="list">
          <li class="first">6 CPU</li>
          <li>16 GB RAM</li>
          <li>200 GB NVMe SSD</li>
          <li>2.5 TB Bandwidth</li>
          <!-- <li>Free SSL</li> -->
          <li>24X7 Support</li>
        </ul>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=monthly" class="button button3 text1">Start Now</a>
        <a href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=344&billingcycle=annually&promocode=VPS50" class="button button3 text2">Start Now</a>
      </div>

    </div>
   </div>

   <script src="./script.js"></script>

</section>



<!-- <section class="price-section pt-5 pb-5">

<div class= "container pt-5 pb-5">

 <h2 class="text-center mb-5">Plans & Pricing</h2>

 <div class="table-responsive">

<table class="table  text-center mb-0" style="background-color:unset!important;">

      <thead>
        <tr class="py-5">
          <th>PLAN</th>
          <th>CPU</th>
          <th>PROCESSOR SPEED</th>
          <th>MEMORY</th>
          <th>STORAGE</th>
          <th>BANDWIDTH</th>
          <th>PRICE</th>
          <th>ACTION</th>
        </tr>
      </thead>


      <tbody>
        <tr>
          <td>E3-1230v3</td>
          <td>4</td>
          <td>3.30Ghz</td>
          <td>32GB DDR4</td>
          <td>480GB SSD</td>   
          <td>10 TB/1Gbps</td> 
          <td>₹4999/Mo</td>
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=354">Buy</a></button></td>   
        </tr>


        <tr>
           <td>E3-123x v5/v6</td>
          <td>4</td>
          <td>3.2Ghz</td>
          <td>32GB DDR4</td>
          <td>480GB SSD</td>   
          <td>10TB/1Gbps</td> 
          <td>₹6999/Mo</td>
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=346">Buy</a></button></td>      
        </tr>


        <tr>
          <td>E-2136</td>
          <td>6</td>
          <td>3.30Ghz</td>
          <td>32GB DDR4</td>
          <td>480 GB SSD</td>
          <td>10TB/1Gbps</td> 
          <td>₹7999/Mo</td> 
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=355">Buy</a></button></td>   
        </tr>

        <tr>
          <td>E-2286G - HEXA CORE</td>
          <td>6</td>
          <td>4.0Ghz</td>
          <td>32GB DDR4</td>
          <td>480 GB SSD</td>
          <td>10TB/1Gbps</td> 
          <td>₹9999/Mo</td> 
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=348">Buy</a></button></td>   
        </tr>

         <tr>
          <td>E5-2667v4</td>
          <td>8</td>
          <td>3.2Ghz</td>
          <td>32GB DDR4</td>
          <td>960GB SSD</td>
          <td>10 TB/1Gbps</td> 
          <td>₹11999/Mo</td> 
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=347">Buy</a></button></td>
        </tr>

         <tr>
          <td>Dual E5-2680v4</td>
          <td>28</td>
          <td>3.2Ghz</td>
          <td>128GB DDR4 </td>
          <td>960GB SSD</td>
          <td>10TB/1Gbps</td> 
          <td>₹15999/Mo</td> 
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=349">Buy</a></button></td>
        </tr>

         <tr>
          <td>Dual E5-2680v4</td>
          <td>28</td>
          <td>3.2Ghz</td>
          <td>256GB DDR4</td>
          <td>1.92TB SSD</td>
          <td>10TB/1Gbps</td> 
          <td>₹18999/Mo</td> 
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=350">Buy</a></button></td>
        </tr>

        <tr>
          <td>AMD EPYC 7313</td>
          <td>16</td>
          <td>3.0Ghz</td>
          <td>64GB DDR4</td>
          <td>1.92TB SSD</td>
          <td>10 TB/1Gbps</td> 
          <td>₹24999/Mo</td> 
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=351">Buy</a></button></td>
        </tr>

        <tr>
          <td>AMD EPYC 7543</td>
          <td>32</td>
          <td>2.8Ghz</td>
          <td>128GB DDR4</td>
          <td>1.92TB SSD</td>
          <td>10 TB/1Gbps</td> 
          <td>₹27999/Mo</td> 
          <td><button class="btn" ><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=352">Buy</a></button></td>
        </tr>

         <tr>
          <td>2X AMD EPYC 7543</td>
          <td>64</td>
          <td>2.8Ghz</td>
          <td>256GB DDR4</td>
          <td>1.92TB SSD</td>
          <td>10 TB/1Gbps</td> 
          <td>₹37999/Mo</td> 
          <td><button class="btn"><a class="btn btn-sm button-pr text-white" href="https://www.youstable.com/manage/order.php?currency=2&a=add&pid=353">Buy</a></button></td>
        </tr>
      </tbody>
</table>

 </div>

</div>

</section> -->



  <section id="features" class="features-area item-full text-center cell-items pt-5 pb-5">
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-md-12">
          <div class="site-heading text-center text-white">
            <h2>Our <span>Features</span></h2>
            <h4>Checkout our leatest features</h4>
          </div>
        </div>
      </div>
      <div class="row features-items text-white">
        <div class="col-md-4 col-sm-6 equal-height">
          <div class="item">
            <div class="icon">
              <!-- <i class="fas fa-tv"></i> -->
              <img src="img/feature-ssd.svg" width="25%" />
            </div>
            <div class="info p-2">
              <h4>NVMe SSD Powered Servers</h4>
              <p>Get more efficient data transport with the latest NVMe SSD storage drives that make website loading speed much faster!
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 equal-height">
          <div class="item">
            <div class="icon">
              <!-- <i class="fas fa-headset"></i> -->
              <img src="img/feature-ssl.svg" width="25%" />
            </div>
            <div class="info p-2">
              <h4>Free SSL Certificate</h4>
              <p>Gain your customers trust with a free industry standard SSL certificate that provides you an encryption based network communication protocol and makes your website much safer.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 equal-height">
          <div class="item">
            <div class="icon">
              <!-- <i class="fas fa-chart-line"></i> -->
              <img src="img/feature-litespeed web server.svg" width="25%" />
            </div>
            <div class="info p-2">
              <h4>LiteSpeed Web Server</h4>
              <p>LiteSpeed web server is one of the fastest webservers that makes your website lightening fast on the internet with smart cache storage!
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 equal-height">
          <div class="item">
            <div class="icon">
              <!-- <i class="fas fa-pen-fancy"></i> -->
              <img src="img/feature-migration.svg" width="25%" />
            </div>
            <div class="info p-2">
              <h4>Free Site Migration</h4>
              <p>Not happy with your existing service provider? No worries!! We provide you completely free of cost website migration to our quality services without any data loss.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 equal-height">
          <div class="item">
            <div class="icon">
              <!-- <i class="fas fa-tachometer-alt"></i> -->
              <img src="img/feature-backup.svg" width="25%" />
            </div>
            <div class="info p-2">
              <h4>Daily Backups</h4>
              <p>Your website is completely safe in our hands, all thanks to our smart features that automatically creates a data backup, enabling you to restore your last 7 day data anytime without any restriction.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 equal-height">
          <div class="item">
            <div class="icon">
              <!-- <i class="fas fa-diagnoses"></i> -->
              <img src="img/feature-advance security.svg" width="25%" />
            </div>
            <div class="info p-2">
              <h4>Advanced Security</h4>
              <p>We provide Imunify360 which includes Antivirus, Firewall, Multi-Layer security, Domain Reputation, and more.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="technologysec">

    <div class="containter">

    <h2 class="text-center mt-5">High Quality Servers with Industry Leading Technologies</h2>

    <div class="row justify-content-center mt-3 p-5">
      <div class="col  techbox"><img src="https://www.youstable.com/assets/assets/directadmin-home-featured.png"></div>
      <div class="col  techbox"><img src="https://www.youstable.com/assets/assets/CloudLinux-home-featured.png"></div>
      <div class="col  techbox"><img src="https://www.youstable.com/assets/assets/LetsEncrypt_home_featured.png"></div>
      <div class="col  techbox"><img src="https://www.youstable.com/assets/assets/Immunify360_home_featured.png"></div>
      <div class="col  techbox"><img src="https://www.youstable.com/assets/assets/LiteSpeed_home_featured.png"></div>
      <div class="col  techbox"><img src="https://www.youstable.com/assets/assets/Softaculous_home_featured.png"></div>
      <div class="col techbox"><img src="https://www.youstable.com/assets/assets/BitNinja_home_featured.png"></div>
      <div class="col  techbox"><img src="https://www.youstable.com/assets/assets/virtualizor_home_featured.png"></div>
    </div>

    <div class="row  justify-content-center  p-4">
     
    </div>
   </div>

  </section>


  <setion class="faqsec">
    <section class="faq-section">
      <div class="container">
        <div class="row">
          <!-- ***** FAQ Start ***** -->
          <div class="col-md-6 faq-left rounded-4"> <!--offset-md-3-->
            <div class="faq-title   text-center text-white pb-3 ">
              <!-- <h2 mt-5>FAQ</h2>
              <h3>facing any problem</h3>       -->
            </div>
          </div>
          <div class="col-md-6 text-white"><!--offset-md-3-->
            <div class="faq" id="accordion">
              <div class="card">
                <div class="card-header" id="faqHeading-1">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                      <span class="badge">1</span>What is Dedicated Server Hosting?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                  <div class="card-body">
                    <p>Dedicated Server Hosting implies when the whole (physical) server is offered and owned by the business owner who bought the hosting. The owner has full control over the server and can customize as well as scale their server as per their needs and make the best out of it, with full self-choice and privacy.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqHeading-2">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                      <span class="badge">2</span> What can you do with a Dedicated Server?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                  <div class="card-body">
                    <p>Basically with dedicated servers you can ensure that your website has unhindered performance on the internet, all thanks to the unlimited resources you get to manage your website files and traffic.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqHeading-3">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                      <span class="badge">3</span>What are the reasons for choosing a Dedicated Server?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                  <div class="card-body">
                    <p>One of the best aspects of a dedicated server is that you get an amazing level of resources to maintain and maintain your website. Such as dedicated server comes with unlimited resources that allows you to attract as much traffic as you want.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqHeading-4">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                      <span class="badge">4</span> Do I need a Dedicated Server for my website?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                  <div class="card-body">
                    <p>Well this totally depends upon your website, future plans, needs and requirements . For example if your website has really high traffic and high content and you want to scale it more than dedicated servers will be the best pick for you.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqHeading-5">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                      <span class="badge">5</span> What is the difference between VPS and a Dedicated Server?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                  <div class="card-body">
                    <p> The basic difference between a VPS and a dedicated server is that VPS servers have little limited resources but dedicated servers have unlimited resources which makes your website lightning fast on the internet.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqHeading-6">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                      <span class="badge">6</span> Can I upgrade my VPS to a dedicated server?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                  <div class="card-body">
                    <p>Yes, you can easily upgrade your VPS services to Dedicated by simply contacting YouStable’s customer support, asking them to do so, and waiting until they process the demand and upgrade your services in no time!</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="faqHeading-7">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                      <span class="badge">7</span> I need a custom Operating System installation with specific parameters. Do you offer that?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                  <div class="card-body">
                    <p>YouStable does not allow custom Operating System Installations with specific parameters but is planning to offer the same in the near future.</p>
                  </div>
                </div>
              </div>

             
              <div class="card">
                <div class="card-header" id="faqHeading-9">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                      <span class="badge">8</span> Do you offer control panels for an easy administration of my Dedicated Server?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                  <div class="card-body">
                    <p>Yes….!

                      We provide multiple GUI-based control panels options such as DirectAdmin, cPanel etc., which you can use to easily manage and maintain your website along with the resources!!</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="faqHeading-10">
                  <div class="mb-0">
                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                      <span class="badge">9</span> Can I upgrade the Configuration of my Dedicated Server Later On?
                    </h5>
                  </div>
                </div>
                <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10" data-parent="#accordion">
                  <div class="card-body">
                    <p>Yes….!

                      We provide you services with unmetered resources that means you can anytime upgrade to as much resources as you want without any restrictions or interruptions.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- review slider js starts -->
    <script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 3
            }
          }
        })
      });
    </script>
    <!-- review slider js ends-->

    <!-- priceing js starts -->
    <script>
      function check() {
        var checkBox = document.getElementById("checbox");
        var text1 = document.getElementsByClassName("text1");
        var text2 = document.getElementsByClassName("text2");

        for (var i = 0; i < text1.length; i++) {
          if (checkBox.checked == true) {
            text1[i].style.display = "block";
            text2[i].style.display = "none";
          } else if (checkBox.checked == false) {
            text1[i].style.display = "none";
            text2[i].style.display = "block";
          }
        }
      }
      check();
    </script>
    <!--pricing js ends-->


</body>

</html>