<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="{{asset('panel/assets/images/demo/avatar-80.png')}}" alt=""/>
        <div class="user-online-status"><span class="user-status is-online  "></span> </div>
    </div>
    <ul class="social-icon">
        {{-- <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li> --}}
    </ul>
    <!--Left navigation user details end-->

    <!--Phone Navigation Menu icon start-->
    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="index.html" title="">
            <h1>baseProject</h1>
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>
        <div class="clearfix"></div>
    </div>

    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
 <!--Left navigation start-->
    <ul class="mainNav">
        <li >
            <a href="{{route('configrations.edit' , ['id' => '1'])}}" class="{{is_active('configrations')}}">
                    <i class="fas fa-edit"></i><span>تعديل بيانات الموقع</span>
            </a>
        </li>

        @if( Auth::user()->role == 1 )
        <li>
            <a href="{{route('users.index')}}" class="{{is_active('users')}}">
                <i class="fa fa-group"></i><span>المستخدمين</span>
            </a>
        </li>
        @endif
        <li>
            <a href="{{route('users.edit' , ['id' => Auth::user()->id])}}" class="{{edit_profle_is_active('users')}}">
                <i class="fas fa-edit"></i><span>تعديل بيانات الحساب</span>
            </a>
        </li>
        @if (strpos($configration->manager, 'galleries') !== false)
        <li class="{{is_active('galleries')}}">
            <a href="{{route('galleries.index')}}"  class="{{is_active('galleries')}}">
                    <i class="fa fa-image"></i><span>معرض الصور</span>
            </a>

        </li>
        @endif
        <li class="{{is_active('clients')}}">
            <a href="{{route('clients.index')}}"  class="{{is_active('clients')}}">
                    <i class="far fa-newspaper"></i><span>العملاء</span>
            </a>

        </li>

        <li class="{{is_active('adds')}}">
            <a href="{{route('adds.index')}}"  class="{{is_active('adds')}}">
                    <i class="far fa-newspaper"></i><span>الإعلانات</span>
            </a>

        </li>
        <li class="{{is_active('sliders')}}">
            <a href="{{route('sliders.index')}}"  class="{{is_active('sliders')}}">
                <i class="far fa-newspaper"></i><span>الصور المتحركة</span>
            </a>
        </li>
        <li class="{{is_active('categories')}}">
            <a href="{{route('categories.index')}}"  class="{{is_active('categories')}}">
                    <i class="far fa-newspaper"></i><span>فئات الخدمات</span>
            </a>

        </li>
        <li class="{{is_active('categoryquestions')}}">
            <a href="{{route('categoryquestions.index')}}"  class="{{is_active('categoryquestions')}}">
                    <i class="far fa-newspaper"></i><span>فئات الأسالة </span>
            </a>

        </li>
        <li class="{{is_active('questions')}}">
            <a href="{{route('questions.index')}}"  class="{{is_active('questions')}}">
                    <i class="far fa-newspaper"></i><span>الأسالة</span>
            </a>

        </li>
        <li class="{{is_active('wishlists')}}">
            <a href="{{route('wishlists.index')}}"  class="{{is_active('wishlists')}}">
                <i class="far fa-newspaper"></i><span>القائمة المفضلة</span>
            </a>
        </li>
        <li class="{{is_active('suggestadditions')}}">
            <a href="{{route('suggestadditions.index')}}"  class="{{is_active('suggestadditions')}}">
                <i class="far fa-newspaper"></i><span>الاضافات المقترحة</span>
            </a>
        </li>

        <li class="{{is_active('servicequestions')}}">
            <a href="{{route('servicequestions.index')}}"  class="{{is_active('servicequestions')}}">
                <i class="far fa-newspaper"></i><span>الاسئلة</span>
            </a>
        </li>
        <li class="{{is_active('serviceproviders')}}">
            <a href="{{route('serviceproviders.index')}}"  class="{{is_active('serviceproviders')}}">
                <i class="far fa-newspaper"></i><span>مزودين الخدمة</span>
            </a>
        </li>

        <li class="{{is_active('servicecategories')}}">
            <a href="{{route('servicecategories.index')}}"  class="{{is_active('servicecategories')}}">
                <i class="far fa-newspaper"></i><span>تصنيف الخدمات</span>
            </a>
        </li>

        <li class="{{is_active('complaints')}}">
            <a href="{{route('complaints.index')}}"  class="{{is_active('complaints')}}">
                    <i class="far fa-newspaper"></i><span>الشكاوي</span>
            </a>

        </li>

        <li class="{{is_active('articles')}}">
            <a href="{{route('articles.index')}}"  class="{{is_active('articles')}}">
                    <i class="fa fa-image"></i><span>المقالات</span>
            </a>

        </li>
        <li class="{{is_active('questions')}}">
            <a href="{{route('questions.index')}}"  class="{{is_active('questions')}}">
                    <i class="fa fa-question"></i><span>الأسئله الشائعه</span>
            </a>

        </li>

        <li >
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">


             <i class="fa fa-power-off"></i><span>تسجيل الخروج</span>
            </a>

        </li>
    </ul>
    <!--Left navigation end-->
</section>
