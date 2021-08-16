<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $data = [
            'nama_sekolah' => 'SMA N 1 Padang',
            'alamat' => 'JL Imam Bonjol'
        ];
        return view('v_home', $data);
    }

    public function about($id){
        return 'ini halaman about'. $id;
    }
}
