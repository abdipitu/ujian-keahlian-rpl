<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ArtikelController extends Controller
{
    public function index(Request $request){
        $dataArtikel = Artikel::query();

        if($request->filled('search')){
            $dataArtikel->where('judul', 'like', "%$request->search%");
        }

        if($request->filled('date')){
            $dataArtikel->whereDate('date', $request->date);
        }

        $all = $dataArtikel->get();
        return view('index', compact('all'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        if($request->file('foto')){
            $pathFoto = $request->file('foto')->store('artikels', 'public');

            Artikel::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'foto' => $pathFoto,
            ]);
        }

        return redirect()->route('index');
    }

    public function edit($id){
        $dataArtikel = Artikel::find($id);
        return view('edit', compact('dataArtikel'));
    }

    public function update($id, Request $request){
        $dataArtikel = Artikel::find($id);
        $validasiDataArtikel = $request->all();
        $dataArtikel->update($validasiDataArtikel);

        return redirect()->route('index');
    }

    public function destroy($id){
        $dataArtikel = Artikel::find($id);
        $dataArtikel->delete();

        return redirect()->route('index');
    }
}
