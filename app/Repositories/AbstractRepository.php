<?php

namespace App\Repositories;

use App\Helpers\CommonHelper;
use App\Interfaces\Repositories\AbstractRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements AbstractRepositoryInterface
{

    /**
     * @var Model
     */
    protected $model;

    /**
     * AbstractRepository constructor.
     */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * @throws \Exception
     */
    private function makeModel()
    {
        $modelNameSpace = CommonHelper::lreplace('Repository', '', str_replace('\\Repositories', '\\Models', get_called_class()));
        $this->model = new $modelNameSpace();

        if (!$this->model instanceof Model) {
            throw new \Exception("Class {$modelNameSpace} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
    }

    /**
     * @param int $id
     * @param array $columns
     * @return Model
     */
    public function findById(int $id, array $columns = ['*']): Model
    {
        return $this->model->findOrFail($id, $columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return Model|null
     */
    public function findBy($attribute, $value, array $columns = ['*']): ?Model
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * @param array $attribute
     * @param array $columns
     * @return Model|null
     */
    public function findWhere(array $attribute, array $columns = ['*']): ?Model
    {
        return $this->model->where($attribute)->first($columns);
    }

    /**
     * @param array $attribute
     * @param array $columns
     * @return Collection|null
     */
    public function getWhere(array $attribute, array $columns = ['*']): ?Collection
    {
        return $this->model->where($attribute)->get($columns);
    }

    /**
     * @param $attribute
     * @param array $values
     * @param array $columns
     * @return Collection|null
     */
    public function getWhereIn($attribute, array $values, array $columns = ['*']): ?Collection
    {
        return $this->model->whereIn($attribute, $values)->get($columns);
    }

    /**
     * @param array $columns
     * @return Collection
     */
    public function all($columns = ['*']): Collection
    {
        return $this->model->all($columns);
    }

    /**
     * @param int $limit
     * @param array $columns
     * @return LengthAwarePaginator
     */
    public function paginate(int $limit = 20, array $columns = ['*']): LengthAwarePaginator
    {
        return $this->model->paginate($limit, $columns);
    }

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): ?Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return int
     */
    public function update(int $id, array $attributes): int
    {
        return $this->model->findOrFail($id)->update($attributes);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->model->delete($id);
    }
}