<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Usuarios', function(Blueprint $table)
		{
			$table->integer('idUsuario', true);
			$table->string('nombresUsuario', 50);
			$table->string('apellidosUsuario', 50);
			$table->string('telefonoUsuario', 15);
			$table->string('rfcUsuario', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Usuarios');
	}

}
