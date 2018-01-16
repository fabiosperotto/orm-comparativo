<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pedido extends Eloquent
{

    protected $fillable = ['descricao'];

    
    public function itens()
    {
        return $this->hasMany('ItemPedido', 'id_pedido', 'id');
    }

}
