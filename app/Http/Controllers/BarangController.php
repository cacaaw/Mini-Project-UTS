<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    public function index()
    {
        $daftarbarang = Barang::all();
        return view('Barang.index', [ 'barang' => $daftarbarang ]);
    }
    public function create()
    {
        $daftarsatuan = Satuan::all();
        return view('Barang.create', compact('daftarsatuan'));
    }
    public function store(Request $request)
    {
        $messages = [ 'unique' => 'Maaf Ya Barang Sudah ada.' ];

        $validator = Validator::make($request->all(), [ 'kode_barang' => ['required', 'unique:barangs,kode_barang'], ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $daftarbarang = new Barang;
        $daftarbarang->kode_barang = $request->kode_barang;
        $daftarbarang->nama_barang = $request->nama_barang;
        $daftarbarang->harga_barang = $request->harga_barang;
        $daftarbarang->deskripsi_barang = $request->deskripsi_barang;
        $daftarbarang->satuan_barang_id = $request->satuan_barang;
        $daftarbarang->save();

        return redirect()->route('barangs.index');
    }

    public function show(string $id)
    {
        $daftarbarang = Barang::findOrFail($id);
        return view('Barang.show', compact('daftarbarang'));
    }

    public function edit(string $id)
    {
        $daftarsatuan = Satuan::all();
        $daftarbarang = Barang::findOrFail($id);
        return view('Barang.edit', compact('daftarsatuan','daftarbarang'));
    }
    public function update(Request $request, string $id)
    {
        $messages = [ 'unique' => 'Mohon Maaf Barang Sudah ada.' ];

        $validator = Validator::make($request->all(), $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $daftarbarang = Barang::find($id);
        $daftarbarang->kode_barang = $request->kode_barang;
        $daftarbarang->nama_barang = $request->nama_barang;
        $daftarbarang->harga_barang = $request->harga_barang;
        $daftarbarang->deskripsi_barang = $request->deskripsi_barang;
        $daftarbarang->satuan_barang_id = $request->satuan_barang;
        $daftarbarang->save();
        return redirect()->route('barangs.index');
    }
    public function destroy(string $id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barangs.index');
    }
}
