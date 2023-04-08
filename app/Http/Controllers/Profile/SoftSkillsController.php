<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile\SoftSkill;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\SoftSkillRequest;
use App\Http\Resources\Profile\SoftSkillResource;
use App\Http\Resources\Profile\SoftSkillCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SoftSkillsController extends Controller
{
    public function index(): JsonResponse|SoftSkillCollection
    {
        try {
            $technologies = SoftSkill::select('id', 'name', 'created_at')->get();

            return new SoftSkillCollection($technologies);
        }  catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function store(SoftSkillRequest $request): JsonResponse
    {
        try {
            $softSkill = SoftSkill::create($request->validated());

            $softSkill = new SoftSkillResource($softSkill);

            return $this->response->success('creado', $softSkill);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function update(SoftSkillRequest $request, int $id): JsonResponse
    {
        try {
            $softSkill = SoftSkill::findOrFail($id);

            $softSkill->update($request->validated());

            $softSkill = new SoftSkillResource($softSkill);

            return $this->response->success('actualizado', $softSkill);
        } catch (\Exception $e)  {
            return $this->response->catch($e->getMessage());
        }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            SoftSkill::findOrFail($id)->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
