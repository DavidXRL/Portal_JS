<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;


    protected $fillable = [
        'name_workshop',
        'description_workshop',
        'date_workshop',
        'image_workshop'
    ];


}
