<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function inscription(Request $request)
    {
        $request->phone = str_replace(' ', '',$request->phone);
        $request->merge([
            'phone' => str_replace(' ', '', $request->get('phone'))
        ]);
        $this->validate(request(), [
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:9|max:9',
            'password' => 'required|confirmed|min:6'
        ]);
        $name = $request->prenom." ".$request->nom;
        $user = User::create([
            "name" => $name,
            "email" => $request->email,
            "prenom" => $request->prenom,
            "phone" => $request->phone,
            "nom" => $request->nom,
            "uuid" => (string) Str::uuid(),
            "password" => $request->password,
            "password_seen" => $request->password,
        ]);
        
        auth()->login($user);
        
        return redirect()->to('/mon-parc');
    }
}
