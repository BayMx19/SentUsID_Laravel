<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        return view('list-pengguna.users');
    }
    public function pengguna() {
        $users = DB::table('users')->get();

        return view ('list-pengguna.users',['users'=>$users]);
    }

    public function getRoles() {
        $getroles = DB::table('role')->distinct()->get();

        return view ('list-pengguna.addusers',['getroles'=>$getroles]);
    }
}
