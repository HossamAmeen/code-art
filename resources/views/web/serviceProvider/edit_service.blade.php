@extends('web.layout.app')


@section('css')
<!-- addServiceDetails -->
<link rel="stylesheet" href="{{asset('web/assets/css/addServiceDetails.css')}}" />

@endsection
@section('content')


<section>
	<div class="section-addServiceDetails">
		<div class="addServiceDetails">
			<div class="container-fluid">

				<div class="">
					<div class="addServiceDetails-div">
						<div class="addServiceDetails-div-hdr">
							<p class="addServiceDetails-div-hdr-text">
								تفاصيل الخدمة
							</p>
						</div>
						<div class="addServiceDetails-div-body">
							<form class="needs-validation" id="signupForm" novalidate 
							action="{{url('service-provider/edit-service/'.$id)}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="item">
									<div class="row">



										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="class-col">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<p class="class-title">
																<h6><b>مميزة</b></h6>
															</p>
															<div class="form-group">
																<label for="service-price-class-1-form"
																	class="data-cell-label-title">سعر الخدمة
																	<span
																		class="required-star"><sup>*</sup></span></label>
																<input type="number" class="form-control txtBox-name" name="price[]"
															id="service-price-class-1-form" value="{{$prices[0]}}" required>
																<div class="invalid-feedback invalid-lbl"> سعر الخدمة
																	مطلوب </div>
															</div>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<label for="service-deliveryTime-class-1-form"
																	class="data-cell-label-title"> مدة التسليم
																</label>
																<!-- delete required to not valid it -->
																<input type="number" class="form-control txtBox-name" name="days[]"
																	id="service-deliveryTime-class-1-form" value="{{$days[0]}}"
																	required>
																<div class="invalid-feedback invalid-lbl">مدة التسليم
																	مطلوبة</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="class-col">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<p class="class-title">
																<h6><b>متوسطة</b></h6>
															</p>
															<div class="form-group">
																<label for="service-price-class-2-form"
																	class="data-cell-label-title">سعر الخدمة
																	<span
																		class="required-star"><sup>*</sup></span></label>
																<input type="number" class="form-control txtBox-name" name="price[]"
																	id="service-price-class-2-form" value="{{$prices[1]}}" required>
																<div class="invalid-feedback invalid-lbl"> سعر الخدمة
																	مطلوب </div>
															</div>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<label for="service-deliveryTime-class-2-form"
																	class="data-cell-label-title"> مدة التسليم
																</label>
																<!-- delete required to not valid it -->
																<input type="number" class="form-control txtBox-name" name="days[]"
																	id="service-deliveryTime-class-2-form" value="{{$days[1]}}"
																	required>
																<div class="invalid-feedback invalid-lbl">مدة التسليم
																	مطلوبة</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="class-col">
														<div class="col-lg-12 col-md-12 col-sm-12">
															<p class="class-title">
																<h6><b>عادية</b></h6>
															</p>
															<div class="form-group">
																<label for="service-price-class-3-form"
																	class="data-cell-label-title">سعر الخدمة
																	<span
																		class="required-star"><sup>*</sup></span></label>
																<input type="number" class="form-control txtBox-name" name="price[]"
																	id="service-price-class-3-form" value="{{$prices[2]}}" required>
																<div class="invalid-feedback invalid-lbl"> سعر الخدمة
																	مطلوب </div>
															</div>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12">
															<div class="form-group">
																<label for="service-deliveryTime-class-3-form"
																	class="data-cell-label-title"> مدة التسليم
																</label>
																<!-- delete required to not valid it -->
																<input type="number" class="form-control txtBox-name" name="days[]"
																	id="service-deliveryTime-class-3-form" value="{{$days[2]}}"
																	required>
																<div class="invalid-feedback invalid-lbl">مدة التسليم
																	مطلوبة</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>


									

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label for="service-deliveryPrice-form"
														class="data-cell-label-title"> اسم الخدمة
														<span class="required-star"><sup>*</sup></span></label>
													<input type="text" class="form-control txtBox-name" value={{$service->title}}
														id="service-deliveryPrice-form" name="title" required>
													<div class="invalid-feedback invalid-lbl">  اسم الخدمة مطلوب </div>
												</div>
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label for="service-offer-form" class="data-cell-label-title">العرض
														على الخدمة
														<span class="required-star"><sup></sup></span></label>
													<input type="number" class="form-control txtBox-name" value="{{$service->discount}}"
														id="service-offer-form" name="discount" >
													<div class="invalid-feedback invalid-lbl"> العرض مطلوب </div>
												</div>
											</div>
										</div>


										

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label for="service-deliveryPrice-form"
														class="data-cell-label-title"> البرنامج المستخدم
														<span class="required-star"><sup></sup></span></label>
													<input type="text" class="form-control txtBox-name" value="{{$service->program}}"
														id="service-deliveryPrice-form" name="program" >
													<div class="invalid-feedback invalid-lbl">   البرنامج المستخدم مطلوب </div>
												</div>
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label for="service-deliveryPrice-form"
														class="data-cell-label-title"> صورة
														<span class="required-star"><sup>*</sup></span></label>
													<input type="file" class="form-control txtBox-name"
														id="service-deliveryPrice-form" name="image" >
													<div class="invalid-feedback invalid-lbl">   صورة مطلوب </div>
												</div>
											</div>
										</div>

										
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label for="service-details-form" class="data-cell-label-title">
														وصف الخدمة
														<span class="required-star"><sup>*</sup></span></label>
													<textarea class="form-control txtBox-name" id="service-details-form"
														name="description" required>{{$service->description}}</textarea>
													<div class="invalid-feedback invalid-lbl"> وصف الخدمة مطلوبة
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<label for="service-details-form" class="data-cell-label-title">
														تفاصيل الخدمة
														<span class="required-star"><sup>*</sup></span></label>
													<textarea class="form-control txtBox-name" id="service-details-form"
														name="overview" required>{{$service->overview}}</textarea>
													<div class="invalid-feedback invalid-lbl"> تفاصيل الخدمة مطلوبة
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="btn-submit-div pb-20">
										<button class="btn btn-primary btn-submit" type="submit">حفظ</button>
									</div>
								</div>
							</form>



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
@endsection