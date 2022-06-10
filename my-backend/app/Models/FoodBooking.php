<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodBooking extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = ['food_name','price','quantity','cust_name','phone_number'];
}
