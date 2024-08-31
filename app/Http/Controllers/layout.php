<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Members;
use Illuminate\Http\Request;

class layout extends Controller
{
    public function dashboard(){
        return view('/admin/dashboard');
    }

    public function anggota(){
        return view('/admin/anggota');
    }

    public function tabelMembers(){
        $item = Members::paginate(10);
        return view('admin.table-members', compact('item'));
    }

    public function editMembers(){
        return view('/admin/edit-member');
    }

    public function books(){
        return view('/admin/buku');
    }

    public function editBuku(){
        return view('/admin/edit-buku');
    }

    public function tabelBuku(){
        $item = Buku::paginate(2);
        return view('admin.table-buku', compact('item'));
    }

   
}
