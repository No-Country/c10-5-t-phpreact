<?php

namespace App\Http\Controllers\Team;

use App\Models\Team;
use App\Models\Cohort;
use App\Models\CohortTeam;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TeamColletion;

class TeamController extends Controller
{
    public function index()
    {
        return new TeamColletion(Team::select('id', 'name', 'active')->get());
    }
    public function show(Team $team)
    {
        return new TeamResource($team);
    }
    public function store(TeamRequest $request, $chorte_id)
    {       
        //se crea el team
        $team = Team::create($request->validated());
        
        // Crear un registro en la tabla pivote
        $cohort_team = new CohortTeam;
        $cohort_team->cohort_id = $chorte_id;
        $cohort_team->team_id = $team->id;
        $cohort_team->save();
        return response()->json(['msg' => 'Team creado']);
    }
    public function update(TeamRequest $request, Team $team)
    {
        $team->update($request->validated());
        return response()->json(['msg' => 'Team actualizado']);
    }
    public function destroy(Team $team)
    {   
        $team->delete();
        return response()->json(['msg' => 'Team eliminado']);
    }
}
