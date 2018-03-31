<?php
namespace PDP\QueryBuilder;

class Mysql implements Strategy
{

    private $table;
    private $sql;

    public function table(string $table) : Strategy
    {
        $this->table = '`'.$table.'`';
        return $this;
    }

    public function select($columns = '*') : Strategy
    {
        if($columns != '*' and is_string($columns)){
            $columns = explode('`, `',$columns);
            $columns = array_map('trim',$columns);
        }

        if(is_array($columns)){
            $columns = implode('`, `',$columns);
            $columns = '`'.$columns.'`';
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