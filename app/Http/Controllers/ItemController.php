<?php

namespace App\Http\Controllers;

use App\detailsItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\itemModel;

class ItemController extends Controller
{
    //
    public function index()
    {
        // METHOD 1 IS WORKED
        $data_item = \App\itemModel::all();
        $latestdata = DB::table('items')
            ->join('detail_items', 'items.item_id', '=', 'detail_items.item_id')
            ->select('items.*', 'detail_items.*')
            ->groupBy('items.item_name')
            ->orderBy('detail_items.created_at', 'desc')
            ->get();
        // dd($latestdata);
        return view('item.index', ['data_item' => $data_item, 'latestdata' => $latestdata]);
    }
    public function details($item_id)
    {
        $data_item = \App\itemModel::find($item_id);
        $detItem = \App\detailsItem::find($item_id)->latest()->first();
        $data_detailitem = DB::table('items')
            ->join('detail_items', 'items.item_id', '=', 'detail_items.item_id')
            ->where('items.item_id', '=', $data_item->item_id)
            ->orderBy('detail_items.created_at', 'desc')
            ->select('detail_items.*', 'items.*')
            ->get();
        return view('item.details', ['data_item' => $data_item, 'data_detailitem' => $data_detailitem, 'detItem' => $detItem]);
        // dd($data_detailitem, $detItem);
    }
    public function additem(Request $request)
    {
        $data_detailitem = new \App\detailsItem;
        $data_detailitem->item_id = $request->item_id;
        $data_detailitem->jmlitem = $request->jmlitem;
        $data_detailitem->details_date_in = $request->details_date_in;
        $data_detailitem->details_date_out = $request->details_date_out;
        $data_detailitem->details_item_in = $request->details_item_in;
        $data_detailitem->details_item_out = $request->details_item_out;
        $data_detailitem->descriptions = $request->descriptions;
        $data_detailitem->final_item = $request->final_item;
        $data_detailitem->save();

        return back()->with('sukses', 'New details item has succesfully added!');
    }
    public function addview()
    {
        return view('item.add');
    }
    public function addnewitem(Request $request)
    {
        $data_item = new \App\itemModel();
        $data_item->item_id;
        $data_item->item_name = $request->item_name;
        $data_item->item_code =  $request->item_code;
        $data_item->item_tipe = 'Tidak ada tipe';
        $data_item->price = '0';
        $data_item->qty = $request->qty;
        $data_item->unit = $request->unit;
        $data_item->date_in = $request->date_in;
        $data_item->date_out = '-';
        $data_item->item_in = '0';
        $data_item->item_out = '0';
        $data_item->total_qty = '-';
        $data_item->description = $request->description;
        $data_item->created_by = auth()->user()->nama_lengkap;
        $data_item->save();

        $detailitem = new \App\detailsItem();
        $detailitem->item_id = $data_item->item_id;
        $detailitem->details_date_in = $request->date_in;
        $detailitem->details_date_out = '-';
        $detailitem->details_item_in = $request->qty;
        $detailitem->details_item_out = '0';
        $detailitem->descriptions = $request->description;
        $detailitem->final_item = $request->qty;
        $detailitem->save();


        return redirect('/item')->with('sukses', 'New data has succesfully added!');
        // dd($data_item, $detailitem);
        // dd($data_item, $detailitem);
    }
    public function deleteitem($detail_items_id)
    {
        $item = \App\detailsItem::find($detail_items_id);

        if ($item) {
            if ($item->delete()) {

                DB::statement('ALTER TABLE detail_items AUTO_INCREMENT = ' . (count(itemModel::all()) + 1) . ';');

                return back()->with('sukses', 'Detail Items has been successfully deleted!');
            }
        }
    }
    public function delete($item_id)
    {
        // CARA KEDUA
        DB::table('items')->where('item_id', $item_id)->delete();
        DB::statement('ALTER TABLE items AUTO_INCREMENT = ' . (count(itemModel::all()) + 1) . ';');
        DB::table('detail_items')->where('item_id', $item_id)->delete();
        DB::statement('ALTER TABLE detail_items AUTO_INCREMENT = ' . (count(detailsItem::all()) + 1) . ';');
        return redirect('/item')->with('sukses', 'Detail Items has been successfully deleted!');
    }
    public function edit($item_id)
    {
        $data_item = \App\itemModel::find($item_id);
        return view('item/edit', ['data_item' => $data_item]);
    }
    public function save(Request $request, $item_id)
    {
        $data_item = \App\itemModel::find($item_id);
        $data_item->item_name = $request->item_name;
        $data_item->item_code = $request->item_code;
        $data_item->updated_by = auth()->user()->nama_lengkap;
        $data_item->save();

        return back()->with('sukses', 'Item data has been succesfully updated!');
        // dd($data_item);
    }

    // NEW LEARNING JSON AJX
    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('items')->orderBy('item_id', 'asc')->get();
            echo json_encode($data);
            // $collection = collect($obj);
            // return $collection;
        }
        // return view('item.index');
        // dd($data);
    }
    function add_data(Request $request)
    {
        if ($request->ajax()) {
            $data = array(
                'item_name' => $request->item_name,
                'item_code' => $request->item_code,
                'qty' => $request->qty,
                'date_in' => $request->date_in,
                'item_in' => $request->item_in,
                'date_out' => $request->date_out,
                'item_out' => $request->item_out,
                'total_qty' => $request->total_qty,
                'description' => $request->description,
            );
            $id = DB::table('items')->insert($data);
            if ($id > 0) {
                echo "<div class='alert alert-success alert-dismissible fade show'>Data berhasil ditambahkan.</div>";
            }
        }
    }
}
