<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index(){
        $penjualan = Penjualan::all();
        return view('index',['penjualan'=>$penjualan]);
    }

    public function add(Request $req){
        $penjualan = new Penjualan;
        $penjualan->id = $req->id;
        $penjualan->nama_barang = $req->nama_barang;
        $penjualan->tanggal_penjualan = $req->tanggal_penjualan;
        $penjualan->pelanggan = $req->pelanggan;
        $penjualan->jumlah = $req->jumlah;
        $penjualan->harga_satuan = $req->harga_satuan;
        $penjualan->total = $penjualan->jumlah * $penjualan->harga_satuan;
        $penjualan->save();
        return redirect()->back(); 
    }
}