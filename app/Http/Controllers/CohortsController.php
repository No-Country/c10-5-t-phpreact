<?php

namespace App\Http\Controllers;

use App\Cache\CohortCache;
use App\Models\Cohort;
use App\Http\Controllers\Controller;
use App\Http\Requests\CohortRequest;
use App\Http\Resources\CohortResource;
use App\Http\Resources\CohortCollection;

class CohortsController extends Controller
{   
    private $cohortCache;

    public function __construct(CohortCache $cohortCache)
    {
        parent::__construct(); // llamada al constructor del controlador padre
        $this->cohortCache = $cohortCache;
    }

    public function index()
    {
        try {
            $model = New Cohort;

            $cohorts = $this->cohortCache->select($model);

            return CohortCollection::make($cohorts);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function show(int $id)
    {
        try {
            $cohort = $this->cohortCache->get($id);

            return new CohortResource($cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function store(CohortRequest $request)
    {
        try {  
            $model = new Cohort($request->validated());

            $cohort = $this->cohortCache->save($model);

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

            $cohort = $this->cohortCache->save($cohort);

            $cohort = new CohortResource($cohort);

            return $this->response->success('actualizado', $cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function destroy(Cohort $cohort)
    {
        try {
            $this->cohortCache->destroy($cohort);

            return $this->response->success('eliminado', $cohort);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
