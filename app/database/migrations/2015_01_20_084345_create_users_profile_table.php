<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_profiles', function(Blueprint $table)
		{
			$table->increments('id');
                                                                  $table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                                                                  $table->string('ime');
                                                                  $table->string('prezime');
                                                                  $table->string('ime_roditelja');
                                                                  $table->date('datum_rodenja');
                                                                  $table->string('adresa');
                                                                  $table->string('grad');
                                                                  $table->string('telefon');
                                                                  $table->string('mobitel');
                                                                  $table->integer('oib');
                                                                  $table->string('spol');
                                                                  $table->text('napomena');
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
		Schema::drop('users_profiles');
	}

}
