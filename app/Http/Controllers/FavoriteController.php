<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function add(Spot $spot)
    {
        auth()->user()->favoritedSpots()->attach($spot);

        return back()->with('success', 'Spot adicionado aos favoritos.');
    }

    public function remove(Spot $spot)
    {
        auth()->user()->favoritedSpots()->detach($spot);

        return back()->with('success', 'Spot removido dos favoritos.');
    }
}
