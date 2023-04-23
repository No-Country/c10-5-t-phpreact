<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class CacheService
{
    /**
     * Retorna una collecion cacheada
     * En columns deben asignarse las columnas que quieres omitir
     *
     * @param string $key
     * @param Model $model
     * @param array|null $columns
     * @return Collection
     */
    public function getCollection(string $key, $model, array $columns = null): Collection
    {
        return $columns !== null
            ? Cache::rememberForever($key, fn () => $model::all()->makeHidden($columns))
            : Cache::rememberForever($key, fn () => $model::all());
    }

    /**
     * Cachea un Modelo y lo retorna
     *
     * @param string $key
     * @param Model $model
     * @param integer $id
     * @return Model
     */
    public function findById(string $key, $model, int $id): Model
    {
        $key = "{$key}_{$id}";

        return Cache::rememberForever($key, fn () => $model::findOrFail($id));
    }

    /**
     * Crea un registro y elimina el cache key
     *
     * @param string $key
     * @param Model $model
     * @param Request $request
     * @return Model
     */
    public function store(string $key, $model, Request $request): Model
    {
        Cache::forget($key);

        return $model::create($request->validated());
    }

    /**
     * Actualiza un registro y elimina el cache key
     *
     * @param string $key
     * @param Model $model
     * @param Request $request
     * @param integer $id
     * @return Model
     */
    public function update(string $key, $model, Request $request, int $id): Model
    {
        $modelInstance = $model::findOrFail($id);
        $modelInstance->update($request->validated());

        Cache::forget($key);
        Cache::forget("{$key}_{$id}");

        return $modelInstance;
    }

    /**
     * Elimina un registro y elimina el cache key
     *
     * @param string $key
     * @param Model $model
     * @param integer $id
     * @return void
     */
    public function destroy(string $key, $model, int $id): void
    {
        Cache::forget($key);
        Cache::forget("{$key}_{$id}");

        $model::findOrFail($id)->delete();
    }
}
