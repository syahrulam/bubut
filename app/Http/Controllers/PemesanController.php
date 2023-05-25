<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Pesanan;

class PemesanController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('pemesan',compact('pesanan'));
        
    }

    public function store(Request $request){
        $pesanan = new Pesanan;
        $pesanan->nama = $request->input('nama');
        $pesanan->no_wa = $request->input('no_wa');
        $pesanan->alamat = $request->input('alamat');
        $pesanan->pesanan = $request->input('pesanan');
        $pesanan->estimasi = $request->input('estimasi');
        $pesanan->harga = $request->input('harga');   
        $pesanan->save();
        return redirect()->back()->with('status','Data Telah Ditambahkan');
    
       }
       public function editpemesananproses(Request $request, $id)
       {
           $pemesanan = Produk::findOrFail($id);
    
           $pemesanan->nama = $request->input('namaproduk');
           $pemesanan->no_wa = $request->input('no_wa');
           $pemasanan->alamat = $request->input('alamat');
           $pemesanan->pesanan = $request->input('pesanan');
           $pemesanan->estimasi = $request->input('estimasi');
           $pemesanan->harga  = $request->input('harga');
   
           if ($request->hasFile('image')) {
               // Hapus file lama
               Storage::delete($pemasanan->image);
   
               // Upload file baru
               $file = $request->file('image');
               $path = $file->store('public/images');
   
               $pemesanan->image = $path;
           }
   
           $pemasanan->save();
   
           return redirect()->route('soal-kuis')->with('success', 'Soal berhasil diperbarui.');
       }

       public function hapuspemesanan($id)
       {
           DB::table('pesanan')->where('id',$id)->delete();
   
           return redirect('/pesanan');
       }
}
