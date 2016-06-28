<?php

use Illuminate\Database\Seeder;

class ProdutoFornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('fornecedores')->insert([
            'nome' => str_random(10),
            'cnpj' => str_random(10),
            'data_da_empresa' => '2016-08-01'
        ]);
        DB::table('produtos')->insert([
            'nome' => str_random(10),
            'preco' => 50.6,
            'tipo' => str_random(10),
            'fornecedor_id' => 1,
        ]);
    }
}
