<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaFiscaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nota_fiscais_itens', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('venda_item_id')->unsigned();
            $table->foreign('venda_item_id')->references('id')->on('venda_items');

            $table->integer('ncm_id')->unsigned();
            $table->foreign('ncm_id')->references('id')->on('ncms');

            $table->integer('cfop_id')->unsigned();
            $table->foreign('cfop_id')->references('id')->on('cfops');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nota_fiscais_itens');
	}

}
