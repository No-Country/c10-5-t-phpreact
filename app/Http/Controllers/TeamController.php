<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TeamCollection;
use App\Http\Resources\UserCollection;
use App\Contracts\TeamRepositoryInterface;

class TeamController extends Controller
{
    protected $teamCache;

    public function __construct(TeamRepositoryInterface $teamCache)
    {   
        parent::__construct();
        $this->teamCache = $teamCache;
    }


    public function index(): TeamCollection|JsonResponse
    {
        try {
            $team = $this->teamCache->selectTeam();
            
            return new TeamCollection($team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function show(int $id)
    {
        try {
            $team = $this->teamCache->get($id);

            return new TeamResource($team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function store(TeamRequest $request)
    {
        try {
            $model = new Team($request->validated());

            $team = $this->teamCache->save($model);

            $team = new TeamResource($team);

            return $this->response->success('creado', $team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function update(TeamRequest $request, Team $team)
    {
        try {
            $team->fill($request->validated());

            $team = $this->teamCache->save($team);

            $team = new TeamResource($team);

            return $this->response->success('actualizado', $team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function destroy(Team $team)
    {
        try {
            $this->teamCache->destroy($team);

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function searchUsersTeams(int $id)
    {
        try {
            $users = User::whereHas('teams', function ($query)  use ($id) {
                $query->where('team_id', $id);
            })->get();

            $users = New UserCollection($users);

            return response()->json($users);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function searchUserscCohorts(int $id)
    {
        try {
            $users = User::whereHas('cohorts', function ($query)  use ($id) {
                $query->where('cohort_id', $id);
            })->get();

            $users = New UserCollection($users);
            
            return response()->json($users);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
