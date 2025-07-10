<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Permite atribuição em massa
    protected $fillable = ['nome', 'preco', 'categoria_id'];

    // Converte automaticamente os tipos de dados
    protected $casts = [
        'preco' => 'float',
        'categoria_id' => 'integer',
    ];

    // Relacionamento com Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
