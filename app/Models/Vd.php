<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vd extends Model
{
    protected $fillable = ['title', 'content', 'price', 'ball', 'place'];
}
