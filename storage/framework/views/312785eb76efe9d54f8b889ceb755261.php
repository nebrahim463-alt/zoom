<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('styles/bootstrap4/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('plugins/slick-1.8.0/slick.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('styles/main_styles.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(asset('styles/responsive.css')); ?>">
</head>


<body>

<div class="super_container">

    <!-- ================= HEADER ================= -->
    <header class="header">

        <!-- ================= TOP BAR ================= -->
        <div class="top_bar">

            <div class="container">

                <div class="row">

                    <div class="col d-flex flex-row">

                        <!-- Phone -->
                        <div class="top_bar_contact_item">

                            <div class="top_bar_icon">
                                <img src="<?php echo e(asset('images/phone.png')); ?>" alt="">
                            </div>

                            +38 068 005 3570

                        </div>


                        <!-- Email -->
                        <div class="top_bar_contact_item">

                            <div class="top_bar_icon">
                                <img src="<?php echo e(asset('images/mail.png')); ?>" alt="">
                            </div>

                            <a href="mailto:fastsales@gmail.com">
                                fastsales@gmail.com
                            </a>

                        </div>


                        <!-- Top Bar Right -->
                        <div class="top_bar_content ml-auto">

                            <!-- Language / Currency -->
                            <div class="top_bar_menu">

                                <ul class="standard_dropdown top_bar_dropdown">

                                    <!-- Language -->
                                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                            <?php echo e($properties['native']); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                   

                                </ul>

                            </div>


                            <!-- User -->
                            <div class="top_bar_user">

                                <ul>

                                    <?php if(Route::has('login')): ?>

                                        <?php if(auth()->guard()->check()): ?>

                                            <li>

                                                <form
                                                    action="<?php echo e(route('logout')); ?>"
                                                    method="POST"
                                                    enctype="multipart/form-data"
                                                >

                                                    <?php echo csrf_field(); ?>

                                                    <input
                                                        type="submit"
                                                        value="<?php echo e(__('language.Logout')); ?>

"
                                                        style="
                                                            background: none;
                                                            border: none;
                                                            padding: 0;
                                                            font: inherit;
                                                            color: inherit;
                                                            cursor: pointer;
                                                        "
                                                    >

                                                </form>

                                            </li>

                                        <?php else: ?>

                                            <li>

                                                <a
                                                    href="<?php echo e(route('login')); ?>"
                                                    style="display: inline-block; padding: 0 5px;"
                                                    class="scroll-to-section"
                                                >
                                                    <?php echo e(__('language.Log in')); ?>

                                                </a>


                                                <?php if(Route::has('register')): ?>

                                                    <a
                                                        href="<?php echo e(route('register')); ?>"
                                                        style="display: inline-block; padding: 0 5px;"
                                                        class="scroll-to-section"
                                                    >
                                                        <?php echo e(__('language.Register')); ?>

                                                    </a>

                                                <?php endif; ?>

                                            </li>

                                        <?php endif; ?>

                                    <?php endif; ?>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- ================= END TOP BAR ================= -->


        <!-- ================= HEADER MAIN ================= -->
        <div class="header_main">

            <div class="container">

                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">

                        <div class="logo_container">

                            <div class="logo">
                                <a href="<?php echo e(url('/')); ?>">
                                    <?php echo e(__('language.OneTech')); ?>


                                </a>
                            </div>

                        </div>

                    </div>


                    <!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="<?php echo e(__('language.Search for products...')); ?>">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc"><?php echo e(__('language.All Categories')); ?>

</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#"><?php echo e(__('language.All Categories')); ?></a></li>
													 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a class="clc"
                                                                    href="#"><?php echo e($category->title); ?></a></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>


                    
                </div>

            </div>

        </div>
        <!-- ================= END HEADER MAIN ================= -->


        <!-- ================= MAIN NAVIGATION ================= -->
        <nav class="main_nav">

            <div class="container">

                <div class="row">

                    <div class="col">

                        <div class="main_nav_content d-flex flex-row">


                            

                            <!-- ================= MAIN NAV MENU ================= -->
                            <div class="main_nav_menu ml-auto">

                                <ul class="standard_dropdown main_nav_dropdown">

                                    <!-- Home -->
                                    <li>
                                        <a href="<?php echo e(url('/')); ?>">
                                            <?php echo e(__('language.Home')); ?>


                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                    </li>


                                    <!-- Pages -->
                                    <li class="hassubs">

                                        <a href="#">
                                            <?php echo e(__('language.Pages')); ?>


                                            <i class="fas fa-chevron-down"></i>
                                        </a>

                                        <ul>

                                            <li>
                                                <a href="<?php echo e(route('shop')); ?>">
                                                    <?php echo e(__('language.Shop')); ?>

                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </li>


                                           


                                            <li>
                                                <a href="<?php echo e(url('/cart')); ?>">
                                                    <?php echo e(__('language.Cart')); ?>

                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="<?php echo e(url('/contact')); ?>">
                                                    <?php echo e(__('language.Contact')); ?>


                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </li>


                                    <!-- Contact -->
                                    <li>
                                        <a href="<?php echo e(url('/contact')); ?>">
                                            <?php echo e(__('language.Contact')); ?>


                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                            <!-- ================= END MAIN NAV MENU ================= -->


                        </div>

                    </div>

                </div>

            </div>

        </nav>
        <!-- ================= END MAIN NAVIGATION ================= -->

    </header>
    <!-- ================= END HEADER ================= -->


    <!-- ================= PAGE CONTENT ================= -->

    <main>

        <?php echo $__env->yieldContent('content'); ?>

    </main>

    <!-- ================= END PAGE CONTENT ================= -->


</div>
<!-- ================= END SUPER CONTAINER ================= -->


<!-- ================= JAVASCRIPT ================= -->

<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('styles/bootstrap4/popper.js')); ?>"></script>

<script src="<?php echo e(asset('styles/bootstrap4/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/greensock/TweenMax.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/greensock/TimelineMax.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/scrollmagic/ScrollMagic.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/greensock/animation.gsap.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/greensock/ScrollToPlugin.min.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/slick-1.8.0/slick.js')); ?>"></script>

<script src="<?php echo e(asset('plugins/easing/easing.js')); ?>"></script>

<script src="<?php echo e(asset('js/custom.js')); ?>"></script>

<!-- ================= END JAVASCRIPT ================= -->


</body>
</html><?php /**PATH D:\laravel\zoom\resources\views/layouts/guest.blade.php ENDPATH**/ ?>