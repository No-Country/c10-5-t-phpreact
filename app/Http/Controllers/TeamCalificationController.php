<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TeamRating;
use Illuminate\Http\Request;
use App\Models\TeamAttendance;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\TeamCalificationResource;
use App\Http\Requests\postTeamCalificationRequest;
use App\Http\Resources\TeamCalificationCollection;
use App\Contracts\TeamCalificationRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TeamCalificationController extends Controller
{

    protected $teamCalification;

    public function __construct(TeamCalificationRepositoryInterface $teamCalification)
    {
        parent::__construct();
        $this->teamCalification = $teamCalification;
    }


    /**
     * obtener equipo para retornar semanas y usuarios que estan en el equipo
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getTeamCalification(Request $request): JsonResponse
    {
        try {
            $team = $request->team_id;

            $users = $this->teamCalification->searchUserTeam($team);

            $weeks = TeamAttendance::week_values;

            return response()->json([
                'users' => $users,
                'weeks' => $weeks
            ]);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "team");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * se guarda la calificación y la assistencia por usuario y por equipo en la base de datos
     *
     * @param postTeamCalificationRequest $request
     * @return JsonResponse
     */
    public function postTeamCalification(postTeamCalificationRequest $request): JsonResponse

    {
        try {
            $calification = new TeamRating($request->validated());
            $asistencias = new TeamAttendance($request->validated());

            $calification = $this->teamCalification->save($calification);
            $asistencias = $this->teamCalification->save($asistencias);

            return response()->json([
                'calification' => $calification,
                'asistencias' => $asistencias
            ]);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "team");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }

        // "week": 1,
        // "date": "2023-04-12",
        // "compromise": 1,
        // "attended": 1
        // "communication": 1,
        // "initiative": 0
        // "feedback": "todo estubo bien",
        // "user_id": 1,
        // "team_id": 10  
    }

    /**
     * para editar un calificacion por si el tl envia algo mal
     *
     * @param TeamRating $teamRating
     * @param postTeamCalificationRequest $request
     * @return JsonResponse
     */
    public function editTeamCalification(TeamRating $teamRating, postTeamCalificationRequest $request): JsonResponse
    {
        try {
            $teamRating->fill($request->validated());;

            $calification = $this->teamCalification->save($teamRating);

            return response()->json([
                'calification' => $calification,
            ]);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "team");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * se buscan las asistencias por usuario
     *
     * @param Request $request
     * @return void
     */
    public function searchRatingUser(Request $request)
    {
        try {
            $user_id = $request->user_id;

            $rating = $this->teamCalification->whereCalification('user_id', $user_id);

            return response()->json(['assistencias de un usuario' => $rating]);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "user id");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * se buscan las calificaciones por team
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function searchRatingTeam(Request $request): JsonResponse
    {
        try {
            $team_id = $request->team_id;

            $teamRating = $this->teamCalification->whereCalification('team_id', $team_id);

            $calification = TeamCalificationCollection::make($teamRating);

            return response()->json(['calificacion por equipo' => $calification]);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "team id");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * para ver las calificaciones y asistencias de un equipo
     *
     * @param TeamRating $TeamRating
     * @return JsonResponse
     */
    public function show(TeamRating $TeamRating): JsonResponse
    {
        try {
            $teamRating = $this->teamCalification->get($TeamRating);

            $calification = new TeamCalificationResource($teamRating);

            return response()->json(['ver calificiacion de equipo' => $calification]);
        } catch (ModelNotFoundException $e) {
            return $this->response->ModelError($e->getMessage(), "calificaion del team");
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }
}
