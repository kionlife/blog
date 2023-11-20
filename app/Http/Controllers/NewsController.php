<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index() {
        $news = News::latest()->paginate(9);

        return view('news.index', compact('news'));
    }

    public function show($id) {
        $post = News::findOrFail($id);

        return view('news.show', compact('post'));
    }

}
