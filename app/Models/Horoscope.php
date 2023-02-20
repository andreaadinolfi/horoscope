<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id,horoscope,birth_date,sign'];
}
