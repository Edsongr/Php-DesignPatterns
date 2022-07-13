<?php 

require __DIR__.'/vendor/autoload.php'; 

$builder = new Edson\Db\Builder\SqlBuilder;
$director= new Edson\Db\Builder\SqlDirector($builder);


// $sql = $director->getSqlAll();
// 

// $banks = new App\Model\Banks($builder);

// $sql = $banks->getSqlAll();

// var_dump($sql);

// $pdo = new \PDO('mysql:host=127.0.0.1;dbname=bd_webnario', 'root', '');

// $db = new Edson\Db\Db($pdo);
// $db->setDirector($director);

// $data = $db->getAll()->execute();

// var_dump($data->fetchAll());

$config = [
    'dsn' => 'mysql:host=127.0.0.1;dbname=bd_webnario',
    'user'=> 'root',
    'passwd' => ''
];

Edson\Db\DbSingleton::configure($config);
$db = Edson\Db\DbSingleton::getInstancia();
$db->setDirector($director);

$data = $db->getAll()->execute();

var_dump($data->fetchAll());