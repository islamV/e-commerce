<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\BelongsToMany ;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['id','user_id','product_id' ,'quantity' ,'with_offer' ,'total_price'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
