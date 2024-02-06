<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Car extends Model
{
    use HasFactory ,SoftDeletes ;
    protected $fillable = [
        'cartitle',
        'content',
        'luggage',
        'doors',
        'passengers',
        'price',
        'image',
        'active',
        'category_id'


      ];

      public function category(){
         return $this->belongsTo( Category::class);//category(model)
         }

}
