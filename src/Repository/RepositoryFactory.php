<?php
declare(strict_types=1);

namespace GERENFin\Repository;

class RepositoryFactory
{
    /**
     * @param string $modelClass
     * @return DefaultRepository
     */
    public static function factory(string $modelClass)
    {
        return new DefaultRepository($modelClass);
    }
}