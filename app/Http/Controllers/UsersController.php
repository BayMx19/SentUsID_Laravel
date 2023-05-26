<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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

    public function edit($id)
    {
        $users = DB::table('users')->where('id_users',$id)->get();
    
        return view('/list-pengguna.detailusers',['users' => $users[0]]);
     
    }
       
        public function update(Request $request)
    {
        // return $request;
         DB::table('users')->where('id_users',$request->id_users)->update([
            'username' => $request->username,
            'email' => $request->email,
            'user_role' => $request->getroles,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        return redirect('/users')->with('success', 'Berhasil edit User.');
    }
    public function delete($id)
        {
            $title = 'Delete User!';
            $text = "Are you sure want to delete it?";
            confirmDelete($title, $text);
            return view ('list-pengguna.users', compact(''));

            // // Menampilkan SweetAlert konfirmasi delete
            // Alert::warning('Delete User!', 'Are you sure you want to delete?')
            //     ->showCancelButton(true)
            //     ->showConfirmButton(true)
            //     ->focusConfirm(false)
            //     ->confirmButtonText('Delete')
            //     ->cancelButtonText('Cancel')
            //     ->reverseButtons();

            // // Menghapus data pengguna jika konfirmasi delete diterima
            // if (Alert::confirmed()) {
            //     DB::table('users')->where('id_users', $id)->delete();
            //     return redirect('/users')->with('success', 'User berhasil dihapus.');
            // } else {
            //     return redirect('/users');
            // }
        }
    
}
