	
	@extends('web.layout.app')
	@section('css')
	<!-- fav-items -->
	<link rel="stylesheet" href="{{asset('web/assets/css/fav-items.css')}}" />
	
	@endsection
	@section('content')
	<section>
		<div class="fav-div-hdr">
			<p class="fav-div-hdr-text">
				قائمتي المفضلة &nbsp;&nbsp; &nbsp;&nbsp; <span class="fav-count">({{$countWislist}}) منتج</span>
			</p>
		</div>
		<div class="section-fav-items">
			<div class="fav-items">
				<div class="container-fluid">
					<div class="">
						<div class="fav-items-div">

							<div class="fav-items-div-body">
								@foreach ($wishlists as $item)
								@if(isset($item->service) )
								<div class="item">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-6 div-1">
											<div class="data-cell">
												<img width="200px" height="130px" src="{{asset($item->service->image)}}">
											</div>
										</div>
										<div class="col-lg-7 col-md-6 col-sm-6 div-2">
											<div class="data-cell col-data-3 ">
												<label class="data-cell-label-title"> <a href="{{url('service-detials/'.$item->service->id)}}">
														{{$item->service->title}} </a> </label>
												<br>
												<p class="data-cell-label-details">{{$item->service->description}}</p>
											</div>
										</div>
										<div class="col-lg-2 col-md-3 col-sm-12 div-4">
											<label class="price-lbl">{{$item->service->price}} ريال</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-0 div-1-actions"></div>
										<div class="col-lg-7 col-md-6 col-sm-6 div-del">
											<div class="data-cell mr-3 mt-3 datacell-action-1">
											<a href="{{url('client/delete/wishlist/'.$item->id)}}" class="btn fav-action-btn"><i class="fas fa-trash"></i> حذف
													الخدمة</a>
											</div>
										</div>
										<div class="col-lg-2 col-md-3 col-sm-6 div-buy">
											<div class="data-cell mt-3">
												<a href="{{url('client/addToCart/'.$item->service->id)}}"><button
														class="btn fav-action-btn addToCart">أضف الي عربة الشراء</button></a>
											</div>
										</div>
									</div>
								</div><hr>
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