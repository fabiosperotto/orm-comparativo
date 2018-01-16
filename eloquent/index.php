<?php
require 'vendor/autoload.php';
require 'config/database.php';

//insercoes para teste, descomente para executar como seeds do banco
/* $produto1 = new Produto();
$produto1->nome = 'Televisão Plasma 8D Full Jedi';
$produto1->valor = 6452.90;
$produto1->save();

$produto2 = new Produto();
$produto2->nome = 'Playstation 4';
$produto2->valor = 2452.90;
$produto2->save();

$produto3 = new Produto();
$produto3->nome = 'Xbox';
$produto3->valor = 1452.90;
$produto3->save();

$pedido = new Pedido();
$pedido->descricao = 'teste de pedido';
if($pedido->save()){
    $pedido->itens()->createMany([
        ['id_produto' => 1, 'quantidade' => 1],
        ['id_produto' => 2, 'quantidade' => 1], 
    ]);
} */
//fim das insercoes para teste

dd(Pedido::first()->itens()->first()->produto);

