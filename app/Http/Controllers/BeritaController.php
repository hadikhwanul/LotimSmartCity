<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Tag;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::latest()
        ->filter(request(['search', 'tag']))
        ->paginate(4)
        ->withQueryString();

    return view('Admin.Berita.index', [
        "judul" => "Berita",
        "kategori" => "Dimensi",
        "Berita" => $berita
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Berita.create',[
            "judul" => "Berita",
            "kategori" => "Tambah",
            "tag" => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'image' => 'required|file',
            'tag_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('beritas-images');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        Berita::create($validateData);

        return redirect('/Admin-Berita')->with('success','New beritas has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('Admin.Berita.show', [
            "judul" => "Berita",
            "kategori" => "Detail",
            "Berita" => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('Admin.Berita.edit',[
            "Berita" => $berita,
            "judul" => "Berita",
            "kategori" => "Edit",
            "tag" => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = [
            'title' => 'required|max:255',
            'tag_id' => 'required',
            'image' => 'required|image', // Ubah validasi untuk jenis file gambar
            'body' => 'required'
        ];   
    
        if ($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:Beritas';
        }
    
        $request->validate($rules);
    
        $validateData = $request->only(['title', 'tag_id', 'body', 'slug']); // Ambil data yang valid
    
        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('Berita-images');
        }
    
        // Simpan data excerpt setelah validasi
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');
    
        // Gunakan metode update pada instance Berita
        $berita->update($validateData);
    
        return redirect('/Admin-Berita')->with('success', 'Berita has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        // Hapus logo jika ada
        if ($berita->image) {
            Storage::delete($berita->image);
        }

        Berita::destroy($berita->id);

        return redirect('/Admin-Berita')->with('success','Berita has been deleted!');
    }

    public function berita()
    {
        $title = '';
        if (request('tag')) {
            $tag = Tag::firstWhere('slug', request('tag'));
            if ($tag) {
                $title = ' in ' . $tag->name;
            }
        }

        return view('Guest.Berita.posts', [
            "judul" => "Berita" . $title,
            "kategori" => "Dimensi",
            "posts" => Berita::latest()->filter(request(['search', 'tag']))->paginate(7)->withQueryString(),
            "Tags" => Tag::all()
        ]);
    }


    public function showguest(Berita $berita)
    {
       return view('Guest.Berita.post', [
            "judul" => "Berita",
            "kategori" => "Berita",
            "post" => $berita
        ]);
    }
}
