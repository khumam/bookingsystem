<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'name',
        'notes',
        'date',
        'start',
        'end',
        'contact',
        'total_price',
        'duration',
    ];
}
