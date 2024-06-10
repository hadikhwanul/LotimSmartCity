<?php

namespace App\Http\Controllers;

use App\Models\SaluranBantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaluranBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.DaruratBantuan.index',[
            "judul" => "Darurat Bantuan",
            "kategori" => "Dimensi",
            "DaruratBantuan" => SaluranBantuan::latest()->paginate(4)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.DaruratBantuan.create',[
            "judul" => "Darurat Bantuan",
            "kategori" => "Tambah",
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
        'slug' => 'required|unique:saluran_bantuans',
        'alamat' => 'required',
        'link' => 'required|url',
        'status' => 'required', // Menambahkan validasi untuk status
        'logo_bd' => 'nullable|mimes:png,jpg|file|image|max:1024',
        'deskripsi' => 'required',
        ]);

        // Jika file logo_bd diunggah, simpan file tersebut di direktori 'public/post-images'
        if ($request->hasFile('logo_bd')) {
            $validatedData['logo_bd'] = $request->file('logo_bd')->store('SaluranBantuan-images', 'public');
        }

        // Buat entri baru menggunakan model SaluranBantuan
        $saluranBantuan = new SaluranBantuan($validatedData);
        $saluranBantuan->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/Admin-DaruratBantuan')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SaluranBantuan $saluranBantuan)
    {
        return view('Admin.DaruratBantuan.show',[
            "judul" => "Saluran Bantuan & Layanan Darurat",
            "kategori" => "Dimensi",
            "Bantuan" => $saluranBantuan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SaluranBantuan $saluranBantuan)
    {
        return view('Admin.DaruratBantuan.edit',[
            "judul" => "Saluran Bantuan & Layanan Darurat",
            "kategori" => "Edit",
            "Bantuan" => $saluranBantuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SaluranBantuan $saluranBantuan)
    {
        $validatedData = $request->validate([
            'portal' => 'required|max:255',
            'slug' => 'required|unique:saluran_bantuans,slug,' . $saluranBantuan->id,
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required',
            'logo_bd' => 'nullable|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        if ($request->file('logo_bd')) {
            // Delete old logo if exists
            if ($saluranBantuan->logo_bd) {
                Storage::delete($saluranBantuan->logo_bd);
            }
            
            // Store new logo
            $validatedData['logo_bd'] = $request->file('logo_bd')->store('SaluranBantuan-images');
        }

        $saluranBantuan->update($validatedData);

        return redirect('/Admin-DaruratBantuan')->with('success', 'Data Berhasil Terupdate');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SaluranBantuan $saluranBantuan)
    {
        {
            // Hapus logo jika ada
            if ($saluranBantuan->logo_bd) {
                Storage::delete($saluranBantuan->logo_bd);
            }
    
            // Hapus data dari database
            $saluranBantuan->delete();
    
            // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
            return redirect('/Admin-DaruratBantuan')->with('success', 'Post has been deleted!');
        }
    }
}
