<?php 

require __DIR__.'/vendor/autoload.php'; 

$builder = new Edson\Db\Builder\SqlBuilder;
$director= new Edson\Db\Builder\SqlDirector($builder);

$config = [
    'dsn' => 'mysql:host=127.0.0.1;dbname=bd_webnario',
    'user'=> 'root',
    'passwd' => ''
];

Edson\Db\DbSingleton::configure($config);