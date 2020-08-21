<?php

namespace App\Http\Controllers;

use App\Artwork;
use App\Tag;
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

        $filters = Tag::where('is_filter', 1)->has('artworks')->pluck('name');

        return view('home')->with([
            'artworks' => $artworks,
            'filters' => $filters,
            'pageAbout' => $pageAbout
        ]);
    }
}
