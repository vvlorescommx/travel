<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Asientos', function(Blueprint $table)
		{
			$table->integer('idAsiento', true);
			$table->integer('idMovimiento')->nullable();
			$table->integer('descripcionAsiento')->nullable();
			$table->integer('cuenta')->nullable();
			$table->integer('debito')->nullable();
			$table->integer('credito')->nullable();
			$table->integer('referencia')->nullable();
			$table->integer('deducible')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Asientos');
	}

}
