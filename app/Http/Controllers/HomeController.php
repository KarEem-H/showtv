<?php

namespace App\Http\Controllers;

use App\Models\Episode;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestEpisodes = Episode::orderBy('created_at', 'desc')->take(5)->get();

        return view('welcome', compact('latestEpisodes'));
    }
}
