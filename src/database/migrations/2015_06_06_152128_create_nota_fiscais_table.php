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
		Schema::create('nota_fiscais', function(Blueprint $table)
		{
			$table->increments('id');

            $table->date('data_emissao')->nullable();

            $table->integer('venda_id')->unsigned()->nullable();
            $table->foreign('venda_id')->references('id')->on('vendas');

            $table->string('chave')->nullable();
            $table->integer('modelo')->nullable();
            $table->integer('numero')->nullable();
            $table->integer('serie')->nullable();
            $table->string('versao')->nullable();
            $table->string('path_xml')->nullable();

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
		Schema::drop('nota_fiscais');
	}

}
