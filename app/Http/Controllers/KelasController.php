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

    public function create(){
        return view('kelas.create');
    }

    public function store(Request $request){
        Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect(route('data-kelas.index'));
    }

    public function edit($id){
        $dataKelas = Kelas::find($id);

        return view('kelas.edit', ['data' => $dataKelas]);
    }

    public function update(Request $request){
        $dataKelas = Kelas::find($request->_id);

        $dataKelas->nama_kelas = $request->nama_kelas;
        $dataKelas->update();

        return redirect(route('data-kelas.index'));
    }

    public function delete($id){
        Kelas::destroy($id);
        
        return redirect(route('data-kelas.index'));
    }
}
