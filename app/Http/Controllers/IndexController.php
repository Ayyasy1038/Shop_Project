<?php

namespace App\Http\Controllers;

use App\Models\Tambahdata;
use Illuminate\Http\Request;


class IndexController extends Controller
{    
    public function index()
    {
        $tambahdata = Tambahdata::all();
        return view('home.index');
    }

    public function awal($id)
    {
        $tambahdata = Tambahdata::findorfail($id);

        return view('home.awal', compact('tambahdata'));
    }
}
