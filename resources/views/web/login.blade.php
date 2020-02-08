<!DOCTYPE html>
<html>

<head>
	<title>كودآرت | الصفحة الرئسيسة</title>
	<meta charset="utf-8" />
	<meta name="description" content="page description" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="shortcut icon" width="42" height="60" href="./assets/imgs/logo.ico" type="image/x-icon" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
	<link rel="stylesheet" href="assets/css/rtl.css" />
	<link rel="stylesheet" href="assets/css/style.css" />

	<!-- login -->
	<link rel="stylesheet" href="assets/css/login.css" />

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="index.html">
			<img src="assets/imgs/logo.png" width="42" height="60" alt="" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.html"><i class="nav-link-icon fas fa-home"></i>
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
					<div class="dropdown-menu nav-link-dropdown" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="categoriesOfServices.html"><i class="nav-link-icon fas fa-palette"></i>
							تصميم</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-print"></i> الطباعة</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-language"></i> لترجمه</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-camera"></i> تصوير
							المناسبات</a>
						<a class="dropdown-item" href="#"><i class="nav-link-icon fas fa-photo-video"></i> الرسوم
							المتحركة</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.html"><i class="nav-link-icon fas fa-sign-in-alt"></i>
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
	<section>
		<div class="section-login">
			<div class="login">
				<div class="container-fluid">
					<div class="">
						<div class="login-div">
							<div class="login-div-body">
								<div class="item">
									<span class="login-hdr">تسجيل الدخول
										<br><br>
									</span>
									<div class="data-cell">
										<form class="needs-validation" novalidate action="index.html">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="data-cell">
														<div class="form-group">
															<label for="name-form" class="data-cell-label-title">البريد
																الالكتروني</label>
															<input type="email" class="form-control txtBox-name"
																id="name-form" value="" required>
															<div class="invalid-feedback invalid-lbl">البريد الالكتروني
																مطلوب</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="data-cell">
														<div class="form-group">
															<label for="phone-form" class="data-cell-label-title">كلمة
																المرور</label>
															<input type="password" class="form-control txtBox-name"
																id="phone-form" value="" required>
															<div class="invalid-feedback invalid-lbl"> كلمة المرور
																مطلوبة</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-item">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="data-cell">
															<label class="forgetPass">هل نسيت كلمة المرور ؟</label>
														</div>
													</div>
												</div>
											</div>
											<div class="form-item">
												<div class="row">
													<div class="col-lg-12">
														<div class="btn-submit-div">
															<button class="btn btn-primary btn-submit" type="submit">سجل
																الدخول ك مستخدم</button>
															<br>
														</div>
													</div>
													<div class="col-lg-12">
														<div class="btn-submit-div">
															<button class="btn btn-secondary btn-submit" type="button"
																onclick="window.location.replace('user-profile.html')">سجل
																الدخول ك مقدم خدمة</button>
														</div>
													</div>
												</div>
											</div>
											<div class="form-item">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="data-cell mt-50">
															<label>ليس لديك حساب؟ <a href="signup.html"><label
																		class="newAccount">سجل الآن</label></a></label>
														</div>
													</div>
												</div>
											</div>
											<div class="form-item">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="data-cell newAccount-options">
															<p>or</p>
															<div class="col-12 newAccount-icon-div">
																<a><img src="assets/imgs/facebookicon.png"></a>
																<a><img src="assets/imgs/googleicon.png"></a>
																<a><img src="assets/imgs/twittericon.png" /></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="sweetalert2.all.min.js"></script>
	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
			'use strict';
			window.addEventListener('load', function () {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function (form) {
					form.addEventListener('submit', function (event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>
</body>

</html>