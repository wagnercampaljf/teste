<?php

namespace Teste\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function produto()
    {
        return $this->belongsTo('Teste\Models\Fornecedor');
    }

    protected $fillable = ['id', 'nome', 'preco', 'tipo', 'fornecedor_id', 'created_at', 'updated_at'];
}
