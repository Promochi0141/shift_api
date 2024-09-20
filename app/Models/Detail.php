<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['name', 'url', 'place'];
    protected $hidden = ['created_at', 'updated_at'];


    use HasFactory;
}
