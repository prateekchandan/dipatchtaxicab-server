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

					<h1>Forget Password</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Forget Password</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<div class="col-md-6 col-md-offset-3">

							<!-- ALERT -->
							<div class="alert alert-mini alert-danger margin-bottom-30" id="error_msg" style="display:none">
							</div><!-- /ALERT -->

							<div class="box-static box-border-top padding-30">
								<div class="box-title margin-bottom-30">
									<h2 class="size-20">Enter your email id </h2>
								</div>

								<form class="nomargin" method="post" action="{{ action('RemindersController@postRemind') }}" autocomplete="off">
									<input type="hidden" value="Send Reminder">
									<div class="clearfix">
										
										<!-- Email -->
										<div class="form-group">
											<input type="text" name="email" class="form-control" placeholder="Email" required="" id="email">
										</div>
										
									
											
									</div>
									
									<div class="row">
										
										
										<div class="col-md-12 col-sm-12 col-xs-12 text-right">

											<button class="btn btn-primary">SUBMIT</button>

										</div>
										
									</div>
									
								</form>

							</div>
							

						</div>
					</div>
					
				</div>
			</section>
			<!-- / -->

@endsection
