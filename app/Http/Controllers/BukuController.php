<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Penulis;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::orderBy('id', 'desc')->get();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penulis = Penulis::all();
        $genre = Genre::all();
        return view('buku.create', compact('penulis', 'genre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:bukus|max:255',
            'jumlah_halaman' => 'required|unique:bukus',
            'cover' => 'required',
            'isbn' => 'required',
            'dekripsi' => 'required',
            'tanggal_terbit' => 'required',
            'penulis_id' => 'required',
        ]);

        $buku = new Buku();
        $buku->judul = $request->get('judul');
        $buku->jumlah_halaman = $request->get('jumlah_halaman');
        $buku->isbn = $request->get('isbn');
        $buku->dekripsi = $request->get('dekripsi');
        $buku->tanggal_terbit = $request->get('tanggal_terbit');
        $buku->penulis_id = $request->get('penulis_id');
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $name = rand(1000, 9999) . $cover->getClientOriginalName();
            $cover->move('images/buku', $name);
            $buku->cover = $name;
        }
        $buku->save();

        $buku->genre()->attach($request->get('genre'));
        return redirect()->route('buku.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penulis = Penulis::all();
        $genre = Genre::all();
        $selectGenre = Genre::with('buku')->pluck('id')->toArray();
        return view('buku.edit', compact('buku', 'penulis', 'genre', 'selectGenre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:bukus|max:255',
            'jumlah_halaman' => 'required|unique:bukus',
            'isbn' => 'required',
            'dekripsi' => 'required',
            'tanggal_terbit' => 'required',
            'penulis_id' => 'required',
        ]);

        $buku = new Buku();
        $buku->judul = $request->get('judul');
        $buku->jumlah_halaman = $request->get('jumlah_halaman');
        $buku->isbn = $request->get('isbn');
        $buku->dekripsi = $request->get('dekripsi');
        $buku->tanggal_terbit = $request->get('tanggal_terbit');
        $buku->penulis_id = $request->get('penulis_id');
        if ($request->hasFile('cover')) {
            $buku->deleteImage();
            $cover = $request->file('cover');
            $name = rand(1000, 9999) . $cover->getClientOriginalName();
            $cover->move('images/buku', $name);
            $buku->cover = $name;
        }
        $buku->save();

        $buku->genre()->sync($request->get('genre'));
        return redirect()->route('buku.index')
            ->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->deleteImage();
        $buku->delete();
        $buku->genre()->dettach();
        return redirect()->route('buku.index')
            ->with('success', 'data berhasil dihapus');
    }
}
