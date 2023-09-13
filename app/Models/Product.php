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
        if($this->attributes['availability']==1){
            $this->attributes['availability'] ="Available";
            }elseif ($this->attributes['availability']==0) {
                $this->attributes['availability'] ="Unavailable";
                }
    }
    public function details() : Attribute {
        return Attribute::make(
            get: fn($value)=>json_decode($value,true),
            set: fn($value)=>json_encode($value)
        );
     }
}
