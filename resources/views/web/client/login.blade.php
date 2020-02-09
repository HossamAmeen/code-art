@extends('web.layout.app')
@section('css')

<!-- login -->
<link rel="stylesheet" href="{{asset('web/assets/css/login.css')}}" />
@endsection
@section('content')
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
										<form class="needs-validation" novalidate action="{{url('client/login')}}" method="POST">
											@csrf
											@if( session('loginAction') != null )
											<div class="alert alert-warning" role="alert">
												{{session('loginAction')}}
											  </div>
											  @endif
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="data-cell">
														<div class="form-group">
															<label for="name-form" class="data-cell-label-title">البريد
																الالكتروني</label>
															<input type="email" class="form-control txtBox-name" name="email"
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
															<input type="password" class="form-control txtBox-name" name="password"
																id="phone-form" value="" required>
															<div class="invalid-feedback invalid-lbl"> كلمة المرور
																مطلوبة</div>
														</div>
													</div>
												</div>
											</div>
											{{-- <div class="form-item">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="data-cell">
															<label class="forgetPass">هل نسيت كلمة المرور ؟</label>
														</div>
													</div>
												</div>
											</div> --}}
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
																onclick="window.location.replace('service/provider/login')">سجل
																الدخول ك مقدم خدمة</button>
														</div>
													</div>
												</div>
											</div>
											<div class="form-item">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="data-cell mt-50">
															<label>ليس لديك حساب؟ <a href="{{url('client/register')}}"><label
																		class="newAccount">سجل الآن</label></a></label>
														</div>
													</div>
												</div>
											</div>
											{{-- <div class="form-item">
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
											</div> --}}
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
@endsection