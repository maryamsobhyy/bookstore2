<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['name','description','image','author','price','discount','price_after_discount','status','stock','number_of_pages','code','category_id'];
}
