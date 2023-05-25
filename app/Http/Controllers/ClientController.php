<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class ClientController extends Controller
{
    public function index()
    {
        $getClient = DB::table('client')->get();
        $return = [
            'getClient',
        ];
        return view('client', compact($return));
    }
}
