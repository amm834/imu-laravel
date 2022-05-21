<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'date_of_birth',
        'phone_number',
        'guardian_name',
        'guardian_phone_number',
        'address',
        'registration_date',
        'payment_type',
        'amount'
    ];
}
