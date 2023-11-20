<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.edit');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $data['image'] = News::getRandomImageFromUnsplash();

        News::create($data);

        return redirect()->route('admin.news');
    }

    public function edit($id)
    {
        $post = News::findOrFail($id);

        return view('admin.news.edit', compact('post'));
    }

    public function update($id)
    {
        $post = News::findOrFail($id);

        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        if (request()->has('create_new_image')) {
            $data['image'] = News::getRandomImageFromUnsplash();
        }

        $post->update($data);

        return redirect()->route('admin.news');
    }

    public function destroy($id) {
        $post = News::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.news');
    }


}
