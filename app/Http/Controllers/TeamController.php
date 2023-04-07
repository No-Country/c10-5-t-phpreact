<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\TeamRequest;
use App\Http\Resources\TeamResource;
use App\Services\JsonResponseService;
use App\Http\Resources\TeamCollection;

class TeamController extends Controller
{
   /**
     * retorna los teams
     *
     * @param Team $team
     * @param JsonResponseService 
     * @return  TeamCollection|JsonResponse
     */
    public function index(): TeamCollection|JsonResponse
    {
        try {
            // se oculta los timestamps para no recibirlos en la respuesta json
            $team = Team::all()->makeHidden(['created_at', 'updated_at']);
            return new TeamCollection($team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * retorna un team
     *
     * @param Team $team
     * @param 
     * @return JsonResponse|TeamResource
     */
    public function show(Team $team): JsonResponse|TeamResource
    {
        try {
            return new TeamResource($team);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * crear un team
     *
     * @param TeamRequest $request
     * @param 
     * @return JsonResponse
     */
    public function store(TeamRequest $request): JsonResponse
    {
        try {
            Team::create($request->validated());

            return $this->response->success('creado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * Actializar un team
     *
     * @param TeamRequest $request
     * @param Team $team
     * @param 
     * @return JsonResponse
     */
    public function update(TeamRequest $request, Team $team, ): JsonResponse
    {
        try {
            $team->update($request->validated());

            return $this->response->success('actualizado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * delete un team
     *
     * @param Team $team
     * @param 
     * @return JsonResponse
     */
    public function destroy(Team $team, ): JsonResponse
    {
        try {
            $team->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }
}
