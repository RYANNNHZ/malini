<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = ['id','created_at','updated_at'];

    public function products(){
        return $this->belongsToMany(product::class,'product_categories');
    }



}
