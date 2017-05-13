<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_post', function(Blueprint $table)
		{
			$table->integer('group_id')->unsigned()->default(0);
			$table->integer('post_id')->unsigned()->default(0)->index('post_id');
			$table->timestamps();
			$table->primary(['group_id','post_id']);
			$table->index(['group_id','post_id'], 'group_id_post_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_post');
	}

}
