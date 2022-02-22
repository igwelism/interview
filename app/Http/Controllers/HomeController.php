<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $articles = json_decode(Storage::disk('public')->get('data\articles.json'));
        $events = json_decode(Storage::disk('public')->get('data\events.json'));
        return view('my-welcome', compact('articles', 'events'));
    }
}
