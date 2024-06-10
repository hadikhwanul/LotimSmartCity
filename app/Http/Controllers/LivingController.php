<?php

namespace App\Http\Controllers;

use App\Models\Living;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreLivingRequest;
use App\Http\Requests\UpdateLivingRequest;

class LivingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Living.index',[
            "judul" => "Smart Living",
            "kategori" => "Dimensi",
            "Living" => Living::latest()->paginate(4)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Living.create', [
            "judul" => "Smart Living",
            "kategori" => "Dimensi"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan melalui $request
       $validatedData = $request->validate([
        'portal' => 'required|max:255',
        'slug' => 'required|unique:economies',
        'alamat' => 'required',
        'link' => 'required|url',
        'status' => 'required', // Menambahkan validasi untuk status
        'logo_sl' => 'nullable|mimes:png,jpg|file|image|max:1024',
        'deskripsi' => 'required',
        ]);

        // Jika file logo_sl diunggah, simpan file tersebut di direktori 'public/post-images'
        if ($request->hasFile('logo_sl')) {
            $validatedData['logo_sl'] = $request->file('logo_sl')->store('Living-images', 'public');
        }

        // Buat entri baru menggunakan model Living
        $living = new Living($validatedData);
        $living->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/Admin-SmartLiving')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Living $living)
    {
        return view('Admin.Living.show', [
            "judul" => "Smart Living",
            "kategori" => "Smart Living",
            "Living" => $living
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Living $living)
    {
        return view('Admin.Living.edit', [
            "judul" => "Smart Living",
            "kategori" => "Smart Living",
            "Living" => $living
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Living $living)
    {
        $validatedData = $request->validate([
            'portal' => 'required|max:255',
            'slug' => 'required|unique:livings,slug,' . $living->id,
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required',
            'logo_sl' => 'nullable|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        if ($request->file('logo_sl')) {
            // Delete old logo if exists
            if ($living->logo_sl) {
                Storage::delete($living->logo_sl);
            }
            
            // Store new logo
            $validatedData['logo_sl'] = $request->file('logo_sl')->store('Living-images');
        }

        $living->update($validatedData);

        return redirect('/Admin-SmartLiving')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Living $living)
    {
        // Hapus logo jika ada
        if ($living->logo_sl) {
            Storage::delete($living->logo_sl);
        }

        // Hapus data dari database
        $living->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-SmartLiving')->with('success', 'Post has been deleted!');
    }

    public function living(){

        return view('Guest.Dashboard.Living', [
            "judul" => "Smart Living",
            "kategori" => "Dimensi",
            "Living" => Living::all()
        ]);
    }
    public function showguest(Living $living)
    {
        
        return view('Guest.Dashboard.livingshow', [
            "judul" => "Smart Living",
            "kategori" => "Smart Living",
            "Living" => $living
        ]);
    }
    
}
