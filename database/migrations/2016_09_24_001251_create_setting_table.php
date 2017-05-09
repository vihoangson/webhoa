<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',20);
            $table->string('setting_key',100);
            $table->text('setting_value')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('data')->nullable();
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
        Schema::drop('settings');
    }
}
