<?php

namespace pdp\Builder;

use pdp\QueryBuilder\Sql;

class SqlBuilder implements BuilderInterface
{
    protected $query;

    public function __construct()
    {
        $this->query = new Sql();
    }

    public function setTable(string $table)
    {
        $this->query->table($table);
        return $this;
    }

    public function getSqlAll(): object
    {

        return $this->query->select()
            ->getQuery();
    }

}