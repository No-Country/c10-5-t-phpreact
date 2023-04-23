<?php

namespace App\Http\Controllers;

use App\Services\CacheService;
use App\Services\ImageService;
use App\Services\JsonResponseService;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected JsonResponseService $response;
    protected ImageService $image;
    protected CacheService $cache;

    public function __construct()
    {
        $this->response = new JsonResponseService;
        $this->image = new ImageService;
        $this->cache = new CacheService;
    }
}
