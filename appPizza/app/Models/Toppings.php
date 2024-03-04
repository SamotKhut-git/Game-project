<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toppings extends Model
{
    use HasFactory;
    // make sure ur fillable are the same as field in your database 
    protected $fillable = [
        "id",
        "tname",
        "tprice",
        "timage",
    ];
}
