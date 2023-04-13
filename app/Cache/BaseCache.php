<?php  

namespace App\Cache;

use Illuminate\Support\Facades\Cache;
use App\Contracts\BaseRepositoryInterface;

abstract class BaseCache implements BaseRepositoryInterface {
    
    const time = 60 * 60;

    protected $repository;
    protected $key;
    protected $cache;

    public function __construct(object $repository, string $key)
    {
        $this->repository = $repository;
        $this->key = $key;
        $this->cache = new Cache;
    }

    protected function forget(string $key) {
        $this->cache::forget($key);
    }

}