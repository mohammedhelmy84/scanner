<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('profile_theme', 255);
			$table->string('name', 255);
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}