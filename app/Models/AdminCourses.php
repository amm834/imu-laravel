<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCourses extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'first_sem_fee', 'second_sem_fee', 'total_fee'];
}
