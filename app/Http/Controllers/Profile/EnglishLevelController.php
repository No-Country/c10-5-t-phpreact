<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\JsonResponse;
use App\Models\Profile\EnglishLevel;
use App\Http\Controllers\Controller;
use App\Services\JsonResponseService;
use App\Http\Requests\Profile\EnglishLevelRequest;

class EnglishLevelController extends Controller
{
    /**
     * Crea un nuevo registro en database
     *
     * @param EnglishLevelRequest $request
     * @param 
     * @return JsonResponse
     */
    public function store(EnglishLevelRequest $request, ): JsonResponse
    {
        try {
            EnglishLevel::create($request->validated());

            return $this->response->success('creado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * Actualiza el registro en database segun su id
     *
     * @param EnglishLevelRequest $request
     * @param integer $id
     * @param 
     * @return JsonResponse
     */
    public function update(EnglishLevelRequest $request, int $id, ): JsonResponse
    {
        try {
            $technology = EnglishLevel::findOrFail($id);

            $technology->update($request->validated());

            return $this->response->success('actualizado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * Elimina un registro en database segun su id
     *
     * @param integer $id
     * @param 
     * @return JsonResponse
     */
    public function delete(int $id, ): JsonResponse
    {
        try {
            $technology = EnglishLevel::findOrFail($id);

            $technology->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }
}
