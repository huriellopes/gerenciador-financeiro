<?php
declare(strict_types=1);

namespace GERENFin\Repository;

interface RepositoryInterface
{
    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param $id
     * @return mixed
     */
    public function find(int $id, bool $failIfNotExist = true);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update(int $id, array $data);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param $field
     * @return mixed
     */
    public function findByField(string $field,$value);
}