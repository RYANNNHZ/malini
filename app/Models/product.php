<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function comments(){
        return $this->hasMany(coment::class);
    }

    public function ratings(){
        return $this->hasMany(rating::class);
    }

    public function categories(){
        return $this->belongsToMany(category::class,'product_categories');
    }

    public function users(){
        return $this->belongsToMany(User::class,'product_User');
    }
}
