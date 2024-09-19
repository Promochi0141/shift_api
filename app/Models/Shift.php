<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = ['student_id', 'details_id', 'start_time', 'end_time'];

    use HasFactory;
}
