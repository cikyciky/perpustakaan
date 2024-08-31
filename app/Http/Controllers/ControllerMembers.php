<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class ControllerMembers extends Controller
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
        {
            // dd($request->all());
            $data = new Members();
            $data ->nama=$request->nama;
            $data ->kelas=$request->kelas;
            $data ->email=$request->email;
            $data ->jk=$request->jk;
            $data ->tlp=$request->tlp;
            $data ->alamat=$request->alamat;
            $data->save();
            
            return redirect()->route('data-members');
        }
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
        $data = Members::findOrFail($id);
        return view('admin.edit-member', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Members::find($id);
        $data ->nama=$request->nama;
        $data ->kelas=$request->kelas;
        $data ->email=$request->email;
        $data ->jk=$request->jk;
        $data ->tlp=$request->tlp;
        $data ->alamat=$request->alamat;   
        $data->save();

        return redirect()->route('data-member');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        $data = Members::find($id)->delete();
        return redirect()->route('data-members');
    }
}
