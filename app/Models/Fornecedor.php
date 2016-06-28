<?php

namespace Teste\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
	public function fornecedor(){
        return $this->hasMany('Teste\Models\Produto');
    }

    protected $table = "fornecedores";
    protected $fillable = ['nome', 'cnpj', 'data_da_empresa', 'created_at', 'updated_at'];
}
