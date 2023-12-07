<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_store';
    protected $fillable=[
        'user_id',
        'category_id',
        'owner',
        'store_name',
        'store_address',
        'store_image',
        'description',
    ];
}
