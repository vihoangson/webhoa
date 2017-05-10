<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImageProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image_product', function(Blueprint $table)
		{
			$table->integer('image_id')->unsigned()->default(0);
			$table->integer('product_id')->unsigned()->default(0)->index('product_id');
			$table->timestamps();
			$table->primary(['image_id','product_id']);
			$table->index(['image_id','product_id'], 'image_id_product_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('image_product');
	}

}
