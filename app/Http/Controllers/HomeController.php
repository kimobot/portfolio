<?php

namespace App\Http\Controllers;

use App\Artwork;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $artworks = Artwork::where('publish_on', '<' , Carbon::now())->get();
        return view('home')->with(['artworks' => $artworks]);
    }
}
