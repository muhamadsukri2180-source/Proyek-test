<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
    $absen = Absen::latest()->get();
    return view('welcome', compact('absen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'no' => 'required|string|max:255',
        ]);
        Absen::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'no' => $request->no,
        ]);
        return redirect()->route('welcome.index')->with('succes', 'data telah ditambahkan');
    }
    public function update(Request $request, Absen $absen)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'no' => 'required|string|max:255',
        ]);
        $absen::update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'no' => $request->no,
        ]);
        return redirect()->route('welcome.index')->with('succes', 'data telah diubah');
    }

    public function destroy(Absen $absen)
    {
        $absen->delete();
        return redirect()->route('welcome.index')->with('succes', 'data telah dihapus');
    }
}