<?php


use Phinx\Migration\AbstractMigration;

class ProdutoMigration extends AbstractMigration
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
    /* public function change()
    {

    } */

    public function up()
    {
        $table = $this->table('produtos');
        $table->addColumn('nome', 'string')              
              ->addColumn('valor', 'decimal', ['precision' => 10, 'scale' => 2])
              ->addTimestamps()
              ->create();
    }

    public function down()
    {
        $this->dropTable('produtos');
    }
}
