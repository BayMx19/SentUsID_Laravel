<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index(){
        return view('list-pesanan.pesanan');
    }
    public function pesanan(){
        $pesanan = DB::table('pesanan')->get();
        return view('list-pesanan.pesanan',['pesanan'=>$pesanan]);
    }

}
