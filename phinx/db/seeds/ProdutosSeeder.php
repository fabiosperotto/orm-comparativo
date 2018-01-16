<?php


use Phinx\Seed\AbstractSeed;

class ProdutosSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $dados = [
            ['nome' => 'televisão plasma 9D Full Jedi', 
            'valor' => 6234.80,
            ],
            ['nome' => 'Playstation 4', 
            'valor' => 1234.80,
            ],
            ['nome' => 'Xbox 360', 
            'valor' => 1234.80,
            ],
        ];

        $produtos = $this->table('produtos');
        $produtos->insert($dados)
                 ->save(); //commit
    }
}
