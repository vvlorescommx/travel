<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConceptosViajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conceptosViajes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('idViaje')->nullable();
			$table->integer('idEtiqueta')->nullable();
			$table->integer('numDias')->nullable();
			$table->integer('numNoches')->nullable();
			$table->integer('precioUnitario')->nullable();
			$table->integer('subtotal')->nullable();
			$table->integer('iva')->nullable();
			$table->integer('total')->nullable();
			$table->integer('divisa')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conceptosViajes');
	}

}
