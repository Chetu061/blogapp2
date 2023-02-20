<?php

namespace App\Models;
use App\Models\category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //<!--category data-->
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}