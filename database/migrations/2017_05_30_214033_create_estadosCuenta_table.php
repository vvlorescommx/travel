<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadosCuentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estadosCuenta', function(Blueprint $table)
		{
			$table->integer('idMovimiento', true);
			$table->integer('descripcionMovimiento')->nullable();
			$table->integer('Fecha')->nullable();
			$table->integer('Folio')->nullable();
			$table->integer('depositoPago')->nullable();
			$table->integer('comprobación')->nullable();
			$table->integer('status')->nullable();
			$table->integer('etiquetaPersonal')->nullable();
			$table->integer('facturaAsociada')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estadosCuenta');
	}

}
