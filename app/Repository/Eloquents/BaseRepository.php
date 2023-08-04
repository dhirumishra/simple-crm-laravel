<?php

namespace App\Repository\Eloquents;

use App\Repository\Interfaces\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    /**      
     * @var Model      
     */
    protected $model;

    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model      
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}
