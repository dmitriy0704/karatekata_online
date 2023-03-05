<?php

namespace App\Http\Controllers;

use App\Models\Vd;
use Illuminate\Http\Request;

class VdsController extends Controller
{
    public function index()
    {
        return response('Здесь будет перечень видео роликов')
            ->header('Content-Type', 'text/plain');
    }

    public function detail(Vd $vd)
    {
        $s = $vd->title . "\r\n\r\n";
        $s .= $vd->content . "\r\n";
        $s .= $vd->price . "\r\n";
        $s .= $vd->ball . "\r\n";
        $s .= $vd->place . "\r\n";
        return response($s)->header('Content-Type', 'text/plain');
    }
}
