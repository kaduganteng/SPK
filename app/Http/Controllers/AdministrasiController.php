<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    public function index()
    {
        return view('admin.rekapan');
    }
}
