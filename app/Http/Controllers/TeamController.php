<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TeamCollection;

class TeamController extends Controller
{
    public function index()
    {
        try {
            $teams = Team::select('id', 'name', 'active', 'created_at')->get();

            return TeamCollection::make($teams);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function show(int $id)
    {
        try {
            $team = Team::findOrFail($id);

            return new TeamResource($team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function store(TeamRequest $request)
    {
        try {
            $team = Team::create($request->validated());

            $team = new TeamResource($team);

            return $this->response->success('creado', $team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function update(TeamRequest $request, int $id)
    {
        try {
            $team = Team::findOrFail($id);

            $team->update($request->validated());

            $team = new TeamResource($team);

            return $this->response->success('actualizado', $team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function destroy(int $id)
    {
        try {
            Team::findOrFail($id)->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
