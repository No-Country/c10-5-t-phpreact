<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * Guarda la imagen en el almacenamiento
     *
     * @param string $path
     * @param mixed $file
     * @return string
     */
    private function save(string $path, mixed $file): string
    {
        return Storage::put($path, $file);
    }

    /**
     * Elimina la imagen del almacenamiento
     *
     * @param Model $model
     * @return void
     */
    private function deleteStorage(Model $model): void
    {
        $path = Str::after($model->images->url, '/storage');

        Storage::delete($path);
    }

    /**
     * Eliminar registro de imagen
     *
     * @param Model $model
     * @return void
     */
    public function delete(Model $model): void
    {
        $this->deleteStorage($model);

        $model->images()->delete();
    }

    /**
     * Crea una imagen
     *
     * @param Request $request
     * @param string $path
     * @param Model $model
     * @return void
     */
    public function create(Request $request, string $path, Model $model): void
    {
        $path = $this->save($path, $request->file('image'));

        $model->images()->create([
            'url' => url("storage/{$path}"),
        ]);
    }

    /**
     * Actualiza la imagen
     *
     * @param Request $request
     * @param string $path
     * @param Model $model
     * @return void
     */
    public function update(Request $request, string $path, Model $model): void
    {
        if ($request->hasFile('image')) {
            $this->deleteStorage($model);

            $path = $this->save($path, $request->file('image'));

            $model->images()->update([
                'url' => url("storage/{$path}"),
            ]);
        }
    }
}
