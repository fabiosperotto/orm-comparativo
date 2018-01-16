<?php
require 'vendor/autoload.php';
require 'config/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('pedidos', function($table){

    $table->increments('id');//necessario especificar PK
    $table->string('descricao');
    $table->timestamps();

});

Capsule::schema()->create('produtos', function($table){

    $table->increments('id');
    $table->string('nome');
    $table->decimal('valor', 10, 2);
    $table->string('observacao')->nullable();
    $table->timestamps();

});

Capsule::schema()->create('itens_pedidos', function($table){

    $table->increments('id');
    $table->integer('id_pedido')->unsigned()->nullable();
    $table->foreign('id_pedido')->references('id')
                                ->on('pedidos')
                                ->onDelete('CASCADE')
                                ->onUpdate('NO ACTION');
    $table->integer('id_produto')->unsigned()->nullable();
    $table->foreign('id_produto')->references('id')
                                 ->on('produtos')
                                 ->onDelete('SET NULL')
                                 ->onUpdate('NO ACTION');
    $table->integer('quantidade')->default(0);
    $table->string('observacao')->nullable();                                
});