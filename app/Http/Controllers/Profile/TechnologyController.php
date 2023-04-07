<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\JsonResponse;
use App\Models\Profile\Technology;
use App\Exceptions\GeneralException;
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
        } catch (GeneralException $e) {
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

            return $this->response->success('creado', 'technology', $technology);
        } catch (GeneralException $e) {
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

            return $this->response->success('actualizado', 'technology', $technology);
        } catch (GeneralException $e) {
            return $this->response->catch($e->getMessage());
        }
    }

    /**
     * Elimina un registro en database segun su id
     *
     * @param integer $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        try {
            $technology = Technology::findOrFail($id);

            $this->image->delete($technology);

            $technology->delete();

            return $this->response->success('eliminado');
        } catch (GeneralException $e) {
            return $this->response->catch($e->getMessage());
        }
    }
}
