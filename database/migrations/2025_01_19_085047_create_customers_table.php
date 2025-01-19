<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
            $table->string('email');
            $table->string('phone');
			$table->string('name');
			$table->integer('category_id')->unsigned();
			$table->string('qrcode', 255)->nullable();
			$table->string('institution')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('customers');
	}
}
