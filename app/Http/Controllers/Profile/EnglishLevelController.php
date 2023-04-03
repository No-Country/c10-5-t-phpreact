<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\JsonResponse;
use App\Models\Profile\EnglishLevel;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Services\JsonResponseService;
use App\Http\Requests\Profile\EnglishLevelRequest;

class EnglishLevelController extends Controller
{
    /**
     * Crea un nuevo registro en database
     *
     * @param EnglishLevelRequest $request
     * @param JsonResponseService $response
     * @return JsonResponse
     */
    public function store(EnglishLevelRequest $request, JsonResponseService $response): JsonResponse
    {
        try {
            EnglishLevel::create($request->validated());

            return $response->success('creado');
        } catch (GeneralException $e) {
            return $response->catch($e->getMessage());
        }
    }

    /**
     * Actualiza el registro en database segun su id
     *
     * @param EnglishLevelRequest $request
     * @param integer $id
     * @param JsonResponseService $response
     * @return JsonResponse
     */
    public function update(EnglishLevelRequest $request, int $id, JsonResponseService $response): JsonResponse
    {
        try {
            $technology = EnglishLevel::findOrFail($id);

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
            $technology = EnglishLevel::findOrFail($id);

            $technology->delete();

            return $response->success('eliminado');
        } catch (GeneralException $e) {
            return $response->catch($e->getMessage());
        }
    }
}
