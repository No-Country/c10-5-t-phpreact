<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Cohort;
use App\Http\Controllers\Controller;
use App\Http\Requests\CohortRequest;
use App\Http\Resources\CohortResource;
use App\Http\Resources\CohortCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CohortsController extends Controller
{   
    public function index()
    {   
        try {
            $cohorts = Cohort::select('id', 'name', 'created_at')->get();

            return CohortCollection::make($cohorts);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function show(int $id)
    {
        try {
            $cohort = Cohort::findOrFail($id);

            return new CohortResource($cohort);
        }  catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function store(CohortRequest $request)
    {
        try {
            $cohort = Cohort::create($request->validated());

            $cohort = new CohortResource($cohort);

            return $this->response->success('creado', $cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function update(CohortRequest $request, int $id)
    {
        try {
            $cohort = Cohort::findOrFail($id);

            $cohort->update($request->validated());

            $cohort = new CohortResource($cohort);

            return $this->response->success('actualizado', $cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function destroy(int $id)
    {
        try {
            Cohort::findOrFail($id)->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function getAllTeams(int $cohort_id)
    {
        try { 
            $teams = Team::where('cohort_id', $cohort_id)->get();

            return $this->response->success('buscado los teams', $teams);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
