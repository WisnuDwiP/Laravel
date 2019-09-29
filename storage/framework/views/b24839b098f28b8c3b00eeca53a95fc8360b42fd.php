<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo e(asset('front')); ?>/img/favicon.png" type="image/png">
    <title>Faskes Bekasi Utara  </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('front')); ?>/css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:medical@example.com"><i class="ti-email"></i>muliaindra39@gmail.com</a>
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="https://www.facebook.com"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="https://www.linkedin.com"><i class="ti-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="ti-instagram"></i></a></li>
                    </ul>	
                </div>
            </div>	
        </div>	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" ><img src="<?php echo e(asset('front')); ?>/img/logo2.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/welcome')); ?>">Beranda</a></li>     
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fasilitas Kesehatan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('klinikFrontend')); ?>">Klinik</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('puskesmasFrontend')); ?>">Puskesmas</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contactFrontend')); ?>">Kontak</a></li>   
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    
    <!--================Home Banner Area =================-->

   
    <!--================ Feature section end =================-->  

    <!--================ Service section start =================-->  

        
    <!--================ Service section end =================-->      


    <!--================About  Area =================-->
    
    <!--================About Area End =================-->

    <!--================ Team section start =================-->  

    <!--================ Team section end =================-->  


    <!--================ appointment Area Starts =================-->
    
    <!--================ appointment Area End =================-->


    <!-- ================ testimonial section start ================= -->      
    
    <!-- ================ testimonial section end ================= -->    

    <!-- ================ Hotline Area Starts ================= -->  
    <!-- ================ Hotline Area End ================= -->  




    <!--================ Start Blog Area =================-->
    <section class="blog-area area-padding">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Klinik<br>
                    </h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p></p>
                </div>
            </div>


            <div class="row">
            <?php
                $informasis = App\Klinik::where('jenis', 'klinik')->get();
            ?>
            <?php $__currentLoopData = $informasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4 col-md-4">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="<?php echo e(asset('puskesmas/'.$informasi->foto)); ?>" style="width: 300px; height: 250px" alt="foto">
                        </div>
                        <div class="short_details">                            
                            <a   href="<?php echo e(url('frontend/show/'.$informasi->id)); ?>" class="d-block">
                                <h4 ><?php echo e($informasi->nama); ?></h4>
                            </a>
                        </div>
                    </div>
                </div>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->

    <!--================ Start Brands Area =================-->
    
    <!--================ End Brands Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                
            
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://deinjer.web.id/" target="_blank">Deinjer</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo e(asset('front')); ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/popper.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/stellar.js"></script>
<script src="<?php echo e(asset('front')); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/waypoints.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/mail-script.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/contact.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/jquery.form.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/mail-script.js"></script>
<script src="<?php echo e(asset('front')); ?>/js/theme.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\pi-baru\resources\views/frontend/klinik.blade.php ENDPATH**/ ?>