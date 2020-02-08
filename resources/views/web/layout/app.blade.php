<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name' . $pageTitle , $configration->title .'-'. $pageTitle) }}</title>
        <meta charset="utf-8" />
        <meta name="description" content="Page description" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        @yield('meta')
        <link rel="shortcut icon" width="42" height="60" href="{{asset('web/assets/imgs/logo.ico')}}" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('web/assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('web/assets/css/bootstrap-rtl.min.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
        <link rel="stylesheet" href="{{asset('web/assets/css/rtl.css')}}" />
        <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}" />

        <!-- carousel -->
        <link rel="stylesheet" href="{{asset('web/assets/css/carousel.css')}}" />

        <!-- services -->
        <link rel="stylesheet" href="{{asset('web/assets/css/services-item.css')}}" />

        <!-- offer-row -->
        <link rel="stylesheet" href="{{asset('web/assets/css/offer-row.css')}}" />

        <!-- new-services -->
        <link rel="stylesheet" href="{{asset('web/assets/css/new-services.css')}}" />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('web/assets/assets/imgs/logo.png')}}" width="42" height="60" alt="" />
            </a>
            <form class="form-inline mr-auto icon-smallscreen">
                <ul class="navbar-nav" style="display: inline-block;">
                    <li class="nav-item form-nav">
                        <a class="nav-link" href="fav-items.html">
                            <i class="nav-link-icon fas fa-heart"></i>
                        </a>
                        <a class="nav-link" href="cart.html">
                            <i class=" cartHasNotification fas fa-circle"></i><i
                                class="nav-link-icon fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
                <input class=" form-control navbar-search-textbox" type="search" placeholder="بحث ... "
                    aria-label="Search" />
                <button class="btn navbar-search-btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}"><i class="nav-link-icon fas fa-home"></i>
                            <span class="navbar-link-span">الرئيسية</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dropDown-navLink dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="nav-link-icon fas fa-boxes"></i>
                            <span class="navbar-link-span">الخدمات <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu nav-link-dropdown" aria-labelledby="dropdownMenuLink">
                            @foreach ($servicesCategories as $serviceCategory)
                            <a class="dropdown-item" href="categoriesOfServices.html"><i
                                class="nav-link-icon fas {{$serviceCategory->icon}}"></i>{{$serviceCategory->name}}</a>
                            @endforeach
                           
                            {{-- <a class="dropdown-item" href="categoriesOfServices.html"><i
                                    class="nav-link-icon fas fa-print"></i>
                                الطباعة</a>
                            <a class="dropdown-item" href="categoriesOfServices.html"><i
                                    class="nav-link-icon fas fa-language"></i>
                                لترجمه</a>
                            <a class="dropdown-item" href="categoriesOfServices.html"><i
                                    class="nav-link-icon fas fa-camera"></i>
                                تصويرالمناسبات</a>
                            <a class="dropdown-item" href="categoriesOfServices.html"><i
                                    class="nav-link-icon fas fa-photo-video"></i>
                                الرسومالمتحركة</a> --}}
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('orders')}}"><i class="nav-link-icon fas fa-box-open"></i>
                            <span class="navbar-link-span">الطلبات</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('complaint')}}"><i
                                class="nav-link-icon fas fa-file-invoice"></i>
                            <span class="navbar-link-span">الشكاوي والمقترحات</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('contact')}}"><i class="nav-link-icon fas fa-headset"></i>
                            <span class="navbar-link-span">تواصل معنا</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item form-ul-item">
                        <form class="form-inline form-ul">
                            <input class=" form-control navbar-search-textbox form-ul-item-textbox" type="search"
                                placeholder="بحث ... " aria-label="Search" />
                            <button class="btn navbar-search-btn form-ul-item-srchBtn my-2 my-sm-0" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 icon-bigscreen">
                    <ul class="navbar-nav" style="display: inline-block;">
                        <li class="nav-item form-nav">
                            <a class="nav-link" href="fav-items.html">
                                <i class="nav-link-icon fas fa-heart"></i>
                            </a>
                            <a class="nav-link" href="cart.html">
                                <i class=" cartHasNotification fas fa-circle"></i><i
                                    class="nav-link-icon fas fa-shopping-cart"></i>
                            </a>
                        </li>
                    </ul>
                    <input class=" form-control navbar-search-textbox" type="search" placeholder="بحث ... "
                        aria-label="Search" />
                    <button class="btn navbar-search-btn my-2 my-sm-0" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <ul class="navbar-nav" style="display: inline-block;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropDown-navLink_login dropdown-toggle" href="#" role="button" id=""
                            data-toggle="" aria-haspopup="false" aria-expanded="false" data-target="">
                            <span class="navbar-link-span">اهلا عمر <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu user_card-dropdown" aria-labelledby="">
                            <a class="dropdown-item" href="my-orders.html"><i class="nav-link-icon fas fa-shopping-bag"></i>
                                الطلبات</a>
                            <a class="dropdown-item" href="cart.html"><i class="nav-link-icon fas fa-shopping-cart"></i> سلة
                                الشراء </a>
                            <a class="dropdown-item" href="fav-items.html"><i class="nav-link-icon fas fa-heart"></i>
                                المفضلة</a>
                            <a class="dropdown-item" href="settings.html"><i class="nav-link-icon fas fa-edit"></i> تعديل
                                البيانات</a>
                            <a class="dropdown-item" href="login.html"><i class="nav-link-icon fas fa-sign-out-alt"></i>
                                تسجيل
                                الخروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <footer>
            <div class="footer-div">
                <div class="container-fluid">
                    <div class="footer-up row">
                        <div class="col-lg-8 col-md-12 col-sm-12 row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 footer-link-col">
                                <div class="footer-link-ul">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a class="footer-link-item" href="about-us.html"><i
                                                    class="orange-square fas fa-square"></i>من
                                                نحن</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="footer-link-item" href="how-it-work.html"><i
                                                    class="orange-square fas fa-square"></i>كيف
                                                يعمل
                                                الموقع</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="footer-link-item" href="questions.html"><i
                                                    class="orange-square fas fa-square"></i>الاسئلة
                                                الشائعة</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 footer-link-col">
                                <div class="footer-link-ul">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a class="footer-link-item" href="terms-of-use.html"><i
                                                    class="orange-square fas fa-square"></i>شروط
                                                الاستخدام
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="footer-link-item" href="privacy-statement.html"><i
                                                    class="orange-square fas fa-square"></i>بيان
                                                الخصوصية</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="footer-link-item" href="helping.html"><i
                                                    class="orange-square fas fa-square"></i>تواصل معنا</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 footer-top-left">
                            <img width="90px" src="./assets/imgs/logo.png" />
                            <p>
                                اختبار اختبار ختبار اختبار ختبار اختبار ختبار اختبار ختبار
                                اختبار
                            </p>
                        </div>
                        <div class="col-lg-1 col-md-0 col-sm-0"></div>
                    </div>
                    <div class="footer-mdl">
                        <div class="row">
                            <div class="col-12 sm-icon-div">
                                <a><img src="assets/imgs/youtybeicon.png" /></a>
                                <a><img src="assets/imgs/whatsappicon.png" /></a>
                                <a><img src="assets/imgs/twittericon.png" /></a>
                                <a><img src="assets/imgs/instagramicon.png" /></a>
                            </div>
                            <div class="chatting-div">
                                <a href="#"><span class="chatting-btn"><i class="fas fa-comments pl-2"></i>
                                        محادثة</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-btm">
                <div class="footer-btm-txt">
                    <p>جميع الحقوق محفوظة @ 2019 Osama Askar</p>
                </div>
            </div>
        </footer>

        <script src="{{asset('web/assets/js/jquery.js')}}"></script>

        <script src="{{asset('web/assets/js/popper.js')}}"></script>
        <script src="{{asset('web/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('web/assets/js/script.js')}}"></script>
        <script src="{{asset('web/assets/js/sweetalert.min.js')}}"></script>

        <script>
            function addToFav(itemID) {
                Swal.fire({
                    type: 'success',
                    title: 'تم  اضافة الخدمة الى المفضلة بنجاح',
                    showConfirmButton: false,
                    timer: 2000
                })
                // Swal.fire({
                // 	type: 'error',
                // 	title: 'حدث خطأ ما .. حاول مرة اخرى',
                // 	showConfirmButton: false,
                // 	timer: 2000
                // })
            }

        </script>
    </body>
</html>