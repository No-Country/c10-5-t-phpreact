<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\JsonResponse;
use App\Models\Profile\Technology;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\TechnologyRequest;
use App\Http\Resources\Profile\TechnologyResource;
use App\Http\Resources\Profile\TechnologyCollection;

class TechnologyController extends Controller
{
    /**
     * Obtener collection de Technologies
     *
     * @return JsonResponse|TechnologyCollection
     */
    public function index(): JsonResponse|TechnologyCollection
    {
        try {
            $technologies = Technology::select('id', 'name', 'created_at')->get();

            return TechnologyCollection::make($technologies);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    /**
     * Crea un nuevo registro en database
     *
     * @param TechnologyRequest $request
     * @return JsonResponse
     */
    public function store(TechnologyRequest $request): JsonResponse
    {
        try {
            if (!$request->hasFile('image')) {
                return $this->response->missingImage();
            }

            $technology = Technology::create($request->validated());

            $this->image->create($request, 'technologies', $technology);

            $technology = new TechnologyResource($technology);

            return $this->response->success('creado', $technology);
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    /**
     * Actualiza el registro en database segun su id
     *
     * @param TechnologyRequest $request
     * @param integer $id
     * @return JsonResponse
     */
    public function update(TechnologyRequest $request, int $id): JsonResponse
    {
        try {
            $technology = Technology::findOrFail($id);

            $this->image->update($request, 'technologies', $technology);

            $technology->update($request->validated());

            $technology = new TechnologyResource($technology);

<<<<<<< HEAD
            return $this->response->success('actualizado', 'technology', $technology);
=======
            return $this->response->success('actualizado', $technology);
>>>>>>> 025966563f1e8c6ccd6950684a273c3c7a44e68d
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    /**
     * Elimina un registro en database segun su id
     *
     * @param integer $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $technology = Technology::findOrFail($id);

            $this->image->delete($technology);

            $technology->delete();

            return $this->response->success('eliminado');
        } catch (\Exception $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
