<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function orderOrderdetails(){

        return $this->belongsTo(Order::class,'order_id','id');
        //product_category is the attributes of products table
    }
}
