<?php

namespace App\Repositories;

use App\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    public function select(Model $model)
    {
        return $model->select('id', 'name', 'created_at')->get();
    }

    public function all()
    {
        return $this->model->get();
    }

    public function get($id)
    {
        return $this->model->findOrFail($id);
    }

    public function where(string $column, string $value)
    {
        return  $this->model::where($column, $value)->firstOrFail();
    }

    public function save(Model $model)
    {
        $model->save();

        return $model;
    }

    public function destroy(Model $model)
    {
        $model->delete();

        return $model;
    }
}
