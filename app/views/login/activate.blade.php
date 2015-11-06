@extends('template')
@section('content')

					<section style="padding:10px;margin-top:100px;margin-bottom:300px;border:0px">
						<div class="alert alert-danger alert-dismissible" role="alert" style="margin:0px">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  Your Email Id is not verified. Please visit your email to activate your account.
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-info btn-lg btn-block" onclick="resend_email()">Resend Activation email</button>
							</div>
							
						</div>
					</section>
				


@endsection

@section('script')
<script type="text/javascript">
	function resend_email() {
		jQuery("#preloader").css("display","block");
		jQuery.ajax({
			url:'{{URL::Route("resend")}}',
			type:'post',
			success:function(data){
				alert(data.message);
				jQuery("#preloader").css("display","none");
			},
			error:function(){
				alert("Server Error Occured!!");
				jQuery("#preloader").css("display","none");
			}
		});
	}
</script>
@endsection