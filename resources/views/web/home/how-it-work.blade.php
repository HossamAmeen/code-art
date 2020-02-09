@extends('web.layout.app')
@section('css')
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/how-it-work.css')}}" />
@endsection
@section('content')
	<section>
		<div class="section-how-it-work">
			<div class="how-it-work">
				<div class="container-fluid">
					<div class="">
						<div class="how-it-work-div">
							<div class="how-it-work-div-body">
								<div class="how-it-work-item-hdr">
									<label class="data-cell-label-hdr">كيف يعمل الموقع</label>
									<br>
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
								{{$configration->how_work}}



							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection