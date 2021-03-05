<?php

namespace App\Http\Controllers;

use App\Order;
use App\Participants;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function tiket()
    {
        return view('formOrder');
    }

    public function createtiket(Request $request)
    {
        $id = Auth::user()->id;
        $tanggal = Order::all()->where('tanggal', $request->tanggal)->first();
        if (!$tanggal) {
            Order::create([
                'tanggal' => $request->tanggal,
                'asal_sekolah' => $request->asal_sekolah,
                'jumlah_peserta' => $request->jumlah_peserta,
                'status' => 'Menunggu Dibayar',
                'id_user' => $id
            ]);
            $request->session()->flash('massage', 'Pesanan Berhasil Dibuat!');
            return redirect('/orders');
        } else {
            $request->session()->flash('massage', 'Tanggal tidak tersedia, mohon memilih tanggal lain');
            return redirect('/tiket');
        }
    }

    public function peserta($id)
    {
        $jumlah_peserta = Order::Where('id', $id)->value('jumlah_peserta');
        $jumlah_participants = Participants::Where('id_pesanan', $id)->count();
        if ($jumlah_peserta > $jumlah_participants) {
            return view('formParticipants')
                ->with('id_pesanan', $id);
        } else {
            session()->flash('massage', 'Jumlah perserta hanya terdaftar ' . $jumlah_peserta . ' orang');
            return  redirect('/detailorder-user/' . $id);
        }
    }

    public function createpeserta(Request $request)
    {
        Participants::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'no_telpon' => $request->no_telpon,
            'id_pesanan' => $request->id_pesanan
        ]);
        $request->session()->flash('massage', 'Peserta Berhasil Ditambah!');
        return redirect('/detailorder-user/' . $request->id_pesanan);
    }

    public function orders()
    {
        $id = Auth::user()->id;
        $orders = Order::Where('id_user', $id)->get();
        return view('order-user')
            ->with('orders', $orders);
    }

    public function detailOrder($id)
    {
        $participants = Participants::Where('id_pesanan', $id)->get();
        $orders = Order::Where('id', $id)->get();
        return view('detailOrder-user')
            ->with('participants', $participants)
            ->with('orders', $orders);
    }

    public function cancelOrder($id)
    {
        $orders = Order::Where('id', $id)->get();
    }
}
