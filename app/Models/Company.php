<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'NIP',
        'zip_code',
        'street',
        'city',
        'phone',
        'email',
        'website',
        'industry'
    ];
}
