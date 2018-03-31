<?php declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

use pdp\QueryBuilder\Sql;
use pdp\QueryBuilder\Mysql;
use pdp\Builder\SqlBuilder;
use pdp\Builder\SqlDirector;
use pdp\model\Model;
use pdp\model\Casa;
$query = new Sql();

$mysql = new Mysql();

print_r($query->table("FUNCIONARIO")->select("NOME,IDADE")->getQuery());

print_r($query->table("FUNCIONARIO")->select(["nome","idade"])->getQuery());

print_r($mysql->table("DEPARTAMENTO")->select(["NOME, IDADE"]));
print_r(__DIR__."\n");

echo "Padrão builder\n";

$builder    = new SqlBuilder();
//$director   = new  SqlDirector($builder);
//print_r($builder);
$banck = new Model($builder);
//$casa = new Casa($builder);
print_r($banck->getTable()."\n");
//print_r($casa->getTable()."\n");
//print_r($casa->getSqlAll());
print_r($banck->getSqlAll());
