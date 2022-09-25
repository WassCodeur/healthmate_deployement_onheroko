<?php

namespace App\Http\Controllers;

use App\Models\Sujet;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use App\Providers\RouteServiceProvider;
use HomeControllers;
use UserController;


class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index', 'show']);
    // }
  
    public function index()
    {
       $sujets = Sujet::latest()->paginate(10);
         return view('sujet.index', compact('sujets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::where('id', '=', session('LoggedUser'))->first();
        $data = $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:10',
        ]);

        $sujet = new Sujet();
        $sujet->title = $data['title'];
        $sujet->content = $data['content'];
        $sujet->user_id = $users->id;
        $post = $sujet->save();
        if($post){
            return redirect()->route('forum')->with('success', 'Votre sujet a bien été créé');
        }else {
            return back()->with('fail', 'Quelque chose s\'est mal passé');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function show(Sujet $sujet)
    {
        return view('sujet.show', compact('sujet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function edit(Sujet $sujet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sujet $sujet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sujet  $sujet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sujet $sujet)
    {
        //
    }
}
