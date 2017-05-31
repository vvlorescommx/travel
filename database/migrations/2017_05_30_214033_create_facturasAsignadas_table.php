<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturasAsignadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facturasAsignadas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('UUID')->nullable();
			$table->integer('rfcEmisor')->nullable();
			$table->integer('monto')->nullable();
			$table->integer('idusuario')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facturasAsignadas');
	}

}
