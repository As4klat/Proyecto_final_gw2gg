<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.news-create');
    }

    public function save()
    {
        request()->validate([
            'title'=> 'required|max:40',
            'preview'=> 'required|max:254',
            'body'=> 'required'
        ]);

        $url = strtr(request('title'), " ", "-");
        $url = strtolower($url);

        News::create([
            'id_editor' => Auth::id(),
            'title' => request('title'),
            'url' => $url,
            'preview' => request('preview'),
            'body' => request('body')
        ]);
        return redirect()->route('news.index');
    }

    public function show(News $new)
    {
        return view('news.show', [
            'new' => $new
        ]);
    }
}
