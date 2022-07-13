<?php 

namespace Edson\Db\Builder;

use Edson\Db\QueryBuilder\Sql;

class SqlDirector implements DirectorInterface
{

    protected $builder;
    
    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
    }

    public function getSqlAll() : string
    {

        $this->builder->setTable('users');
        return $this->builder->getAllString();
    }


}