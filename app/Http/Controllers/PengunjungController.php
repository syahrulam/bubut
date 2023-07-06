<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Produk;
use App\Models\Jasa;

class PengunjungController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $jasa = Jasa::all();
        return view('pengunjung',compact('produk','jasa'));
    }
   public function hapusproduk($id)
       {
           DB::table('barang')->where('id',$id)->delete();
   
           return redirect('/barang');
       }
       public function transaksi()
       {
          
           return view ('transaksi');
       }
}
