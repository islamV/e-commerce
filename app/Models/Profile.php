<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
protected $fillable=[
    'phone',
    'country',
    'age',
    'gender',
    'role',
];
public function profile(){
    return $this->morphTo();
}
}
