<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
class Vd extends Model
{
    protected $fillable = ['title', 'content', 'price', 'ball', 'place'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
