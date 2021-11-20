<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('dataproduk', compact('data'));
    }

    public function tmbhproduk()
    {
        $kat = Kategori::all();
        return view('tambahproduk', compact('kat'));
    }
    public function tambahproduk(Request $request)
    {
        $kat = Kategori::all();
        $data = Produk::create($request->all());
        if ($request->hasfile('gambar')) {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('produk', compact('kat'))->with('success', 'Data Berhasil ditambahkan');
    }
    public function tampildata($id)
    {
        $kat = Kategori::all();
        $data = Produk::find($id);
        return view('editproduk', compact('kat', 'data'));
    }
    public function editproduk(Request $request, $id)
    {

        $data = Produk::find($id);
        $data->update($request->all());
        if ($request->hasfile('gambar')) {
            $request->file('gambar')->move('img/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('produk')->with('success', 'Data Berhasil diedit');
    }
    public function delete($id)
    {

        $data = Produk::find($id);
        $data->delete();
        return redirect()->route('produk')->with('success', 'Data Berhasil dihapus');
    }
    public function inv()
    {
        $order = Order::all();
        return view('inv', compact('order'));
    }
    public function detailinv($id)
    {
        $order = Order::find($id);
        return view('detailinv', compact('order'));
    }
}
