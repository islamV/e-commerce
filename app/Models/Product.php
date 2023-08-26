<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['title','description' ,'price' ,'availability' ,'quantity'];
    public function category(){
        return $this->hasOne(Category::class);
    }
    public function orders(){
        return $this->belongsToMany(order::class);
    }
    public function image(){
        return $this->morphOne(Image::class ,'product');
    }
    public function getAvailabilityAttribute(){
        if($this->attributes['availability']==1){
            echo'<span class="badge badge-success ml-1">Available</span>';
            }elseif ($this->attributes['availability']==0) {
                echo '<span class="badge badge-danger ml-1">Unavailable</span>';
            
                }
    }
}
