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

}