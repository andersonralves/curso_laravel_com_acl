<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\{
    Requests,
    Controllers\Controller
};

use App\{
    User,
    Role,
    Permission,
    Post
};

class PainelController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalRoles = Role::count();
        $totalPermissions = Permission::count();
        $totalPosts = Post::count();

        return view('painel.home.index', compact( 'totalUsers', 'totalRoles', 'totalPermissions', 'totalPosts') );
    }
}
