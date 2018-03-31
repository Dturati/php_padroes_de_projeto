<?php

namespace pdp\Builder;

class SqlDirector implements DirectorInterface
{
    protected $builder;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
    }

    public function getSqlAll(): string
    {
        $this->builder->setTable('FUNCIONARIO');
        return $this->builder->getAllString();
    }

}