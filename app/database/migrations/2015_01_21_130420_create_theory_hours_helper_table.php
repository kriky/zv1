<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTheoryHoursHelperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('theory_hours_helper', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('no_category')->nullable();
			$table->string('AM')->nullable();
			$table->string('A1')->nullable();
			$table->string('A2')->nullable();
			$table->string('A')->nullable();
			$table->string('B')->nullable();
			$table->string('BE')->nullable();
			$table->string('C1')->nullable();
			$table->string('C1E')->nullable();
			$table->string('C')->nullable();
			$table->string('CE')->nullable();
			$table->string('D1')->nullable();
			$table->string('D1E')->nullable();
			$table->string('D')->nullable();
			$table->string('DE')->nullable();
			$table->string('F')->nullable();
			$table->string('G')->nullable();
			$table->string('H')->nullable();
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
		Schema::drop('theory_hours_helper');
	}

}
