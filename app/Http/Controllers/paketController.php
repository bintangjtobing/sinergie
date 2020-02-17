<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paketController extends Controller
{
    public function index()
    {
        $datapaket = DB::table('paket')
            ->select('paket.*')
            ->get();
        return view('paket.index', ['datapaket' => $datapaket]);
    }
    public function addnewpaket(Request $request)
    {
        $paket = new \App\paketDB;
        $paket->nama_paket = $request->nama_paket;
        $paket->save();
        return back()->with('sukses', 'Paket baru berhasil ditambahkan');
    }
}
