<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function pengguna() {
        $users = DB::table('users')->get();

        return view ('list-pengguna.users',['users'=>$users]);
    }
}
