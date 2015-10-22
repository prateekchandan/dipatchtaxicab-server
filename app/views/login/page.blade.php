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

					<h1>LOGIN</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Login</li>
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
									<h2 class="size-20">Enter your email id and passowrd</h2>
								</div>

								<form class="nomargin" method="post" action="#" autocomplete="off" onsubmit="return false;">
									<div class="clearfix">
										
										<!-- Email -->
										<div class="form-group">
											<input type="text" name="email" class="form-control" placeholder="Email" required="" id="email">
										</div>
										
										<!-- Password -->
										<div class="form-group">
											<input type="password" name="password" class="form-control" placeholder="Password" required="" id="password">
										</div>
											
									</div>
									
									<div class="row">
										
										<div class="col-md-6 col-sm-6 col-xs-6">
											
											<!-- Inform Tip -->                                        
											<div class="form-tip pt-20">
												<a class="no-text-decoration size-13 margin-top-10 block" href="{{ action('RemindersController@getRemind') }}">Forgot Password?</a>
											</div>
											
										</div>
										
										<div class="col-md-6 col-sm-6 col-xs-6 text-right">

											<button class="btn btn-info" onclick="try_reg()">REGISTER</button>
											<button class="btn btn-primary" onclick="try_login()">LOG IN</button>

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
	function validate() {
		var $email = $('#email'); //change form to id or containment selector
		var $password = $('#password'); //change form to id or containment selector
		var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
		if ($email.val() == '' || !re.test($email.val()))
		{
			$email.parent().addClass('has-error');
		    $('#error_msg').html("Please enter a valid email address");
			$('#error_msg').css("display","block");
		    return false;
		}

		if($password.val().length < 4){
			$passowrd.parent().addClass('has-error');
		    $('#error_msg').html("Password must contain atleast 4 characters");
			$('#error_msg').css("display","block");
		    return false;
		}
		$email.parent().removeClass('has-error');
		$password.parent().removeClass('has-error');
		return true;
	}
	function try_login () {
		if(!validate()){
			return;
		}
		jQuery("#preloader").css("display","block");
		jQuery.ajax({
			url:'{{URL::Route("login")}}',
			type:'post',
			data:$('form').serialize(),
			success:function(data){
				if(data.error==1){
					$('#error_msg').html(data.message);
					$('#error_msg').css("display","block");
				}else{
					location.reload();
				}
				jQuery("#preloader").css("display","none");
			},
			error:function(){
				$('#error_msg').html("Server Error Occured!!");
				$('#error_msg').css("display","block");
				jQuery("#preloader").css("display","none");
			}
		});
	}

	function try_reg () {
		if(!validate()){
			return;
		}
		jQuery("#preloader").css("display","block");
		jQuery.ajax({
			url:'{{URL::Route("register")}}',
			type:'post',
			data:$('form').serialize(),
			success:function(data){
				if(data.error==1){
					$('#error_msg').html(data.message);
					$('#error_msg').css("display","block");
				}else{
					location.reload();
				}
				jQuery("#preloader").css("display","none");
			},
			error:function(){
				$('#error_msg').html("Server Error Occured!!");
				$('#error_msg').css("display","block");
				jQuery("#preloader").css("display","none");
			}
		});
	}
</script>
@endsection


