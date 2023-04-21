<?php

namespace App\Cache;

use App\Models\Team;
use App\cache\BaseCache;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\TeamCalificationRepository;
use App\Contracts\TeamCalificationRepositoryInterface;

class TeamCalificationCache extends BaseCache implements TeamCalificationRepositoryInterface
{
    protected $TeamCalification;

    public function __construct(TeamCalificationRepository $TeamCalification)
    {
        parent::__construct($TeamCalification, 'teamCalification');
    }

    public function select(Model $model)
    {
        return $this->cache::remember($this->key, self::time, function () use ($model) {
            return $this->repository->select($model);
        });
    }
    public function get($id)
    {
        return $this->repository->get($id);
    }

    public function all()
    {
        return $this->cache::remember($this->key, self::time, function () {
            return $this->repository->all();
        });
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

    public function searchUserTeam($profile_id)
    {
        return $this->repository->searchUserTeam($profile_id);
    }


    public function whereCalification(string $column, int $value)
    {
        return $this->repository->whereCalification($column, $value);
       
    }

}
