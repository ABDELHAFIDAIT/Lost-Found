<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index(){
        $annonces = Annonce::all();
        $categories = Category::all();
        return view('annonces', ['annonces' => $annonces, 'categories' => $categories]);
    }
}
