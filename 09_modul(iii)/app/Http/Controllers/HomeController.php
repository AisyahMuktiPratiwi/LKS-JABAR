<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function checkout()
    {
        $tanggal = Carbon::now()->format('y-m-d');
        $now = Carbon::now();
        $tanggalbulantahun = $now->year . $now->month . $now->day;
        $cek = Order::count();
        if ($cek == 0) {
            $urut = 001;
            $nomer = 'INV' . '/' . $tanggalbulantahun . '/' . $urut;
        } else {
            $ambil = Order::all()->last();
            $urut = (int)substr($ambil->kodeunik, 1) + 1;
            $nomer = 'INV' . '/' . $tanggalbulantahun . '/' . $urut;
        }
        return view('checkout', compact('tanggal', 'nomer'));
    }
    public function pembayaran(Request $request)
    {
        $data = Order::create($request->all());
        if ($request->hasfile('bukti')) {
            $request->file('bukti')->move('img/', $request->file('bukti')->getClientOriginalName());
            $data->bukti = $request->file('bukti')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pesan')->with('success', 'terimakasih telah melakukan Pesanan');
    }
    public function pesan()
    {
        return view('pesan');
    }
}
