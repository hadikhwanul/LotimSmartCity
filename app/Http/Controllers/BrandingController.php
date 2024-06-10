<?php

namespace App\Http\Controllers;

use App\Models\Branding;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBrandingRequest;
use App\Http\Requests\UpdateBrandingRequest;

class BrandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Branding.branding',[
            "judul" => "Smart Branding",
            "kategori" => "Dimensi",
            "branding" => Branding::latest()->paginate(4)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Branding.addSB', [
            "judul" => "Smart Branding",
            "kategori" => "Smart Branding"
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
            'logo_sb' => 'nullable|mimes:png,jpg|file|image|max:1024',
            'deskripsi' => 'required',
        ]);

        // Jika file logo_sb diunggah, simpan file tersebut di direktori 'public/post-images'
        if ($request->hasFile('logo_sb')) {
            $validatedData['logo_sb'] = $request->file('logo_sb')->store('branding-images', 'public');
        }

        // Buat entri baru menggunakan model branding
        $branding = new Branding($validatedData);
        $branding->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/Admin-SmartBranding')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branding $branding)
    {
        return view('Admin.Branding.viewSB', [
            "judul" => "Smart Branding",
            "kategori" => "Smart Branding",
            "branding" => $branding
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branding $branding)
    {
        return view('Admin.Branding.editSB', [
            "judul" => "Smart Branding",
            "kategori" => "Smart Branding",
            "branding" => $branding
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branding $branding)
    {
        $validatedData = $request->validate([
            'portal' => 'required|max:255',
            'slug' => 'required|unique:brandings,slug,' . $branding->id,
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required',
            'logo_sb' => 'nullable|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        if ($request->file('logo_sb')) {
            // Delete old logo if exists
            if ($branding->logo_sb) {
                Storage::delete($branding->logo_sb);
            }
            
            // Store new logo
            $validatedData['logo_sb'] = $request->file('logo_sb')->store('branding-images');
        }

        $branding->update($validatedData);

        return redirect('/Admin-SmartBranding')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branding $branding)
    {
        // Hapus logo jika ada
        if ($branding->logo_sb) {
            Storage::delete($branding->logo_sb);
        }

        // Hapus data dari database
        $branding->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-SmartBranding')->with('success', 'Post has been deleted!');
    }

    public function branding(){

        return view('Guest.Dashboard.Branding', [
            "judul" => "Smart Branding",
            "kategori" => "Dimensi",
            "Branding" => Branding::all()
        ]);
    }
    public function showguest(Branding $branding)
    {
        
        return view('Guest.Dashboard.Brandingshow', [
            "judul" => "Smart Branding",
            "kategori" => "Smart Branding",
            "Branding" => $branding
        ]);
    }
}
