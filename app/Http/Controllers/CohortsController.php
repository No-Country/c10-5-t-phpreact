<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use Illuminate\Http\Request;
use App\Http\Requests\CohortRequest;
use App\Http\Resources\CohortResource;
use App\Http\Resources\CohortColletion;

class CohortsController extends Controller
{
    public function index(){
        // se oculta los timestamps para no recibirlos en la respuesta json
        $cohorts = Cohort::all()->makeHidden(['created_at', 'updated_at']);
        return new CohortColletion($cohorts);
    }
    public function show(Cohort $cohort){
        return new CohortResource($cohort);
    }
    public function store(CohortRequest $request){
        Cohort::create($request->validated());
        return response()->json(['msg' =>'coherte creado']);
    }
    public function update(CohortRequest $request, Cohort $cohort){
        $cohort->update($request->validated());
        return response()->json(['msg' =>'coherte actualizado']);
    }
    public function destroy(Cohort $cohort){
        $cohort->delete();
        return response()->json(['msg' =>'coherte eliminado']);
    }
}
