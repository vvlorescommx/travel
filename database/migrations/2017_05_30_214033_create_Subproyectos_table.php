<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubproyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Subproyectos', function(Blueprint $table)
		{
			$table->integer('idSubproyecto', true);
			$table->string('nombreSubproyecto')->nullable();
			$table->integer('idProyecto')->nullable()->index('idProyecto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Subproyectos');
	}

}
