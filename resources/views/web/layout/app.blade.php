<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name' . $pageTitle , $configration->website_name .'-'. $pageTitle) }}</title>
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
    @yield('css')

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('web/assets/imgs/logo.png')}}" width="42" height="60" alt="" />
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
                        <a class="dropdown-item" href="{{url('category/'.$serviceCategory->id)}}"><i
                                class="nav-link-icon fas {{$serviceCategory->icon}}"></i>{{$serviceCategory->name}}</a>
                        @endforeach
                    </div>
                </li>
                @if (!Auth::guard('client')->guest())
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('orders')}}"><i class="nav-link-icon fas fa-box-open"></i>
                        <span class="navbar-link-span">الطلبات</span>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{url('complaint')}}"><i class="nav-link-icon fas fa-file-invoice"></i>
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
                @if (!Auth::guard('client')->guest())
                <ul class="navbar-nav" style="display: inline-block;">
                    <li class="nav-item form-nav">
                        <a class="nav-link" href="{{url('client/wishlist')}}">
                            <i class="nav-link-icon fas fa-heart"></i>
                        </a>
                        <a class="nav-link" href="cart.html">
                            <i class=" cartHasNotification fas fa-circle"></i><i
                                class="nav-link-icon fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    @endif
                </ul>
                <input class=" form-control navbar-search-textbox" type="search" placeholder="بحث ... "
                    aria-label="Search" />
                <button class="btn navbar-search-btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <ul class="navbar-nav" style="display: inline-block;">
                <li class="nav-item dropdown">
                    @if (!Auth::guard('client')->guest())
                    <a class="nav-link dropDown-navLink_login dropdown-toggle" href="#" role="button" id=""
                        data-toggle="" aria-haspopup="false" aria-expanded="false" data-target="">
                        <span class="navbar-link-span">اهلا {{Auth::guard('client')->user()->user_name}}<i
                                class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    @else
                    <a class="nav-link dropDown-navLink_login dropdown-toggle" href="{{url('client/login')}}" role="button" id=""
                        data-toggle="" aria-haspopup="false" aria-expanded="false" data-target="">
                        <span class="navbar-link-span">                           
                            تسجيل دخول 
                        </span>
                    </a>
                    @endif
                    @if (!Auth::guard('client')->guest())
                    <div class="dropdown-menu user_card-dropdown" aria-labelledby="">
                        <a class="dropdown-item" href="my-orders.html"><i class="nav-link-icon fas fa-shopping-bag"></i>
                            الطلبات</a>
                        <a class="dropdown-item" href="cart.html"><i class="nav-link-icon fas fa-shopping-cart"></i> سلة
                            الشراء </a>
                        <a class="dropdown-item" href="fav-items.html"><i class="nav-link-icon fas fa-heart"></i>
                            المفضلة</a>
                        <a class="dropdown-item" href="settings.html"><i class="nav-link-icon fas fa-edit"></i> تعديل
                            البيانات</a>
                        <a class="dropdown-item" href="{{url('client/logout')}}"><i class="nav-link-icon fas fa-sign-out-alt"></i>
                            تسجيل
                            الخروج</a>
                    </div>
                    @endif
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
                                        <a class="footer-link-item" href="{{url('about-us')}}"><i
                                                class="orange-square fas fa-square"></i>من
                                            نحن</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="footer-link-item" href="{{url('how-work')}}"><i
                                                class="orange-square fas fa-square"></i>كيف
                                            يعمل
                                            الموقع</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="footer-link-item" href="{{url('questions')}}"><i
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
                                        <a class="footer-link-item" href="{{url('terms-of-use')}}"><i
                                                class="orange-square fas fa-square"></i>شروط
                                            الاستخدام
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="footer-link-item" href="{{url('privacy')}}"><i
                                                class="orange-square fas fa-square"></i>بيان
                                            الخصوصية</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="footer-link-item" href="{{url('contact')}}"><i
                                                class="orange-square fas fa-square"></i>تواصل معنا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 footer-top-left">
                        <img width="90px" src="{{asset('web/assets/imgs/logo.png')}}" />
                        <p>
                            {{$configration->description}}
                        </p>
                    </div>
                    <div class="col-lg-1 col-md-0 col-sm-0"></div>
                </div>
                <div class="footer-mdl">
                    <div class="row">
                        <div class="col-12 sm-icon-div">
                            @if(isset($configration->youtube))
                            <a href="{{$configration->youtube}}" target="_blank"><img
                                    src="{{asset('web/assets/imgs/youtybeicon.png')}}" /></a>
                            @endif
                            @if(isset($configration->phone))
                            <a href="{{$configration->phone}}" target="_blank"><img
                                    src="{{asset('web/assets/imgs/whatsappicon.png')}}" /></a>
                            @endif
                            @if(isset($configration->twitter))

                            <a href="{{$configration->twitter}}" target="_blank"><img
                                    src="{{asset('web/assets/imgs/twittericon.png')}}" /></a>
                            @endif
                            @if(isset($configration->instagram))
                            <a href="{{$configration->instagram}}" target="_blank"><img
                                    src="{{asset('web/assets/imgs/instagramicon.png')}}" /></a>
                            @endif
                        </div>
                        {{-- <div class="chatting-div">
                                <a href="#"><span class="chatting-btn"><i class="fas fa-comments pl-2"></i>
                                        محادثة</span></a>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-btm">
            <div class="footer-btm-txt">
                <p>جميع الحقوق محفوظة @ 2019 </p>
            </div>
        </div>
    </footer>

    <script src="{{asset('web/assets/js/jquery.js')}}"></script>
    <script src="{{asset('web/assets/js/popper.js')}}"></script>
    <script src="{{asset('web/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/assets/js/script.js')}}"></script>
    <script src="{{asset('web/assets/js/sweetalert.min.js')}}"></script>
    @yield('js')

</body>

</html>