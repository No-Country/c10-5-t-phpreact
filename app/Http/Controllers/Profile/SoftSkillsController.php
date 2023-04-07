<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile\SoftSkill;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\SoftSkillRequest;

class SoftSkillsController extends Controller
{
    /**
     * Crea un nuevo registro en database
     *
     * @param SoftSkillRequest $request
     * @param 
     * @return JsonResponse
     */
    public function store(SoftSkillRequest $request, ): JsonResponse
    {
        try {
            SoftSkill::create($request->validated());

            return $this->response->success('creado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }

    /**
     * Actualiza el registro en database segun su id
     *
     * @param SoftSkillRequest $request
     * @param integer $id
     * @param 
     * @return JsonResponse
     */
    public function update(SoftSkillRequest $request, int $id, ): JsonResponse
    {
        try {
            $softSkill = SoftSkill::findOrFail($id);

            $softSkill->update($request->validated());

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
            $softSkill = SoftSkill::findOrFail($id);

            $softSkill->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage(), 500);
        }
    }
}
