<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingTable extends Migration {

	public function up()
	{
		Schema::create('setting', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('logo', 255)->nullable();
			$table->text('description')->nullable();
			$table->string('phone', 255)->nullable();
			$table->string('email')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('setting');
	}
}