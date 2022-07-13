<?php

namespace Edson\Db\QueryBuilder;

class MysqlTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectQuery() 
    {
        $sql    = new Mysql;
        $query  = $sql->table('users')
                    ->select()
                    ->getQuery();

        $this->assertEquals('SELECT * FROM `users`;', $query);

    }

    public function testSelectQueryComColunasEmFormatoTexto() 
    {
        $sql    = new Mysql;
        $query  = $sql->table('users')
                    ->select('username, password')
                    ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);

    }

    public function testSelectQueryComColunasEmFormatoArray() 
    {
        $sql    = new Mysql;
        $query  = $sql->table('users')
                    ->select(['username', 'password'])
                    ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);

    }



    
}
