<?php

namespace App\Contracts;



interface TeamCalificationRepositoryInterface
{
    public function searchUserTeam($team_id);

    public function whereCalification(string $column, int $value);
}
