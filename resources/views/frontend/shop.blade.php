<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/shop_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/shop_responsive.css') }}">

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="{{ asset('images/phone.png') }}" alt="">
                                </div>+38 068 005 3570
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="{{ asset('images/mail.png') }}}" alt="">
                                </div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <!-- Language / Currency -->
                                <div class="top_bar_menu">

                                    <ul class="standard_dropdown top_bar_dropdown">

                                        <!-- Language -->
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach




                                    </ul>

                                </div>
                                <div class="top_bar_user">

                                    <ul>

                                        @if (Route::has('login'))

                                            @auth

                                                <li>

                                                    <form action="{{ route('logout') }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf

                                                        <input type="submit" value="{{ __('language.Logout') }}"
                                                            style="
                                                            background: none;
                                                            border: none;
                                                            padding: 0;
                                                            font: inherit;
                                                            color: inherit;
                                                            cursor: pointer;
                                                        ">

                                                    </form>

                                                </li>
                                            @else
                                                <li>

                                                    <a href="{{ route('login') }}"
                                                        style="display: inline-block; padding: 0 5px;"
                                                        class="scroll-to-section">
                                                        {{__('language.Log in')}}
                                                    </a>


                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}"
                                                            style="display: inline-block; padding: 0 5px;"
                                                            class="scroll-to-section">
                                                            {{__('language.Register')}}
                                                        </a>
                                                    @endif

                                                </li>

                                            @endauth

                                        @endif

                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="#"> {{ __('language.OneTech') }}
                                    </a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input"
                                                placeholder="{{ __('language.Search for products...') }}">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span
                                                        class="custom_dropdown_placeholder clc">{{ __('language.All Categories') }}</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc"
                                                                href="#">{{ __('language.All Categories') }}</a>
                                                        </li>
                                                        @foreach ($category as $category)
                                                            <li><a class="clc"
                                                                    href="#">{{ $category->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300"
                                                value="Submit"><img src="images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">





                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href={{ route('home') }}>{{ __('language.Home') }}<i
                                                    class="fas fa-chevron-down"></i></a>
                                        </li>

                                        <li class="hassubs">
                                            <a href="#">{{ __('language.Pages') }}<i
                                                    class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="{{ asset('shop') }}">{{ __('language.Shop') }}<i
                                                            class="fas fa-chevron-down"></i></a></li>

                                                <li><a href="{{ asset('cart') }}">{{ __('language.Cart') }}<i
                                                            class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="{{ asset('contact') }}">{{ __('language.Contact') }}<i
                                                            class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ asset('contact') }}">{{ __('language.Contact') }}<i
                                                    class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

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
                                            <li><a href="#">GBP British Pound<i
                                                        class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="#">{{ __('language.Home') }}<i
                                                class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
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
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="{{ asset('blog.html') }}">blog<i
                                                class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="{{ asset('contact') }}">contact<i
                                                class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img
                                                src="{{ asset('images/phone_white.png') }}}" alt=""></div>+38
                                        068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img
                                                src="{{ asset('images/mail_white.png') }}}" alt=""></div><a
                                            href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                data-image-src="{{ asset('images/shop_background.jpg') }}}"></div>
            <div class="home_overlay"></div>
            <div class="home_content d-flex flex-column align-items-center justify-content-center">
                <h2 class="home_title">{{ __('language.Smartphones & Tablets') }}</h2>
            </div>
        </div>

        <!-- Shop -->

        <div class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                        <!-- Shop Sidebar -->
                        <div class="shop_sidebar">

                            <div class="sidebar_section filter_by_section">
                                <div class="sidebar_title">{{ __('language.Filter By') }}</div>
                                <div class="sidebar_subtitle">{{ __('language.Price') }}</div>
                                <div class="filter_price">
                                    <div id="slider-range" class="slider_range"></div>
                                    <p>{{ __('language.Range') }}: </p>
                                    <p><input type="text" id="amount" class="amount" readonly
                                            style="border:0; font-weight:bold;"></p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-9">

                        <!-- Shop Content -->

                        <div class="shop_content">
                            <div class="shop_bar clearfix">
                                <div class="shop_product_count"><span>{{ $product->count() }}</span>
                                    {{ __('language.products found') }}
                                </div>
                                <div class="shop_sorting">
                                    <span>{{ __('language.Sort by:') }}</span>
                                    <ul>
                                        <li>
                                            <span class="sorting_text">{{ __('language.highest rated') }}<i
                                                    class="fas fa-chevron-down"></span></i>
                                            <ul>
                                                <li class="shop_sorting_button"
                                                    data-isotope-option='{ "sortBy": "original-order" }'>
                                                    {{ __('language.highest rated') }}
                                                </li>
                                                <li class="shop_sorting_button"
                                                    data-isotope-option='{ "sortBy": "name" }'>
                                                    {{ __('language.name') }}</li>
                                                <li
                                                    class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>
                                                    {{ __('language.price') }}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="product_grid">
                                <div class="product_grid_border"></div>


                                @foreach ($product as $item)
                                    <!-- Product Item -->
                                    <a href="{{ route('product.details', $item->id) }}">
                                        <div class="product_item is_new">
                                            <div class="product_border"></div>
                                            <div
                                                class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{ url('img/product/' . $item->cate_image) }}"
                                                    alt="{{ $item->title }}">
                                            </div>
                                            <div class="product_content">
                                                <div class="product_price">${{ $item->price }}</div>
                                                <div class="product_name">
                                                    <div><a href="#" tabindex="0">{{ $item->title }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product_fav"><i class="fas fa-heart"></i></div>
                                            <ul class="product_marks">
                                                <li class="product_mark product_discount">-25%</li>
                                                <li class="product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </a>
                                @endforeach


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
                                            src="{{ asset('images/brands_1.jpg') }}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{ asset('images/brands_2.jpg') }}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{ asset('images/brands_3.jpg') }}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{ asset('images/brands_4.jpg') }}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{ asset('images/brands_5.jpg') }}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{ asset('images/brands_6.jpg') }}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{ asset('images/brands_7.jpg') }}" alt=""></div>
                                </div>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img
                                            src="{{ asset('images/brands_8.jpg') }}" alt=""></div>
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
                                <div class="newsletter_icon"><img src="{{ asset('images/send.png') }}"
                                        alt=""></div>
                                <div class="newsletter_title">{{ __('language.Sign up for Newsletter') }}</div>
                                <div class="newsletter_text">
                                    <p>{{ __('language....and receive %20 coupon for first shopping.') }}</p>
                                </div>
                            </div>
                            <div class="newsletter_content clearfix">
                                <form action="#" class="newsletter_form">
                                    <input type="email" class="newsletter_input" required="required"
                                        placeholder="{{ __('language.Enter your email address') }}">
                                    <button class="newsletter_button">{{ __('language.Subscribe') }}</button>
                                </form>
                                <div class="newsletter_unsubscribe_link"><a
                                        href="#">{{ __('language.UNSUBSCRIBE') }}</a></div>
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
                                <div class="logo"><a href="#">{{ __('language.OneTech') }}</a></div>
                            </div>
                            <div class="footer_title">{{ __('language.Got Question? Call Us 24/7') }}</div>
                            <div class="footer_phone">+38 068 005 3570</div>
                            <div class="footer_contact_text">
                                <p>{{ __('language.17 Princess Road, London, Grester London NW18JR, UK') }}</p>
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
                            <div class="footer_title">{{ __('language.Find it Fast') }}</div>
                            <ul class="footer_list">
                                <li><a href="#">{{ __('language.Computers & Laptops') }}</a></li>
                                <li><a href="#">{{ __('language.Cameras & Photos') }}</a></li>
                                <li><a href="#">{{ __('language.Hardware') }}</a></li>
                                <li><a href="#">{{ __('language.Smartphones & Tablets') }}</a></li>
                                <li><a href="#">{{ __('language.TV & Audio') }}</a></li>
                            </ul>
                            <div class="footer_subtitle">{{ __('language.Gadgets') }}</div>
                            <ul class="footer_list">
                                <li><a href="#">{{ __('language.Car Electronics') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <ul class="footer_list footer_list_2">
                                <li><a href="#">{{ __('language.Video Games & Consoles') }}</a></li>
                                <li><a href="#">{{ __('language.Accessories') }}</a></li>
                                <li><a href="#">{{ __('language.Cameras & Photos') }}</a></li>
                                <li><a href="#">{{ __('language.Hardware') }}</a></li>
                                <li><a href="#">{{ __('language.Computers & Laptops') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">{{ __('language.Customer Care') }}</div>
                            <ul class="footer_list">
                                <li><a href="#">{{ __('language.My Account') }}</a></li>
                                <li><a href="#">{{ __('language.Order Tracking') }}</a></li>
                                <li><a href="#">{{ __('language.Wish List') }}</a></li>
                                <li><a href="#">{{ __('language.Customer Services') }}</a></li>
                                <li><a href="#">{{ __('language.Returns / Exchange') }}</a></li>
                                <li><a href="#">{{ __('language.FAQs') }}</a></li>
                                <li><a href="#">{{ __('language.Product Support') }}</a></li>
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
                                {{ __('language.Copyright') }} &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                {{ __('language.All rights reserved | This template is made with') }} <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="{{ asset('images/logos_1.png') }}"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('images/logos_2.png') }}"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('images/logos_3.png') }}"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('images/logos_4.png') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('js/shop_custom.js') }}"></script>
</body>

</html>
