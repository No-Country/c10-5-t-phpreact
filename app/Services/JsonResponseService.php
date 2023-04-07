<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseService
{
    public function success(string $action): JsonResponse
    {
        return response()->json([
            'msg' => "Se ha {$action} satisfactoriamente."
        ], Response::HTTP_OK);
    }
    public function ModelError(string $message, string $type):  JsonResponse
    {
        Log::error('Ocurrió un error: ' . $message);
        return response()->json(['error' => "El {$type} es incorrecto o no existe, vuelve a intentarlo"]);

    }
    public function errorResponse(string $message, int $code):  JsonResponse
    {
        Log::error('Ocurrió un error: ' . $message);
        return response()->json(['error' => 'Hubo un error inesperado'], $code);
    }


    public function catch(string $error): JsonResponse
    {
        return response()->json([
            'error' => $error
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function authSucces(string $type, $token = null, $email = null): JsonResponse
    {
        if ($token) {
            return response()->json([
                'msg' => "{$type} satisfactoriamente",
                'access_token' => $token
            ], Response::HTTP_OK);
        }

        if ($email) {
            return response()->json([
                'email_user' => $email
            ], Response::HTTP_OK);
        }

        return response()->json([
            'msg' => "{$type} satisfactoriamente"
        ], Response::HTTP_OK);
    }
}
