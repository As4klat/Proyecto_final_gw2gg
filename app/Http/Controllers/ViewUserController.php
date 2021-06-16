<?php

namespace App\Http\Controllers;

use App\Models\Solicitudes;
use App\Models\ApyKey;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use function PHPSTORM_META\elementType;
use function PHPUnit\Framework\isEmpty;

class ViewUserController extends Controller
{
    public function index()
    {
        $solicitudes = Solicitudes::get();
        $users = User::get();
        $id_user = Auth::id();
        $apiKeyObj = ApyKey::where('id_user', $id_user)->first();

        if(empty($apiKeyObj))
        {
            $apiKey = null;  
        }
        else
        {
            $apiKey = $apiKeyObj->api_key;
        }
        $news = News::where('id_editor', $id_user)->latest()->get();
        return view('perfiles.user-view', [
            'solicitudes' => $solicitudes,
            'users' => $users,
            'acount' => useApiKey($apiKey),
            'news' => $news
        ]);
    }

    public function solicitudShow(Solicitudes $solicitud){
        return view('perfiles.profile-templates.partials.solicitudShow', [
            'solicitud' => $solicitud
        ]);
    }

    public function solicitudSucces(Solicitudes $solicitud){
        $solicitud->update([
            'aceptado' => 1
        ]);
        return redirect()->back();
    }

    public function solicitudDestroy(Solicitudes $solicitud){
        $solicitud->delete();
        return redirect()->back();
    }

    public function editUser(User $user){
        return view('perfiles.profile-templates.partials.editUser', [
            'user' => $user
        ]);
    }

    public function updateUser(User $user){

        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
        ]);

        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'permision' => request('permision')
        ]);
        return redirect()->route('perfil');
    }

    public function destroyUser(User $user){
        $admin = User::where('permision', 'admin')->first();
        $news = News::where('id_editor', $user->id)->latest()->get();
        foreach ($news as $new){
            $new->update([
                'id_editor' => $admin->id
            ]);
        }
        $user->delete();
        return redirect()->back();
    }

    public function changePassword() {
        request()->validate([
            'oldpassword'=> 'required|password',
            'newpassword'=> 'required|min:6|different:oldpassword',
            'repeatpassword'=> 'required|min:6|same:newpassword'
        ]);

        request()->user()->fill([
            'password' => Hash::make(request()->repeatpassword)
        ])->update();

        Auth::logout();

        return redirect()->route('login');
    }

    public function changeEmail() {
        request()->validate([
            'emailchange'=> 'email:rfc,dns|required'
        ]);
        
        request()->user()->fill([
            'email' => request()->emailchange
        ])->update();
        
        request()->user()->sendEmailVerificationNotification();

        Auth::logout();

        return redirect()->route('login')->with('message', 'Verifique el nuevo email corre!');
    }
}
