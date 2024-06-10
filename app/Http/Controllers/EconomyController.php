<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use App\Http\Requests\StoreEconomyRequest;
use App\Http\Requests\UpdateEconomyRequest;
use App\Models\Economy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EconomyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Admin.Economy.index', [
            "judul" => "Smart Economy",
            "kategori" => "Dimensi",
            "economy" => Economy::latest()->paginate(4)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Economy.create', [
            "judul" => "Smart Economy",
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
            'slug' => 'required|unique:economies',
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required', // Menambahkan validasi untuk status
            'logo_se' => 'nullable|mimes:png,jpg|file|image|max:1024',
            'deskripsi' => 'required',
        ]);

        // Jika file logo_se diunggah, simpan file tersebut di direktori 'public/post-images'
        if ($request->hasFile('logo_se')) {
            $validatedData['logo_se'] = $request->file('logo_se')->store('economy-images', 'public');
        }

        // Buat entri baru menggunakan model economy
        $economy = new Economy($validatedData);
        $economy->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/Admin-SmartEconomy')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Economy $economy)
    {
        
        return view('Admin.Economy.show', [
            "judul" => "Smart Economy",
            "kategori" => "Smart Economy",
            "Economy" => $economy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Economy $economy)
    {
        return view('Admin.Economy.edit', [
            "judul" => "Smart Economy",
            "kategori" => "Smart Economy",
            "Economy" => $economy
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Economy $economy)
    {
        $validatedData = $request->validate([
            'portal' => 'required|max:255',
            'slug' => 'required|unique:economies,slug,' . $economy->id,
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required',
            'logo_se' => 'nullable|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        if ($request->file('logo_se')) {
            // Delete old logo if exists
            if ($economy->logo_se) {
                Storage::delete($economy->logo_se);
            }
            
            // Store new logo
            $validatedData['logo_se'] = $request->file('logo_se')->store('economy-images');
        }

        $economy->update($validatedData);

        return redirect('/Admin-SmartEconomy')->with('success', 'Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Economy $economy)
    {
        // Hapus logo jika ada
        if ($economy->logo_se) {
            Storage::delete($economy->logo_se);
        }

        // Hapus data dari database
        $economy->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-SmartEconomy')->with('success', 'Post has been deleted!');
    }

    public function economy(){

        return view('Guest.Dashboard.Economy', [
            "judul" => "Smart Economy",
            "kategori" => "Dimensi",
            "Economy" => Economy::all()
        ]);
    }
    public function showguest(Economy $economy)
    {
        
        return view('Guest.Dashboard.economyshow', [
            "judul" => "Smart Economy",
            "kategori" => "Smart Economy",
            "Economy" => $economy
        ]);
    }
}
