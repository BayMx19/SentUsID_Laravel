<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
        return view('list-produk.produk');
    }
    public function produk(){
        $produk = DB::table('produk')->get();
        return view('list-produk.produk',['produk'=>$produk]);
    }

    public function addProduk() {
        return view('list-produk.addproduk');
    }
    public function input(Request $request)
    {
        // return $request;
        // insert data ke table karyawan
       DB::table('produk')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'ukuran' => $request->ukuran,
        ]);
        // alihkan halaman ke halaman karya wan
        return redirect('/produk')->with('success', 'Berhasil menambahkan produk.');
    
    }


    public function edit($id)
    {
        $produk = DB::table('produk')->where('id',$id)->get();
    
        return view('/list-produk.detailproduk',['produk' => $produk[0]]);
     
    }

    public function update(Request $request)
    {
        DB::table('produk')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'ukuran' => $request->ukuran,
        ]);
        return redirect('/produk')->with('success', 'Berhasil edit produk.');
    }

    public function delete($id)
        {
            DB::table('produk')->where('id', $id)->delete();
            return redirect('/produk')->with('success', 'Berhasil hapus produk.');
        }
}
