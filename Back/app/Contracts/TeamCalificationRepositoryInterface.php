<?php

namespace App\Contracts;



interface TeamCalificationRepositoryInterface
{
    public function searchUserTeam($profile_id);
    
    public function whereCalification(string $column, int $value);
}
