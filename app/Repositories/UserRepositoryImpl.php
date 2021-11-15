<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class UserRepositoryImpl extends Repository implements UserRepository
{

    //Implementation
    public function search(){
         echo '<br> UserRepository call model here: '.__METHOD__;
    }

}