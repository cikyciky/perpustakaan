<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class ControllerBuku extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new Buku();
        $data ->jdl_buku=$request->jdl_buku;
        $data ->pengarang=$request->pengarang;
        $data ->jb=$request->jb;
        if($request->has('gambar')){ 
            $data->gambar = $request->file('gambar')->store('public/gambar');
        }
        $data->save();
        
        return redirect()->route('data-buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Buku::find($id);
        return view('admin.edit-buku', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //   dd($request->all());
          $data = Buku::find($id);
          $data ->jdl_buku=$request->jdl_buku;
          $data ->pengarang=$request->pengarang;
          $data ->jb=$request->jb;
          if($request->has('gambar')){ 
              $data->gambar = $request->file('gambar')->store('public/gambar');
          }
          $data->save();
  
          return redirect()->route('data-buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Buku::find($id)->delete();
        return redirect()->route('data-buku');
    }
}
