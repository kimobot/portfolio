<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App \Artwork;

class HomeController extends Controller
{
    public function home() {
        $artworks = Artwork::all();
        return view('home')->with(['artworks' => $artworks]);
    }
}
