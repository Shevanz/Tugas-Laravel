<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nama' => 'Fuad', 'alamat' => 'Ngawi', 'gender' => 'L'],
            ['nama' => 'Rizman',  'alamat' => 'Kediri',   'gender' => 'L'],
            ['nama' => 'Narji',   'alamat' => 'Malang',   'gender' => 'P'],
            ['nama' => 'Jakobi', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];

        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
