<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Http\Controllers\Controller;
use App\Http\Requests\CohortRequest;
use App\Http\Resources\CohortResource;
use App\Http\Resources\CohortCollection;
use App\Repositories\CohortRepository;

class CohortsController extends Controller
{   
    private $cohortRepository;

    public function __construct(CohortRepository $cohortRepository)
    {
        parent::__construct(); // llamada al constructor del controlador padre
        $this->cohortRepository = $cohortRepository;
    }

    public function index()
    {
        try {
            $cohorts = Cohort::with('teams.profiles')->get();

            $cohort = CohortCollection::make($cohorts);

            return response()->json(['cohorts' => $cohort]);
            
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function show(int $id)
    {
        try {
            $cohort = $this->cohortRepository->get($id);

            return new CohortResource($cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function store(CohortRequest $request)
    {
        try {  
            $model = new Cohort($request->validated());

            $cohort = $this->cohortRepository->save($model);

            $cohort = new CohortResource($cohort);

            return $this->response->success('creado', $cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function update(CohortRequest $request, Cohort $cohort)
    {
        try {
            $cohort->fill($request->validated());

            $cohort = $this->cohortRepository->save($cohort);

            $cohort = new CohortResource($cohort);

            return $this->response->success('actualizado', $cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function destroy(Cohort $cohort)
    {
        try {
            $this->cohortRepository->destroy($cohort);

            return $this->response->success('eliminado', $cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
