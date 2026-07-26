<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index(){
        $daftar_saran = Saran::all();
        return view('saran.index', compact('daftar_saran'));
    }

    public function store(Request $request){
        Saran::create([
            'nama_pengirim' => $request->nama_pengirim,
            'isi_saran' => $request->isi_saran,
        ]);
        return redirect('/saran');
    }
}
