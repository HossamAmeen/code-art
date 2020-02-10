


	@extends('web.layout.app')
	@section('css')
	
		<!-- order-status -->
		<link rel="stylesheet" href="{{asset('web/assets/css/order-status.css')}}" />

		<!-- timeLine -->
		<link rel="stylesheet" href="{{asset('web/assets/css/timeLine.css')}}" />

	@endsection
	@section('content')
	<section>
		<div class="section-order-status">
			<div class="order-status">
				<div class="container-fluid">
					<div class="">
						<div class="order-status-div">
							<div class="order-status-div-hdr">
								<p class="order-status-div-hdr-text">
									متابعة الطلب
								</p>
							</div>
							<div class="order-status-div-body">

								<div class="item">
									<div class="cd-horizontal-timeline loaded">
										<section class="time-line-box">
											<div class="swiper-container text-center">
												<div class="swiper-wrapper">
													<div class="swiper-slide">
														<div class="timestamp"></div>
														<div class="status @if($order->status >=1) selected @endif"><span lass="firstSpan"></span>
														</div>
														<span class="timeLine-text selectedtext">تم الطلب</span>
													</div>
													<div class="swiper-slide">
														<div class="timestamp"></div>
														<div class="status @if($order->status >=2) selected @endif"><span></span></div>
														<span class="timeLine-text selectedtext">قيد التنفيذ</span>
													</div>
													<div class="swiper-slide">
														<div class="timestamp"></div>
														<div class="status @if($order->status >=3) selected @endif"><span></span></div>
														<span class="timeLine-text ">تم الشحن </span>
													</div>
													<div class="swiper-slide">
														<div class="timestamp"></div>
														<div class="status @if($order->status >=4) selected @endif"><span class="lastSpan"></span></div>
														<span class="timeLine-text">تم الاستلام</span>
													</div>
												</div>
											</div>
										</section>
									</div>
									@if(isset($order->serviceOrder))
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
												<label class="data-cell-label-title data-cell-label-title-empty">&nbsp;	</label>
												<br><br>
												<label class="data-cell-label-date">{{$order->date}}</label>
												<br><br>
												<label class="data-cell-label-price">{{$order->price}} ريال</label>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-12 div-4">
											<div class="address-col2">
												<div class="address-col-info">
													<a href="{{url('client/rate-service/'.$order->serviceOrder->id)}}"><button
															class="btn cont-btn"><b>تقييم</b></button></a>
												</div>
											</div>
										</div>
									</div>
									@endif
								</div>
								<hr>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection