<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Gate;

class UserController extends Controller
{
    private $user;

    public function __construct( User $user )
    {
        $this->user = $user;

        if ( Gate::denies('user') ) {
            return abort(403, 'Not Permissions List User');
        }
    }

    public function index()
    {
        $users = $this->user->all();

        return view('painel.users.index', compact('users') );
    }

    public function roles( $id )
    {
        $user = $this->user->find($id);

        $roles = $user->roles;

        return view('painel.users.roles', compact('user', 'roles') );
    }

    public function edit($id)
    {
        if ( Gate::denies('edit-user') ) {
            return redirect()->back();
        }
    }

    public function update($id)
    {
        if ( Gate::denies('edit-user') ) {
            return redirect()->back();
        }
    }
}
