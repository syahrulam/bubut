<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Produk;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $getProduk = DB::table('barang')->get();
        $return = [
            'getProduk',
        ];
        return view('produk', compact($return));
    }
    
    public function editproduk($id)
    {
        $barang = DB::table('barang')->where('id',$id)->get();
        return view('editproduk',['barang'=>$barang]);
    }

    public function tambahproduk()
    {
        return view ('tbhproduk');
    }
    public function store(Request $request){
        $produk = new Produk;
        $produk->namabarang = $request->input('namabarang');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->kategori = $request->input('kategori');
        $produk->harga = $request->input('harga');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('image/produk/',$filename);
            $produk->image = $filename;
        }
        $produk->save();
        return redirect()->back()->with('status','Data Telah Ditambahkan');
    
      }

       public function editprodukproses(Request $request, $id)
       {
           $barang = Produk::findOrFail($id);
    
           $barang->namabarang = $request->input('namabarang');
           $barang->deskripsi = $request->input('deskripsi');
           $barang->kategori = $request->input('kategori');
           $barang->harga = $request->input('harga');
   
           if ($request->hasFile('image')) {
               // Hapus file lama
               Storage::delete($barang->image);
   
               // Upload file baru
               $file = $request->file('image');
               $path = $file->store('public/images');
   
               $barang->image = $path;
           }
   
           $barang->save();
   
           return redirect()->route('soal-kuis')->with('success', 'Soal berhasil diperbarui.');
       }

       public function hapusproduk($id)
       {
           DB::table('barang')->where('id',$id)->delete();
   
           return redirect('/barang');
       }

}
