<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MitraController extends Controller
{
    public function index(){
        return view('list-mitra.mitra');
    }
    public function mitra(){
        $mitra = DB::table('mitra')->get();
        return view('list-mitra.mitra',['mitra'=>$mitra]);
    }
}
