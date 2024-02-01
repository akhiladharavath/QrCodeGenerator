<?php require APPROOT . '/views/inc/header.php'; ?>
<!doctype html>
<html>
    <head>
        <title>QR Code Generator</title>
        <link rel='stylesheet' href='<?php echo URLROOT; ?>/css/style.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div data-controller="new-landing" class="pt-lg-5 position-relative">
            <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-new-landing-target="videoModal" data-action="click->new-landing#closeVideoModal">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button data-action="click->new-landing#closeVideoModal" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                            <div class="ratio ratio-16x9" style="height: 470px">
                                <iframe data-new-landing-target="videoFrame" allowscriptaccess="always" allow="autoplay" class="embed-responsive-item" src="">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="hero-ic7 position-absolute end-0" loading="lazy" src="<?php echo URLROOT; ?>/images/circle-r.svg" alt="decorate element">
            <div class="pt-0 pt-lg-5 position-relative">

                <img class="d-none d-lg-block hero-ic4 position-absolute end-50 top-0" loading="lazy" src="<?php echo URLROOT; ?>/images/header-ic3.svg" alt="decorate elem">
                <img class="d-none d-lg-block hero-ic2 position-absolute top-0" loading="lazy" src="<?php echo URLROOT; ?>/images/qr-ic2.svg" alt="decorate elem">
                <div class="container pb-lg-5">
                    <div class="row pt-0 pt-md-5">
                        <div class="col-md-5 col-12 flex-column d-flex order-1 order-md-1">
                            <h1 class="text-title text-center text-md-start mb-3 position-relative">
                                Create &amp; Customize
                                <br>
                                Your Dynamic<br>
                                <span class="">QR code for</span> <span class="text-primary">FREE</span>
                                <img class="position-absolute end-0 top-50 d-lg-none" width="18" height="18" loading="lazy" src="<?php echo URLROOT; ?>/images/header-ic2.svg" alt="icon">
                            </h1>
                            <p class="opacity-75 text-title text-center text-md-start pt-2 lh-lg fs-6 col-lg-8 position-relative">Easily generate, manage and statistically
                                <span>
                                    track your QR codes</span>
                                <img class="d-none d-lg-block hero-ic3 position-absolute bottom-0 end-0" width="23" height="23" loading="lazy" src="<?php echo URLROOT; ?>/images/header-ic2.svg" alt="icon">
                                <img class="d-block d-lg-none position-absolute top-100 start-0 " width="18" height="18" loading="lazy" src="<?php echo URLROOT; ?>/images/header-ic2.svg" alt="icon">
                            </p>
                        </div>
                        <div class="col-md-7 col-10 mx-auto flex-column d-flex order-1 order-lg-2">
                            <div class="d-lg-flex mb-2">
                                <div class="me-lg-4 col-lg-6 col-12">
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="url" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm py-4 mb-lg-4 mb-3 d-block rounded-2 header-item">
                                            <img src="<?php echo URLROOT; ?>/images/header-link.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="Link">
                                            <img src="<?php echo URLROOT; ?>/images/header-link.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="Link">
                                            <p class="fw-bold mb-0 fs-6">Link / URL</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="pdf" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm d-block py-lg-4 py-4 mb-lg-4 mb-3 rounded-2 header-item">
                                            <img src="<?php echo URLROOT; ?>/images/insta.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="pdf">
                                            <img src="<?php echo URLROOT; ?>/images/insta-pdf.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="pdf">
                                            <p class="fw-bold mb-0 fs-6">Instagram</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="text" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm d-block py-lg-4 py-4 mb-lg-4 mb-3 rounded-2 header-item">
                                            <img src="<?php echo URLROOT; ?>/images/header-text.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="Image">
                                            <img src="<?php echo URLROOT; ?>/images/header-text.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="Image">
                                            <p class="fw-bold mb-0 fs-6">Text</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="whatsapp" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm d-block py-lg-4 py-4 mb-lg-0 mb-3 rounded-2 header-item">
                                            <img src="<?php echo URLROOT; ?>/images/header-whatsapp.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="WhatsApp">
                                            <img src="<?php echo URLROOT; ?>/images/header-whatsapp.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="WhatsApp">
                                            <p class="fw-bold mb-0 fs-6">WhatsApp</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="wi-fi" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm py-4 mb-lg-4 mb-3 d-block rounded-2 header-item">
                                            <img src="<?php echo URLROOT; ?>/images/twitter.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="Wi-Fi">
                                            <img src="<?php echo URLROOT; ?>/images/twitter.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="Wi-Fi">
                                            <p class="fw-bold mb-0 fs-6">Twitter</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="image" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm py-4 d-block mb-lg-4 mb-3 header-item rounded-2">
                                            <img src="<?php echo URLROOT; ?>/images/facebook.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="Image">
                                            <img src="<?php echo URLROOT; ?>/images/facebook.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="Image">
                                            <p class="fw-bold mb-0 fs-6 ">Facebook</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="vcard" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm py-4 d-block mb-lg-4 mb-3 header-item rounded-2">
                                            <img src="<?php echo URLROOT; ?>/images/linkedin.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="vCard">
                                            <img src="<?php echo URLROOT; ?>/images/linkedin.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="vCard">
                                            <p class="fw-bold mb-0 fs-6 ">LinkedIn</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                    <a class="text-decoration-none text-reset position-relative" href="<?php echo URLROOT; ?>pages/generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="audio" data-new-landing-type-param="link">
                                        <div class="d-flex align-center ps-4 align-items-center shadow-sm py-4 d-block mb-lg-0 mb-3 header-item rounded-2">
                                            <img src="<?php echo URLROOT; ?>/images/email.svg" width="50" height="50" loading="lazy" class="me-3 d-lg-block d-none header-img" alt="Audio">
                                            <img src="<?php echo URLROOT; ?>/images/email.svg" width="28" height="28" loading="lazy" class="me-3 d-lg-none header-img" alt="Audio">
                                            <p class="fw-bold mb-0 fs-6 ">Email</p>
                                            <div class="bg-primary position-absolute bottom-0 start-0 rounded-bottom header-outline w-100"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-start d-flex align-center justify-content-center">
                                <a class="text-decoration-none" href="/qr-code-generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="show_more" data-new-landing-type-param="link">
                                    <p class=" text-primary mb-1 mb-lg-2 mt-lg-3">Show More</p>
                                </a>
                            </div>
                            <div class="text-start pt-3 d-flex justify-content-center pb-4 pb-lg-0">
                                <a href="/qr-code-generator" class="btn btn-primary text-decoration-none py-3 col-12 col-lg-5 fw-bold" data-action="click->new-landing#gtagClick" data-new-landing-label-param="next_step_to_qr_code" data-new-landing-type-param="button">Next step to QR code
                                    <img src="<?php echo URLROOT; ?>/images/slider.svg" width="19" height="19" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <img class="hero-ic5 position-absolute start-5" loading="lazy" src="<?php echo URLROOT; ?>/images/header-ic3.svg" alt="decorate element">
                    <img class="hero-ic7 position-absolute end-0" loading="lazy" src="<?php echo URLROOT; ?>/images/header-ic2.svg" alt="decorate element">
                </div>
            </div>
            <div class="container py-5">
                <h2 class="text-title text-center mb-lg-4 mb-2 mt-lg-4 mt-1">Create QR Code in 3 Steps</h2>
                <div class="row flex-nowrap overflow-auto pt-4 pb-lg-5 ">
                    <div class="col-md-4 col-9 mb-4 mb-md-0">
                        <a class="text-decoration-none h-100" href="/qr-code-generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="choose_the_type" data-new-landing-type-param="link">
                            <div class="py-lg-5 py-3 bg-white rounded-2 text-center border">
                                <div class="mb-4 px-4">
                                    <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/step-1.svg" width="294" height="220" alt="main-page-img">
                                </div>
                                <div class="fw-bold py-1 px-2 text-primary bg-primary bg-opacity-10 mx-auto rounded mb-3 d-inline-block">
                                    <small>Step
                                        1
                                    </small>
                                </div>
                                <p class="text-center text-title fw-bold text-capitalize step-title mb-0">Choose the type</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-9 mb-4 mb-md-0">
                        <a class="text-decoration-none h-100" href="/qr-code-generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="generate_qr_code" data-new-landing-type-param="link">
                            <div class="py-lg-5 py-3 bg-white rounded-2 text-center border h-100">
                                <div class="mb-4 px-4">
                                    <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/step-2.svg" width="305" height="220" alt="main-page-img">
                                </div>
                                <div class="fw-bold py-1 px-2 text-primary bg-primary bg-opacity-10 d-inline-block rounded mb-3">
                                    <small>Step
                                        2
                                    </small>
                                </div>
                                <p class="text-center text-title fw-bold step-title text-capitalize mb-0">Generate QR code</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-9">
                        <a class="text-decoration-none h-100" href="/qr-code-generator" data-action="click->new-landing#gtagClick" data-new-landing-label-param="customize_download" data-new-landing-type-param="link">
                            <div class="py-lg-5 py-3 bg-white rounded-2 text-center border">
                                <div class="mb-4 px-4">
                                    <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/step-3.svg" width="293" height="221" alt="main-page-img">
                                </div>
                                <div class="fw-bold py-1 px-2 text-primary bg-primary bg-opacity-10 d-inline-block rounded mb-3 ">
                                    <small>Step
                                        3
                                    </small>
                                </div>
                                <p class="text-center text-title fw-bold step-title text-capitalize mb-0">Customize &amp; download</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-f5">
                <div class="container py-5">
                    <div class="row py-lg-5">
                        <div class="col-lg-5 text-center text-lg-start mb-lg-0 mb-4">
                            <h2 class="text-dark mb-4">Trusted by Your Favorite Companies</h2>
                            <p class="description-text text-gray col-md-6 col-lg-12 mx-md-auto mx-lg-0">Trusted by more than <b>100+</b> companies and <b>900 000+</b> customers all over the world</p>
                        </div>
                        <div class="col-lg-6 col-12 ms-lg-auto my-lg-auto">
                            <div class="row justify-content-md-between align-items-center flex-wrap">
                                <div class="col-md-3 col-4 order-first mb-3 mb-md-0">
                                    <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/disney-logo.svg" alt="disney" width="113" height="47">
                                </div>
                                <div class="col-md-3 col-4 order-1 mb-3 mb-md-0">
                                    <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/amazon-logo.svg" alt="amazon" width="130" height="39">
                                </div>
                                <div class="col-md-2 col-3 text-md-center text-end order-md-2 order-3 ps-5 pe-0 pe-md-3 ps-md-0">
                                    <img loading="lazy" class="img-fluid ps-2 ps-md-0" src="<?php echo URLROOT; ?>/images/starbucks-logo.svg" alt="starbucks" width="66" height="66">
                                </div>
                                <div class="col-md-3 col-4 order-md-3 order-2 mb-3 mb-md-0">
                                    <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/autonation-logo.svg" alt="autonation" width="168" height="36">
                                </div>
                                <div class="col-md-2 col-3 px-4 px-md-0 ps-lg-3 order-4 text-md-start text-end">
                                    <img loading="lazy" class="img-fluid px-2 px-md-0" src="<?php echo URLROOT; ?>/images/ups-logo.svg" alt="ups" width="68" height="77">
                                </div>
                                <div class="col-md-3 col-5 pe-4 pe-md-0 order-5 ps-0 ps-md-3">
                                    <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/walmart-logo.svg" alt="walmart" width="169" height="43">
                                </div>
                                <div class="col-10 mx-auto mx-md-0 col-md-6 order-last">
                                    <div class="row mt-3 mt-md-0">
                                        <div class="col-6 text-center text-md-start">
                                            <img loading="lazy" class="img-fluid mt-2" src="<?php echo URLROOT; ?>/images/honeywell-logo.svg" alt="honeywell" width="152" height="34">
                                        </div>
                                        <div class="col-6 text-center text-md-start">
                                            <img loading="lazy" class="img-fluid" src="<?php echo URLROOT; ?>/images/marriott-logo.svg" alt="marriott" width="149" height="35">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
  
</body>


</html>


<?php require APPROOT . '/views/inc/footer.php'; ?>
