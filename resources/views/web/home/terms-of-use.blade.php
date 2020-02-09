@extends('web.layout.app')
@section('css')
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/terms-of-use.css')}}" />
@endsection
@section('content')
	<section>
		<div class="section-terms-of-use">
			<div class="terms-of-use">
				<div>
					<div class="">
						<div class="terms-of-use-div-hdr">
							<p class="terms-of-use-div-hdr-text">
								شروط الاستخدام
							</p>
							{{-- <span class="terms-lastupdated-date">آخر تحديث 10-10-2019</span> --}}
						</div>
						<div class="terms-of-use-div">
							<div class="terms-of-use-div-body">

								<div class="item">
									<div class="data-cell">
										<div class="terms-of-use-item-hdr">
											<label class="data-cell-label-hdr">شروط التسجيل</label>
										</div>
										<div class="terms-of-use-section-div">
											{{$configration->registration_conditions}}
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