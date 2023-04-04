<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\paket_wisata;

class PaketWisataController extends Controller
{
    public function create(Request $request)
    {
        $validation=$request->validate([
            'nama_paket'=>'required',
            'deskripsi'=>'required',
            'fasilitas'=>'required',
            'itinerary'=>'required',
            'diskon'=>'required',
            'foto1'=>'required',
            'foto2'=>'required',
            'foto3'=>'required',
            'foto4'=>'required',
            'foto5'=>'required',
        ]);
    }

    public function delete(daftar_paket $daftar_paket)
    {
        $daftar_paket->delete();
    }

    public function update(daftar_paket $daftar_paket, Request $request)
    {
        $validation=$request->validate([
            'nama_paket'=>'required',
            'deskripsi'=>'required',
            'fasilitas'=>'required',
            'itinerary'=>'required',
            'diskon'=>'required',
            'foto1'=>'required',
            'foto2'=>'required',
            'foto3'=>'required',
            'foto4'=>'required',
            'foto5'=>'required',
        ]);
        $daftar_paket->update($validation);
    }

    public function getDataPariwisata(){
        return view('paketwisata.index');
    }
}

