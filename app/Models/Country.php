<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Post;

//Country => countries
class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    public function users(){
    	return $this->hasMany(User::class,'country_id','id');
    }

    public function posts(){
    	return $this->hasManyThrough(Post::class,User::class);
    }
}
