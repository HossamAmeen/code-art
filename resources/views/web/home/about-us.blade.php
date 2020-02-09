@extends('web.layout.app')
@section('css')
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/about-us.css')}}" />
@endsection
@section('content')
	<section>
		<div class="section-about-us">
			<div class="about-us">
				<div class="container-fluid">
					<div class="">
						<div class="about-us-div">
							<div class="about-us-div-body">

								<div class="item">
									<div class="data-cell">
										<div class="about-us-item-hdr">
											<label class="data-cell-label-hdr-top">حول موقع كود آرت</label>
											<br>
											<label class="data-cell-label-hdr">من هي كود آرت</label>
										</div>
										<div class="about-us-section-div">
											{{$configration->about_us}}
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