<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('cnpj');
            $table->date('data_da_empresa');
            $table->timestamps();
        });
        Schema::create('produtos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->float('preco');
            $table->string('tipo');
            $table->integer('fornecedor_id')->unsigned();
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
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
        Schema::drop('fornecedores');
        Schema::drop('produtos');
    }
}
