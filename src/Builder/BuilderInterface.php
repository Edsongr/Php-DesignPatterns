<?php 

namespace Edson\Db\Builder;

interface BuilderInterface 
{
    
    public function setTable(string $table);
    public function getAllString() : string;

}