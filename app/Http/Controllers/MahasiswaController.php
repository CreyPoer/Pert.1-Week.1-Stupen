<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function tampil()
    {
        return view('home', [
            'title' => 'Data Mahasiswa',
            'mahasiswa'=> Mahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|numeric|unique:mahasiswas,nim',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'prodi' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
        ]);

        // Simpan data ke dalam tabel mahasiswas
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jenis_kelamin' => $request->jenis_kelamin,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
        ]);

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('/home')->with('success', 'Data mahasiswa berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('tambah', [
            'title' => 'Form Tambah Data Mahasiswa'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
