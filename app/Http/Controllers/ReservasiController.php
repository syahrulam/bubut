<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::all();
        return view('reservasi',compact('reservasi'));
    }

    public function store(Request $request){
        $reservasi = new Reservasi;
        $reservasi->nama = $request->input('nama');
        $reservasi->no_wa = $request->input('no_wa');
        $reservasi->alamat = $request->input('alamat');
        $reservasi->jasa = $request->input('jasa');
        $reservasi->estimasi = $request->input('estimasi');
        $reservasi->keterangan = $request->input('keterangan');   
        $reservasi->save();
        return redirect()->back()->with('status','Data Telah Ditambahkan');
    
       }
}
