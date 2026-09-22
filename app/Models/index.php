<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;
    
    protected $fillable = ['image','Pname','Pdescription','category_id','brand','price','oprice','stock','status'];

    protected $table = 'products';

}
