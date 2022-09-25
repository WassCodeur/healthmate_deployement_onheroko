<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use http\Env\Response;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use App\Providers\RouteServiceProvider;
use HomeControllers;



class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.connexion');
    }
    public function register(Request $request)
    {
        return view('auth.inscription');
    }
    public function create(Request $request)
    {
        $request->validate([
            'lastename' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
            'passwordcomfirm' => 'required|same:password',
        ]);
        $users = new User;
        $users->lastename = $request->lastename;
        $users->firstname = $request->firstname;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->passwordcomfirm = Hash::make($request->passwordcomfirm);
        $res = $users->save();
        if ($res) {
            return back()->with('success', 'Vous avez bien été inscrit');
        } else {
            return back()->with('fail', 'Quelque chose s\'est mal passé');
        }
    }
    public function UserLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $users = User::where('email', '=', $request->email)->first();
        if ($users) {
            if (Hash::check($request->password, $users->password)) {
                $request->session()->put('LoggedUser', $users->id);
                return redirect('home');
            } else {
                return back()->with('fail', 'Mot de passe incorrect');
            }
        } else {
            return back()->with('fail', 'Cet email n\'existe pas');
        }
    }
    public function home()
    {
        if (session()->has('LoggedUser')) {
            $users = User::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $users
            ];
            return view('home', $data);
        } else {
            return redirect('connexion')->with('fail', 'Vous devez vous connecter');
        }
    }
    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('connexion')->with('success', 'Vous avez bien été déconnecté');
        }
    }

    
}
