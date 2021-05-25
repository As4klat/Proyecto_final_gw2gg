<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index(){
        $users = User::get();
        $n = 1;
        return view('perfiles.admin.userAdmin', [
            'users' => $users,
            'n' => $n
        ]);
    }

    public function destroy(User $user){
        $user->delete();

        return redirect()->back();
    }
}
