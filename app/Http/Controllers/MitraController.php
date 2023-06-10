<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MitraController extends Controller
{
    public function index(){
        return view('list-mitra.mitra');
    }
    public function mitra(){
        $mitra = DB::table('mitra')->get();
        return view('list-mitra.mitra',['mitra'=>$mitra]);
    }

    public function getEmail()
    {
        $getEmail = DB::table('users')->select('username','email','alamat','notelp')->where('user_role', 'admin')->get();
        
        return view('list-mitra.addmitra', ['getEmail' => $getEmail]);
    }
    

    public function addMitra() {
        return view('list-mitra.addmitra');
    }

    public function input(Request $request)
    {
        // return $request;
        // insert data ke table karyawan
       DB::table('mitra')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'tanggal_daftar' => $request->tanggal_daftar,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status_mitra' => $request->status_mitra,
        ]);
        // alihkan halaman ke halaman karya wan
        return redirect('/mitra')->with('success', 'Berhasil menambahkan mitra.');
    
    }


    public function edit($id)
    {
        $mitra = DB::table('mitra')->where('id',$id)->get();
    
        return view('/list-mitra.detailmitra',['mitra' => $mitra[0]]);
     
    }

    public function update(Request $request)
    {
        // return $request;
         DB::table('mitra')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'tanggal_daftar' => $request->tanggal_daftar,
            'tanggal_selesai' => $request->tanggal_selesai,
            'status_mitra' => $request->status_mitra,
        ]);
        return redirect('/mitra')->with('success', 'Berhasil edit User.');
    }

    public function delete($id)
        {
            DB::table('mitra')->where('id', $id)->delete();
            return redirect('/mitra')->with('success', 'Berhasil hapus Mitra.');
        }

}
