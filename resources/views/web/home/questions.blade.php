@extends('web.layout.app')
@section('css')
<!-- about-us -->
<link rel="stylesheet" href="{{asset('web/assets/css/questions.css')}}" />
@endsection
@section('content')
	<section>
		<div class="section-questions">
			<div class="questions">
				<div class="">
					<div class="questions-div">
						<div class="questions-div-body">

							<div class="item">
								<div class="data-cell">
									<div class="questions-item-hdr">
										<label class="data-cell-label-hdr">الأسئلة الشائعه</label>
									</div>
									@foreach ($categories as $item)
									<div class="questions-section-div">
										<p class="hdr-section"><b>{{$item->name}}</b></p>
										<div class="section-div">
											<div class="accordion section-div-accordion" id="accordionExample-1">
												@foreach ($item->questions as $question)
												<div class="card section-item">
													<div class="card-header section-item-hdr" id="{{$question->id}}">
														<h2 class="mb-0">
															<button class="btn btn-link collapsed" type="button"
																data-toggle="collapse" data-target="#collapse1-{{$question->id}}"
																aria-expanded="true" aria-controls="collapseOne">
																{{$question->question}}
																<i class="fas fa-plus"></i>
															</button>
														</h2>
													</div>
													<div id="collapse1-{{$question->id}}" class="collapse section-item-body-div"
														aria-labelledby="{{$question->id}}" data-parent="#accordionExample-1">
														<div class="card-body section-item-body">
														{{$question->answer}}
														</div>
													</div>
												</div>
												@endforeach
												
												
											</div>
										</div>
									</div>
									@endforeach
									



									{{-- <div class="questions-section-div">
										<p class="hdr-section"><b>الرصيد والمعاملات المالية </b></p>
										<div class="section-div">
											<div class="accordion section-div-accordion" id="accordionExample-3">
												<div class="card section-item">
													<div class="card-header section-item-hdr" id="headingOne">
														<h2 class="mb-0">
															<button class="btn btn-link collapsed" type="button"
																data-toggle="collapse" data-target="#collapse2-1"
																aria-expanded="true" aria-controls="collapseOne">
																ماذا يعنى كذا ؟<i class="fas fa-plus"></i>
															</button>
														</h2>
													</div>
													<div id="collapse2-1" class="collapse section-item-body-div"
														aria-labelledby="headingOne" data-parent="#accordionExample-3">
														<div class="card-body section-item-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad
															squid. 3 wolf moon officia aute, non cupidatat skateboard
															dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
															aliqua put a bird on it squid
															single-origin coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft
															beer labore wes anderson cred nesciunt sapiente ea proident.
															Ad vegan excepteur butcher
															vice lomo. Leggings occaecat craft beer farm-to-table, raw
															denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
												<div class="card section-item">
													<div class="card-header section-item-hdr" id="headingTwo">
														<h2 class="mb-0">
															<button class="btn btn-link collapsed" type="button"
																data-toggle="collapse" data-target="#collapse2-2"
																aria-expanded="false" aria-controls="collapseTwo">
																ماذا يعنى كذا ؟<i class="fas fa-plus"></i>
															</button>
														</h2>
													</div>
													<div id="collapse2-2" class="collapse section-item-body-div"
														aria-labelledby="headingTwo" data-parent="#accordionExample-3">
														<div class="card-body section-item-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad
															squid. 3 wolf moon officia aute, non cupidatat skateboard
															dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
															aliqua put a bird on it squid
															single-origin coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft
															beer labore wes anderson cred nesciunt sapiente ea proident.
															Ad vegan excepteur butcher
															vice lomo. Leggings occaecat craft beer farm-to-table, raw
															denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
												<div class="card section-item">
													<div class="card-header section-item-hdr" id="headingThree">
														<h2 class="mb-0">
															<button class="btn btn-link collapsed" type="button"
																data-toggle="collapse" data-target="#collapse2-3"
																aria-expanded="false" aria-controls="collapseThree">
																ماذا يعنى كذا ؟<i class="fas fa-plus"></i>
															</button>
														</h2>
													</div>
													<div id="collapse2-3" class="collapse section-item-body-div"
														aria-labelledby="headingThree"
														data-parent="#accordionExample-3">
														<div class="card-body section-item-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad
															squid. 3 wolf moon officia aute, non cupidatat skateboard
															dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
															aliqua put a bird on it squid
															single-origin coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft
															nesciunt sapiente ea proident. Ad vegan excepteur butcher
															vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt
															you probably haven't heard of
															them accusamus beer labore wes anderson cred nesciunt
															sapiente ea proident. Ad vegan
															excepteur butcher
															vice lomo. Leggings occaecat craft beer farm-to-table, raw
															denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="questions-section-div">
										<p class="hdr-section"><b>أمور عامة</b>
										</p>
										<div class="section-div">
											<div class="accordion section-div-accordion" id="accordionExample-2">
												<div class="card section-item">
													<div class="card-header section-item-hdr" id="headingOne">
														<h2 class="mb-0">
															<button class="btn btn-link collapsed" type="button"
																data-toggle="collapse" data-target="#collapse3-1"
																aria-expanded="true" aria-controls="collapseOne">
																ماذا يعنى كذا ؟<i class="fas fa-plus"></i>
															</button>
														</h2>
													</div>
													<div id="collapse3-1" class="collapse section-item-body-div"
														aria-labelledby="headingOne" data-parent="#accordionExample-2">
														<div class="card-body section-item-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad
															squid. 3 wolf moon officia aute, non cupidatat skateboard
															dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
															aliqua put a bird on it squid
															single-origin coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft
															beer labore wes anderson cred nesciunt sapiente ea proident.
															Ad vegan excepteur butcher
															vice lomo. Leggings occaecat craft beer farm-to-table, raw
															denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
												<div class="card section-item">
													<div class="card-header section-item-hdr" id="headingTwo">
														<h2 class="mb-0">
															<button class="btn btn-link collapsed" type="button"
																data-toggle="collapse" data-target="#collapse3-2"
																aria-expanded="false" aria-controls="collapseTwo">
																ماذا يعنى كذا ؟<i class="fas fa-plus"></i>
															</button>
														</h2>
													</div>
													<div id="collapse3-2" class="collapse section-item-body-div"
														aria-labelledby="headingTwo" data-parent="#accordionExample-2">
														<div class="card-body section-item-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad
															squid. 3 wolf moon officia aute, non cupidatat skateboard
															dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
															aliqua put a bird on it squid
															single-origin coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft
															beer labore wes anderson cred nesciunt sapiente ea proident.
															Ad vegan excepteur butcher
															vice lomo. Leggings occaecat craft beer farm-to-table, raw
															denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
												<div class="card section-item">
													<div class="card-header section-item-hdr" id="headingThree">
														<h2 class="mb-0">
															<button class="btn btn-link collapsed" type="button"
																data-toggle="collapse" data-target="#collapse3-3"
																aria-expanded="false" aria-controls="collapseThree">
																ماذا يعنى كذا ؟<i class="fas fa-plus"></i>
															</button>
														</h2>
													</div>
													<div id="collapse3-3" class="collapse section-item-body-div"
														aria-labelledby="headingThree"
														data-parent="#accordionExample-2">
														<div class="card-body section-item-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad
															squid. 3 wolf moon officia aute, non cupidatat skateboard
															dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
															aliqua put a bird on it squid
															single-origin coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft
															nesciunt sapiente ea proident. Ad vegan excepteur butcher
															vice lomo. Leggings occaecat
															craft beer farm-to-table, raw denim aesthetic synth nesciunt
															you probably haven't heard of
															them accusamus beer labore wes anderson cred nesciunt
															sapiente ea proident. Ad vegan
															excepteur butcher
															vice lomo. Leggings occaecat craft beer farm-to-table, raw
															denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>

							</div>
						</div>
						<img class="question-bg-img" src="{{asset('web/assets/imgs/questions.png')}}">

					</div>
				</div>
			</div>
		</div>
	</section>
@endsection