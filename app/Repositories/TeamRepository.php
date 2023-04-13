<?php

namespace App\Repositories;

use App\Models\Team;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class TeamRepository extends BaseRepository
{      
    protected $Team;
 
    public function __construct(Team $Team)
    {   
        parent::__construct($Team);
    }

    
    public function selectTeam()
    {   
        $model = $this->Team;
        return $model->select('id', 'name', 'active', 'cohort_id', 'created_at')->get();
    }
}
