<?php

namespace Aoharudev\LaravelRepository;

use Aoharudev\LaravelRepository\Interfaces\RepositoryInterface;
use Aoharudev\LaravelRepository\Traits\RepositoryAction;
use Aoharudev\LaravelRepository\Traits\RepositoryBuilder;

class Repository implements RepositoryInterface
{
    use RepositoryBuilder, RepositoryAction;
}