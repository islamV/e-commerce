<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
      
        protected $fillable = ['name', 'position', 'office', 'email', 'phone','city' ,'country','gender','birthDay', 'salary', 'created_at'];


     function getCreatedAtAttribute($date)
    {
        return date("d/m/Y", strtotime($date));
    }
}