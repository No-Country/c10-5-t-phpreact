<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Img;
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
    private function save(mixed $file, $path): string
    {
        if (!Storage::exists($path)) {
            Storage::disk('public')->makeDirectory($path, 0755, true);
        }
        
        $nameImage = Str::random(15);

        $img_png = Img::make($file)->fit(800, 800)->encode('png', 80);

        Storage::disk('public')->put($path . '/' . $nameImage . '.png', (string)$img_png, 'public');

        return $nameImage;
    }

    /**
     * Elimina la imagen del almacenamiento
     *
     * @param Model $model
     * @return void
     */
    private function deleteStorage(Model $model): void
    {
        $path = public_path($model->images->url);

        if (file_exists($path)) {
            unlink($path);
        }
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
    public function create(Request $request, Model $model, $path): void
    {
        $path_img = "img/{$path}";
        $nameImage = $this->save($request->file('image'), $path_img);

        $model->images()->create([
            'url' => "/storage/{$path_img}/{$nameImage}.png",
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
    public function update(Request $request, Model $model, $path): void
    {
        if ($request->hasFile('image')) {
            $this->deleteStorage($model);

            $path_img = "img/{$path}";

            $nameImage = $this->save($request->file('image'), $path_img);


            $model->images()->update([
                'url' => "/storage/{$path_img}/{$nameImage}.png",
            ]);
        }
    }
}
