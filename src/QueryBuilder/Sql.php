<?php declare(strict_types=1);
namespace pdp\QueryBuilder;

class Sql implements Strategy
{
    private $table;

    private $sql;

    public function table(string $table) : Strategy
    {
        $this->table = $table;
        return $this;
    }

    public function select($columns = '*') : Strategy
    {
        if(is_array($columns)){
            $columns = implode(', ',$columns);
        }
        $this->sql = sprintf('select %s from %s;',$columns,$this->table);
        return $this;

    }

    public function getQuery() : Strategy
    {
        $this->sql;
        return $this;
    }

}