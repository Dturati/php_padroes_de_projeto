<?php

namespace pdp\Builder;

interface BuilderInterface
{

    public function setTable(string $table);
    public function getSqlAll() : object ;

}