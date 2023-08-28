<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo(Product::class); //one to one relationship
    }
    protected $fillable=[
        'image',
      
 ];
 public function image() : Attribute {
    return Attribute::make(
        get: fn($value)=>json_decode($value,true),
        set: fn($value)=>json_encode($value)
    );
 }
}
