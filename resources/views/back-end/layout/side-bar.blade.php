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
        <li class="{{is_active('videos')}}">
            <a href="{{route('videos.index')}}"  class="{{is_active('videos')}}">
                    <i class="fa fa-image"></i><span>فديوهات</span>
            </a>
        
        </li>
        <li class="{{is_active('news')}}">
            <a href="{{route('news.index')}}"  class="{{is_active('news')}}">
                    <i class="far fa-newspaper"></i><span>الأخبار</span>
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