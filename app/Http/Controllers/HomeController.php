<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spot;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']); //verifica se o utilizador está autenticado
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $spots = Spot::all();
        return view('home', compact("spots"));
    }
    public function adminHome()
    {
        $users = User::all();
        return view('adminHome', compact("users"));
    }
}
