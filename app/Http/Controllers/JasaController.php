<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Jasa;

class JasaController extends Controller
{
    public function index()
    {
        $jasa = Jasa::all();
        return view('jasa',compact('jasa'));
        
    }

    public function editjasa($id)
    {
        $jasa = DB::table('jasas')->where('id',$id)->get();
        return view('editjasa',['jasa'=>$jasa]);
    }

    public function tambahjasa()
    {
        return view ('tbhjasa');
    }

    public function store(Request $request){
        $jasa = new Jasa;
        $jasa->nama_jasa = $request->input('nama_jasa');
        $jasa->deskripsi = $request->input('deskripsi');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('image/jasa/',$filename);
            $jasa->image = $filename;
        }
        $jasa->save();
        return redirect()->back()->with('status','Data Telah Ditambahkan');
    
       }

       public function update(Request $request, $id)
       {
           $jasa = Jasa::findOrFail($id);
   
           $jasa->nama_jasa = $request->input('nama_jasa');
           $jasa->deskripsi = $request->input('deskripsi');
   
           if ($request->hasFile('image')) {
               // Hapus file lama
               Storage::delete($jasa->image);
   
               // Upload file baru
               $file = $request->file('image');
               $path = $file->store('public/images');
   
               $jasa->image = $path;
           }
   
           $jasa->save();
   
           return redirect()->route('jasa')->with('success', 'Soal berhasil diperbarui.');
       }

       public function hapusjasa($id)
       {
           DB::table('jasas')->where('id',$id)->delete();
   
           return redirect('/jasa');
       }

}
