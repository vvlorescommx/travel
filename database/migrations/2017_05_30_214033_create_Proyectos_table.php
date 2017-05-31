<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Proyectos', function(Blueprint $table)
		{
			$table->integer('idProyecto', true);
			$table->string('nombreProyecto', 150)->nullable();
			$table->integer('idResponsable');
			$table->integer('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Proyectos');
	}

}
