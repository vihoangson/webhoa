<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_product', function(Blueprint $table)
		{
			$table->integer('category_id')->unsigned()->default(0);
			$table->integer('product_id')->unsigned()->default(0)->index('product_id');
			$table->timestamps();
			$table->primary(['category_id','product_id']);
			$table->index(['category_id','product_id'], 'category_id_product_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category_product');
	}

}
