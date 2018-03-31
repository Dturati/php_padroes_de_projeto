<?php

namespace pdp\Builder;


abstract  class ModelAbstract implements DirectorInterface
{
    protected $builder;
    protected $table;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
        $this->setTableName();
    }

    public function getSqlAll(): string
    {
        $this->builder->setTable($this->table);
        return $this->builder->getAllString();
    }

    protected function setTableName(){
        if($this->table === null){
            $table = explode('\\',get_called_class());
            $table = array_pop($table);
            $this->table = strtolower($table);
        }
    }

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface
    {
        return $this->builder;
    }

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param mixed $table
     */
    public function setTable($table): void
    {
        $this->table = $table;
    }



}