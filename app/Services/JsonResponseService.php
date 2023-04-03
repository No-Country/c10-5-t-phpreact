<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseService
{
    public function success(string $action): JsonResponse
    {
        return response()->json([
            'msg' => "Se ha {$action} satisfactoriamente."
        ], Response::HTTP_OK);
    }

    public function catch(string $error): JsonResponse
    {
        return response()->json([
            'error' => $error
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
