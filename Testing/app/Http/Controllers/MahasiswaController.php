<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function store(Request $request)
    {
        $targetMahasiswa = Mahasiswa::where('id', $request->targetId)->first();
        if ($targetMahasiswa) {
            $targetMahasiswa->delete();
            return redirect()->route('home')->with('message', 'Data mahasiswa berhasil dihapus');
        }

        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|numeric|digits:10',
            'tanggal_lahir' => 'required',
            'ipk' => 'required|numeric|min:0|max:4'
        ]);
        
        $existingMahasiswa = Mahasiswa::where('nim', $request->nim)->first();
        if ($existingMahasiswa) {
            $existingMahasiswa->ipk = $request->ipk;
            $existingMahasiswa->save();
            return redirect()->route('home')->with('message', 'Data mahasiswa berhasil diubah');
        }

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->ipk = $request->ipk;
        $mahasiswa->save();

        return redirect()->route('home')->with('message', 'Data mahasiswa berhasil ditambahkan');
    }

    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('nama')->get();
        return view('home', ['mahasiswa' => $mahasiswas]);
    }
}



