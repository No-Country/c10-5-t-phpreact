<?php

namespace App\Repositories;

use App\Models\TeamRating;
use App\Models\TeamAttendance;
use App\Repositories\BaseRepository;
use App\Contracts\TeamCalificationRepositoryInterface;
use App\Models\Profile\Profile;

class TeamCalificationRepository extends BaseRepository implements TeamCalificationRepositoryInterface
{      
    public function __construct(TeamRating $teamRating, TeamAttendance $teamAttendance)
    {   
        parent::__construct($teamAttendance, $teamRating);
    }

    public function searchUserTeam($profile_id){
        return Profile::whereHas('teams', function ($query)  use ($profile_id) {
            $query->where('profile_id', $profile_id);
        })->get();
    }

    public function whereCalification(string $column, int $value)
    {     
        if('profile_id' == $column)
        {
            return TeamAttendance::where($column, $value)->get();
        }
        return TeamRating::where($column, $value)->get();
    }

}
