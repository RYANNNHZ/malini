<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_user extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = ['id','updated_at','created_at'];
}
