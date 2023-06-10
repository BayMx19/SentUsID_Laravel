<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    public function index(){
        return view('list-pengguna.users');
    }
    public function pengguna() {
        $users = DB::table('users')->get();

        return view ('list-pengguna.users',['users'=>$users]);
    }

    
    public function getRoless() {
        $getroless = DB::table('role')->distinct()->get();

        return view ('list-pengguna.addusers',['getroles'=>$getroless]);
        
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
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
            'notelp' => $request->notelp,
        ]);
        // alihkan halaman ke halaman karya wan
        return redirect('/users')->with('success', 'Berhasil menambahkan User.');
    
    }

    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->get();
        $getroless = DB::table('role')->distinct()->get();
    
        return view('/list-pengguna.detailusers',['users' => $users[0], 'getroles' => $getroless]);
     
    }
       
        public function update(Request $request)
    {
        // return $request;
         DB::table('users')->where('id',$request->id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'user_role' => $request->user_role,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
        ]);
        return redirect('/users')->with('success', 'Berhasil edit User.');
    }
    public function delete($id)
        {
            DB::table('users')->where('id', $id)->delete();
            return redirect('/users')->with('success', 'Berhasil hapus User.');
        }
    
}
