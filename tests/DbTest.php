<?php 

namespace Edson\Db;

class DbTest extends \PHPUnit\Framework\TestCase
{

    public function testTestarSeAClassInicia()
    {
        $db  = new Db;

        $this->assertInstanceOf('Edson\Db\Db', $db);
    }
    
}
