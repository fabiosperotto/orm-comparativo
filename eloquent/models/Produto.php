<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Produto extends Eloquent
{
    protected $fillable = ['nome', 'valor'];

    public function pedidos()
    {
        return $this->belongsToMany('Pedido', 'itens_pedidos', 'id_produto', 'id_pedido');
    }
}