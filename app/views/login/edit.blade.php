@extends('template')

@section('content')
<?php
	$date = new DateTime();
	$date = $date->format('Y-m-d');
	if(!$date){
		$date="2015-10-10";
	}

?>
<style type="text/css">
	select{
		    appearance: normal !important;
	    -moz-appearance: normal !important;
	    -webkit-appearance: normal !important;
	}
</style>
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

					<h1>EDIT PROFILE</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Edit Profile</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">

					<div class="row">
						<div class="col-md-6 col-md-offset-3">

							<div class="toggle toggle-transparent toggle-accordion toggle-noicon">

								<div class="toggle {{$user->type=='customer'?'active':''}}">
									<label class="size-20"><i class="glyphicon glyphicon-user"></i> &nbsp; I'm a customer</label>
									<div class="toggle-content ">


										<form class="sky-form" method="post" action="" autocomplete="off">
											<div class="clearfix">
												<input required="" type="hidden" name="type" value="customer">

												<div class="form-group">
													<label>Phone Number</label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-phone"></i>
														<input required="" type="phone" name="phone" class="phone-inp" value="{{$user->type=='customer'&&isset($data)?$data->phone:''}}">
														<b class="tooltip tooltip-bottom-right">Enter Your Phone Number</b>
													</label>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>First Name</label>
															<label class="input margin-bottom-10">
																<input required="" type="text" name="first_name" value="{{$user->type=='customer'&&isset($data)?$data->first_name:''}}">
															</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Last Name</label>
															<label class="input margin-bottom-10">
																<input required="" type="text" name="last_name" value="{{$user->type=='customer'&&isset($data)?$data->last_name:''}}">
															</label>
														</div>
													</div>
												</div>
												
												<div class="form-group">
													<label>Enter Your Home Address</label>
													<label class="input margin-bottom-10">
														<textarea name="address" required="" style="height:80px;">{{$user->type=='customer'&&isset($data)?$data->home_address:''}}</textarea>
													</label>
												</div>

												<div class="form-group">
													<label>Credit Card <small>(Optional)</small></label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-credit-card"></i>
														<input type="text" name="credit_card" class="credit_card_inp" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" value="{{$user->type=='customer'&&isset($data)?$data->credit_card:''}}">
														<b class="tooltip tooltip-bottom-right">Enter Your Credit Card Details</b>
													</label>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Expiry Date <small>(Optional)</small></label>
															<label class="input margin-bottom-10">
																<input type="date" name="expiry_date" min="{{$date}}" value="{{$user->type=='customer'&&isset($data)?$data->expiry_date:''}}">
															</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>CVV/CVV2 <small>(Optional)</small></label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-credit-card"></i>
																<input type="text" name="cvv" class="cvv_inp" pattern="[0-9]{3,4}" value="{{$user->type=='customer'&&isset($data)?$data->cvv:''}}">
																<b class="tooltip tooltip-bottom-right">3-4 Digit Number on Back of your Card</b>
															</label>
														</div>
													</div>
												</div>

											</div>

											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 text-right">

													<button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>

												</div>

											</div>

										</form>


									</div>
								</div>

								<div class="toggle {{$user->type=='driver'?'active':''}}" >
									<label class="size-20"><i class="fa fa-car"></i> &nbsp; I'm a Driver</label>
									<div class="toggle-content">

										<form class="sky-form" method="post" action="" autocomplete="off">
											<div class="clearfix">
												<input required="" type="hidden" name="type" value="driver">

												<div class="form-group">
													<label>Phone Number</label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-phone"></i>
														<input required="" type="phone" name="phone" class="phone-inp" value="{{$user->type=='driver'&&isset($data)?$data->phone:''}}">
														<b class="tooltip tooltip-bottom-right">Enter Your Phone Number</b>
													</label>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>First Name</label>
															<label class="input margin-bottom-10">
																<input required="" type="text" name="first_name" value="{{$user->type=='driver'&&isset($data)?$data->first_name:''}}">
															</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Last Name</label>
															<label class="input margin-bottom-10">
																<input required="" type="text" name="last_name" value="{{$user->type=='driver'&&isset($data)?$data->last_name:''}}">
															</label>
														</div>
													</div>
												</div>
												
												<div class="form-group">
													<label>Enter Your Home Address</label>
													<label class="input margin-bottom-10">
														<textarea name="address" required="" style="height:80px;">{{$user->type=='driver'&&isset($data)?$data->home_address:''}}</textarea>
													</label>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Car Type</label>
															<label class="input margin-bottom-10">
																<select required="" name="car_type">
																	<option value=''>Select Cab Type</option>
																	<option>Taxi Car</option>
																	<option>Taxi Van</option>
																	<option>Black Car</option>
																	<option>Black SUV</option>
																</select>
															</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Cab Number</label>
															<label class="input margin-bottom-10">
																<input required="" type="text" name="cab_no" value="{{$user->type=='driver'&&isset($data)?$data->cab_no:''}}">
															</label>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label>Flag (in $)</label>
															<label class="input margin-bottom-10">
																<input required="" type="number" name="flag" step="0.01" min="0" value="{{$user->type=='driver'&&isset($data)?$data->flag:''}}">
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Rate (in $/mile)</label>
															<label class="input margin-bottom-10">
																<input required="" type="number" name="rate" step="0.01" min="0" value="{{$user->type=='driver'&&isset($data)?$data->rate:''}}">
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label>Hour (in $/hour)</label>
															<label class="input margin-bottom-10">
																<input required="" type="number" name="hour" step="0.01" min="0" value="{{$user->type=='driver'&&isset($data)?$data->hour:''}}">
															</label>
														</div>
													</div>
												</div>

												<div class="form-group">
													<label>Credit Card <small>(Optional)</small></label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-credit-card"></i>
														<input type="text" name="credit_card" class="credit_card_inp" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" value="{{$user->type=='driver'&&isset($data)?$data->credit_card:''}}">
														<b class="tooltip tooltip-bottom-right">Enter Your Credit Card Details</b>
													</label>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Expiry Date <small>(Optional)</small></label>
															<label class="input margin-bottom-10">
																<input type="date" name="expiry_date" min="{{$date}}" value="{{$user->type=='driver'&&isset($data)?$data->expiry_date:''}}">
															</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>CVV/CVV2 <small>(Optional)</small></label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-credit-card"></i>
																<input type="text" name="cvv" class="cvv_inp" pattern="[0-9]{3,4}" value="{{$user->type=='driver'&&isset($data)?$data->cvv:''}}">
																<b class="tooltip tooltip-bottom-right">3-4 Digit Number on Back of your Card</b>
															</label>
														</div>
													</div>
												</div>

											</div>

											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 text-right">

													<button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>

												</div>

											</div>

										</form>
									</div>
								</div>

								<div class="toggle {{$user->type=='business'?'active':''}}">
									<label class="size-20"><i class="fa fa-building"></i> &nbsp; I'm own a Business</label>
									<div class="toggle-content">

										<form class="sky-form" method="post" action="" autocomplete="off">
											<div class="clearfix">
												<input required="" type="hidden" name="type" value="business">

												<div class="form-group">
													<label>Phone Number</label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-phone"></i>
														<input required="" type="phone" name="phone" class="phone-inp" value="{{$user->type=='business'&&isset($data)?$data->phone:''}}">
														<b class="tooltip tooltip-bottom-right">Enter Your Phone Number</b>
													</label>
												</div>

												<div class="form-group">
													<label>Business Name</label>
													<label class="input margin-bottom-10">
														<input required="" type="text" name="business_name" value="{{$user->type=='business'&&isset($data)?$data->business_name:''}}">
													</label>
												</div>
												
										

												<div class="form-group">
													<label>Enter Your Office Address</label>
													<label class="input margin-bottom-10">
														<textarea name="address" required="" style="height:80px;">{{$user->type=='business'&&isset($data)?$data->home_address:''}}</textarea>
													</label>
												</div>

												<div class="form-group">
													<label>Credit Card <small>(Optional)</small></label>
													<label class="input margin-bottom-10">
														<i class="ico-append fa fa-credit-card"></i>
														<input type="text" name="credit_card" class="credit_card_inp" pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" value="{{$user->type=='business'&&isset($data)?$data->credit_card:''}}">
														<b class="tooltip tooltip-bottom-right">Enter Your Credit Card Details</b>
													</label>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Expiry Date <small>(Optional)</small></label>
															<label class="input margin-bottom-10">
																<input type="date" name="expiry_date" min="{{$date}}" value="{{$user->type=='business'&&isset($data)?$data->expiry_date:''}}">
															</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>CVV/CVV2 <small>(Optional)</small></label>
															<label class="input margin-bottom-10">
																<i class="ico-append fa fa-credit-card"></i>
																<input type="text" name="cvv" class="cvv_inp" pattern="[0-9]{3,4}" value="{{$user->type=='business'&&isset($data)?$data->cvv:''}}">
																<b class="tooltip tooltip-bottom-right">3-4 Digit Number on Back of your Card</b>
															</label>
														</div>
													</div>
												</div>

											</div>

											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 text-right">

													<button class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>

												</div>

											</div>

										</form>
									</div>
								</div>

							</div>

						</div>
					</div>

				</div>
			</section>
			<!-- / -->


@endsection


@section('script')
<script type="text/javascript">
	$('.phone-inp').on('keyup',function(e) {
		var inp = $(this);
		var val = inp.val().replace(/\D/g,'');
		if(val.length > 6){
			val = val.slice(0,6)+" "+val.slice(6);
		}
		if(val.length > 3){
			val = val.slice(0,3)+" "+val.slice(3);
		}
		inp.val(val);
	})

	$('.credit_card_inp').on('keyup',function(e) {
		var inp = $(this);
		var val = inp.val().replace(/\D/g,'');
		if(val.length >16){
			val = val.slice(0,16);
		}
		if(val.length >12){
			val = val.slice(0,12)+" "+val.slice(12);
		}
		if(val.length >8){
			val = val.slice(0,8)+" "+val.slice(8);
		}
		if(val.length > 4){
			val = val.slice(0,4)+" "+val.slice(4);
		}
		inp.val(val);
	})

	$('.cvv_inp').on('keyup',function(e) {
		var inp = $(this);
		var val = inp.val().replace(/\D/g,'');
		if(val.length > 4){
			val = val.slice(0,4);
		}
		inp.val(val);
	})

</script>
@endsection