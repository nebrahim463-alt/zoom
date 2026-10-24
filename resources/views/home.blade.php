<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">

    <style>
        /* إخفاء القائمة الجانبية وجعل الصفحة تأخذ عرض الشاشة بالكامل */
        body {
            background-color: #e9ecef;
        }
        .sl-mainpanel {
            margin-left: 0 !important;
            width: 100% !important;
            padding: 0;
        }
        .sl-header {
            left: 0 !important;
            width: 100% !important;
        }
        .sl-pagebody {
            margin-top: 30px;
        }
        /* تنسيق إضافي لعناصر النافبار الجديدة */
        .navbar-custom-links a {
            color: #343a40;
            margin-left: 15px;
            font-weight: 500;
        }
        .navbar-custom-links a:hover {
            color: #17A2B8;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- ########## START: HEADER ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="sw-logo"><a href={{route('welcome')}}><span></span>Dashboard<span></span></a></div>
        </div><!-- sl-header-left -->

        <div class="sl-header-right">
            <nav class="nav navbar-custom-links d-flex align-items-center">
                
                <!-- Language Switcher -->
                <div class="dropdown mg-r-15">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="padding: 0;">
                        <i class="fa fa-globe"></i> {{ __('language.Language') ?? 'Language' }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-120">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="{{ url('en/home') }}"><i class="fa fa-flag"></i> English</a></li>
                            <li><a href="{{ url('ar/home') }}"><i class="fa fa-flag"></i> العربية</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Authentication Links -->
                @guest
                    <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>
                    <a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a>
                @else
                    <div class="dropdown">
                        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                            <span class="logged-name">{{ Auth::user()->name ?? 'Nada Ibrahim' }}</span>
                            <img src="{{ asset('backend/img/img3.jpg') }}" class="wd-32 rounded-circle" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-header wd-200">
                            <ul class="list-unstyled user-profile-nav">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endguest

            </nav>
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEADER ########## -->

    <div class="sl-mainpanel">
        
        

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>{{ __('language.Dashboard') }}</h5>
            </div><!-- sl-page-title -->

            <!-- ==================== USERS ==================== -->
            <div class="card pd-20 pd-sm-40 mg-b-30">
                <h6 class="card-body-title">
                    {{ __('language.Users') }}
                    <span class="badge badge-primary">{{ $user->count() }}</span>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">{{ __('language.Users') }}</p>

                @if (session('message2'))
                    <h5 class="alert alert-success text-center">{{ session('message2') }}</h5>
                @endif

                <div class="d-flex justify-content-end mg-b-20">
                    <a href="{{ route('user.create') }}" class="btn btn-success">
                        {{ __('language.Create New Account') }}
                    </a>
                </div>

                <div class="table-wrapper">
                    <table id="datatable-users" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">{{ __('language.ID') }}</th>
                                <th class="wd-20p">{{ __('language.Name') }}</th>
                                <th class="wd-25p">{{ __('language.Email') }}</th>
                                <th class="wd-20p">{{ __('language.Operations') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('user.delete', $item->id) }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- card -->


            <!-- ==================== CATEGORIES ==================== -->
            <div class="card pd-20 pd-sm-40 mg-b-30">
                <h6 class="card-body-title">
                    {{ __('language.Category') }}
                    <span class="badge badge-primary">{{ $categories->count() }}</span>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">{{ __('language.Category') }}</p>

                @if (session('message'))
                    <h5 class="alert alert-success text-center">{{ session('message') }}</h5>
                @endif

                <div class="d-flex justify-content-end mg-b-20">
                    <a href="{{ route('categories.create') }}" class="btn btn-success">
                        {{ __('language.Create New Category') }}
                    </a>
                </div>

                <div class="table-wrapper">
                    <table id="datatable-categories" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">{{ __('language.Image') }}</th>
                                <th class="wd-10p">{{ __('language.ID') }}</th>
                                <th class="wd-20p">{{ __('language.Title') }}</th>
                                <th class="wd-30p">{{ __('language.Description') }}</th>
                                <th class="wd-15p">{{ __('language.Operations') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>
                                        <img src="{{ asset('backend/img/category/' . $item->cat_image) }}" style="width:60px; height:60px; object-fit:cover;">
                                    </td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('categories.show', $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('categories.delete', $item->id) }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- card -->


            <!-- ==================== PRODUCTS ==================== -->
            <div class="card pd-20 pd-sm-40 mg-b-30">
                <h6 class="card-body-title">
                    {{ __('language.Products') }}
                    <span class="badge badge-primary">{{ $product->count() }}</span>
                </h6>
                <p class="mg-b-20 mg-sm-b-30">{{ __('language.Products') }}</p>

                @if (session('message3'))
                    <h5 class="alert alert-success text-center">{{ session('message3') }}</h5>
                @endif

                <div class="d-flex justify-content-end mg-b-20">
                    <a href="{{ route('product.create') }}" class="btn btn-success">
                        {{ __('language.Create New Product') }}
                    </a>
                </div>

                <div class="table-wrapper">
                    <table id="datatable-products" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">{{ __('language.Image') }}</th>
                                <th class="wd-10p">{{ __('language.ID') }}</th>
                                <th class="wd-20p">{{ __('language.Title') }}</th>
                                <th class="wd-30p">{{ __('language.Description') }}</th>
                                <th class="wd-15p">{{ __('language.Operations') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                                <tr>
                                    <td>
                                        <img src="{{ asset('img/product/' . $item->cate_image) }}" style="width:60px; height:60px; object-fit:cover;">
                                    </td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('product.show', $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="{{ route('product.delete', $item->id) }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- card -->

        </div><!-- sl-pagebody -->

        <footer class="sl-footer">
            <div class="footer-left">
              <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
              <div>Made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
              <span class="tx-uppercase mg-r-10">Share:</span>
              <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
              <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div><!-- sl-mainpanel -->

    <!-- vendor js -->
    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('backend/js/starlight.js') }}"></script>

    <script>
        // $(function(){
        //     'use strict';

        //     $('#datatable-users').DataTable({
        //         responsive: true,
        //         language: {
        //             searchPlaceholder: 'Search...',
        //             sSearch: '',
        //             lengthMenu: '_MENU_ items/page',
        //         }
        //     });

        //     $('#datatable-categories').DataTable({
        //         responsive: true,
        //         language: {
        //             searchPlaceholder: 'Search...',
        //             sSearch: '',
        //             lengthMenu: '_MENU_ items/page',
        //         }
        //     });

        //     $('#datatable-products').DataTable({
        //         responsive: true,
        //         language: {
        //             searchPlaceholder: 'Search...',
        //             sSearch: '',
        //             lengthMenu: '_MENU_ items/page',
        //         }
        //     });

        //     // Select2
        //     $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        // });
    </script>
</body>
</html>