<?php


use Phinx\Migration\AbstractMigration;

class ItemPedidoMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('itens_pedidos');
        $table->addColumn('id_pedido', 'integer', ['null' => true])
              ->addForeignKey('id_pedido', 'pedidos', 'id', ['delete' => 'SET NULL', 'update' => 'NO ACTION'])
              ->addColumn('id_produto', 'integer')
              ->addForeignKey('id_produto', 'produtos', 'id')
              ->addColumn('quantidade', 'integer')
              ->create();
              
    }
}
