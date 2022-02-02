<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'second_name',
        'last_name',
        'birthday',
        'street',
        'street_number',
        'kind_patient',
        'settlement',
        'zip_code',
        'country',
        'state',
        'city',
        'phone_number',
        'cell_number',
        'email'
    ];
}
