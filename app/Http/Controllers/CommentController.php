<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Spot;

class CommentController extends Controller
{
    public function store(Request $request, Spot $spot)
    {
        //dd($request->all());

        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        Comment::insert([
            'user_id' => auth()->id(),
            'spot_id' => $spot->id,
            'comment' => $request->input('comment'),
            'rating' => $request->input('rating'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Comentário e avaliação adicionados com sucesso.');
    }
}
