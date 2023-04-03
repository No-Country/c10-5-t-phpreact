<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile\Technology;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Services\JsonResponseService;
use App\Http\Requests\Profile\TechnologyRequest;
use Illuminate\Http\JsonResponse as JsonResponse;

class TechnologyController extends Controller
{
    /**
     * Crea un nuevo registro en database
     *
     * @param TechnologyRequest $request
     * @param JsonResponseService $response
     * @return JsonResponse
     */
    public function store(TechnologyRequest $request, JsonResponseService $response): JsonResponse
    {
        try {
            Technology::create($request->validated());

            return $response->success('creado');
        } catch (GeneralException $e) {
            return $response->catch($e->getMessage());
        }
    }

    /**
     * Actualiza el registro en database segun su id
     *
     * @param TechnologyRequest $request
     * @param integer $id
     * @param JsonResponseService $response
     * @return JsonResponse
     */
    public function update(TechnologyRequest $request, int $id, JsonResponseService $response): JsonResponse
    {
        try {
            $technology = Technology::findOrFail($id);

            $technology->update($request->validated());

            return $response->success('actualizado');
        } catch (GeneralException $e) {
            return $response->catch($e->getMessage());
        }
    }

    /**
     * Elimina un registro en database segun su id
     *
     * @param integer $id
     * @param JsonResponseService $response
     * @return JsonResponse
     */
    public function delete(int $id, JsonResponseService $response): JsonResponse
    {
        try {
            $technology = Technology::findOrFail($id);

            $technology->delete();

            return $response->success('eliminado');
        } catch (GeneralException $e) {
            return $response->catch($e->getMessage());
        }
    }
}
