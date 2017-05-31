<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatEtiquetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catEtiquetas', function(Blueprint $table)
		{
			$table->integer('idEtiqueta', true);
			$table->string('nombreEtiqueta', 150)->nullable();
			$table->integer('tipo')->nullable()->comment('1 para predeterminada, 2 para personalizada');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('catEtiquetas');
	}

}
