@extends('web.layout.app')
@section('css')

<!-- signup -->
<link rel="stylesheet" href="{{asset('web/assets/css/signup.css')}}" />
@endsection
@section('content')

<section>
	<div class="section-signup">
		<div class="signup">
			<div class="container-fluid">
				<div class="">
					<div class="signup-div">
						<div class="signup-div-body">
							<div class="item">
								<span class="signup-hdr">تسجيل
									<br><br>
								</span>
								<div class="data-cell newAccount-options">
									{{-- <div><span class="signupUsing">سجل عن طريق</span></div>
									<div class="col-12 newAccount-icon-div">

										<a><img src="{{asset('web/assets/imgs/facebookicon.png')}}"></a>
										<a><img src="{{asset('web/assets/imgs/googleicon.png')}}"></a>
										<a><img src="{{asset('web/assets/imgs/twittericon.png')}}" /></a>
									</div> --}}
								</div>
								<div class="data-cell">
							
									<form class="needs-validation" id="signupForm" novalidate action="{{url('client/register')}}" method="POST">
										@csrf
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="username-form" class="data-cell-label-title">
															اسم المستخدم</label>
														<input type="text" class="form-control txtBox-name" name="user_name"
															id="username-form" value="" required>
														<div class="invalid-feedback invalid-lbl"> اسم المستخدم
															مطلوب </div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="name-form" class="data-cell-label-title">البريد
															الالكتروني</label>
														<input type="email" class="form-control txtBox-name"
															id="name-form" value="" name="email" required>
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
														<label for="phone-form" class="data-cell-label-title">رقم
															الجوال </label>
														<input type="number" class="form-control txtBox-name"
															id="phone-form" value="" name="phone" required>
														<div class="invalid-feedback invalid-lbl">رقم الجوال مطلوب
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="country-form" class="data-cell-label-title">
															الدولة</label>
														<select class="form-control txtBox-name selectOption" name="country_id"
															onchange="countryChange()" id="country-form" required>
															<option selected hidden></option>
															@foreach($countries as $country)
															<option value="{{$country->id}}">{{$country->name}}</option>
															@endforeach
															{{-- <option>المملكة العربية السعودية</option> --}}
														</select>
														<div class="invalid-feedback invalid-lbl"> اختر الدولة
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="city-form" class="data-cell-label-title">
															المدينة</label>
														<select class="form-control txtBox-name selectOption" name="city_id" 
															id="city-form" required>
															<option selected hidden></option>
														</select>
														<div class="invalid-feedback invalid-lbl"> اختر المدينه
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="password" class="data-cell-label-title">كلمة
															المرور</label>
														<input type="password" class="form-control txtBox-name" name="password"
															id="password" value="" required>
														<div class="invalid-feedback invalid-lbl"> كلمة المرور
															مطلوبة</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="confirm_password"
															class="data-cell-label-title">تأكيد كلمة المرور</label>
														<input type="password" class="form-control txtBox-name"
															id="confirm_password" value="" name="password_confirmation" required>
														<div class="invalid-feedback invalid-lbl" id="error-password">
															كلمة المرور غير متطابقة</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-item">
											<div class="row">
												<div class="col-lg-12">
													<div class="btn-submit-div pb-20">
														<button class="btn btn-primary btn-submit"
															type="submit">تسجيل</button>
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
@endsection
@section('js')
<script>
	var isValid = false;
	$('#password, #confirm_password').on('keyup', function () {
		if ($('#password').val() != $('#confirm_password').val()) {
			$("#confirm_password").addClass('is-invalid')
			$("#error-password").css('color', 'red');
			isValid = false
		} else {
			$("#confirm_password").removeClass('is-invalid');
			$("#error-password").css('color', 'black');
			isValid = true
		}
	});
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
					if (!isValid) {
						event.preventDefault();
						event.stopPropagation();
					}
				}, false);
			});
		}, false);
	})();


	function countryChange() {
		var selectedCountry = $("#country-form").val();
		$('#city-form').find('option').remove().end().append('<option selected hidden></option>');
		@foreach($countries as $country)
		if (selectedCountry == "{{$country->id}}") {
			@foreach($country->cities as $city)
			$('#city-form').append(`<option value="{{$city->id}}"> 
				{{$city->name}}
			</option>`);
			@endforeach
		}
		@endforeach
		
		// if (selectedCountry == "المملكة العربية السعودية") {
		// 	$('#city-form').append(`<option value="مكه"> 
		// 		مكه
		// 	</option>`);
		// 	$('#city-form').append(`<option value="الرياض"> 
		// 		الرياض
		// 	</option>`);
		// 	$('#city-form').append(`<option value="الدوحة"> 
		// 		الدوحة
		// 	</option>`);
		// }
	}
</script>

@endsection