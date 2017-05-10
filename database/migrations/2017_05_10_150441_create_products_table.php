<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('title');
			$table->text('summary', 65535);
			$table->string('slug', 250)->unique('slug');
			$table->integer('main_img')->nullable();
			$table->text('content', 65535);
			$table->integer('price');
			$table->integer('price_sale');
			$table->dateTime('date_begin_sale')->default('0000-00-00 00:00:00');
			$table->dateTime('date_end_sale')->default('0000-00-00 00:00:00');
			$table->integer('active')->default(0);
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
		Schema::drop('products');
	}

}
