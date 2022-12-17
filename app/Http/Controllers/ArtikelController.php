<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends Controller {
    public function index(){
        $artikels = Artikel::all();
        // dd($artikels->nama);
        return View("artikel_view", compact("artikels"));
    }
}
