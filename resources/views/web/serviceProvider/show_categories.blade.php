

	@extends('web.layout.app')


	@section('css')

	<!-- addServiceOfCategory -->
	<link rel="stylesheet" href="{{asset('web/assets/css/addServiceOfCategory.css')}}" />
	@endsection
	@section('content')

	<section>
		<div class="section-addServiceOfCategory">
			<div class="addServiceOfCategory">
				<div class="container-fluid">


					<div class="">
						<form class="needs-validation" id="signupForm" novalidate action="addServicveDetails.html">
							<div class="addServiceOfCategory-div">
								<div class="addServiceOfCategory-div-hdr">
									<p class="addServiceOfCategory-div-hdr-text">
										قم باختيار الخدمة التي تريدها
									</p>
								</div>
								<div class="addServiceOfCategory-div-body">

									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="address-col">
												<h5><b></b></h5>
												<br>
												<div class="row">
                                                    @foreach ($categories as $item)
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
														<div class="data-cell p-1">
															<div class="form-group">
																<div class="form-check">
																	{{-- <input class="form-check-input" type="checkbox"
																		value="" id="subCategory-1"> --}}
                                                                <a href="{{url('service-provider/show-services/'.$item->id)}}" 
                                                                    class="btn btn-primary">
                                                                   {{$item->name}}																	
																	</a>
																</div>
															</div>
														</div>
													</div>
                                                    @endforeach
												
													
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="btn-submit-div pb-20">
										<button class="btn btn-primary btn-submit" type="submit">اضافة</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</section>

@endsection