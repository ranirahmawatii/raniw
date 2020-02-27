<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use File;
use Session;
use Auth;
class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('backend.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('backend.kategori.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new kategori();
        $kategori->nama = $request->nama;
        $kategori->slug = $request->slug;
        $kategori->save();
        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('backend.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kategori = kategori::findOrFail($id);
        return view('backend.kategori.edit', compact('kategori'));

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
         $kategori = kategori::findOrFail($id);
        // $kategori->Id = $request->id;
        $kategori->nama = $request->nama;
        $kategori->slug = $request->slug;
        $kategori->save();
        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrfail($id);
        if(!kategori::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $kategori->kategori."</b>"
        ]);
        return redirect()->route('kategori.index');

    }
}
