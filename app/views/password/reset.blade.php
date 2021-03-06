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

					<h1>Reset Password</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Reset Password</li>
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
									<h2 class="size-20">Reset Password</h2>
								</div>

								<form class="nomargin" method="post" action="{{ action('RemindersController@postReset') }}" autocomplete="off">
									<input type="hidden" name="token" value="{{ $token }}">
									<div class="clearfix">
										
										<!-- Email -->
										<div class="form-group">
											<input type="text" name="email" class="form-control" placeholder="Email" required="" id="email">
										</div>

										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Password" required="" id="pass1">
										</div>
										
										<div class="form-group">
											<input type="password" name="password_confirmation"  class="form-control" placeholder="Confirm Password" required="">
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


@section('script')

<script type="text/javascript">
	@if(Session::has('error'))
	alert("{{Session::get('error')}}");
	@endif

	@if(Session::has('status'))
	alert("{{Session::get('status')}}");
	@endif

</script>

@endsection