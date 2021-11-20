<?php

namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('depan', compact('data'));
    }
    public function detail($id)
    {
        $data = Produk::find($id);
        return view('detail', compact('data'));
    }

    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $produks = Produk::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nama" => $produks->nama,
                "quantity" => 1,
                "harga" => $produks->harga,
                "gambar" => $produks->gambar,

            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Data Berhasil Dimasukan Kekeranjang');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'data  keranjang berhasil diupdate');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'data berhasil dihapus');
        }
    }
}
