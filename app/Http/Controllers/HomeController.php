<?php

namespace App\Http\Controllers;

use App\Artwork;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $artworks = Artwork::where(function ($query) {
            $query->where('publish_on', '<', Carbon::now())
                ->orWhereNull('publish_on');
                })
                ->orderBy('order_column')->get();

        $pageAbout = null;
        try {
            $pageAbout = nova_get_page_by_slug('about');
        } catch (\Exception $e) {
            // TODO: Log $e
        }

        return view('home')->with([
            'artworks' => $artworks,
            'pageAbout' => $pageAbout
        ]);
    }
}
