@extends('web.layout.app')


  @section('css')
  <!-- carousel -->
  <link rel="stylesheet" href="{{asset('web/assets/css/carousel.css')}}" />

  <!-- services -->
  <link rel="stylesheet" href="{{asset('web/assets/css/services-item.css')}}" />

  <!-- offer-row -->
  <link rel="stylesheet" href="{{asset('web/assets/css/offer-row.css')}}" />

  <!-- new-services -->
  <link rel="stylesheet" href="{{asset('web/assets/css/new-services.css')}}" />

@endsection
@section('content')


<section>
	<div class="bd-example">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="10000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="{{$firstSlider->link}}"><img src="{{$firstSlider->image}}" class="d-block w-100"
							alt="..." /></a>

				</div>
				@foreach ($sliders as $slider)
				<div class="carousel-item">
					<a href="{{$slider->link}}"><img src="{{$slider->image}}" class="d-block w-100" alt="..." /></a>

				</div>
				@endforeach


			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="section-row special-services">
			<div class="section-hdr">
				<h3 class="section-hdr-txt"><b>خدمات مميزه</b></h3>
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
			<div class="row">
				@foreach ($specialServices as $item)
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 services-item-col-div">
					<div class="services-item-col">
						<div class="services-item">
							<div class="services-item-header">
								<div class="on-item-option" onclick="addToFav(1)" data-toggle="popover"
									data-trigger="hover" data-placement="left" data-content="اضف الى قائمة المفضلة">
									<i class="far fa-heart fav-icon"></i>
								</div>
								<a href="{{url('services/'.$item->id)}}">
									<img src="{{$item->image}}" alt="" width="100%;" />
								</a>
							</div>
							<div class="services-item-info">
								<a href="{{url('services/'.$item->id)}}">
								<span class="item-name">{{$item->name}}</span>
								</a>

								{{-- <div class="item-details">
									<span>تصميم مواقع بطريقة محترفة ومتميزة</span>
									<br /><br />
									<a href="serviceProfile_User.html">
										<span class="services-provider">مقدم الخدمة: اسامة عسكر</span>
									</a>
								</div> --}}
							</div>
						</div>
						<div class="services-item-footer">
							<a href="{{url('services/'.$item->id)}}" class="btn services-item-btn">اطلب الآن</a>
						</div>
					</div>
				</div>
				@endforeach


			</div>
		</div>
	</div>
</section>
<section>
	<div class="offer-row-container">
		
		<div class="row">
			@foreach ($firstAdd as $item)
			<a href="{{$item->link}}"><img src="{{$item->image}}" alt="" width="100%;" /></a>
			@endforeach
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="section-row new-services">
			<div class="section-hdr">
				<h3 class="section-hdr-txt"><b> الاكثر طلبا</b></h3>
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
			<div class="row">
				@foreach ($MostRequestedServices as $item)
				<div class="col-lg-6 col-md-6 col-sm-6 new-serivces-item-col-row ">
					<div class="new-serivces-item-col new-serivces-item-col-r-1">
						<a href="{{url('services/'.$item->id)}}">
							<div class="new-services-item new-serivces-item-1 row">
								<div class="col-lg-6 col-md-12 col-sm-12">
									<p class="new-services-item-hdr">{{$item->name}}</p>
									
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<img width="70%" src="{{$item->image}}" />
								</div>
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
	<section>
		<div class="offer-row-container">
			
			<div class="row">
				@foreach ($secondAdd as $item)
				<a href="{{$item->link}}"><img src="{{$item->image}}" alt="" width="100%;" /></a>
				@endforeach
			</div>
		</div>
	</section>
	
</section>
@section('js')
<script>
	function addToFav(itemID) {
			Swal.fire({
				type: 'success',
				title: 'تم  اضافة الخدمة الى المفضلة بنجاح',
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

</script>
@endsection
@endsection