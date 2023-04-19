<?php

namespace App\Cache;

use App\Models\Team;
use App\Cache\BaseCache;
use App\repositories\TeamRepository;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\TeamRepositoryInterface;

class TeamCache extends BaseCache implements TeamRepositoryInterface
{
    protected $TeamRepository;

    public function __construct(TeamRepository $TeamRepository)
    {
        parent::__construct($TeamRepository, 'team');
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
    
    public function selectTeam()
    {   
        $model = new Team;
          return $this->cache::remember($this->key, self::time, function () use ($model) {
            return $this->repository->selectTeam($model);
        });
    }
}
