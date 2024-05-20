<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        // $data = [
        //     'nama' => "Doraemon",
        //     'pekerjaan' => "Dancer",
        // ];
        // return view('home')->with($data);

        $nama = "Nobita";
        $pekerjaan = "Dancer";
        return view('home', compact('nama', 'pekerjaan'));
    }
}
