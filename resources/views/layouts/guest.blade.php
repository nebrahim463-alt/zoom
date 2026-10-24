<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plugins/slick-1.8.0/slick.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('styles/responsive.css') }}">
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
                                <img src="{{ asset('images/phone.png') }}" alt="">
                            </div>

                            +38 068 005 3570

                        </div>


                        <!-- Email -->
                        <div class="top_bar_contact_item">

                            <div class="top_bar_icon">
                                <img src="{{ asset('images/mail.png') }}" alt="">
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
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach


                                   

                                </ul>

                            </div>


                            <!-- User -->
                            <div class="top_bar_user">

                                <ul>

                                    @if (Route::has('login'))

                                        @auth

                                            <li>

                                                <form
                                                    action="{{ route('logout') }}"
                                                    method="POST"
                                                    enctype="multipart/form-data"
                                                >

                                                    @csrf

                                                    <input
                                                        type="submit"
                                                        value="{{ __('language.Logout') }}
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

                                        @else

                                            <li>

                                                <a
                                                    href="{{ route('login') }}"
                                                    style="display: inline-block; padding: 0 5px;"
                                                    class="scroll-to-section"
                                                >
                                                    {{__('language.Log in')}}
                                                </a>


                                                @if (Route::has('register'))

                                                    <a
                                                        href="{{ route('register') }}"
                                                        style="display: inline-block; padding: 0 5px;"
                                                        class="scroll-to-section"
                                                    >
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
        <!-- ================= END TOP BAR ================= -->


        <!-- ================= HEADER MAIN ================= -->
        <div class="header_main">

            <div class="container">

                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">

                        <div class="logo_container">

                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    {{__('language.OneTech') }}

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
										<input type="search" required="required" class="header_search_input" placeholder="{{ __('language.Search for products...') }}">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">{{ __('language.All Categories') }}
</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">{{__('language.All Categories')}}</a></li>
													 @foreach ($categories as $category)
                                                            <li><a class="clc"
                                                                    href="#">{{ $category->title }}</a></li>
                                                        @endforeach
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
                                        <a href="{{ url('/') }}">
                                            {{ __('language.Home') }}

                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                    </li>


                                    <!-- Pages -->
                                    <li class="hassubs">

                                        <a href="#">
                                            {{ __('language.Pages') }}

                                            <i class="fas fa-chevron-down"></i>
                                        </a>

                                        <ul>

                                            <li>
                                                <a href="{{ route('shop') }}">
                                                    {{__('language.Shop')}}
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </li>


                                           


                                            <li>
                                                <a href="{{ url('/cart') }}">
                                                    {{__('language.Cart')}}
                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="{{ url('/contact') }}">
                                                    {{ __('language.Contact') }}

                                                    <i class="fas fa-chevron-down"></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </li>


                                    <!-- Contact -->
                                    <li>
                                        <a href="{{ url('/contact') }}">
                                            {{ __('language.Contact') }}

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

        @yield('content')

    </main>

    <!-- ================= END PAGE CONTENT ================= -->


</div>
<!-- ================= END SUPER CONTAINER ================= -->


<!-- ================= JAVASCRIPT ================= -->

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>

<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>

<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>

<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>

<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>

<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>

<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>

<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>

<script src="{{ asset('plugins/slick-1.8.0/slick.js') }}"></script>

<script src="{{ asset('plugins/easing/easing.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>

<!-- ================= END JAVASCRIPT ================= -->


</body>
</html>