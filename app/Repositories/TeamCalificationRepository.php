<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\TeamRating;
use App\Models\TeamAttendance;
use App\Repositories\BaseRepository;
use App\Contracts\TeamCalificationRepositoryInterface;

class TeamCalificationRepository extends BaseRepository implements TeamCalificationRepositoryInterface
{      
    public function __construct(TeamRating $teamRating, TeamAttendance $teamAttendance)
    {   
        parent::__construct($teamAttendance, $teamRating);
    }

    public function searchUserTeam($team_id){
        return User::whereHas('teams', function ($query)  use ($team_id) {
            $query->where('team_id', $team_id);
        })->get();
    }

    public function whereCalification(string $column, int $value)
    {     
        if ($column == 'user_id') {
            return TeamAttendance::where($column, $value)->get();;
        }
        return TeamRating::where($column, $value)->get();
    }

}
