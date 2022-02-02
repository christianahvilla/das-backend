<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'patient',
        'treatment',
        'start_date',
        'start_hour',
        'end_date',
        'end_hour',
        'notes',
    ];
}
