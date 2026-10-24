<?php $__env->startSection('content'); ?>
    <!-- Menu Trigger -->

    <div class="menu_trigger_container ml-auto">
        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
            <div class="menu_burger">
                <div class="menu_trigger_text">menu</div>
                <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>

   

    <!-- Menu -->

    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page_menu_content">

                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input"
                                    placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav">
                            <li class="page_menu_item has-children">
                                <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item">
                                <a href="#">Home<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a>
                            </li>
                        </ul>

                        <div class="menu_contact">
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon"><img src="<?php echo e(asset('images/phone_white.png')); ?>" alt="">
                                </div>+38 068 005 3570
                            </div>
                            <div class="menu_contact_item">
                                <div class="menu_contact_icon"><img src="<?php echo e(asset('images/mail_white.png')); ?>" alt="">
                                </div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </header>

    <!-- Banner -->

    <div class="banner">
        <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="<?php echo e(asset('images/banner_product.png')); ?>" alt=""></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text"><?php echo e(__('language.NEW ERA OF SMARTPHONES')); ?></h1>
                        <div class="banner_price"><span>$530</span>$460</div>
                        <div class="banner_product_name">Apple Iphone 6s</div>
                        <div class="button banner_button"><a href="#"><?php echo e(__('language.Shop Now')); ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Characteristics -->

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="<?php echo e(asset('images/char_1.png')); ?>" alt=""></div>
                        <div class="char_content">
                            <div class="char_title"><?php echo e(__('language.Free Delivery')); ?></div>
                            <div class="char_subtitle"><?php echo e(__('language.from $50')); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="<?php echo e(asset('images/char_2.png')); ?>" alt=""></div>
                        <div class="char_content">
                            <div class="char_title"><?php echo e(__('language.Free Delivery')); ?></div>
                            <div class="char_subtitle"><?php echo e(__('language.from $50')); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="<?php echo e(asset('images/char_3.png')); ?>" alt=""></div>
                        <div class="char_content">
                            <div class="char_title"><?php echo e(__('language.Free Delivery')); ?></div>
                            <div class="char_subtitle"><?php echo e(__('language.from $50')); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="<?php echo e(asset('images/char_4.png')); ?>" alt=""></div>
                        <div class="char_content">
                            <div class="char_title"><?php echo e(__('language.Free Delivery')); ?></div>
                            <div class="char_subtitle"><?php echo e(__('language.from $50')); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title"><?php echo e(__('language.Popular Categories')); ?></div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i
                                    class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i
                                    class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div
                                    class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo e(asset('images/popular_1.png')); ?>"
                                            alt=""></div>
                                    <div class="popular_category_text"><?php echo e(__('language.Smartphones & Tablets')); ?></div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div
                                    class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo e(asset('images/popular_2.png')); ?>"
                                            alt=""></div>
                                    <div class="popular_category_text"><?php echo e(__('language.Computers & Laptops')); ?></div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div
                                    class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo e(asset('images/popular_3.png')); ?>"
                                            alt=""></div>
                                    <div class="popular_category_text"><?php echo e(__('language.Gadgets')); ?></div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div
                                    class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo e(asset('images/popular_4.png')); ?>"
                                            alt=""></div>
                                    <div class="popular_category_text"><?php echo e(__('language.Video Games & Consoles')); ?></div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div
                                    class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="<?php echo e(asset('images/popular_5.png')); ?>"
                                            alt=""></div>
                                    <div class="popular_category_text"><?php echo e(__('language.Accessories')); ?></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category"><?php echo e(__('language.Laptops')); ?></div>
                                        <div class="banner_2_title"><?php echo e(__('language.MacBook Air 13')); ?></div>
                                        <div class="banner_2_text"><?php echo e(__('language.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.')); ?></div>
                                        <div class="rating_r rating_r_4 banner_2_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#"><?php echo e(__('language.Explore')); ?></a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="<?php echo e(asset('images/banner_2_product.png')); ?>"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category"><?php echo e(__('language.Laptops')); ?></div>
                                        <div class="banner_2_title"><?php echo e(__('language.MacBook Air 13')); ?></div>
                                        <div class="banner_2_text"><?php echo e(__('language.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.')); ?></div>
                                        <div class="rating_r rating_r_4 banner_2_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#"><?php echo e(__('language.Explore')); ?></a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="<?php echo e(asset('images/banner_2_product.png')); ?>"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category"><?php echo e(__('language.Laptops')); ?></div>
                                        <div class="banner_2_title"><?php echo e(__('language.MacBook Air 13')); ?></div>
                                        <div class="banner_2_text"><?php echo e(__('language.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.')); ?></div>
                                        <div class="rating_r rating_r_4 banner_2_rating">
                                            <i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#"><?php echo e(__('language.Explore')); ?></a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="<?php echo e(asset('images/banner_2_product.png')); ?>"
                                                alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
   

   

   

    
    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_1.jpg')); ?>" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_2.jpg')); ?>" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_3.jpg')); ?>" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_4.jpg')); ?>" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_5.jpg')); ?>" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_6.jpg')); ?>" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_7.jpg')); ?>" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="<?php echo e(asset('images/brands_8.jpg')); ?>" alt=""></div>
                            </div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="<?php echo e(asset('images/send.png')); ?>" alt=""></div>
                            <div class="newsletter_title"><?php echo e(__('language.Sign up for Newsletter')); ?></div>
                            <div class="newsletter_text">
                                <p><?php echo e(__('language....and receive %20 coupon for first shopping.')); ?></p>
                            </div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="#" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required"
                                    placeholder="<?php echo e(__('language.Enter your email address')); ?>">
                                <button class="newsletter_button"><?php echo e(__('language.Subscribe')); ?></button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#"><?php echo e(__('language.UNSUBSCRIBE')); ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><?php echo e(__('language.OneTech')); ?></a></div>
                        </div>
                        <div class="footer_title"><?php echo e(__('language.Got Question? Call Us 24/7')); ?></div>
                        <div class="footer_phone">+38 068 005 3570</div>
                        <div class="footer_contact_text">
                            <p><?php echo e(__('language.17 Princess Road, London, Grester London NW18JR, UK')); ?></p>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title"><?php echo e(__('language.Find it Fast')); ?></div>
                        <ul class="footer_list">
                            <li><a href="#"><?php echo e(__('language.Computers & Laptops')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Cameras & Photos')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Hardware')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Smartphones & Tablets')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.TV & Audio')); ?></a></li>
                        </ul>
                        <div class="footer_subtitle"><?php echo e(__('language.Gadgets')); ?></div>
                        <ul class="footer_list">
                            <li><a href="#"><?php echo e(__('language.Car Electronics')); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#"><?php echo e(__('language.Video Games & Consoles')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Accessories')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Cameras & Photos')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Hardware')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Computers & Laptops')); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title"><?php echo e(__('language.Customer Care')); ?></div>
                        <ul class="footer_list">
                            <li><a href="#"><?php echo e(__('language.My Account')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Order Tracking')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Wish List')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Customer Services')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Returns / Exchange')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.FAQs')); ?></a></li>
                            <li><a href="#"><?php echo e(__('language.Product Support')); ?></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div
                        class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <?php echo e(__('language.Copyright')); ?> &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> <?php echo e(__('language.All rights reserved | This template is made with')); ?> <i
                                class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="<?php echo e(asset('images/logos_1.png')); ?>" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo e(asset('images/logos_2.png')); ?>" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo e(asset('images/logos_3.png')); ?>" alt=""></a></li>
                                <li><a href="#"><img src="<?php echo e(asset('images/logos_4.png')); ?>" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laravel\zoom\resources\views/welcome.blade.php ENDPATH**/ ?>