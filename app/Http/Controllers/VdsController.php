<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VdsController extends Controller
{
    public function index()
    {
        return response('Здесь будет перечень видео роликов')
            ->header('Content-Type', 'text/plain');
    }
}
