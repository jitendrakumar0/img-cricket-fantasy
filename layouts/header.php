<?php include 'preloader.php' ?>

<div class=" header w-100 position-absolute zi-10 bg-theme3">
    <div class="container-fluid px-0 container px-md">
        <nav class="navbar navbar-expand-lg py-lg-auto">
            <div class="container-fluid px-0">
                <a class="navbar-brand" href="<?php echo f_path ?>#hero">
                    <img src="<?php echo f_path ?>assets/img/logos/logo-white.png" alt="">
                </a>
                <div class="mobileMenu d-flex gap-2">
                    <button type="btn" class="btn btn-theme1 text-white fs-14 fw-600 px-3 py-1 shadow-none rounded-pill d-block d-lg-none"><i class="imgd img-arrow-to-bottom d-block d-sm-none"></i><span class="d-none d-sm-block">Download Now</span></button>
                    <a class="btn navbar-toggler text-white shadow-none px-0 w-25px" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                        <span class=" mt-1">
                            <span class="w-24px h-3px my-1 rounded-pill ms-auto bg-theme1 d-block"></span>
                            <span class="w-18px h-3px my-1 rounded-pill ms-auto bg-theme1 d-block"></span>
                            <span class="w-24px h-3px my-1 rounded-pill ms-auto bg-theme1 d-block"></span>
                        </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse  gap-3" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0  gap-3">
                        <li class="nav-item">
                            <a class="nav-link text-white fs-14 fw-bold text-uppercase active" aria-current="page" href="<?php echo f_path ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-14 fw-bold text-uppercase" href="<?php echo f_path ?>about-us/">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fs-14 fw-bold text-uppercase" href="<?php echo f_path ?>how-play/">How to Play</a>
                        </li>
                    </ul>
                    <button type="btn" class="btn btn-theme1 text-white fs-15 fw-600 px-4 shadow-none rounded-pill d-none d-lg-block">Download Now</button>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="offcanvas offcanvas-start bg-white responsiveMenu" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
    <div class="offcanvas-header border-bottom border-gray bg-theme3">
        <a class="offcanvas-title w-40" id="offcanvasWithBackdropLabel">
            <img class="w-100" src="<?php echo f_path ?>assets/img/logos/logo-white.png" alt="">
        </a>
        <a type="button" class="btn closeBtn shadow-none text-reset d-flex" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="imgl img-times text-white fs-24"></i>
        </a>
    </div>
    <div class="offcanvas-body">
        <div class="">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark fs-14 fw-bold text-uppercase active" aria-current="page" href="<?php echo f_path ?>#hero"><i class="imgl img-angle-double-right"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fs-14 fw-bold text-uppercase" href="<?php echo f_path ?>about-us/"><i class="imgl img-angle-double-right"></i> About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fs-14 fw-bold text-uppercase" href="<?php echo f_path ?>how-play/"><i class="imgl img-angle-double-right"></i> How to Play</a>
                </li>
            </ul>
        </div>
    </div>
</div>