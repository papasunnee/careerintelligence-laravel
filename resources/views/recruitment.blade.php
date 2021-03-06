@extends('layouts.master')

@section('title','Recruitment')

@section('css')
	@parent
	<style type="text/css">
		.well , .btn , .form-control
		{
			border-radius: 0px ;
		}
		.lead{
			font-size : 15px ;
		}
	</style>

@endsection

@section('banner')

	<div class=" banner banner1">
		<div class="wthree-different-dot1">
			<!-- header -->
			<div class="header">
				<div class="container">
					@include('layouts.nav')
				</div>
			</div>
			<!-- //header -->
					<h2>Recruitment</h2>
		</div>
	</div>
@endsection

@section('modal')
@parent

@endsection

@section('body')

	<section class="portfolio-agileinfo" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>Sectors</h4>
					@include('specside')
				</div>
				<div class="col-md-8">
					<div class="gallery-grids">
						<div class="row">
							<div class="well" style="margin-top: 20px;">
								<h2>Recruiting now</h2>
								<hr>
									<img src="images/specmail.jpg" class="img-responsive" alt="Specialization - CI" />
								<p class="lead" style="margin-top: 20px;">
									In the complicated world of finding the best talent, our unparalleled recruiting expertise means the people you want to talk to are already talking to us.
								</p>
							</div>	
						</div>

						<div class="row">
							<div class="well" style="margin-top: 20px;">
								<p class="lead">
									To register a vacancy please click below and enter the details in the form.
								</p>
								<a href="{{ route('recruitment.create') }}" class="btn btn-warning btn-block">Recruiting Now ?</a>
							</div>	
						</div>

						<div class="row">
							<div class="well" style="margin-top: 20px;">
								<h4>Search for Candidate</h4>
								<hr>
								<p class="lead text-primary" style="margin-top: 20px;">
									Advanced Search
								</p>
								<div class="clearfix"></div>
								<div class="col-md-6">
									<label for="">
										Enter Keywords/Reference No.
									</label>
									<input type="text" class="form-control" name="">
								</div>

								<div class="col-md-6">
									<label for="">
										Enter Location
									</label>
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-md-6" style="margin-top : 10px ;">
									<input type="button" value="Search" class="btn btn-lg btn-warning" name="">
								</div>
									<div class="clearfix"></div>

							</div>	
						</div>
						

						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tab_img">
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g1.jpg" class="img-responsive" alt="Specialization - CI" />
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g2.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g3.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g3.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g4.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g4.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="tab_img">
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g5.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g5.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g6.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g6.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g9.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g9.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g7.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g7.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g8.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g8.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g12.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g12.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g10.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g10.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
											<a href="images/g11.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="images/g11.jpg" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="clearfix"> </div>
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