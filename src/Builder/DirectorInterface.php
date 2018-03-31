<?php declare(strict_types=1);

namespace pdp\Builder;

interface DirectorInterface
{

    public function __construct(BuilderInterface $builder = null);
    public function getSqlAll() : string ;

}