<?php 

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface {

    public function select(Model $model);

    public function all();
   

    public function get($id);
  

    public function save(Model $model);


    public function destroy(Model $model);
}