<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    // public function index() {
    //     return view ('/info-akun.akun');
    // }

    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->get();

        return view('/info-akun.detailakun',['users' => $users[0]]);

    }

        public function update(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'foto' => 'mimes:jpg.png,jpeg',
        ]);

        //uploud image
        $imageName = $request->foto->hashName();;
$request->foto->storeAs('akun', $imageName, 'public');
         DB::table('users')->where('id',$request->id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'deskripsi' => $request->deskripsi,
            'foto' => 'akun/' . $request->foto->hashName(),
        ]);
        return redirect('/acc')->with('success', 'Berhasil edit Akun.');
    }
}