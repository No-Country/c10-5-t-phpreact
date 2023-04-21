<?php

namespace App\Repositories;

use App\Models\Team;
use App\Repositories\BaseRepository;
use App\Contracts\TeamRepositoryInterface;

class TeamRepository extends BaseRepository implements TeamRepositoryInterface
{      
    protected $Team;
 
    public function __construct(Team $Team)
    {   
        parent::__construct($Team);
    }

    
    public function selectTeam()
    {   
        return Team::select('id', 'name', 'cohort_id', 'created_at')->get();
    }
}
