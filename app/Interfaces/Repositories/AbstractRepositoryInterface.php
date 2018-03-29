<?php

namespace App\Interfaces\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface AbstractRepositoryInterface
{

    /**
     * @param int $id
     * @param array $columns
     * @return Model
     */
    public function findById(int $id, array $columns = ['*']): Model;

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return Model|null
     */
    public function findBy($attribute, $value, array $columns = ['*']): ?Model;

    /**
     * @param array $attribute
     * @param array $columns
     * @return Model|null
     */
    public function findWhere(array $attribute, array $columns = ['*']): ?Model;

    /**
     * @param array $attribute
     * @param array $columns
     * @return Collection|null
     */
    public function getWhere(array $attribute, array $columns = ['*']): ?Collection;

    /**
     * @param $attribute
     * @param array $values
     * @param array $columns
     * @return Collection|null
     */
    public function getWhereIn($attribute, array $values, array $columns = ['*']): ?Collection;

    /**
     * @param array $columns
     * @return Collection
     */
    public function all($columns = ['*']): Collection;

    /**
     * @param int $limit
     * @param array $columns
     * @return LengthAwarePaginator
     */
    public function paginate(int $limit = 20, array $columns = ['*']): LengthAwarePaginator;

    /**
     * @param array $attributes
     * @return Model|null
     */
    public function create(array $attributes): ?Model;

    /**
     * @param int $id
     * @param array $attributes
     * @return int
     */
    public function update(int $id, array $attributes): int;

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;
}