<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageProduct extends Model
{
    use HasFactory;

    protected $fillable = ['image','Pname','Pdescription','category_id','brand','price','oprice','stock','status'];

    protected $table = 'products';
}
