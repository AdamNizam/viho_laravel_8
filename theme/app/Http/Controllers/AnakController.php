<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index(){
        return view('admin.pages.tambah_PMKS');
    }
    public function data(){
        return view('admin.pages.data_PMKS');
    }
    public function create()
    {
        $survivors = Survivor::pluck('name', 'id');
        return view('admin.pages.tambah_PMKS', compact('survivors'));
    }

    public function store(Request $request)
    {
        $pmks = new PMKS;
        $pmks->survivor_id = $request->survivor_id;
        $pmks->address = $request->address;
        $pmks->save();
        return redirect()->route('admin.pmks.index');
    }
}
