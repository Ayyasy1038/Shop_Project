<?php

namespace App\Http\Controllers;

use App\Models\Tambahdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TambahdataController extends Controller
{
    public function index()
    {
        $tambahdata = Tambahdata::all();

        return view('tambahdata.index', compact('tambahdata'));
    }

    public function create()
    {
        return view('tambahdata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'penjual'  => 'required',
            'deskripsi'     => 'required',
            'cover'     => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'harga'      => 'required'
        ]);

        $covername = time().'.'.$request->cover->extension();
        $request->cover->move(public_path('img/cover'), $covername);
        $tambahdata = new Tambahdata;

        $tambahdata->nama_produk = $request->nama_produk;
        $tambahdata->harga     = $request->harga;
        $tambahdata->penjual   = $request->penjual;
        $tambahdata->deskripsi     = $request->deskripsi;
        $tambahdata->cover     = $covername;

        // dd($tambahdata);
        // exit();

        $tambahdata->save();

        return redirect('/tambahdata');


    }

    public function show(string $id)
    {
        $tambahdata = Tambahdata::findOrFail($id);
        return view('tambahdata.show', compact('tambahdata'));
    }

    public function edit(string $id)
    {
        $tambahdata = Tambahdata::findOrFail($id);
        return view('tambahdata.edit', compact('tambahdata'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk'   => 'required',
            'penjual'       => 'required',
            'deskripsi'     => 'required',
            'cover'         => 'image|mimes:jpg,png,jpeg|max:2048',
            'harga'         => 'required'
        ]);

        // dd(helo)
        // exit();

        if ($request->has('cover')) {
            $tambahdata = Tambahdata::find($id);

            $path = "img/cover/";
            Storage::delete($path.$tambahdata->cover);

            $covername = time().'.'.$request->cover->extension();
            $request->cover->move(public_path('img/cover'), $covername);
    
            $tambahdata->nama_produk = $request->nama_produk;
            $tambahdata->harga     = $request->harga;
            $tambahdata->penjual   = $request->penjual;
            $tambahdata->deskripsi     = $request->deskripsi;
            $tambahdata->cover     = $covername;



            $tambahdata->save();

            return redirect('/tambahdata');
        } else {
            $tambahdata = Tambahdata::find($id);

            $tambahdata->nama_produk = $request->nama_produk;
            $tambahdata->harga     = $request->harga;
            $tambahdata->penjual   = $request->penjual;
            $tambahdata->deskripsi     = $request->deskripsi;

            // dd($tambahdata);
            // exit();
    
            $tambahdata->save();
    
            return redirect('/tambahdata');

        }

    }

    public function destroy(string $id)
    {
        $tambahdata = Tambahdata::find($id);

        $path = "img/cover/";
        Storage::delete($path.$tambahdata->cover);

        $tambahdata->delete();
        return redirect('/tambahdata');
    }
}
