<?php

namespace App\Http\Controllers;

use App\Models\Society;
use App\Http\Requests\StoreSocietyRequest;
use App\Http\Requests\UpdateSocietyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocietyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Society.index',[
            "judul" => "Smart Society",
            "kategori" => "Dimensi",
            "society" => Society::latest()->paginate(4)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Society.create', [
            "judul" => "Smart Society",
            "kategori" => "Smart Society"
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
        'logo_sc' => 'nullable|mimes:png,jpg|file|image|max:1024',
        'deskripsi' => 'required',
    ]);

    // Jika file logo_sc diunggah, simpan file tersebut di direktori 'public/post-images'
    if ($request->hasFile('logo_sc')) {
        $validatedData['logo_sc'] = $request->file('logo_sc')->store('society-images', 'public');
    }

    // Buat entri baru menggunakan model society
    $society = new society($validatedData);
    $society->save();

    // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
    return redirect('/Admin-SmartSociety')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Society $society)
    {
        return view('Admin.Society.show', [
            "judul" => "Smart Society",
            "kategori" => "Smart Society",
            "society" => $society
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Society $society)
    {
        return view('Admin.Society.edit', [
            "judul" => "Smart Society",
            "kategori" => "Smart Society",
            "society" => $society
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Society $society)
    {
        $validatedData = $request->validate([
            'portal' => 'required|max:255',
            'slug' => 'required|unique:societies,slug,' . $society->id,
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required',
            'logo_sc' => 'nullable|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        if ($request->file('logo_sc')) {
            // Delete old logo if exists
            if ($society->logo_sc) {
                Storage::delete($society->logo_sc);
            }
            
            // Store new logo
            $validatedData['logo_sc'] = $request->file('logo_sc')->store('society-images');
        }

        $society->update($validatedData);

        return redirect('/Admin-SmartSociety')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Society $society)
    {
        // Hapus logo jika ada
        if ($society->logo_sc) {
            Storage::delete($society->logo_sc);
        }

        // Hapus data dari database
        $society->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-SmartSociety')->with('success', 'Post has been deleted!');
    }

    public function society(){

        return view('Guest.Dashboard.Society', [
            "judul" => "Smart Society",
            "kategori" => "Dimensi",
            "Society" => Society::all()
        ]);
    }
    public function showguest(Society $society)
    {
        
        return view('Guest.Dashboard.societyshow', [
            "judul" => "Smart Society",
            "kategori" => "Smart Society",
            "Society" => $society
        ]);
    }
}
