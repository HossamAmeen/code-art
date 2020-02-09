
@extends('web.layout.app')
@section('css')
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/privacy.css')}}" />
@endsection
@section('content')
	<section>
		<div class="section-privacy">
			<div class="privacy">
				<div>
					<div class="">
						<div class="privacy-div-hdr">
							<p class="privacy-div-hdr-text">
								بيان الخصوصية
							</p>
						
						</div>
						<div class="privacy-div">
							<div class="privacy-div-body">

								<div class="item">
									<div class="data-cell">
										<div class="privacy-item-hdr">
											<label class="data-cell-label-hdr">شروط التسجيل</label>
										</div>
										<div class="privacy-section-div">
											{{$configration->privacy}}

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