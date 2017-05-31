<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToViajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Viajes', function(Blueprint $table)
		{
			$table->foreign('idViaje', 'Viajes_ibfk_1')->references('idUsuario')->on('Usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Viajes', function(Blueprint $table)
		{
			$table->dropForeign('Viajes_ibfk_1');
		});
	}

}
