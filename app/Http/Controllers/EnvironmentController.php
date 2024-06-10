<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use App\Http\Requests\StoreEnvironmentRequest;
use App\Http\Requests\UpdateEnvironmentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EnvironmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Environment.index', [
            "judul" => "Smart Environment",
            "kategori" => "Dimensi",
            "Environment" => Environment::latest()->paginate(4)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Environment.create', [
            "judul" => "Smart Environment",
            "kategori" => "Dimensi",
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
            'slug' => 'required|unique:environments',
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required', // Menambahkan validasi untuk status
            'logo_se' => 'nullable|mimes:png,jpg|file|image|max:1024',
            'deskripsi' => 'required',
        ]);

        // Jika file logo_se diunggah, simpan file tersebut di direktori 'public/post-images'
        if ($request->hasFile('logo_se')) {
            $validatedData['logo_se'] = $request->file('logo_se')->store('Environment-images', 'public');
        }

        // Buat entri baru menggunakan model Environment
        $environment = new Environment($validatedData);
        $environment->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/Admin-SmartEnvironment')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Environment $environment)
    {
        return view('Admin.Environment.show', [
            "judul" => "Smart Environment",
            "kategori" => "Smart Environment",
            "Environment" => $environment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Environment $environment)
    {
        return view('Admin.Environment.edit', [
            "judul" => "Smart Environment",
            "kategori" => "Smart Environment",
            "Environment" => $environment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Environment $environment)
    {
        $validatedData = $request->validate([
            'portal' => 'required|max:255',
            'slug' => 'required|unique:environments,slug,' . $environment->id,
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required',
            'logo_se' => 'nullable|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        if ($request->file('logo_se')) {
            // Delete old logo if exists
            if ($environment->logo_se) {
                Storage::delete($environment->logo_se);
            }
            
            // Store new logo
            $validatedData['logo_se'] = $request->file('logo_se')->store('Environment-images');
        }

        $environment->update($validatedData);

        return redirect('/Admin-SmartEnvironment')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Environment $environment)
    {
        // Hapus logo jika ada
        if ($environment->logo_se) {
            Storage::delete($environment->logo_se);
        }

        // Hapus data dari database
        $environment->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-SmartEnvironment')->with('success', 'Post has been deleted!');
    }

    public function environment(){

        return view('Guest.Dashboard.Environment', [
            "judul" => "Smart Environment",
            "kategori" => "Dimensi",
            "Environment" => Environment::all()
        ]);
    }
    public function showguest(Environment $environment)
    {
        
        return view('Guest.Dashboard.environmentshow', [
            "judul" => "Smart Environment",
            "kategori" => "Smart Environment",
            "Environment" => $environment
        ]);
    }
}
