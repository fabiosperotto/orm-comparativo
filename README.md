# Phinx e Eloquent #

Este repositório guardará as codificações em uma análise entre dois ORMs para PHP:Phinx e Eloquent. Os slides relacionados com as considerações podem ser [acessados aqui](https://goo.gl/rSn7ZJ).

## Utilização ##

### Phinx ###
```
composer require robmorgan/phinx
vendor/bin/phinx init
```

- Configure phinx.yml com os acessos ao banco de dados.
- Crie os diretório db/migrations e db/seeds com permissões de escrita.
- A partir disso poderá seguir uso normal das migrations conforme [documentação](https://book.cakephp.org/3.0/en/phinx.html).


### Eloquent ###
```
composer require illuminate/database
cd config
mv database.php.example database.php
```

- Configure config/database.php com os acessos ao banco de dados.
- Execute php migrations.php
- Descomente as linhas comentadas em index.php e execute o arquivo para criar dados na base (php index.php).
- Para cada tabela criada na base, gere uma Model relacionada, conforme exemplos em /models.


### Requisitos de Referência ###

- PHP >= 7.0
- MySQL 5.7.X
- [Composer](https://getcomposer.org/)