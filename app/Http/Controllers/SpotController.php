<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       /**  $request->validate([
            *'image'=> 'required| image|mimes: jpg,png, jpeg,gif, svg|max: 2048', ]);
            *$name = $request->file('image' ) -> getClientOriginalName();
            *$request->file('image') -> store( 'public/images');
            *$picture = new Spot;
            *$picture -> name = $name;
            *$picture -> path = $request->file( 'image') -> hashName();
            *$picture->save();
            *return redirect()->back()->with( 'status', 'Image Has been uploaded');
        */    
    }

    /**
     * Display the specified resource.
     */
    public function show(Spot $spot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spot $spot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spot $spot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spot $spot)
    {
        //
    }
}
