<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToImageProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('image_product', function(Blueprint $table)
		{
			$table->foreign('image_id', 'image_product_ibfk_1')->references('id')->on('images')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('product_id', 'image_product_ibfk_2')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('image_product', function(Blueprint $table)
		{
			$table->dropForeign('image_product_ibfk_1');
			$table->dropForeign('image_product_ibfk_2');
		});
	}

}
