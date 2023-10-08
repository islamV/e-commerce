<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Product extends Model
{
    use HasFactory;
    protected $fillable=['title','description' ,'price' ,'availability' ,'quantity' ,'details'];

    public static function find($productId)
    {
    }

    public function category(){
        return $this->hasOne(Category::class);
    }
    public function orders(){
        return $this->belongsToMany(order::class);
    }
    public function image(){
        return $this->hasOne(Image::class);
    }
    public function getAvailabilityAttribute(){ 
    echo $this->attributes['availability'] === 1
    ?'<span class="badge badge-pill badge-success">Available</span>' 
    : '<span class="badge badge-pill badge-danger">Unavailable</span>';
    
    }
    public function details() : Attribute {
        return Attribute::make(
            get: fn($value)=>json_decode($value,true),
            set: fn($value)=>json_encode($value)
        );
     }
}
