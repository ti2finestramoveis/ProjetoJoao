<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Especificar quais campos vou usar
    protected $fillable = ['nome', 'valor', 'estoque', 'descricao', 'imagem', 'promocao', 'promocaovalor'];

    public function variacoe()
    {
        return $this->hasMany(VariacoeProduto::class, 'id_produto');

    }


}