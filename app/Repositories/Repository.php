<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface
{

    //Implementation
    public function all(){}

    public function create(array $data){}

    public function update(array $data, $id){}

    public function delete($id){}

    public function show($id){}
}