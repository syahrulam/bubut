<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AkunController extends Controller
{
    public function index()
    {
        $getAkun = DB::table('users')->get();
        $return = [
            'getAkun',
        ];
        return view('akun', compact($return));
    }
    public function getAkun($id)
    {
        $getAkun = User::all()->where('id',$id);

        $return = [
            'getAkun',
        ];
        return view('editakun', compact($return));

    }
}
