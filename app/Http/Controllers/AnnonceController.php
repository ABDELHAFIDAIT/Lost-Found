<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index(){
        $annonces = Annonce::all();
        return view('annonces', ['annonces' => $annonces]);
    }
}
