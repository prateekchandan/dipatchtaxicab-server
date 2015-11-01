@extends('template')

@section('content')
			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			<section class="page-header page-header-xs">
				<div class="container">

					<h1>Edit Picture</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Edit Pictures</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




		<!-- -->
			<section>
				<div class="container">

					<div id="portfolio" class="portfolio-gutter">
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-primary"><i class="fa fa-check"></i> Submit Pictures</button>
								</div>
							</div>

							<div class="row mix-grid">

								
								<div class="col-md-3 col-sm-3 "><!-- item -->

									<div class="item-box">
										<input type="file" id="pic-file" required="" name="pic" accept="image/*" class="img-file" data-img="pic-img" style="display:none">
										<figure>
											<span class="item-hover">
												<span class="overlay dark-5"></span>
												<span class="inner">
													<!-- details -->
													<a class="ico-rounded" href="#" onclick="return addfile('pic');" >
														<span class="fa fa-plus size-20"></span>
													</a>

												</span>

											</span>
											<img class="img-responsive" id="pic-img" src="{{URL::asset('HTML/assets/images/tbg.png')}}" width="600" height="399" alt="">
										</figure>
										<div class="item-box-desc" style="padding-top: 29px;">
											<h3>Your Image</h3>
										</div>
									</div>


								</div><!-- /item -->

								<div class="col-md-3 col-sm-3 "><!-- item -->
									<div class="item-box">
										<input type="file" required="" id="cabpic-file" name="cabpic" accept="image/*" class="img-file" data-img="cabpic-img" style="display:none">
										<figure>
											<span class="item-hover">
												<span class="overlay dark-5"></span>
												<span class="inner">
													<!-- details -->
													<a class="ico-rounded" href="#" onclick="return addfile('cabpic');" >
														<span class="fa fa-plus size-20"></span>
													</a>

												</span>

											</span>
											<img class="img-responsive" id="cabpic-img" src="{{URL::asset('HTML/assets/images/tbg.png')}}" width="600" height="399" alt="">
										</figure>
										<div class="item-box-desc" style="padding-top: 29px;">
											<h3>Cab Image</h3>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-3 "><!-- item -->
									<div class="item-box">
										<input type="file"  required="" id="cli-file" name="cab_license" accept="image/*" class="img-file" data-img="cli-img" style="display:none">
										<figure>
											<span class="item-hover">
												<span class="overlay dark-5"></span>
												<span class="inner">
													<!-- details -->
													<a class="ico-rounded" href="#" onclick="return addfile('cli');" >
														<span class="fa fa-plus size-20"></span>
													</a>

												</span>

											</span>
											<img class="img-responsive" id="cli-img" src="{{URL::asset('HTML/assets/images/tbg.png')}}" width="600" height="399" alt="">
										</figure>
										<div class="item-box-desc" style="padding-top: 29px;">
											<h3>TaxiCab License</h3>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-3 "><!-- item -->
									<div class="item-box">
										<input type="file" required="" id="dli-file" name="driving_license" accept="image/*" class="img-file" data-img="dli-img" style="display:none">
										<figure>
											<span class="item-hover">
												<span class="overlay dark-5"></span>
												<span class="inner">
													<!-- details -->
													<a class="ico-rounded" href="#" onclick="return addfile('dli');" >
														<span class="fa fa-plus size-20"></span>
													</a>

												</span>

											</span>
											<img class="img-responsive" id="dli-img" src="{{URL::asset('HTML/assets/images/tbg.png')}}" width="600" height="399" alt="">
										</figure>
										<div class="item-box-desc" style="padding-top: 29px;">
											<h3>Driving License Image</h3>
										</div>
									</div>
								</div>

							</div>
						</form>
					</div>
					
				</div>
			</section>
			<!-- / -->




@endsection


@section('script')
<script type="text/javascript">
	function addfile (div) {
		$('#'+div+"-file").click();
		return false;
	}

	function readURL(input) {

	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#'+$(input).data('img')).attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$('.img-file').change(function(){
	    readURL(this);
	});
</script>
@endsection