<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    public function index() {
        $akuns = DB::table('users')->get();
        return view ('info-akun.akun');
    }

    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->get();

        return view('/info-akun.detailakun',['users' => $users[0]]);
     
    }
       
        public function update(Request $request)
    {
        // dd($request->all());

        //uploud image 
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('akun'), $imageName);

         DB::table('users')->where('id',$request->id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'deskripsi' => $request->deskripsi,
            'foto' => $imageName,
        ]);
        return redirect('/akun')->with('success', 'Berhasil edit Akun.');
    }
}