<?php 

namespace App\Contracts;

use App\Models\Cohort;


interface EjemploRepositoryInterface {

    public function ejemplo(Cohort $cohort);
    
}