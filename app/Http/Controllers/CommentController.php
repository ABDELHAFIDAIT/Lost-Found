<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'comment' => 'required|string',
            'id_annonce' => 'required|integer'
        ]);

        Comment::create([
            'id_user' => Auth::id(),
            'comment' => $request->comment,
            'id_annonce' => $request->id_annonce,
        ]);

        return redirect()->back();
    }
}