<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index(){
        $users = User::get();
        return view('perfiles.admin.userAdmin', compact('users'));
    }


}
