@extends('template')

@section('content')
			<section class="page-header page-header-xs">
				<div class="container">

					<h1>Home</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li class="active"><a href="#">Home</a></li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
<section>
	<div class="container">
		<h2>User Details</h2>
		<div class=" sky-form col-md-12">
			<div class="form-group row">
				<label class="col-md-3"><strong>Phone Number</strong></label>
				<label class="input col-md-9">
					{{$data->phone}}
				</label>
			</div>
			<div class="form-group row">
				<label class="col-md-3"><strong>Email</strong></label>
				<label class="input col-md-9">
					{{$user->email}}
				</label>
			</div>
			<div class="form-group row">
				<label class="col-md-3"><strong>User Type</strong></label>
				<label class="input col-md-9">
					{{$user->type}}
				</label>
			</div>
			<div class="form-group row">
				<label class="col-md-3"><strong>Credit Card</strong></label>
				<label class="input col-md-9">
					{{(strlen($data->credit_card)>4)?'**** **** **** '.substr($data->credit_card, -4):$data->credit_card}}
				</label>
			</div>
		@if($user->type == "business")
			<div class="form-group row">
				<label class="col-md-3"><strong>Business Name</strong></label>
				<label class="input col-md-9">
					{{$data->business_name}}
				</label>
			</div>
		@else
			<div class="form-group row">
				<label class="col-md-3"><strong>Name</strong></label>
				<label class="input col-md-9">
					{{$data->first_name}} {{$data->last_name}}
				</label>
			</div>
		@endif
			<div class="form-group row">
				<label class="col-md-3"><strong>Address</strong></label>
				<label class="input col-md-9">
					{{$data->home_address}}
				</label>
			</div>
		@if($user->type == "driver")
			<div class="form-group row">
				<label class="col-md-3"><strong>Car Type</strong></label>
				<label class="input col-md-9">
					{{$data->car_type}}
				</label>
			</div>
			<div class="form-group row">
				<label class="col-md-3"><strong>Cab Number</strong></label>
				<label class="input col-md-9">
					{{$data->cab_no}}
				</label>
			</div>
			<div class="form-group row">
				<label class="col-md-3"><strong>Flag (in $)</strong></label>
				<label class="input col-md-9">
					{{number_format((float)$data->flag, 2, '.', '')}}
				</label>
			</div>
			<div class="form-group row">
				<label class="col-md-3"><strong>Rate (in $/mile)</strong></label>
				<label class="input col-md-9">
					{{number_format((float)$data->rate, 2, '.', '')}}
				</label>
			</div>
			<div class="form-group row">
				<label class="col-md-3"><strong>Hour (in $/hour)</strong></label>
				<label class="input col-md-9">
					{{number_format((float)$data->hour, 2, '.', '')}}
				</label>
			</div>


			<div class="row mix-grid">

				
				<div class="col-md-3 col-sm-3 "><!-- item -->

					<div class="item-box">
						<figure>
							<img class="img-responsive" id="pic-img" src="{{URL::asset($data->pic)}}" width="600" height="399" alt="">
						</figure>
						<div class="item-box-desc" style="padding-top: 29px;">
							<h3>Your Image</h3>
						</div>
					</div>


				</div><!-- /item -->

				<div class="col-md-3 col-sm-3 "><!-- item -->
					<div class="item-box">
						<figure>
							<img class="img-responsive" id="cabpic-img" src="{{URL::asset($data->cabpic)}}" width="600" height="399" alt="">
						</figure>
						<div class="item-box-desc" style="padding-top: 29px;">
							<h3>Cab Image</h3>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 "><!-- item -->
					<div class="item-box">
						<figure>
							
							<img class="img-responsive" id="cli-img" src="{{URL::asset($data->cab_license)}}" width="600" height="399" alt="">
						</figure>
						<div class="item-box-desc" style="padding-top: 29px;">
							<h3>Cab License Image</h3>
						</div>
					</div>
					<div>
						<strong>Cab License Expiry Date:</strong> <label>{{$data->cab_license_expiry_date}}</label>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 "><!-- item -->
					<div class="item-box">
						<figure>
							
							<img class="img-responsive" id="dli-img" src="{{URL::asset($data->driving_license)}}" width="600" height="399" alt="">
						</figure>
						<div class="item-box-desc" style="padding-top: 29px;">
							<h3>Driving License Image</h3>
						</div>
					</div>
					<div>
						<strong>Driving License Expiry Date:</strong> <label>{{$data->driving_license_expiry_date}}</label>
					</div>
				</div>

							</div>

		@endif
		</div>
	</div>
</section>
@endsection