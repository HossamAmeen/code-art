@extends('web.layout.app')


@section('css')
    <!-- carousel -->
    <link rel="stylesheet" href="{{asset('web/assets/css/userProfile.css')}}" />

    <!-- services -->
    <link rel="stylesheet" href="{{asset('web/assets/css/paymentModal.css')}}" />

@endsection
@section('content')

	<section>
		<div class="userProfile">
			<div class="container-fluid">

				<div class="row">
					<div class="col-lg-3 col-md-12 col-sm-12">
						<div class="user-badge">
							<div class="serviceProvider-img">
								<img src="{{asset($service_provider->image)}}" class="circle" width="100px">
							</div>
							<div class="serviceProvider-name">
								<span> <b>{{$service_provider->name}}</b> </span>
							</div>
							<div class="serviceProvider-rating"> عدد الخدمات &nbsp; &nbsp; <span
									class="rating-value">{{$services_count}}</span></div>
							<br>
							<a href="addNewService.html"><button class="btn btn-success btn-addService"
									type="submit">اضف خدمة
									جديدة</button></a>
						</div>
					</div>
					<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="row">
                        @foreach($services as $service)
							<div class="col-lg-12 col-md-12 col-sm-6 userProfile-item-col">
								<div class="userProfile-item-div">
									<div class="userProfile-item">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<a class="userProfile-item-href-div" href="service-details.html">
													<img src="{{asset('web/assets/imgs/'.$service->image)}}" />
												</a>
											</div>
											<div class="col-lg-7 col-md-7 col-sm-12">
												<div class="item-info">
													<a class="userProfile-item-href-div" href="{{url('service-provider/services-details/'.$service->id)}}">
														<p class="item-name">
															<b>{{$service->service->name}}</b>
														</p>
														<p class="item-provider">
															<span class="item-provider-title">{{$service->title}} </span>
														</p>
														<br>
														<p><span class="item-price">1223 ريال</span></p>
													</a>
												</div>
											</div>
											<div class="col-lg-1 col-md-1 col-sm-12">
												<div class="row item-info">
													<div class="col-lg-12 col-md-12 col-sm-4 action-icons-div">
														<div>
															<!-- <i title="preview" class="fas fa-eye action-icons" onclick="PrevireFlag(1)"></i> -->
															<i title="اخفاء" class="fas fa-eye-slash action-icons"
																onclick="PrevireFlag()"></i>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-4 action-icons-div">
														<div>
															<i class="fas fa-edit action-icons"></i>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-4 action-icons-div">
														<div>
															<i title="حذف الخدمة" class="fas fa-trash action-icons"
																data-toggle="modal" data-target="#deleteModal"></i>
														</div>
													</div>
												</div>
											</div>
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
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form class="needs-validation" id="signupForm" novalidate>
						<div class="modal-header paymentModal-hdr">
							<h5 class="modal-title" id="exampleModalCenterTitle"> حذف الخدمة</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body paymentModal-body">

							<div class="item">
								<p>
									<h5><b>هل تريد حذف هذه الخدمة ؟</b></h5>
								</p>
							</div>


						</div>
						<div class="modal-footer paymentModal-footer">
							<button type="button" class="btn btn-light paymentModal-btn paymentModal-btn-close"
								data-dismiss="modal">الغاء</button>
							<button type="button" class="btn btn-primary paymentModal-btn paymentModal-btn-save"
								onclick="DeleteService()">حذف</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

@section('js')
	<script>
		function PrevireFlag() {
			Swal.fire({
				type: 'success',
				title: 'تم اخفاء الخدمة بنجاح',
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
		function DeleteService() {
			Swal.fire({
				type: 'success',
				title: 'تم حذف الخدمة بنجاح',
				showConfirmButton: false,
				timer: 2000
			})
			$("#deleteModal").modal('hide')
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
