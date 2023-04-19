<?php

namespace App\Repositories;

use App\Models\Cohort;
use App\Repositories\BaseRepository;

class CohortRepository extends BaseRepository {
    protected $cohort;

    public function __construct(Cohort $cohort)
    {
        parent::__construct($cohort);
    }


    public function ejemplo(Cohort $cohort)
    {
        return "esta bien ";
    }
}
