<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ItemPedido extends Eloquent
{
    protected $table = 'itens_pedidos';
    protected $fillable = ['id_produto', 'id_pedido', 'quantidade'];
    public $timestamps = false; //desativa timestamps

    public function produto()
    {
        return $this->hasOne('Produto', 'id', 'id_produto');
    }

    public function pedido()
    {
        return $this->hasOne('Pedido', 'id', 'id_pedido');
    }
}