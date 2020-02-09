

	@extends('web.layout.app')
	@section('css')
	<!-- offer-row -->
	<link rel="stylesheet" href="{{asset('web/assets/css/offer-row.css')}}" />
	<!-- about-us -->
	<link rel="stylesheet" href="{{asset('web/assets/css/services-page.css')}}" />
	@endsection
	@section('content')
	
	<section>
		<div class="container-fluid">
			<div class="section-row new-services">
				<div class="section-hdr">
					<h3 class="section-hdr-txt"><b>{{$serviceCategoryName}}</b></h3>
					<svg class="section-hdr-underline" height="40" width="300">
						<g fill="none">
							<path stroke="blue" class="underline-1" d="M0 1 l140 0" />
							<path stroke="red" class="underline-2" d="M0 7 l120 0" />
							<path stroke="orange" class="underline-3" d="M0 14 l100 0" />
							<path stroke="green" class="underline-4" d="M0 21 l80 0" />
							<path stroke="yellow" class="underline-5" d="M0 28 l60 0" />
							<path stroke="purple" class="underline-6" d="M0 35 l40 0" />
						</g>
					</svg>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="service-page">
			<div class="container-fluid">
				<div class="row">
					@foreach ($services as $item)
					<div class="col-lg-4 col-md-4 col-sm-6 service-page-item-col">
						<div class="service-page-item-div">
							<a class="service-page-item-href-div" href="{{url('service-detials/'.$item->id)}}">
								<div class="service-page-item service-page-item-1">
									{{-- <div class=" order-red item-price">
										20$
									</div> --}}
									<img src="{{asset($item->image)}}"/>
									<div class="item-info">
										<p class="item-name">
											<b>{{$item->title}}</b>
										</p>
										<p class="item-provider">
											<a href="serviceProfile_User.html">
												<span class="item-provider-title">مقدم الخدمة: </span>
												<span class="item-provider-name">{{$item->service_provider->name}}</span>
											</a>
										</p>
										{{-- <p class="item-buyer">
											<i class="fas fa-shopping-cart pl-2"></i>
											10 طلبوا هذه الخدمة
										</p> --}}
										<p class="item-rating">
											
											<i class="item-rate-star fas fa-star pl-0 @if($item->rate >= 1) active @endif"></i>
											<i class="item-rate-star fas fa-star pl-0 @if($item->rate >= 2) active @endif"></i>
											<i class="item-rate-star fas fa-star pl-0 @if($item->rate >= 3) active @endif"></i>
											<i class="item-rate-star fas fa-star pl-0 @if($item->rate >= 4) active @endif"></i>
											<i class="item-rate-star fas fa-star pl-0 @if($item->rate >= 5) active @endif"></i>
										</p>
									</div>
									<a href="{{url('service-detials/'.$item->id)}}" class="btn order-red order-btn">
										اطلب الأن
									</a>
								</div>
							</a>
						</div>
					</div>
					@endforeach
					
					
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="offer-row-container">
				@foreach ($firstAdd as $item)
				<a href="{{$item->link}}"><img src="{{asset($item->image)}}" alt="" width="100%" /></a>
				@endforeach
			
		</div>
	</section>
@endsection