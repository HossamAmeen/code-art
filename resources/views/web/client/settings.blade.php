
@extends('web.layout.app')
@section('css')
<!-- settings -->
<link rel="stylesheet" href="{{asset('web/assets/css/changePassword.css')}}" />
<link rel="stylesheet" href="{{asset('web/assets/css/settings.css')}}" />

@endsection
@section('content')

	<section>
		<div class="section-settings">
			<div class="settings">
				<div class="container-fluid">


					<div class="">
						<form class="needs-validation" id="profileForm" novalidate action="{{url('client/account')}}" method="POST">
							@csrf
							<div class="settings-div">
								<div class="settings-div-hdr">
									<p class="settings-div-hdr-text">
										المعلومات العامة
									</p>
								</div>
								<div class="settings-div-body">

									<div class="row">



										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="address-col2">
												<div class="row">
													<div class="address-col-info">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="data-cell">
																<div class="form-group">
																	<label for="name-accountData"
																		class="data-cell-label-title">
																		اسم المستخدم</label>
																	<input type="text" class="form-control txtBox-name" name="user_name"
																id="name-accountData" value="{{$client->user_name}}" 
																required>
																	<div class="invalid-feedback invalid-lbl"> اسم
																		المستخدم
																		مطلوب </div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="address-col2">
												<div class="row">
													<div class="address-col-info">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="data-cell">
																<div class="form-group">
																	<label for="email-accountData"
																		class="data-cell-label-title">البريد
																		الالكتروني</label>
																	<input type="email" class="form-control txtBox-name" name="email"
																		id="email-accountData" value="{{$client->email}}"
																		required>
																	<div class="invalid-feedback invalid-lbl">البريد
																		الالكتروني
																		مطلوب</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="address-col2">
												<div class="row">
													<div class="address-col-info">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="data-cell">
																<div class="form-group">
																	<label for="phone-accountData"
																		class="data-cell-label-title">رقم
																		الجوال </label>
																	<input type="number"
																		class="form-control txtBox-name"
																		id="phone-accountData" name="phone" 
																		value="{{$client->phone}}" required>
																	<div class="invalid-feedback invalid-lbl">رقم الجوال
																		مطلوب
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="address-col2">
												<div class="row">
													<div class="address-col-info">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="data-cell">
																<div class="form-group">
																	<label for="country-form" class="data-cell-label-title">
																		الدولة</label>
																	<select class="form-control txtBox-name selectOption" name="country_id"
																		onchange="countryChange()" id="country-form" required>
																		{{-- <option selected hidden></option> --}}
																		@foreach($countries as $country)
																		<option value="{{$country->id}}"
																			@if($client->country_id == $country->id)
																			selected
																			@endif
																			>{{$country->name}}</option>
																		@endforeach
																		{{-- <option>المملكة العربية السعودية</option> --}}
																	</select>
																	<div class="invalid-feedback invalid-lbl"> اختر الدولة
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="address-col2">
												<div class="row">
													<div class="address-col-info">
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
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											&nbsp;
										</div>
										<div class="col-lg-3">
											&nbsp;
										</div>
										<div class="col-lg-6">
											<div class="btn-submit-div pb-20">
												<button class="btn btn-primary btn-submit" type="submit">حفظ
													البيانات</button>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="btn-submit-div pb-20">
												<button class="btn passwordBtn" type="button" data-toggle="modal"
													data-target="#passwordPopup"><i class="fas fa-lock ml-2"></i> تغيير
													كلمة المرور</button>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="row">

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="passwordPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form class="needs-validation" id="profilePasswordForm" novalidate action="{{url('client/account')}}" method="POST">
						@csrf
						<div class="modal-header passwordPopup-hdr">
							<h5 class="modal-title" id="exampleModalCenterTitle">تغيير كلمة المرور</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body passwordPopup-body">
							<div class="item">
								<div class="row">
									{{-- <div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label for="newPassword" class="data-cell-label-title">كلمة
												المرور القديمة</label>
											<input type="password" class="form-control txtBox-name" id="newPassword"
												value="" required>
											<div class="invalid-feedback invalid-lbl"> كلمة المرور
												مطلوبة</div>
										</div>
									</div> --}}
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label for="password" class="data-cell-label-title">كلمة
												المرور الجديدة</label>
											<input type="password" class="form-control txtBox-name" id="password" name="password"
												value="" required>
											<div class="invalid-feedback invalid-lbl"> كلمة المرور
												مطلوبة</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label for="confirm_password" class="data-cell-label-title">تأكيد كلمة
												المرور</label>
											<input type="password" class="form-control txtBox-name" name="password_confirmation"
												id="confirm_password" value="" required>
											<div class="invalid-feedback invalid-lbl" id="error-password"> كلمة المرور
												غير متطابقة</div>
										</div>
									</div>
								</div>
							</div>


						</div>
						<div class="modal-footer passwordPopup-footer">
							<button type="button" class="btn btn-light passwordPopup-btn passwordPopup-btn-close"
								data-dismiss="modal">الغاء</button>
							<button type="submit"
								class="btn btn-primary passwordPopup-btn passwordPopup-btn-save">تأكيد</button>
						</div>
					</form>
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
						// if (!isValid) {
						// 	event.preventDefault();
						// 	event.stopPropagation();
						// }
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
	function setCity() {
		var selectedCountry = $("#country-form").val();
		$('#city-form').find('option').remove().end().append('<option selected hidden></option>');
		@foreach($countries as $country)
		if (selectedCountry == "{{$client->country_id}}") {
			
			@foreach($country->cities as $city)
			@if($client->country_id == $country->id)
			@if($client->city_id == $city->id)
			$('#city-form').append(`<option value="{{$city->id}}" selected> 
				{{$city->name}}
			</option>`);
			@else
			$('#city-form').append(`<option value="{{$city->id}}"> 
				{{$city->name}}
			</option>`);
			@endif
			
			@endif
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
	$( document ).ready(function() {
		setCity();
		});
	</script>
	
@endsection