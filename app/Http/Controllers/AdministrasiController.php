<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rekapandata;
use App\Models\Profileguru;
use DB;

class AdministrasiController extends Controller
{
    public function index()
    {
        $rekapdata = Rekapandata::
        join('profileguru', 'profileguru.id', '=', 'rekapandata.nama_id')->get();
        $profileguru = Profileguru::all();
        return view('admin.rekapan',[
            'rekapdata' => $rekapdata,
            'profileguru'=>$profileguru
        ]);
    }
}
