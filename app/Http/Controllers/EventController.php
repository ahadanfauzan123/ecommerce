<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function tambah_event(Request $request){
        $data = Event::create([
            'id_kategori' => $request->id_kategori,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'img' => $request->gambar,
        ]);
        return redirect('/event');
    }
    public function hapus_event(Request $request) {
        $data = Event::where('id', $request->id)->delete();
        return redirect('/event');
    }
    public function ubah_event(Request $request){
        $data = Event::where('id', $request->id_event)
                        ->update([
                    'id_kategori' => $request->id_kategori,
                    'nama' => $request->nama,
                    'keterangan' => $request->keterangan,
                    'img' => $request->gambar,
            ]);
        return redirect('/event');
    }
}
