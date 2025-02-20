<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index(){
        $annonces = Annonce::with('user','category')->latest()->get();
        $categories = Category::all();
        return view('guest.annonces', ['annonces' => $annonces, 'categories' => $categories]);
    }

    public function get($id){
        $annonce = Annonce::with(['user', 'category', 'comments.user'])
                            ->withCount('comments')
                            ->findOrFail($id);
        
        return view('guest.annonce', compact('annonce'));
    }
    
}
