<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrainSilo extends Model
{
    use HasFactory;
    protected $primaryKey = 'grain_silo_id';

    protected $fillable = [
        'capacity',
        'occupancy',
        'mass',
        'relativeHumidity',
        'temperature'
    ];

}
