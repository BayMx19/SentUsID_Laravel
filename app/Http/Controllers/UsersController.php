<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function addUsers() {
        return view('list-pengguna.addusers');
    }

    public function input(Request $request)
    {
        // return $request;
        // insert data ke table karyawan
       DB::table('users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'user_role' => $request->getroles,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        // alihkan halaman ke halaman karya wan
        return redirect('/users')->with('success', 'Berhasil menambahkan User.');
    
    }
}
