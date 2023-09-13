<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class possibilities extends Model{
 
    use HasFactory;
    protected $table = 'possibilities';
    protected $fillable = ['brands','os','storage','RAM','CPUs','GPUs','screen size'];
    
        
    public function brands(): Attribute {
        return Attribute::make(
            get: fn($value)=>json_decode($value,true),
            set: fn($value)=>json_encode($value)
        );
     }
}
