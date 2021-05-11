<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserNewsController extends Controller
{
    public function index()
    {
        $id_user = Auth::id();
        $news = News::where('id_editor', $id_user)->latest()->get();
        return view('perfiles.news.userNews', compact('news'));
    }
}
