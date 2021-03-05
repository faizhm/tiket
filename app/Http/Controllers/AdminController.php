<?php

namespace App\Http\Controllers;

use App\Order;
use App\Participants;
use App\User;
use Illuminate\Support\Facades\Gate;
use illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Gate::allows('manage-display')) return $next($request);
            abort(403, 'Anda tidak memiliki hak akses');
        });
    }
    public function orders()
    {
        $orders = Order::all();
        return view('order-admin', ['orders' => $orders]);
    }

    public function detailOrder($id)
    {
        $participants = Participants::Where('id_pesanan', $id)->get();
        $orders = Order::Where('id', $id)->get();
        return view('detailOrder-admin')
            ->with('participants', $participants)
            ->with('orders', $orders);
    }

    public function user()
    {
        $users = User::all();
        return view('user', ['users' => $users]);
    }
}
