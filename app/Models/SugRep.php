<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SugRep extends Model
{
    use HasFactory;
    protected $table ='suggestions_reports';
    protected $fillable = [
        'store_id',
        'type',
        'message'
    ];
}
