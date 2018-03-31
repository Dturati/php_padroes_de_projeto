<?php declare(strict_types=1);
namespace pdp\QueryBuilder;

interface Strategy
{

    public function table(string $table) : Strategy;
    public function select($table = '*') : Strategy;
    public function getQuery() : Strategy ;

}