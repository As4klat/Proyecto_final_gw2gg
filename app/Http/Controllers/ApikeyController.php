<?php

namespace App\Http\Controllers;
use App\Models\ApyKey;
use Illuminate\Support\Facades\Auth;

class ApikeyController extends Controller
{

    public function index()
    {
        $id_user = Auth::id();
        $key = ApyKey::where('id_user', $id_user)->latest()->get();
        return view('perfiles.apiform', compact('key'));
    }

    public function save()
    {
        request()->validate([
            'userapikey' => 'required|size:72|unique:apiKeys,api_key'
        ]);

        ApyKey::create([
            'id_user' => Auth::id(),
            'api_key' => request('userapikey')
        ]);
        return back();

    }

    public function delete()
    {
        ApyKey::where('id', request('idKey'))->delete();
        return back();
    }
}
