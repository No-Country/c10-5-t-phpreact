<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile\SoftSkill;
use Illuminate\Http\JsonResponse;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Services\JsonResponseService;
use App\Http\Requests\Profile\SoftSkillRequest;

class SoftSkillsController extends Controller
{
    /**
     * Crea un nuevo registro en database
     *
     * @param SoftSkillRequest $request
     * @param JsonResponseService $response
     * @return JsonResponse
     */
    public function store(SoftSkillRequest $request, JsonResponseService $response): JsonResponse
    {
        try {
            SoftSkill::create($request->validated());

            return $response->success('creado');
        } catch (GeneralException $e) {
            return $response->catch($e->getMessage());
        }
    }

    /**
     * Actualiza el registro en database segun su id
     *
     * @param SoftSkillRequest $request
     * @param integer $id
     * @param JsonResponseService $response
     * @return JsonResponse
     */
    public function update(SoftSkillRequest $request, int $id, JsonResponseService $response): JsonResponse
    {
        try {
            $softSkill = SoftSkill::findOrFail($id);

            $softSkill->update($request->validated());

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
            $softSkill = SoftSkill::findOrFail($id);

            $softSkill->delete();

            return $response->success('eliminado');
        } catch (GeneralException $e) {
            return $response->catch($e->getMessage());
        }
    }
}
