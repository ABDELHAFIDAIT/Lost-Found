<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AnnonceController extends Controller
{
    public function index(){
        $annonces = Annonce::with('user','category')->latest()->get();
        $categories = Category::all();
        if(!isset(Auth::user()->id)){
            return view('guest.annonces', ['annonces' => $annonces, 'categories' => $categories]);
        }else{
            return view('user.annonces', ['annonces' => $annonces, 'categories' => $categories]);
        }
    }

    public function get($id){
        $annonce = Annonce::with(['user', 'category', 'comments.user'])
                            ->withCount('comments')
                            ->findOrFail($id);
        if(!isset(Auth::user()->id)){
            return view('guest.annonce', compact('annonce'));
        }else{
            return view('user.annonce', compact('annonce'));
        }
    }

    public function annonces()
    {
        $annonces = Annonce::with('user', 'category')
        ->where('id_user', auth()->id())
        ->get();

        return view('user.profile', compact('annonces'));
    }
    
}
