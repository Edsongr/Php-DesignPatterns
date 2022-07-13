<?php 

namespace Edson\Db\Builder;

interface DirectorInterface 
{
    
    public function __construct(BuilderInterface $build = null);
    public function getSqlAll() : string;

}