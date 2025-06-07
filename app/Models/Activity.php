<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_act',
        'description_activity',
        'date_activity',
        'image_activity',
        'time_activity'
    ];
}
