<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViewUserController extends Controller
{
    public function index()
    {
        $users = User::get();
        $id_user = Auth::id();
        $news = News::where('id_editor', $id_user)->latest()->get();
        return view('perfiles.user-view', [
            'users' => $users,
            'news' => $news
        ]);
    }

    public function editUser(User $user){

    }

    public function destroyUser(User $user){
        $news = News::where('id_editor', $user->id)->latest()->get();
        foreach ($news as $new){
            $new->update([
                'id_editor' => 1
            ]);
        }
        $user->delete();
        redirect()->back();
    }
}
