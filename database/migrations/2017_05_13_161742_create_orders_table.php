<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_detail_id')->unsigned()->default(0);
			$table->integer('customer_id');
			$table->text('data_cache', 65535);
			$table->bigInteger('total_sum');
			$table->timestamps();
			$table->integer('coupon_discount')->nullable();
			$table->string('coupon_code')->nullable();
			$table->string('payment_method');
			$table->integer('status');
			$table->primary(['id','order_detail_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
