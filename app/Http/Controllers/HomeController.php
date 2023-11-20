<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();
        return view('home', compact('news'));
    }


}
