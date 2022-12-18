<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpefikasiBuku;

class AdminController extends Controller
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
        $spesifikasiBuku = SpefikasiBuku::all();
        return view('adminpages/admin')->with('spesifikasiBuku', $spesifikasiBuku);
    }
    
}
