<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $dataKelas = Kelas::all();

        return view('kelas.index', ['dataKelas' => $dataKelas]);
    }
}
