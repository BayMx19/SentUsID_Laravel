<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisController extends Controller
{
    public function index(){
        return view('jenis.jenis');
    }

    public function jenis(){
        $jenis = DB::table('jenis')->get();
        return view('jenis.jenis',['jenis'=>$jenis]);
    }

    public function addJenis(){
        return view('jenis.addjenis');
    }

        public function input(Request $request)
    {
        $email = $request->getEmail;
        $userRole = $request->user_role;

        // return $request;
        // insert data ke table karyawan
       DB::table('jenis')->insert([
            'nama' => $request->nama,
        ]);

        // alihkan halaman ke halaman karya wan
        return redirect('/jenis')->with('success', 'Berhasil menambahkan Jenis Produk.');

    }


}