<?php

namespace Edson\Db\QueryBuilder;

interface Strategy
{

    public function table(string $table) : Strategy;
    public function select($collumns = "*") : Strategy;
    public function getQuery() : string;
 
}
