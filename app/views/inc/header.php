<!doctype html>
<head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='<?php echo URLROOT; ?>/css/style.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
        <title><?php echo SITENAME;?></title>
    </head>
    <body>
  <div class='container  justify-content-center'>
    <nav class="py-2 mb-5 bg-body border-bottom">
      <div class="container d-flex flex-wrap">
       
        <ul class="nav me-auto">
    <li id="tle" class="nav-item"><a href="<?php echo URLROOT; ?>" class="nav-link link-body-emphasis px-2 me-5 active" aria-current="page"><?php echo SITENAME; ?></a></li>
    <li class="nav-item"><a href="<?php echo URLROOT; ?>" class="nav-link link-body-emphasis px-2 mt-1 me-5">Home</a></li>
    <li class="nav-item"><a href="<?php echo URLROOT; ?>pages/about" class="nav-link link-body-emphasis mt-1 me-5 px-2 ">About</a></li>
</ul>
          <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item ms-2 me-lg-4 list-unstyled p-0 m-0 ">
<a class="border-0 p-2 fs-6 btn-primary btn btn-sm ps-3 pe-3"  href="<?php echo URLROOT; ?>pages/generator" data-nav-label-param="create_qr_code" data-action="click->nav#gtagClick" data-nav-type-param="button" id="createNewBtnHeader">
<img loading="lazy" width="22" height="22" class="pe-2" src="<?php echo URLROOT; ?>/images/ic-create-code.svg" alt="ic">
Create QR</a>
</li>


              <li class="nav-item me-xl-4 list-unstyled">
<a id="btn1" class="border-0 p-2 ps-4 pe-4 fs-6 btn-secondary btn btn-sm text-white" data-action="click->nav#loginBtn" href="<?php echo URLROOT; ?>pages/logout">Logout</a>
</li>
          <li class="nav-item px-2 mt-2" style="list-style-type: none;">
              <a class="nav-link" href="#" class="nav-link link-body-emphasis px-2"><?php echo $_SESSION['user_name']; ?></a>
            </li>
            
            
            <li class="list-unstyled p-0 m-0">&nbsp;&nbsp;</li>
            
         
          <?php else : ?>
      <ul class="nav">
             <li class="nav-item me-xl-4 list-unstyled">
<a id="btn1" class="border-0 p-2 ps-4 pe-4 fs-6 btn-secondary btn btn-sm text-white" data-action="click->nav#loginBtn" href="<?php echo URLROOT; ?>pages/login">LogIn</a>
</li>
<li class="nav-item ms-2 me-lg-4 list-unstyled p-0 m-0 ">
<a class="border-0 p-2 fs-6 btn-primary btn btn-sm ps-3 pe-3 " href="<?php echo URLROOT; ?>pages/register" data-nav-label-param="create_qr_code" data-action="click->nav#gtagClick" data-nav-type-param="button" id="createNewBtnHeader">

SignUp</a>
</li>
            </ul>
            <?php endif;?>
    </div>
  </nav>
   
      
      
      
    <!--  <nav class="navbar navbar-expand-lg bg-white" data-controller="nav " data-nav-new-home-value="0">
<div class="container">
<button class="navbar-toggler border-0" aria-label="menu" aria-labelledby="span-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
<span id="span-menu" class="navbar-toggler-icon"></span>
</button>
<a id="logo-image" href="/">
<img class="mx-auto" src="/static/pages/logo/logo.svg" alt="free QR code generator" width="100" height="55">
</a>
<div class="d-xl-none d-lg-none d-block pe-5"></div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
<div class="offcanvas-header">
<button type="button" class="bg-white border-0" data-bs-dismiss="offcanvas" aria-label="Close"><img loading="lazy" width="18" height="18" src="/image/header/ic-close.svg" alt="close"></button>
<div class="offcanvas-title" id="offcanvasNavbarLabel"><a href="/">
</a></div>
</div>
<div class="offcanvas-body">
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-xl-flex d-lg-flex d-none">
<li class="nav-item me-xl-4 dropdown nav-pills">
<a href="<?php echo URLROOT; ?>" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Home
</a>

<li class="nav-item me-xl-4">
<a href="https://me-qr-scanner.com/" target="_blank" class="nav-link" data-nav-label-param="qr_scanner" data-nav-type-param="link" data-action="click->nav#gtagClick">
QR Scanner
</a>
</li>
<li class="nav-item me-xl-4">
<a href="/pricing" class="nav-link color-nav" data-nav-label-param="pricing" data-action="click->nav#gtagClick" data-nav-type-param="link">
Pricing
</a>
</li>
<li class="nav-item me-xl-4">
<a href="/faq" class="nav-link" data-nav-label-param="faq" data-nav-type-param="link" data-action="click->nav#gtagClick">
FAQ</a>
</li>
<li class="nav-item me-xl-4">
<a href="/support" class="nav-link" data-nav-label-param="support" data-nav-type-param="link" data-action="click->nav#gtagClick">
Support</a>
</li>
<li class="nav-item ms-2 me-lg-4 ">
<a class="border-0 p-2 fs-6 btn-primary btn btn-sm ps-3 pe-3" href="<?php echo URLROOT; ?>pages/generator" data-nav-label-param="create_qr_code" data-action="click->nav#gtagClick" data-nav-type-param="button" id="createNewBtnHeader">
<img loading="lazy" width="22" height="22" class="pe-2" src="<?php echo URLROOT; ?>/images/ic-create-code.svg" alt="ic">
Create QR</a>
</li>
<li class="nav-item me-xl-4">
<a id="btn1" class="border-0 p-2 ps-4 pe-4 fs-6 btn-secondary btn btn-sm text-white" data-action="click->nav#loginBtn" href="<?php echo URLROOT; ?>pages/login">Login</a>
</li>
<li class="dropdown nav-item">
<a href="#" class="nav-link " data-bs-toggle="dropdown" aria-expanded="false" role="button">
<span>EN</span>
<span><img width="13" height="8" loading="lazy" src="/image/header/ic-arrow.svg" alt="arrow"></span>
</a>
<ul class="dropdown-menu">
<li><a href="/" hreflang="en" class="dropdown-item lang">
English
</a></li>
<li><a href="/es" hreflang="es" class="dropdown-item lang">
Español
</a>
</li>
<li>
<a href="/pt" hreflang="pt" class="dropdown-item lang">
Português
</a>
</li>
<li>
<a href="/ru" hreflang="ru" class="dropdown-item lang">
Русский
</a>
</li>
<li>
<a href="/ms" hreflang="ms" class="dropdown-item lang">
Bahasa Melayu
</a>
</li>
<li>
<a href="/vi" hreflang="vi" class="dropdown-item lang">
Tiếng Việt
</a>
</li>
<li>
<a href="/fr" hreflang="fr" class="dropdown-item lang">
Français
</a>
</li>
<li>
<a href="/de" hreflang="de" class="dropdown-item lang">
Deutsch
</a>
</li>
<li>
<a href="/ar" hreflang="ar" class="dropdown-item lang">
عرب
</a>
</li>

<li>
<a href="/nl" hreflang="nl" class="dropdown-item lang">
Nederlands
</a>
</li>
<li>
<a href="/it" hreflang="it" class="dropdown-item lang">
Italiano
</a>
</li>
<li>
<a href="/sv" hreflang="sv" class="dropdown-item lang">
Svenska
</a>
</li>
<li>
<a href="/uk" hreflang="uk" class="dropdown-item lang">
Українська
</a>
</li>
<li>
<a href="/zh" hreflang="zh" class="dropdown-item lang">
中国人
</a>
</li>
<li>
<a href="/he" hreflang="he" class="dropdown-item lang">
עִברִית
</a>
</li>
</ul>
</li>
</ul>
<ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-xl-none d-lg-none d-flex">
<li class="nav-item mb-3">
<a class="nav-link" href="/qr-code-generator">
<img class="pe-2" width="24" height="24" loading="lazy" src="/image/header/ic-create-code_m.svg" alt="Create QR code">
Create QR Code</a>
</li>
<li class="nav-item mb-3 d-none">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
<img class="pe-2" loading="lazy" src="/image/header/person.svg" alt="ic person">
Profile
</a>
<div class="dropdown-menu border-0">
<a href="/entry" class="dropdown-item" data-nav-label-param="my_qr_codes" data-nav-type-param="link" data-action="click->nav#gtagClick">My QR-Codes</a>
<a href="/dash-board" class="dropdown-item" data-nav-label-param="statistic" data-nav-type-param="link" data-action="click->nav#gtagClick">Statistic</a>
<a href="/account" class="dropdown-item" data-nav-label-param="profile_settings" data-nav-type-param="link" data-action="click->nav#gtagClick">Profile Settings</a>
<a href="/support" class="dropdown-item" data-nav-label-param="support" data-action="click->nav#gtagClick" data-nav-type-param="link">Support</a>
</div>
</li>
<li class="nav-item mb-3 dropdown">
<a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<img class="pe-2" width="24" height="24" loading="lazy" src="/image/header/qr-code.svg" alt="qr code">
Why Me-QR
</a>
<ul class="dropdown-menu border-0">
<li>
<a class="dropdown-item" href="/#blockAllFeatures" data-nav-label-param="features" data-nav-type-param="link" data-action="click->nav#gtagClick">
Features
</a>
</li>
<li>
<a class="dropdown-item" href="/#blockWhereUse" data-nav-label-param="where_to_use" data-nav-type-param="link" data-action="click->nav#gtagClick">
Where To Use
</a>
</li>
<li>
<a class="dropdown-item" href="/page/articles?url=blog" data-nav-label-param="blog" data-nav-type-param="link" data-action="click->nav#gtagClick">
Blog
</a>
</li>
<li>
<a class="dropdown-item" href="/page/articles?url=instructions" data-nav-label-param="instructions" data-nav-type-param="link" data-action="click->nav#gtagClick">
Instructions
</a>
</li>
</ul>
</li>
<li class="nav-item mb-3">
<a href="https://me-qr-scanner.com/" target="_blank" class="nav-link" data-nav-label-param="qr_scanner" data-nav-type-param="link" data-action="click->nav#gtagClick">
<img class="pe-2" width="24" height="24" loading="lazy" src="/image/header/qr-code-scan.svg" alt="qr code scan">
QR Scanner
</a>
</li>
<li class="nav-item mb-3">
<a href="/pricing" class="nav-link color-nav" data-nav-label-param="pricing" data-action="click->nav#gtagClick" data-nav-type-param="link">
<img class="pe-2" width="24" height="24" loading="lazy" src="/image/header/ic-pricing.svg" alt="pricing">
Pricing
</a>
</li>
<li class="nav-item mb-3">
<a href="/faq" class="nav-link" data-nav-label-param="faq" data-action="click->nav#gtagClick" data-nav-type-param="link">
<img class="pe-2" width="24" height="24" loading="lazy" src="/image/header/ic-faq.svg" alt="faq">
FAQ</a>
</li>
<li class="nav-item mb-3 pb-3 border-bottom">
<a href="/support" class="nav-link" data-nav-label-param="support" data-action="click->nav#gtagClick" data-nav-type-param="link">
<img class="pe-2" width="24" height="24" loading="lazy" src="/image/header/ic-support.svg" alt="support">
Support</a>
</li>
<li class="dropdown nav-item  mb-3">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button">
<img class="pe-2" width="24" height="24" loading="lazy" src="/image/header/ic-lng.svg" alt="lng">
Language
</a>
<ul class="dropdown-menu  border-0">
<li><a href="/" hreflang="en" class="dropdown-item lang">
English
</a></li>
<li><a href="/es" hreflang="es" class="dropdown-item lang">
Español
</a>
</li>
<li>
<a href="/pt" hreflang="pt" class="dropdown-item lang">
Português
</a>
</li>
<li>
<a href="/ru" hreflang="ru" class="dropdown-item lang">
Русский
</a>
</li>
<li>
<a href="/ms" hreflang="ms" class="dropdown-item lang">
Bahasa Melayu
</a>
</li>
<li>
<a href="/vi" hreflang="vi" class="dropdown-item lang">
Tiếng Việt
</a>
</li>


<li>
<a href="/ko" hreflang="ko" class="dropdown-item lang">
한국인
</a>
</li>
<li>
<a href="/ja" hreflang="ja" class="dropdown-item lang">
日本
</a>
</li>
<li>
<a href="/nl" hreflang="nl" class="dropdown-item lang">
Nederlands
</a>
</li>
<li>
<a href="/it" hreflang="it" class="dropdown-item lang">
Italiano
</a>
</li>
<li>
<a href="/sv" hreflang="sv" class="dropdown-item lang">
Svenska
</a>
</li>
<li>
<a href="/uk" hreflang="uk" class="dropdown-item lang">
Українська
</a>
</li>
<li>
<a href="/zh" hreflang="zh" class="dropdown-item lang">
中国人
</a>
</li>
<li>
<a href="/he" hreflang="he" class="dropdown-item lang">
עִברִית
</a>
</li>
</ul>
</li>
<li class="nav-item mb-3">
<a class="nav-link text-secondary" href="/login">
<img loading="lazy" width="24" height="24" class="pe-2" src="/image/header/ic-logout.svg" alt="login">Log in</a>
</li>
<li class="d-flex justify-content-end mt-5">
<a class="nav-link" href="/qr-code-generator">
<img loading="lazy" width="67" height="67" src="/image/header/add-qr.png" alt="add qr">
</a>
</li>
</ul>
</div>
</div>
</div>
</nav>-->
    



