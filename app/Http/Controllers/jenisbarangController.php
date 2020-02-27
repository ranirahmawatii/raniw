<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenisbarang;
use File;
use Session;
use Auth;

class jenisbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jenisbarang = jenisbarang::all();
        // return view('backend.jenisbarang.index', compact('jenisbarang'));

        $jenisbarang = jenisbarang::with('kategori')->get();
        return view('backend.jenisbarang.index', compact('jenisbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $jenisbarang = jenisbarang::all();
        // return view('backend.jenisbarang.create', compact('jenisbarang'));

         $jenisbarang = jenisbarang::all();
        $kategori = kategori::all();
        // dd($kategori);
        return view('backend.jenisbarang.create', compact('jenisbarang','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisbarang = new jenisbarang();
        $jenisbarang->nama_boneka = $request->nama_boneka;
        $jenisbarang->bahan = $request->bahan;
         $jenisbarang->harga = $request->harga;
         $jenisbarang->gambar = $request->gambar;

         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $Path = public_path() . '/assets/img/jeniabarang/';
            $filename = '_' . $file->getClientOriginalName();
            $upload = $file->move($Path, $filename);
            $jenisbarang->gambar = $filename;
         }
        $jenisbarang->save();
        $response = [
            'success' => true,
            'data' => $jenisbarang,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('jenisbarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisbarang = jenisbarang::findOrFail($id);
        return view('backend.jenisbarang.show', compact('jenisbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisbarang = jenisbarang::findOrFail($id);
        return view('backend.jenisbarang.edit', compact('jenisbarang'));
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
        $jenisbarang = jenisbarang::findOrFail($id);
        // $jenisbarang->Id = $request->id;
        $jenisbarang->nama_barang = $request->nama_barang;
        $jenisbarang->bahan = $request->bahan;
         $jenisbarang->harga = $request->harga;
         $jenisbarang->gambar = $request->gambar;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path() . '/assets/img/jenisbarang/';
            $filename = '_' . '/assets/img/jenisbarang/';
            $upload = $file->move($destinationPath, $filename);
        }

        if ($jenisbarang->gambar) {
            $old_gambar = $jenisbarang->gambar;
            $filepath = public_path() . '/assets/img/' . $jenisbarang->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }

        $jenisbarang->save();
        $response = [
            'success' => true,
            'data' => $jenisbarang,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('jenisbarang.index');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jenisbarang = jenisbarang::findOrFail($id);
        if ($jenisbarang->gambar) {
            $old_gambar = $jenisbarang->gambar;
            $filepath = public_path() . '/assets/img/jenisbarang/' . $jenisbarang->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $jenisbarang->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data jenisbarang berjudul <b>$jenisbarang->judul</b>!"
        ]);
        return redirect()->route('jenisbarang.index');
    }
}
