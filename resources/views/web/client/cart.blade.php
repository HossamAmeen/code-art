@extends('web.layout.app')
@section('css')
<!-- cart -->
<link rel="stylesheet" href="{{asset('web/assets/css/cart.css')}}" />

@endsection
@section('content')
<section>
	<div class="fav-div-hdr">
		<p class="fav-div-hdr-text">
			عربة التسوق &nbsp;&nbsp; &nbsp;&nbsp; <span class="fav-count">({{$countCart}}) منتج</span>
		</p>
	</div>
	<div class="section-cart">
		<div class="cart">
			<div class="container-fluid">
				<div class="">
					<div class="cart-div">

						<div class="cart-div-body">
							@foreach ($carts as $item)
							<div class="item">
								<div class="row">
									<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 div-1">
										<div class="data-cell">
											<img width="200px" height="130px" src="{{asset($item->service->image)}}">
										</div>
									</div>
									<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 div-2">
										<div class="data-cell col-data-3 ">
											<label class="data-cell-label-title"> <a href="service-details.html">
												{{$item->service->title}}</a> </label>
											<br>
											<p class="data-cell-label-details">{{$item->service->description}}</p>
											<label class="data-cell-label-details fav-date">{{$item->date}}</label>
										</div>
									</div>
									<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 div-4">
										<label class="price-lbl">{{$item->service->price}} ريال</label>
									</div>
									<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 div-4">
										<label>العدد</label>
										<input type="number" value="{{$item->amount}}" style="background-color: dimgrey">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-md-6 col-sm-6 div-1-actions"></div>
									<div class="col-lg-5 col-md-6 col-sm-6 div-2-2">
										<div class="data-cell mr-3 mt-3 datacell-action-1">
											<a href="{{url('client/delete/cart/'.$item->id)}}" class="btn fav-action-btn"><i class="fas fa-trash"></i> حذف
												الخدمة</a>
										</div>
									</div>
									<div class="col-lg-2 col-md-6 col-sm-6 div-2-4">
										<div class="data-cell mt-3">
											<a href="{{url('client/add/wishlist/'.$item->service->id)}}" class="btn fav-action-btn">
												<i class="fas fa-heart"></i></a>
												اضافة الى الامنيات </button>
										</div>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-3 div-4">

									</div>
								</div>
							</div>
							<hr>
							@endforeach
							



							{{-- <div class="">
								<div class="additional-order">
									<p>اضافات مقترحة</p>
									<br>
									<div class="row additional-row">
										<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group form-check mb-20">
												<input type="checkbox" class="form-check-input" id="additional-1">
												<label class="form-check-label" for="additional-1">ترجمة 400
													كلمة</label>
												<br><br>
											</div>
										</div>
										<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
											<div class="form-group row pr-10">
												<label for="exampleFormControlSelect1">&nbsp; &nbsp;
													&nbsp;العدد</label>
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
										<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
											<div class="form-group row">
												<label for="exampleFormControlSelect1">&nbsp; &nbsp;
													&nbsp;النوع</label>
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
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 additional-info-div">
											<span class="grey-span"><i class="fas fa-plus ml-1"></i> يوم واحد</span>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 additional-info-div">
											<span class="grey-span"><i class="fas fa-plus ml-1"></i>2 ريال</span>
										</div>
									</div>
								</div>
							</div> --}}

							<div class="cartDone-div">
								<button class="btn cartDone-btn" id="finishCartBuying"><i
										class="fas fa-money-check-alt pl-2"></i> اتمام شراء الخدمة</button>
							</div>

							<div class="payWay" id="payWayDiv">
								<div class="payWay-div">
									<p>من فضلك قم بأختيار طريقة الدفع</p>
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-6">
											<button class="btn pay-btn pay-btn-1">PayPal</button>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<button class="btn pay-btn pay-btn-2">ApplePay</button>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<button class="btn pay-btn pay-btn-3">بطاقة ائتمانية</button>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-6">
											<button class="btn pay-btn pay-btn-4">تحويل بنكي</button>
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
@section('js')
<script>
	$(document).ready(function () {
		$("#finishCartBuying").click(function () {
			$("#payWayDiv").slideToggle("fast");
		});
	});
</script>
@endsection