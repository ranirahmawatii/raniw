<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
use File;
use Session;
use Auth;
class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = detail::all();
        return view('backend.detail.index', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail = detail::all();
        return view('backend.detail.create', compact('detail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new detail();
        $detail->nama = $request->nama;
        $detail->kategori = $request->kategori;
         $detail->bahan = $request->bahan;
         $detail->gambar = $request->gambar;
         $detail->harga = $request->harga;

         if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $Path = public_path() . '/assets/img/jeniabarang/';
            $filename = '_' . $file->getClientOriginalName();
            $upload = $file->move($Path, $filename);
            $detail->gambar = $filename;
         }
        $detail->save();
        $response = [
            'success' => true,
            'data' => $detail,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = detail::findOrFail($id);
        return view('backend.detail.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = detail::findOrFail($id);
        return view('backend.detail.edit', compact('detail'));
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
        $detail = detail::findOrFail($id);
        // $detail->Id = $request->id;
         $detail->nama = $request->nama;
        $detail->kategori = $request->kategori;
         $detail->bahan = $request->bahan;
         $detail->gambar = $request->gambar;
         $detail->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path() . '/assets/img/detail/';
            $filename = '_' . '/assets/img/detail/';
            $upload = $file->move($destinationPath, $filename);
        }

        if ($detail->gambar) {
            $old_gambar = $detail->gambar;
            $filepath = public_path() . '/assets/img/' . $detail->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }

        $detail->save();
        $response = [
            'success' => true,
            'data' => $detail,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('detail.index');
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
        $detail = detail::findOrFail($id);
        if ($detail->gambar) {
            $old_gambar = $detail->gambar;
            $filepath = public_path() . '/assets/img/detail/' . $detail->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $detail->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data detail berjudul <b>$detail->judul</b>!"
        ]);
        return redirect()->route('detail.index');
    }
}
