<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseService
{
    public function success(string $action, string $key = null, mixed $value = null): JsonResponse
    {
        $data = [
            'msg' => "Se ha {$action} satisfactoriamente.",
            ($key === null && $value === null) ?: $key => $value,
        ];

        return response()->json(array_filter($data), Response::HTTP_OK);
    }

    public function catch(string $error): JsonResponse
    {
        return response()->json([
            'error' => $error
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function missingImage(): JsonResponse
    {
        return response()->json([
            'error' => 'Falta una imagen.'
        ], Response::HTTP_BAD_REQUEST);
    }
}
