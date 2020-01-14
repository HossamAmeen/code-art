<!DOCTYPE html>
<html>

<head>
	<title>كودآرت | الصفحة الرئسيسة</title>
	<meta charset="utf-8" />
	<meta name="description" content="page description" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="shortcut icon" width="42" height="60" href="{{asset('../public/imgs/logo.ico')}}" type="image/x-icon" />
	<link rel="stylesheet" href="{{asset('../public/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('../public/css/bootstrap-rtl.min.css')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
	<link rel="stylesheet" href="{{asset('../public/css/rtl.css')}}" />
	<link rel="stylesheet" href="{{asset('../public/css/style.css')}}" />

	<!-- login -->
	<link rel="stylesheet" href="{{asset('../public/css/login.css')}}" />

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="{{ url('index') }}">
			<img src="{{asset('../public/imgs/logo.png')}}" width="42" height="60" alt="" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ url('index') }}"><i class="nav-link-icon fas fa-home"></i>
						<span class="navbar-link-span">الرئيسية</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link dropDown-navLink dropDown-navLink dropdown-toggle" href="#" role="button"
						id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
							class="nav-link-icon fas fa-boxes"></i>
						<span class="navbar-link-span">الخدمات <i class="fas fa-angle-down"></i>
						</span>
					</a>
					<div class="dropdown-menu nav-link-dropdown" aria-labelledby="dropdownMenuLink" id="dropdownservice">
						{{-- <a class="dropdown-item" href="categoriesOfServices.html"><i class="nav-link-icon fas fa-palette"></i>
							تصميم</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-print"></i> الطباعة</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-language"></i> لترجمه</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-camera"></i> تصوير
							المناسبات</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-photo-video"></i> الرسوم
							المتحركة</a> --}}
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ url('register') }}"><i class="nav-link-icon fas fa-sign-in-alt"></i>
						<span class="navbar-link-span">انشاء حساب </span>
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
		</div>
	</nav>
    @yield('contentlogin')
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
	<script src="{{asset('../public/js/jquery.js')}}"></script>
	<script src="{{asset('../public/js/popper.js')}}"></script>
	<script src="{{asset('../public/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('../public/js/script.js')}}"></script>
	<script src="{{asset('../public/js/sweetalert.min.js')}}"></script>
	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

      <script >
	 
		//Create the XHR Object
		let dropdown = document.getElementById('dropdownservice');
     let xhr1 = new XMLHttpRequest;
     //Call the open function, GET-type of request, url, true-asynchronous
     xhr1.open('GET', "http://localhost/code-art/public/api/categories", true)
     //call the onload
     xhr1.onload = function()
     {
        var attr="";
        //check if the status is 200(means everything is okay)
        if (this.status === 200)
            {
             console.log(JSON.parse(this.responseText));
     
                var obj=JSON.parse(this.responseText);
			
   
				for (let i = 0; i < obj.data.length; i++) {
         attr+='<a class="dropdown-item" href="{{ url('service') }}"  data-id='+obj.data[i].id+'><i class="nav-link-icon fas fa-palette"></i>'+obj.data[i].name+'</a>';
		
		}
    
		$("#dropdownservice").append(attr);
			}
   
     
     }
            
     //call send
     
     
     xhr1.send();
     //Common Types of HTTP Statuses
     // 200: OK
     // 404: ERROR
     // 403: FORBIDDEN

     </script>

{{-- 
<script>

  		//Create the XHR Object
				
          let xhrlayout = new XMLHttpRequest;
				//Call the open function, GET-type of request, url, true-asynchronous
				xhrlayout.open('GET', "http://localhost/code-art/public/api/configration", true)
				//call the onload
				xhrlayout.onload = function()
				{
					var attr="";
					//check if the status is 200(means everything is okay)
					if (this.status === 201 || this.status === 200)
						{
						console.log(JSON.parse(this.responseText));
				
							var obj=JSON.parse(this.responseText);
						
			         
					    
							document.getElementById('desc').innerHTML=obj.data[0].description; 
							  
							if(obj.data[0].youtube !=null)
							{
							
								$("#yot").attr("href", obj.data[0].youtube);
								$("#im1").attr("src", "../public/imgs/youtybeicon.png");
							
							}
							if(obj.data[0].whatsapp !=null)
							{
							
								$("#whats").attr("href", obj.data[0].whatsapp);
								$("#im2").attr("src", "../public/imgs/whatsappicon.png");
							
							}
						
							if(obj.data[0].twitter !=null)
							{
							
								$("#twit").attr("href", obj.data[0].twitter);
								$("#im3").attr("src", "../public/imgs/twittericon.png");
							
							}
							if(obj.data[0].instagram !=null)
							{
							
								$("#inst").attr("href", obj.data[0].instagram);
								$("#im4").attr("src", "../public/imgs/instagramicon.png");
							
							}
							
							}
					
					
			
				
				}
						
				//call send
				
				
				xhrlayout.send();
				//Common Types of HTTP Statuses
				// 200: OK
				// 404: ERROR
				// 403: FORBIDDEN
</script>
     --}}
    @yield ('scriptlogin')
</body>

</html>