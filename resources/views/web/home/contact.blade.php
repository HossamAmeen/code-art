@extends('web.layout.app')
@section('css')
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/helping.css')}}" />
@endsection
@section('content')

	<section>
		<div class="section-helping">
			<div class="helping">
				<div>
					<div class="">
						<div class="helping-div-hdr">
							<p class="helping-div-hdr-text">
								تواصل معنا
							</p>
						</div>
						<div class="helping-div">
							<div class="helping-div-body">
								<p>لو واجهتك أي مشكلة تقدر تتواصل معانا</p>
								<div class="item">
									<div class="data-cell row">
										<div class="col-lg-4 col-md-4 col-sm-12">
											<div class="row col-item">
												<div class="col-lg-12 col-md-12 col-sm-6 col-item-col">
													<div>
														<i class="fas fa-phone-alt"></i>
													</div>
												</div>
												<div class="col-lg-12  col-md-12 col-sm-6 col-item-col">
													<div class="item-col-data">
														{{$configration->phone}}
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-12">
											<div class="row col-item">
												<div class="col-lg-12 col-md-12 col-sm-6 col-item-col">
													<div>
														<i class="fas fa-envelope"></i>
													</div>
												</div>
												<div class="col-lg-12  col-md-12 col-sm-6 col-item-col">
													<div class="item-col-data">
														{{$configration->email}}
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-12">
											<div class="row col-item">
												<div class="col-lg-12 col-md-12 col-sm-6 col-item-col">
													<div>
														<i class="fas fa-map-marker-alt"></i>
													</div>
												</div>
												<div class="col-lg-12  col-md-12 col-sm-6 col-item-col">
													<div class="item-col-data">
														{{$configration->address}}
													</div>
												</div>
											</div>
										</div>
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