<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\TagAgenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda = Agenda::latest()
        ->filter(request(['search', 'tagagenda']))
        ->paginate(4)
        ->withQueryString();

        return view('Admin.Agenda.index', [
            "judul" => "Agenda",
            "kategori" => "Dimensi",
            "Agenda" => $agenda
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Agenda.create',[
            "judul" => "Agenda",
            "kategori" => "Tambah",
            "tagagenda" => TagAgenda::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:Agendas',
            'image' => 'required|file',
            'tag_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('Agendas-images');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        Agenda::create($validateData);

        return redirect('/Admin-Agenda')->with('success','New Agendas has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        return view('Admin.Agenda.show', [
            "judul" => "Agenda",
            "kategori" => "Detail",
            "Agenda" => $agenda
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        return view('Admin.Agenda.edit',[
            "Agenda" => $agenda,
            "judul" => "Agenda",
            "kategori" => "Edit",
            "tagagenda" => TagAgenda::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {
        $rules = [
            'title' => 'required|max:255',
            'tag_id' => 'required',
            'image' => 'required|image', // Ubah validasi untuk jenis file gambar
            'body' => 'required'
        ];   
    
        if ($request->slug != $agenda->slug) {
            $rules['slug'] = 'required|unique:Agendas';
        }
    
        $request->validate($rules);
    
        $validateData = $request->only(['title', 'tag_id', 'body', 'slug']); // Ambil data yang valid
    
        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('Agenda-images');
        }
    
        // Simpan data excerpt setelah validasi
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');
    
        // Gunakan metode update pada instance Agenda
        $agenda->update($validateData);
    
        return redirect('/Admin-Agenda')->with('success', 'Agenda has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        // Hapus logo jika ada
        if ($agenda->image) {
            Storage::delete($agenda->image);
        }

        Agenda::destroy($agenda->id);

        return redirect('/Admin-Agenda')->with('success','Agenda has been deleted!');
    }

    public function Agenda()
    {
        $title = '';
        if (request('tag')) {
            $tag = TagAgenda::firstWhere('slug', request('tag'));
            if ($tag) {
                $title = ' in ' . $tag->name;
            }
        }

        return view('Guest.Agenda.posts', [
            "judul" => "Agenda" . $title,
            "kategori" => "Dimensi",
            "posts" => Agenda::latest()->filter(request(['search', 'tag']))->paginate(7)->withQueryString(),
            "Tags" => TagAgenda::all()
        ]);
    }


    public function showguest(Agenda $agenda)
    {
       return view('Guest.Agenda.post', [
            "judul" => "Agenda",
            "kategori" => "Agenda",
            "post" => $agenda
        ]);
    }
}
