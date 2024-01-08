<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Tiket;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function kelola_user(){
        $data = User::all();
        return view('admin.admin-layout.user',compact('data'));
    }
    public function kelola_event(){
        $data = Event::all();
        return view('admin.admin-layout.event',compact('data'));
    }
    public function kelola_tiket(){
        $data = Tiket::all();
        return view('admin.admin-layout.ticket',compact('data'));
    }
    public function kelola_kategori(){
        $data = Kategori::all();
        return view('admin.admin-layout.category',compact('data'));
    }
    public function kelola_transaksi(){
        $data = DB::table('transaksis')
                    ->join('users', 'transaksis.id_user', '=', 'users.id')
                    ->join('tikets', 'transaksis.id_tiket', '=', 'tikets.id')
                    ->join('events', 'transaksis.id_event', '=', 'events.id')
                    ->select('transaksis.*','transaksis.jumlah AS t_jumlah' , 'users.*', 'tikets.*', 'events.*')
                    ->get();
        // $data = Transaksi::all();
        return view('admin.admin-layout.transaction',compact('data'));
    }

}
