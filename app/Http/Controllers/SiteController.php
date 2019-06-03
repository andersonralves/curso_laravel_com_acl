<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use Gate;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portal.home.index');
    }

    public function update($idPost)
    {
        $post = Post::find($idPost);

        //$this->authorize('update-post', $post);

        if ( Gate::denies('update-post', $post) ) {
            abort(403, 'Unauthorized');
        }

        return view('update-post', compact('post'));
    }

    public function rolesPermission()
    {
        $nameUser = auth()->user()->name;
        $roles = auth()->user()->roles;

        return view('roles-permissions', compact('nameUser', 'roles'));
    }
}