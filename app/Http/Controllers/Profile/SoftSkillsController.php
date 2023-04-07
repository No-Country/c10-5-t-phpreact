<?php

namespace App\Http\Controllers\Profile;

use App\Models\Profile\SoftSkill;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\SoftSkillRequest;
use App\Http\Resources\Profile\SoftSkillResource;
use App\Http\Resources\Profile\SoftSkillCollection;

class SoftSkillsController extends Controller
{
    public function index()
    {
        try {
            $softSkills = SoftSkill::select('id', 'name', 'created_at')->get();

            return SoftSkillCollection::make($softSkills);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function store(SoftSkillRequest $request)
    {
        try {
            $softSkill = SoftSkill::create($request->validated());

            $softSkill = new SoftSkillResource($softSkill);

            return $this->response->success('creado', $softSkill);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function update(SoftSkillRequest $request, int $id)
    {
        try {
            $softSkill = SoftSkill::findOrFail($id);

            $softSkill->update($request->validated());

            $softSkill = new SoftSkillResource($softSkill);

            return $this->response->success('actualizado', $softSkill);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    public function destroy(int $id)
    {
        try {
            SoftSkill::findOrFail($id)->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
