<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stok;
use File;
use Session;
use Auth;
class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = stok::all();
        return view('backend.stok.index', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stok = stok::all();
        return view('backend.stok.create', compact('stok'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stok = new stok();
        $stok->nama_barang = $request->nama_barang;
        $stok->jumlah_barang = $request->jumlah_barang;
        $stok->barang_masuk = $request->barang_masuk;
        $stok->barang_keluar = $request->barang_keluar;
        $stok->sisa_barang = $request->sisa_barang;
        $stok->save();
        $response = [
            'success' => true,
            'data' => $stok,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('stok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stok = stok::findOrFail($id);
        return view('backend.stok.show', compact('stok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $stok = Stok::findOrFail($id);
        return view('backend.stok.edit', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $stok = stok::findOrFail($id);
        // $stok->Id = $request->id;
        $stok->nama_barang = $request->nama_barang;
        $stok->jumlah_barang = $request->jumlah_barang;
        $stok->barang_masuk = $request->barang_masuk;
        $stok->barang_keluar = $request->barang_keluar;
        $stok->sisa_barang = $request->sisa_barang;
        $stok->save();
        $response = [
            'success' => true,
            'data' => $stok,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('stok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stok = stok::findOrfail($id);
        if(!stok::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $stok->stok."</b>"
        ]);
        return redirect()->route('stok.index');

    }
}
