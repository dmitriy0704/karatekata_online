<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vd;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['vds' => Auth::user()->vds()->latest()->get()]);
    }

    public function showAddVdForm()
    {
        return view('vd_add');
    }

    public function storeVd(Request $request)
    {
        Auth::user()->vds()->create([
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category
        ]);
        return redirect()->route('home');
    }

    public function showEditVdForm(Vd $vd)
    {
        return view('vd_edit', ['vd' => $vd]);
    }

    public function updateVd(Request $request, Vd $vd){
        $vd->fill(['title' => $request->title,
            'content' => $request->content,
            'price' => $request->category]);
        $vd->sаvе();
        return redirect() ->route('home')
    }
}
