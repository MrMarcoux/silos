<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetSiloState extends Model
{
    use HasFactory;
    protected $primaryKey = 'target_silo_state_id';

    protected $fillable = [
        'mass',
        'relativeHumidity',
        'temperature'
    ];
}
