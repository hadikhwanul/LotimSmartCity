<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Berita.tagindex', [ 
            "judul" => "Tag Berita",
            "kategori" => "Dimensi",
            "tag" => Tag::latest()->paginate(4)->withQueryString()
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Berita.tagcreate', [ 
            "judul" => "Tag Berita",
            "kategori" => "Tambah",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:tags,slug',
        ]);

        Tag::create($validatedData);
        
        return redirect('/Admin-TagBerita')->with('success', 'Data berhasil disimpan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('Admin.Berita.tagshow', [ 
            "judul" => $tag->name,
            "Berita" => $tag->Beritas,
            "tag" => $tag->name
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('Admin.Berita.tagedit', [ 
            "tag" =>$tag,
            "judul" => "Tag Berita",
            "kategori" => "Edit",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:tags,slug,' .$tag->id,
        ]);

       $tag->update($validatedData);

        return redirect('/Admin-TagBerita')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
       $tag->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-TagBerita')->with('success', 'Post has been deleted!');
    }
}
