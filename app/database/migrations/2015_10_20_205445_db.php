<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Db extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('customer');
		Schema::dropIfExists('driver');
		Schema::dropIfExists('business');
		Schema::dropIfExists('users');

		Schema::create('users', function($table)
		{
			$table->engine = 'InnoDB';
		    $table->increments('id');
		    $table->string('email',500);
		    $table->string('password',500);
		    $table->string('type',50);
		    $table->string('remember_token',500)->nullable();
		    $table->string('activation_token',500)->nullable();
		    $table->integer('activated')->default(0);
		    $table->timestamps();
		});

		Schema::create('customer', function($table)
		{
			$table->engine = 'InnoDB';
			$table->integer('id')->unsigned();
			$table->primary('id');
			$table->foreign('id')->references('id')->on('users');
			$table->string('first_name',500)->nullable();
			$table->string('phone',50)->nullable();
			$table->string('last_name',500)->nullable();
			$table->string('home_address',2000)->nullable();
			$table->string('credit_card',50)->nullable();
			$table->string('cvv',5)->nullable();
			$table->string('expiry_date',25-)->nullable();
			$table->timestamps();
		});

		Schema::create('driver', function($table)
		{
			$table->engine = 'InnoDB';
			$table->integer('id')->unsigned();
			$table->primary('id');
			$table->foreign('id')->references('id')->on('users');
			$table->string('first_name',500)->nullable();
			$table->string('phone',50)->nullable();
			$table->string('last_name',500)->nullable();
			$table->string('home_address',2000)->nullable();
			$table->string('credit_card',50)->nullable();
			$table->string('cvv',5)->nullable();
			$table->string('expiry_date',25-)->nullable();
			$table->string('car_type',50)->nullable();
			$table->string('cab_no',50)->nullable();
			$table->double('flag')->default(0);
			$table->double('rate')->default(0);
			$table->double('hour')->default(0);
			$table->string('pic',500)->nullable();
			$table->string('cabpic',500)->nullable();
			$table->string('cab_license',500)->nullable();
			$table->string('driving_license',500)->nullable();
			$table->timestamps();
		});

		Schema::create('business', function($table)
		{
			$table->integer('id')->unsigned();
			$table->primary('id');
			$table->foreign('id')->references('id')->on('users');
			$table->string('business_name',500)->nullable();
			$table->string('phone',50)->nullable();
			$table->string('home_address',2000)->nullable();
			$table->string('credit_card',50)->nullable();
			$table->string('cvv',5)->nullable();
			$table->string('expiry_date',25-)->nullable();
			$table->string('type',150)->nullable();
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
