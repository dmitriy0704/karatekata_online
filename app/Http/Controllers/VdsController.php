<?php

namespace App\Http\Controllers;

use App\Models\Vd;
use Illuminate\Http\Request;

class VdsController extends Controller
{
    public function index()
    {
        $context = ['vds' => Vd::latest()->get()];
        return view('index', $context);
    }

    public function detail(Vd $vd)
    {
        return view('detail', ['vd'=>$vd]);
    }
}
