<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPetsAndPettypesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pets', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('age');
			$table->integer('pettype_id')->nullable();
		});

		Schema::create('pettypes', function($table) {
			$table->increments('id');
			$table->string('name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pets');
		Schema::drop('pettypes');
	}

}
