<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guru;

class gurucontroller extends Controller
{
    public function allguru() {
        $guru = guru::all();

        return response()->json($guru);
    }

    public function addguru(Request $request) {

        guru::create([
            "nama_guru" => $request->nama_guru,
            "no_hp" => $request->no_hp,
            "agama" => $request->agama,
            "nip" => $request->nip, 
            "no_hp" => $request->no_hp,
        ]);

        return response()->json([
            "pesan" => "Berhasil menambah guru"
        ]);
    }

    public function getOneguru() {

        $guru = guru::find($id);

        if(!guru) {
            return response()->json([
                "pesan" => "guru tidak ditemukan!"
            ]);
        }

        return response()->json($guru);
    }

    public function editguru(Request $request, $id){

        $nama_guru = $request->nama_guru;
        $no_hp = $request->no_hp;
        $agama = $request->agama;
        $nip = $request->nip; 
        $no_hp = $request->no_hp;

        guru::where('id', $id)->update([
            "nama_guru" => $request->nama_guru,
            "no_hp" => $request->no_hp,
            "agama" => $request->agama,
            "nip" => $request->nip, 
            "no_hp" => $request->no_hp,
        ]);

        return response()->json([
            "pesan" => "berhasil mengedit guru!"
        ]);

    }

    public function deleteguru($id){
        guru::find($id)->delete();

        return response ()->json([
            "pesan" => "berhasil menghapus guru!"
        ]);
    }
}
