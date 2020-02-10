	


	@extends('web.layout.app')
	@section('css')
	<!-- rateing -->
	<link rel="stylesheet" href="{{asset('web/assets/css/rating.css')}}" />
	<!-- rateItem -->
	<link rel="stylesheet" href="{{asset('web/assets/css/rateItem.css')}}" />
	@endsection
	@section('content')

	<section>
		<div class="section-rateItem">
			<div class="rateItem">
				<div class="container-fluid">


					<div class="">
						<form class="needs-validation" id="signupForm" novalidate action="{{url('client/rate-service/'.$id)}}" method="POST">
							@csrf
							<div class="rateItem-div">
								<div class="rateItem-div-hdr">
									<p class="rateItem-div-hdr-text">
										تقييم الطلب
									</p>
								</div>
								<div class="">

									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="rateItem-div-body address-col">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="rate-div">
															<div class="rate">
																<input type="radio" id="star1" name="rate" value="5" />
																<label for="star1" title="text">1 star</label>

																<input type="radio" id="star2" name="rate" value="4" />
																<label for="star2" title="text">2 stars</label>

																<input type="radio" id="star3" name="rate" value="3" />
																<label for="star3" title="text">3 stars</label>

																<input type="radio" id="star4" name="rate" value="2" />
																<label for="star4" title="text">4 stars</label>

																<input type="radio" id="star5" name="rate" value="1" />
																<label for="star5" title="text">5 stars</label>
															</div>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12">
													<br>
													<div class="rate-div mt-10">
														<textarea class="form-control txtBox-name" rows="5" 
														placeholder="اكتب رأيك وتعليقك عن المنتج" value="" name="comment"
														required
														></textarea>
													</div>
													</div>
												</div>
												<div class="btn-submit-div pb-20">
													<button class="btn btn-primary btn-submit"  
													{{-- onclick="submitRating()" --}}
														type="submit">تقييم</button>
												</div>
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

	</section>
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
		function submitRating() {
			Swal.fire({
				type: 'success',
				title: 'تم اثبات تقييم الخدمة بنجاح',
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
	@endsection
	@endsection