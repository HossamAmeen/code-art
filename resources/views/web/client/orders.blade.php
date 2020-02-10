

	@extends('web.layout.app')
	@section('css')
	
	<!-- my-order -->
	<link rel="stylesheet" href="{{asset('web/assets/css/my-order.css')}}" />
	@endsection
	@section('content')
	<section>
		<div class="section-my-order">
			<div class="my-order">
				<div class="container-fluid">
					<div class="">
						<div class="my-order-div">
							<div class="my-order-div-hdr">
								<p class="my-order-div-hdr-text">
									الطلبات الصادرة
								</p>
							</div>
							<div class="my-order-div-body">

								@foreach ($orders as $order)
									@if(isset($order->serviceOrder))
									<div class="item">
										<div class="row">
											<div class="col-lg-3 col-md-4 col-sm-12 div-1">
												<div class="data-cell">
													<img width="200px" height="130px" src="{{asset($order->serviceOrder->image)}}">
												</div>
											</div>
											<div class="col-lg-4 col-md-5 col-sm-6 div-2">
												<div class="data-cell col-data-3 ">
													<label class="data-cell-label-title"><a href="{{url('service-detials/'.$order->serviceOrder->id)}}">
														{{$order->serviceOrder->title}}</a></label>
													<br>
													<label class="data-cell-label-category"><i
															class="fas fa-bars pl-3"></i>{{$order->serviceOrder->service->category->name}}</label>
													<br>
													<label class="data-cell-label-serviceProvider"><i
															class="fas fa-user pl-3"></i>{{$order->serviceOrder->service_provider->name}}</label>
												</div>
											</div>
											<div class="col-lg-2 col-md-3 col-sm-6 div-3">
												<div class="data-cell ">
													<label class="data-cell-label-title data-cell-label-title-empty">&nbsp;
													</label>
													<br><br>
													<label class="data-cell-label-date">{{$order->date}}</label>
													<br><br>
													<label class="data-cell-label-price">{{$order->price}} ريال</label>
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12 div-4">
												<div class="data-cell"><br><br>
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 div-5">
															<a href="{{url('client/show-order/'.$order->id)}}"><button
																	class="btn btn-MyOrder cont-btn">متابعه</button></a>
														</div>
														{{-- <div class="col-lg-6 col-md-6 col-sm-6 div-5">
															<button class="btn btn-MyOrder resend-btn">إرجاع</button>
														</div> --}}
													</div>
	
												</div>
											</div>
										</div>
									</div>
									<hr>
									@endif
								@endforeach
							

								

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection