<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use DB;

class KapsmaterialController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('materials')->join('raks', 'materials.rak_id', '=', 'raks.id')
                    ->select('materials.*', 'raks.alamat as rak_alamat')
                    ->get();
        // return response()->json($data);
        return view('material.index', compact('data'));
    
    }

    public function create()
    {
        $rak = DB::table('raks')->select('id', 'alamat')->get();
        // return response()->json($rak);
        return view('material.create', compact('rak'));
    }

    public function store(Request $request)
    {
        // return response()->json($request->all());
        $itemNumber = $request->input('itemNumber');
        $partNumber = $request->input('partNumber');
        $productName = $request->input('productName');
        $pjg = $request->input('pjg');
        $lbr = $request->input('lbr');
        $jr = $request->input('jr');
        $tng = $request->input('pjg');
        $vol = $request->input('volume');
        $qtyPack = $request->input('qtyPack');
        $qtyBox = $request->input('qtyBox');
        $berat = $request->input('berat');

        DB::insert("insert into DataMaterial(itemNumber, partNumber, productName, pjg, lbr, tng, jr, vol, qtyBox, qtyPack, berat) values('$itemNumber', '$partNumber', '$productName', '$pjg', '$lbr', '$tng', '$jr', '$vol', '$qtyBox', '$qtyPack', '$berat')");

        // Redirect atau kembalikan respons sesuai kebutuhan
        return redirect()->route('kapsmaterial.index')->with('success', 'New material added successfully');
        
    }

    public function edit($id)
    {
        $data = Material::find($id);

        return view('material.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'volume' => 'required',
            'qtyPack' => 'required',
            'qtyBox' => 'required',
        ]);

        $volume = $request->volume;
        $pack = $request->qtyPack;
        $box = $request->qtyBox;

        $total_volume = $volume * $box;

        $material = Material::findOrFail($request->id);
        $material->qty_pack = $pack;
        $material->qty_box = $box;
        $material->total_volume = $total_volume;
        $material->save();

        toast('Material berhasil diupdate.', 'success');
        return redirect()->route('kapsmaterial.index');
    }

    public function delete($id)
    {
        $data = Material::find($id);
        if (!$data) {
            toast('Data tidak ditemukan.', 'error');
            return redirect()->route('kapsmaterial.index');
        }
        $data->delete();

        toast('Data berhasil dihapus.', 'success');
        return redirect()->route('kapsmaterial.index');
    }

}
