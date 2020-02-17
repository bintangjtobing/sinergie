<?php

namespace App\Http\Controllers;

use App\KategoriModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data_cat = \App\KategoriModel::all();
        return view('kategori.index', ['data_cat' => $data_cat]);
    }
    public function delete($id)
    {
        $data_cat = KategoriModel::find($id);

        if ($data_cat) {
            if ($data_cat->delete()) {

                DB::statement('ALTER TABLE category AUTO_INCREMENT = ' . (count(KategoriModel::all()) + 1) . ';');

                return redirect('/kategori')->with('sukses', 'Category item has been successfully deleted!');
            }
        }
    }
    public function addnew(Request $request)
    {
        $data_cat = new \App\KategoriModel();
        $data_cat->category_name = $request->category_name;
        $data_cat->category_id = $request->category_id;
        $data_cat->created_by = auth()->user()->nama_lengkap;
        $data_cat->updated_by = auth()->user()->nama_lengkap;
        // $data_cat->created_by = auth()->user()->fullname;
        // $data_cat->updated_by = auth()->user()->fullname;
        $data_cat->save();

        return redirect('/kategori')->with('sukses', 'New data has succesfully added!');
        // dd($data_cat);
    }
    public function edit($id)
    {
        $data_cat = \App\KategoriModel::find($id);
        return view('kategori/edit', ['data_cat' => $data_cat]);
    }
    public function update(Request $request, $id)
    {
        $data_cat = \App\KategoriModel::find($id);
        $data_cat->update($request->all());
        $data_cat->updated_by = auth()->user()->nama_lengkap;
        $data_cat->save();

        return redirect('/kategori')->with('sukses', 'Category data has been succesfully updated!');
    }
}
