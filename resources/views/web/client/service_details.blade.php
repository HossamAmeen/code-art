@extends('web.layout.app')
@section('css')
<!-- offer-row -->
<link rel="stylesheet" href="{{asset('web/assets/css/service-item.css')}}" />
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/service-item-2.css')}}" />
@endsection
@section('content')

<section>
	<div class="service-details">
		<div class="container-fluid">
			<form action="{{url('client/addToCart/'.$service->id)}}" method="POST">
				@csrf
				<div class="row">
					<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="service-details-up-intro row">
							<div class="col-lg-5 col-md-5 col-sm-5">
								<div class="service-introImgs-div row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="service-introImg-div">
											<img class="service-introImg" width="100%" src="{{asset($service->image)}}">
										</div>
									</div>
									{{-- <div class="col-lg-12 col-md-12 clickable-img">
											<div class="service-imgs row">
												<div class="col-lg-4 col-md-4 col-sm-4 service-imgs-col">
													<div class="service-img-div service-img-1-div">
														<img class="service-img service-img-1" width="100%"
															src="./assets/imgs/item-img.png">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 service-imgs-col">
													<div class="service-img-div service-img-2-div">
														<img class="service-img service-img-2" width="100%"
															src="./assets/imgs/item-img.png">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 service-imgs-col">
													<div class="service-img-div service-img-3-div">
														<img class="service-img service-img-3" width="100%"
															src="./assets/imgs/item-img.png">
													</div>
												</div>
											</div>
										</div> --}}
								</div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-7">
								<div class="service-info-details">
									<p class="service-info-details-title"><b>{{$service->title}}</b></p>
									<p class="service-info-details-info">{{$service->description}}</p>
									@if(isset($service->service))
									<p class="service-info-details-category"><i
											class="fas fa-bars pl-3"></i>{{$service->service->name}}</p>
									@endif
									<p class="service-info-details-rate">
										<span class="pl-3"><b>التقييم</b></span>
										<i
											class="item-rate-star fas fa-star pl-0 @if($service->rate >= 1) active @endif"></i>
										<i
											class="item-rate-star fas fa-star pl-0 @if($service->rate >= 2) active @endif"></i>
										<i
											class="item-rate-star fas fa-star pl-0 @if($service->rate >= 3) active @endif"></i>
										<i
											class="item-rate-star fas fa-star pl-0 @if($service->rate >= 4) active @endif"></i>
										<i
											class="item-rate-star fas fa-star pl-0 @if($service->rate >= 5) active @endif"></i>
									</p>
									<!-- <p class="service-info-details-price service-info-details-title-prive-before">
											<b>قبل</b> &nbsp;
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span
												class="service-info-details-prive-before"><del>1234
													ريال </del></span></p> -->
									<!-- <p class="service-info-details-price service-info-details-title-price-after"><b> بعد
											</b> &nbsp;
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span
												class="service-info-details-prive-after">23456
												ريال</span> </p> -->
									<p class="service-info-details-price service-info-details-title-price-off"><b> الخصم
										</b> &nbsp;
										&nbsp; &nbsp; &nbsp;<span class="service-info-details-prive-off">
											@if(isset($service->discount))
											{{$service->discount}} %</span>
										@endif
									</p>

									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn btn-light priceBtn active">
											<input type="radio" name="price-form" id="price-Class-1-form"
												autocomplete="off" value="75" checked> 75 ريال
										</label>
										<label class="btn btn-light priceBtn">
											<input type="radio" name="price-form" id="price-Class-1-form"
												autocomplete="off" value="100"> 100 ريال
										</label>
										<label class="btn btn-light priceBtn">
											<input type="radio" name="price-form" id="price-Class-1-form"
												autocomplete="off" value="150"> 150 ريال
										</label>
									</div>

									<div class="deliver-day">
										<span class="service-info-details-deliver-day">ميعاد التسليم&nbsp;
											&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3
											أيام</span>
									</div>

									<div class="deliver-count">
										العدد
										<br>
										<div class="service-info-details-deliver-count row">
											<div
												class=" btn-group col-lg-4 col-md-4 col-sm-4 col-xs-4 count-div-col count-div-col-1">
												<select class="form-control deliver-count-dropdown" name="count-form"
													id="count-form">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
											<div
												class="btn-group col-lg-8 col-md-8 col-sm-8 col-xs-8 count-div-col count-div-col-2">
												<button type="submit" class="btn order-delivrty-btn">اضف الي
													العربة</button>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12">
						<div class="service-details-up-info row">
							<div class="col-lg-12 col-md-4">
								<ul class="list-group list-group-flush info-list">
									<li class="list-group-item">
										<span class="line-hight-span">ضمان الخدمة &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											{{-- <span> 3
													سنوات</span></span> --}}
											{{-- <br> --}}
											{{-- <span class="line-hight-span">شحن موثوق به</span> --}}
											<br>
											{{-- <span class="line-hight-span">شحن مجانا عند الشراء ب 200 ريال او اكثر</span> --}}
									</li>
								</ul>
							</div>
							<div class="col-lg-12 col-md-4">
								<ul class="list-group list-group-flush info-list">
									@if(isset($service->service_provider))
									<a href="#">
										<li class="list-group-item list-group-item-orange">
											<span class="white-span"> مقدم الخدمه &nbsp; &nbsp; &nbsp;
												&nbsp; &nbsp; {{$service->service_provider->name}}</span></li>
									</a>
									@endif
									<li class="list-group-item"><br><span class="line-hight-span grey-span">شحن موثوق
											به</span></li>
								</ul>
							</div>
							<div class="col-lg-12 col-md-4">
								<ul class="list-group list-group-flush info-list">
									<a href="#">
										<li class="list-group-item list-group-item-orange"><span class="white-span">خدمة
												توصيل الي
												المنازل</span></li>
									</a>
									<li class="list-group-item"> تسوق آمن<br><span
											class="line-hight-span grey-span">متقلقش على بياناتك
											دايما في أمان</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="additional-order">
							<p>اضافات مقترحة</p>
							<br>
							@foreach ($suggestAdditions as $item)
							<div class="row additional-row">
								<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group form-check mb-20">
										<input type="checkbox" class="form-check-input" id="additional-1">
										<label class="form-check-label" for="additional-1">{{$item->suggestion}}</label>
										<br><br>
									</div>
								</div>
								<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
									<div class="form-group row pr-10">
										<label for="exampleFormControlSelect1">&nbsp; &nbsp; &nbsp;العدد</label>
										<div class="col-lg-7 col-md-5 col-sm-7">
											<select class="form-control additional-seleceOption"
												id="exampleFormControlSelect1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</div>
								{{-- <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
									<div class="form-group row">
										<label for="exampleFormControlSelect1">&nbsp; &nbsp; &nbsp;النوع</label>
										<div class="col-lg-7 col-md-5 col-sm-7">
											<select class="form-control additional-seleceOption"
												id="exampleFormControlSelect1">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</div> --}}
								{{-- <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<span class="grey-span"><i class="fas fa-plus ml-1"></i> يوم واحد</span>
								</div> --}}
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
									<span class="grey-span">{{$item->price}} ريال</span>
								</div>
							</div>
							@endforeach


						</div>
					</div>
				</div>
			</form>
</section>

<section>
	<div class="service-details-bottom">
		<div class="">
			<div class="nav-details">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
							aria-controls="overview" aria-selected="true">نظرة عامة</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="specifications-tab" data-toggle="tab" href="#specifications" role="tab"
							aria-controls="specifications" aria-selected="false">المواصفات</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="rating-tab" data-toggle="tab" href="#rating" role="tab"
							aria-controls="rating" aria-selected="false">التقييم</a>
					</li>
				</ul>
				<div class="tab-content nav-info-container" id="myTabContent">
					<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
						<div class="nav-info-div">
							<div class="nav-info-hdr"><b>مميزات الخدمة</b></div>
							{{$service->overview}}
						</div>
					</div>
					<div class="tab-pane fade " id="specifications" role="tabpanel"
						aria-labelledby="specifications-tab">
						<div class="nav-info-hdr"><b>المواصفات</b></div>
						<div class="nav-info-div row">
							<div class="col-lg-8">
								<div class="nav-info-div">
									<div class="nav-info-specification row container-fluid">
										<div class="col-lg-3 col-md-3 col-sm-6 cell-info row">
											<div class="col-12">
												<div class="specification-tbl-col specification-tbl-hdr">
													<span>اسم الخدمة</span>
												</div>
											</div>
											<div class="col-12">
												<div class="specification-tbl-col specification-tbl-info">
													@if(isset($service->service))
													<span>{{$service->service->name}}</span>
													@endif
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6 cell-info row">
											<div class="col-12">
												<div class="specification-tbl-col specification-tbl-hdr">
													<span>البرامج المستخدمة</span>
												</div>
											</div>
											<div class="col-12">
												<div class="specification-tbl-col specification-tbl-info">
													<span>{{$service->program}}</span>
												</div>
											</div>
										</div>

										<div class="col-lg-3 col-md-3 col-sm-6 cell-info row">
											<div class="col-12">
												<div class="specification-tbl-col specification-tbl-hdr">
													<span>مقدم الخدمة</span>
												</div>
											</div>
											<div class="col-12">
												<div class="specification-tbl-col specification-tbl-info">
													@if(isset($service->service_provider))
													<span>{{$service->service_provider->name}}</span>
													@endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade " id="rating" role="tabpanel" aria-labelledby="rating-tab">
						<div class="nav-info-hdr"><b>التقييم العام</b></div>
						<div class="nav-info-div row">
							<div class="col-lg-8">
								<div class="nav-info-rating row container-fluid">
									{{-- <div class="col-lg-5 col-md-5 col-sm-3 col-cell-info cell-row-rating col-cell-info-1 row"> --}}
										<div class="col-lg-12 col-md-12 col-sm-12 col-cell-info  col-cell-info-1 row">
										<div class="col-12">
											<div class="rating-tbl-col-rating rating-tbl-hdr-rating">
												<p class="rate-value">{{$service->rate}}</p>
												<p class="item-rating">
													<i
														class="item-rate-star fas fa-star pl-0 @if($service->rate > 1) active @endif"></i>
													<i
														class="item-rate-star fas fa-star pl-0 @if($service->rate > 1) active @endif"></i>
													<i
														class="item-rate-star fas fa-star pl-0 @if($service->rate > 1) active @endif"></i>
													<i
														class="item-rate-star fas fa-star pl-0 @if($service->rate > 1) active @endif"></i>
													<i
														class="item-rate-star fas fa-star pl-0 @if($service->rate > 1) active @endif"></i>
												</p>
											</div>
										</div>
										{{-- <div class="col-12">
											<div class="rating-tbl-col-rating rating-tbl-info-rating">
												<p>حسب تقييم 1234 شخص</p>
											</div>
										</div> --}}
									</div>
									{{-- <div class="col-lg-7 col-md-7 col-sm-7 col-cell-info col-cell-info-2 row">
										<div class="rating-progress-div col-12">
											<div class="rating-progress">
												<div class="progress progress-item">
													<div class="progress-bar" role="progressbar" style="width: 70%;"
														aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="progress-item-details">5</div>
												<div class="progress-item-details-count">123</div>
											</div>
											<div class="rating-progress">
												<div class="progress progress-item">
													<div class="progress-bar" role="progressbar" style="width: 60%;"
														aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="progress-item-details">4</div>
												<div class="progress-item-details-count">123</div>
											</div>
											<div class="rating-progress">
												<div class="progress progress-item">
													<div class="progress-bar" role="progressbar" style="width: 47%;"
														aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="progress-item-details">3</div>
												<div class="progress-item-details-count">123</div>
											</div>
											<div class="rating-progress">
												<div class="progress progress-item">
													<div class="progress-bar" role="progressbar" style="width: 40%;"
														aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="progress-item-details">2</div>
												<div class="progress-item-details-count">123</div>
											</div>
											<div class="rating-progress">
												<div class="progress progress-item">
													<div class="progress-bar" role="progressbar" style="width: 20%;"
														aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
												<div class="progress-item-details">1</div>
												<div class="progress-item-details-count">123</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
						{{-- <div class="nav-info-div-2">
							<div class="hdr">
								<label class="btn title-rating-comments">تقييم 35 عميل</label>
							</div>
							<div class="comment-div">
								<div class="comment-body">
									<div class="comment-head">
										<p class="item-rating">
											<i class="item-rate-star fas fa-star pl-0 active"></i>
											<i class="item-rate-star fas fa-star pl-0 active"></i>
											<i class="item-rate-star fas fa-star pl-0 active"></i>
											<i class="item-rate-star fas fa-star pl-0"></i>
											<i class="item-rate-star fas fa-star pl-0"></i>
											<span class="rating-value">5.0</span>
										</p>
										<label class="rate-comment-date2">12-3-2019</label>
										<!-- <label class="rate-comment-date">12-3-2019</label> -->
									</div>
									<div class="comment-content row">
										<div class="col-lg-2">
											<label class="rate-comment-username"><b>asd.com</b></label>
										</div>
										<div class="col-lg-10">
											<div class="comment-text">
												<p>
													Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
													temporibus, pariatur facilis,
													saepe ducimus quaerat velit magnam culpa, minus quae dicta!
													Dolorem hic, quia in voluptatem
													repellendus iusto eius similique?
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="comment-div">
								<div class="comment-body">
									<div class="comment-head">
										<p class="item-rating">
											<i class="item-rate-star fas fa-star pl-0 active"></i>
											<i class="item-rate-star fas fa-star pl-0 active"></i>
											<i class="item-rate-star fas fa-star pl-0 active"></i>
											<i class="item-rate-star fas fa-star pl-0"></i>
											<i class="item-rate-star fas fa-star pl-0"></i>
											<span class="rating-value">5.0</span>
										</p>
										<label class="rate-comment-date2">12-3-2019</label>
										<!-- <label class="rate-comment-date">12-3-2019</label> -->
									</div>
									x <div class="comment-content row">
										<div class="col-lg-2">
											<label class="rate-comment-username"><b>asd.com</b></label>
										</div>
										<div class="col-lg-10">
											<div class="comment-text">
												<p>
													Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
													temporibus, pariatur facilis,
													saepe ducimus quaerat velit magnam culpa, minus quae dicta!
													Dolorem hic, quia in voluptatem
													repellendus iusto eius similique?
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection