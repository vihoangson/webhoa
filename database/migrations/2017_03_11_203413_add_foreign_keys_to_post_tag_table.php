<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('post_tag', function(Blueprint $table)
		{
			$table->foreign('post_id')->references('id')->on('posts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tag_id')->references('id')->on('tags')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post_tag', function(Blueprint $table)
		{
			$table->dropForeign('post_tag_post_id_foreign');
			$table->dropForeign('post_tag_tag_id_foreign');
		});
	}

}
