<?php

namespace App\Cache;

use App\Cache\BaseCache;
use App\Repositories\CohortRepository;
use Illuminate\Database\Eloquent\Model;

class CohortCache extends BaseCache
{
    protected $cohortRepository;

    public function __construct(CohortRepository $cohortRepository)
    {
        parent::__construct($cohortRepository, 'cohort');
    }

    public function select(Model $model)
    {
        return $this->cache::remember($this->key, self::time, function () use ($model) {
            return $this->repository->select($model);
        });

    }

    public function all()
    {
        return $this->cache::remember($this->key, self::time, function () {
            return $this->repository->all();
        });
    }

    public function get($id)
    {
        return $this->repository->get($id);

    }

    public function save(Model $model)
    { 
        $this->forget($this->key);
        return $this->repository->save($model);
    }

    public function destroy(Model $model)
    {
        $this->forget($this->key);
        return $this->repository->destroy($model);
    }

    public function ejemplo(Model $model)
    {
        return $this->cache::remember("$this->key.ejemplo", self::time, function () use($model) {
            return $this->repository->ejemplo($model);

        });
    }
}
