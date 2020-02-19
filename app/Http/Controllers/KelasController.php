<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\KelasDB;
use App\MateriDB;
use App\subKelas;
use App\bahanAjarDB;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // VIEW ITEM MODUL CONTROLL
    public function index()
    {
        $data_kelas = DB::table('kelas')
            ->orderBy('kelas.created_at', 'desc')
            ->select('kelas.*')
            ->get();
        $data_materi = \App\MateriDB::all();
        $kelasdata = \App\KelasDB::all();
        $datamateri = DB::table('materis')
            ->join('kelas', 'materis.kelas_id', '=', 'kelas.kelas_id')
            ->select('materis.*', 'kelas.*')
            ->get();
        $datasub = DB::table('sub_kelas')
            ->join('kelas', 'sub_kelas.kelas_id', '=', 'kelas.kelas_id')
            ->join('materis', 'sub_kelas.materi_id', '=', 'materis.materi_id')
            ->select('sub_kelas.*', 'kelas.*', 'materis.*')
            ->get();
        return view('kelas.index', ['data_kelas' => $data_kelas, 'data_materi' => $data_materi, 'kelasdata' => $kelasdata, 'datamateri' => $datamateri, 'datasub' => $datasub]);
    }
    // ADD CREATE NEW ITEM MODUL CONTROLL
    public function addnewkelas(Request $request)
    {
        $data_kelas = new \App\KelasDB;
        $data_kelas->nama_kelas = $request->nama_kelas;
        $data_kelas->created_by = Auth()->user()->nama_lengkap;
        $data_kelas->updated_by = Auth()->user()->nama_lengkap;
        $data_kelas->save();
        return back()->with('sukses', 'Kelas baru berhasil ditambahkan');
    }
    public function addnewmateri(Request $request)
    {
        $data_materi = new \App\MateriDB;
        $data_materi->kelas_id = $request->kelas_id;
        $data_materi->judul_materi = $request->judul_materi;
        $data_materi->isi_materi = $request->isi_materi;
        $data_materi->created_by = auth()->user()->nama_lengkap;
        $data_materi->updated_by = Auth()->user()->nama_lengkap;
        $data_materi->save();

        return back()->with('sukses', 'Materi pelajaran berhasil ditambahkan! Silahkan isi soal soal untuk materi tersebut.');
    }
    public function addnewsub(Request $request)
    {
        $datasub = new \App\subKelas;
        $datasub->nama_mapel = $request->nama_mapel;
        $datasub->kelas_id = $request->kelas_id;
        $datasub->materi_id = $request->materi_id;
        $datasub->created_by = auth()->user()->nama_lengkap;
        $datasub->updated_by = auth()->user()->nama_lengkap;
        if ($request->hasFile('img_sub')) {
            $request->file('img_sub')->move(public_path('file/kelas/' . $request->nama_mapel), $request->file('img_sub')->getClientOriginalName());
            $datasub->img_sub = $request->file('img_sub')->getClientOriginalName();
        }
        // dd($datasub);
        $datasub->save();

        return back()->with('sukses', 'Materi sub pelajaran berhasil ditambahkan! Silahkan isi soal soal untuk materi tersebut.');
    }

    // DELETE ITEM MODUL CONTROLL
    public function deletekelas($kelas_id)
    {
        $kelas = \App\KelasDB::find($kelas_id);

        if ($kelas) {
            if ($kelas->delete()) {

                DB::statement('ALTER TABLE kelas AUTO_INCREMENT = ' . (count(KelasDB::all()) + 1) . ';');

                return back()->with('sukses', 'Data kelas berhasil dihapus!');
            }
        }
    }
    public function deletemateri($materi_id)
    {
        $mat = \App\MateriDB::find($materi_id);

        if ($mat) {
            if ($mat->delete()) {

                DB::statement('ALTER TABLE materis AUTO_INCREMENT = ' . (count(MateriDB::all()) + 1) . ';');

                return back()->with('sukses', 'Materi has been successfully deleted!');
            }
        }
    }
    public function deletesub($subkelas_id)
    {
        $sub = \App\subKelas::find($subkelas_id);

        if ($sub) {
            if ($sub->delete()) {

                DB::statement('ALTER TABLE sub_kelas AUTO_INCREMENT = ' . (count(subKelas::all()) + 1) . ';');

                return back()->with('sukses', 'Sub pelajaran has been successfully deleted!');
            }
        }
    }
    // MATERI PEMBELAJARAN
    public function soal()
    {
        return view('kelas.soal');
    }
    public function bahanajar()
    {
        $datasub = DB::table('sub_kelas')
            ->join('kelas', 'sub_kelas.kelas_id', '=', 'kelas.kelas_id')
            ->join('materis', 'sub_kelas.materi_id', '=', 'materis.materi_id')
            ->select('sub_kelas.*', 'kelas.*', 'materis.*')
            ->get();
        return view('kelas.bahanajar', ['datasub' => $datasub]);
    }
    public function formdata($subkelas_id)
    {
        $datasub = DB::table('sub_kelas')
            ->join('kelas', 'sub_kelas.kelas_id', '=', 'kelas.kelas_id')
            ->where('sub_kelas.subkelas_id', '=', $subkelas_id)
            ->select('sub_kelas.*')
            ->get();
        return view('kelas.materiform', ['datasub' => $datasub]);
    }
}
