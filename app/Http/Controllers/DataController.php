<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('explode.form');
    }

    public function submit(Request $request)
    {
        $input = $request->input('data');
        $data = explode(" ", $input);

        $nama = $data[0];
        $kota = $data[1];
        $nomorTelepon = $data[2];

        return view('explode.result', compact('nama', 'kota', 'nomorTelepon'));
    }
}
