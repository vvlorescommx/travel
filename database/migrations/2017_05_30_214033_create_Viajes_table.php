<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Viajes', function(Blueprint $table)
		{
			$table->integer('idViaje', true);
			$table->integer('idProyecto')->nullable()->index('idProyecto');
			$table->integer('idSubproyecto')->nullable()->index('idSubproyecto');
			$table->integer('idViajero')->nullable();
			$table->string('idAcompañantes', 50)->nullable();
			$table->date('fechaInicio');
			$table->date('fechaFin')->nullable();
			$table->integer('duración')->nullable();
			$table->float('efectivoNalSolicitado', 10, 0)->nullable();
			$table->float('depositoNalSolicitado', 10, 0)->nullable();
			$table->float('totalNalSolicitado', 10, 0)->nullable();
			$table->float('efectivoNalAutorizado', 10, 0)->nullable();
			$table->float('depositoNalAutorizado', 10, 0)->nullable();
			$table->float('totalNalAutorizado', 10, 0)->nullable();
			$table->float('efectivoExtranjeroSolicitado', 10, 0)->nullable();
			$table->float('depositoExtranjeroSolicitado', 10, 0)->nullable();
			$table->float('totalExtranjeroSolicitado', 10, 0)->nullable();
			$table->float('efectivoExtranjeroAutorizado', 10, 0)->nullable();
			$table->integer('depositoExtranjeroAutorizado')->nullable();
			$table->integer('totalExtranjeroAutorizado')->nullable();
			$table->integer('idSolicitante')->nullable();
			$table->integer('idAutoriza')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Viajes');
	}

}
