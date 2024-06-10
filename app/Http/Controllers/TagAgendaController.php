<?php

namespace App\Http\Controllers;

use App\Models\TagAgenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagAgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Agenda.tagindex', [ 
            "judul" => "Tag Agenda",
            "kategori" => "Dimensi",
            "tagagenda"=> TagAgenda::latest()->paginate(4)->withQueryString()
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Agenda.tagcreate', [ 
            "judul" => "Tag Agenda",
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
            'slug' => 'required|unique:tag_agendas,slug',
        ]);

        TagAgenda::create($validatedData);
        
        return redirect('/Admin-TagAgenda')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TagAgenda $tagAgenda)
    {
        return view('Admin.Agenda.tagshow', [ 
            "judul" => $tagAgenda->name,
            "Agenda" => $tagAgenda->Agendas,
            "tagagenda"=> $tagAgenda->name
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TagAgenda $tagAgenda)
    {
        return view('Admin.Agenda.tagedit', [ 
            "tagAgenda"=>$tagAgenda,
            "judul" => "Tag Agenda",
            "kategori" => "Edit",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TagAgenda $tagAgenda)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:tag_agendas,slug,' .$tagAgenda->id,
        ]);

       $tagAgenda->update($validatedData);

        return redirect('/Admin-TagAgenda')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TagAgenda $tagAgenda)
    {
        $tagAgenda->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-TagAgenda')->with('success', 'Post has been deleted!'); 
    }
}
