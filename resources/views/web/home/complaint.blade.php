@extends('web.layout.app')
@section('css')
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/complaints-suggestions.css')}}" />
@endsection
@section('content')


	<section>
		<div class="section-suggestions">
			<div class="suggestions">
				<div class="container-fluid">


					<div class="">
						<div class="suggestions-div">
							<div class="suggestions-div-hdr">
								<p class="suggestions-div-hdr-text">
									التعليقات والشكاوي
								</p>
								<hr>
							</div>
							<div class="suggestions-div-body">
								<div class="item">
								<form class="needs-validation" novalidate method="POST" action="{{url('complaint')}}">
									@csrf
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="name-form" class="data-cell-label-title">الأسم
															</label>
														<input type="text" class="form-control txtBox-name" name="first_name"
															id="name-form" value="" required>
														<div class="invalid-feedback invalid-lbl">
															الأسم مطلوب
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="data-cell">
													<div class="form-group">
														<label for="phone-form" class="data-cell-label-title">رقم الجوال
															</label>
														<input type="tel" class="form-control txtBox-name" name="phone"
															id="phone-form" value="" required>
														<div class="invalid-feedback invalid-lbl">
															رقم الجوال مطلوب
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-item">
											<div class="row">
												<div class="col-lg-12">
													<div class="data-cell">
														<div class="form-group">
															<label for="comments"
																class="data-cell-label-title lbl-cmboBox ">التعليق أو
																الشكوى</label>
															<textarea class="form-control txtBox-name cmboBox" name="message"
																id="comments" rows="3" required></textarea>
															<div class="invalid-feedback invalid-lbl">
																اكتب شكوى او اقتراحا لتقديمه للأدارة
															</div>
														</div>
													</div>
													<button class="btn btn-primary btn-submit"
														type="submit">إرســال</button>
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

	</section>
@endsection