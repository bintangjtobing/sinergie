<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\MuridDB;
use App\KelasDB;
use App\paketDB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        $data_murid = DB::table('murid')
            ->select('murid.*')
            ->get();
        return view('murid.index', ['data_murid' => $data_murid]);
    }
    public function daftar()
    {
        $data_kelas = \App\KelasDB::all();
        $data_paket = \App\paketDB::all();
        return view('murid.daftar', ['data_kelas' => $data_kelas, 'data_paket' => $data_paket]);
    }
    public function registrasi(Request $request)
    {
        $data_murid = new \App\MuridDB;
        $data_murid->nama_murid = $request->nama_murid;
        $data_murid->email = $request->email;
        $data_murid->nohp = $request->nohp;
        $data_murid->kelas = $request->kelas;
        $data_murid->paket = $request->paket;
        $data_murid->password = Hash::make($request->password);
        $data_murid->save();
        return back()->with('sukses', 'Kamu telah terdaftar sebagai murid di bimbel ini, ayo login untuk langsung belajar.');
    }
    public function deletemurid($id_murid)
    {
        $murid = \App\MuridDB::find($id_murid);

        if ($murid) {
            if ($murid->delete()) {

                DB::statement('ALTER TABLE murid AUTO_INCREMENT = ' . (count(MuridDB::all()) + 1) . ';');

                return back()->with('sukses', 'Data murid berhasil dihapus!');
            }
        }
    }
    public function dashboardsiswa()
    {
        $datasiswa = DB::table('murid')
            ->join('kelas', 'murid.kelas', '=', 'kelas.kelas_id')
            ->select('murid.*', 'kelas.nama_kelas')
            ->get();
        return view('siswa.dashboard', ['datasiswa' => $datasiswa]);
    }
    public function setting($id_murid)
    {
        $datamurid = \App\MuridDB::find($id_murid);
        return view('siswa.setting', ['datamurid' => $datamurid]);
    }
    public function update(Request $request, $id_murid)
    {
        $datamurid = \App\MuridDB::find($id_murid);
        $datamurid->nama_murid = $request->nama_murid;
        $datamurid->email = $request->email;
        $datamurid->password = $request->password;
        $datamurid->nohp = $request->nohp;
        $datamurid->updated_by = Auth::guard('murid')->user()->nama_murid;
        dd($datamurid);
    }
}
