<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Athlete;
class Vd extends Model
{
    protected $fillable = ['title', 'content', 'price', 'ball', 'place'];
    public function athlete(){
        return $this->belongsTo(Athlete::class);
    }
}
