
	@extends('web.layout.app')


	@section('css')
		<!-- recieved-order -->
		<link rel="stylesheet" href="{{asset('web/assets/css/recieved-order.css')}}" />
		<link rel="stylesheet" href="{{asset('web/assets/css/paymentModal.css')}}" />

	@endsection
	@section('content')


	<section>
		<div class="section-recieved-order">
			<div class="recieved-order">
				<div class="container-fluid">


					<div class="">
						<div class="recieved-order-div">
							<div class="recieved-order-div-hdr">
								<p class="recieved-order-div-hdr-text">
									الطلبات الواردة
								</p>
							</div>
							<div class="recieved-order-div-body">
								@foreach ($orders as $item)
								<div class="item">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-12">
											<div class="data-cell">
												<label class="data-cell-label-title">اسم الخدمة</label>
												<br>
											<label class="data-lable data-cell-label">{{$item->serviceOrder->title}}</label>
											</div>
										</div>
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="data-cell">
												<label class="data-cell-label-title">صاحب الطلب</label>
												<br>
												<label class="data-lable data-cell-label">{{$item->client->user_name}}</label>
											</div>
										</div>
										<div class="col-lg-2 col-md-4 col-sm-6">
											<div class="data-cell">
												<label class="data-cell-label-title">رقم الجوال </label>
												<br>
												<label class="data-lable data-cell-label">{{$item->client->phone}} </label>
											</div>
										</div>
										<div class="col-lg-1 col-md-4 col-sm-6">
											<div class="data-cell">
												<label class="data-cell-label-title">المدة </label>
												<br>
												<label class="data-lable data-cell-label data-cell-label-days">{{$item->serviceType->days}}
													ايام</label>
											</div>
										</div>
										<div class="col-lg-1 col-md-4 col-sm-6">
											<div class="data-cell">
												<label class="data-cell-label-title">الكمية</label>
												<br>
												<label class="data-lable data-cell-label">{{$item->amount}}</label>
											</div>
										</div>
										<div class="col-lg-2 col-md-4 col-sm-12">
											<div class="data-cell">
												<label class="data-cell-label-title">المبلغ</label>
												<br>
												<label class="data-cell-label data-cell-label-price">{{$item->serviceType->price}} ريال</label>
											</div>
										</div>
									</div>
									<div class="form-item">
										<div class="row">
											<div class="col-lg-2 hideMe">
											</div>
											<div class="col-lg-2 hideMe">

											</div>
											<div class="col-lg-2 col-md-6 col-sm-6">
												<div class="form-check form-item-cell">
													<a href="{{url('service-provider/change-status-order/'.$item->id.'/2')}}" class="btn btn-primary actionBtn accept-btn"
														data-toggle="modal" >قبول</a>
												</div>
											</div>
											<div class="col-lg-2 col-md-6 col-sm-6">
												<div class="form-check form-item-cell">
													<a href="{{url('service-provider/change-status-order/'.$item->id.'/-1')}}" class="btn btn-light actionBtn refuse-btn"
														data-toggle="modal" >اعتذار</a>

												</div>
											</div>
											<div class="col-lg-2 hideMe">

											</div>
											<div class="col-lg-2 hideMe">
											</div>
										</div>
									</div>
								</div>
								<hr>
								@endforeach
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form class="needs-validation" id="signupForm" novalidate>
						<div class="modal-header paymentModal-hdr">
							<h5 class="modal-title" id="exampleModalCenterTitle"> قبول الخدمة</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body paymentModal-body">

							<div class="item">
								<p>
									<h6><b>هل تريد قبول هذه الخدمة ؟</b></h6>
								</p>
							</div>


						</div>
						<div class="modal-footer paymentModal-footer">
							<button type="button" class="btn btn-light paymentModal-btn paymentModal-btn-close"
								data-dismiss="modal">الغاء</button>
							<button type="button" class="btn btn-primary paymentModal-btn paymentModal-btn-save"
								onclick="acceptService()">قبول</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade" id="refuseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<form class="needs-validation" id="signupForm" novalidate>
						<div class="modal-header paymentModal-hdr">
							<h5 class="modal-title" id="exampleModalCenterTitle"> اعتذار عن خدمة</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body paymentModal-body">

							<div class="item">
								<p>
									<h6><b>هل تريد الاعنذار عن هذه الخدمة .. ما السبب ؟</b></h6>
									<br>
									<div class="addServiceOfCategory-div">
										<div class="addServiceOfCategory-div-body">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="address-col">
														<div class="row">

															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="data-cell p-1">
																	<div class="form-group">
																		<div class="form-check">
																			<input class="form-check-input"
																				type="checkbox" value=""
																				id="refuseItem-1">
																			<label class="form-check-label"
																				for="refuseItem-1">
																				سبب 1
																			</label>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="data-cell p-1">
																	<div class="form-group">
																		<div class="form-check">
																			<input class="form-check-input"
																				type="checkbox" value=""
																				id="refuseItem-2">
																			<label class="form-check-label"
																				for="refuseItem-2">
																				سبب 2
																			</label>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="data-cell p-1">
																	<div class="form-group">
																		<div class="form-check">
																			<input class="form-check-input"
																				type="checkbox" value=""
																				id="refuseItem-3">
																			<label class="form-check-label"
																				for="refuseItem-3">
																				سبب 3
																			</label>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="data-cell p-1">
																	<div class="form-group">
																		<div class="form-check">
																			<input class="form-check-input"
																				type="checkbox" value=""
																				id="refuseItem-4">
																			<label class="form-check-label"
																				for="refuseItem-4">
																				سبب 4
																			</label>
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
						<div class="modal-footer paymentModal-footer">
							<button type="button" class="btn btn-light paymentModal-btn paymentModal-btn-close"
								data-dismiss="modal">الغاء</button>
							<button type="button" class="btn btn-primary paymentModal-btn paymentModal-btn-save"
								onclick="refuseService()">اعتذار</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('js')
	<script>
		function acceptService() {
			Swal.fire({
				type: 'success',
				title: 'تم قبول الخدمة بنجاح',
				showConfirmButton: false,
				timer: 2000
			})
			$("#acceptModal").modal("hide");
			// Swal.fire({
			// 	type: 'error',
			// 	title: 'حدث خطأ ما .. حاول مرة اخرى',
			// 	showConfirmButton: false,
			// 	timer: 2000
			// })
		}
		function refuseService() {
			Swal.fire({
				type: 'success',
				title: 'تم الاعتذار عن الخدمة بنجاح',
				showConfirmButton: false,
				timer: 2000
			})
			$("#refuseModal").modal("hide");
			// Swal.fire({
			// 	type: 'error',
			// 	title: 'حدث خطأ ما .. حاول مرة اخرى',
			// 	showConfirmButton: false,
			// 	timer: 2000
			// })
		}
	</script>
@endsection