<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Governance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreGovernanceRequest;
use App\Http\Requests\UpdateGovernanceRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GovernanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $governance = Governance::latest()
        ->filter(request(['search', 'category']))
        ->paginate(4)
        ->withQueryString();

    return view('Admin.Governance.governance', [
        "judul" => "Smart Governance",
        "kategori" => "Dimensi",
        "governance" => $governance
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Governance.addsg',[
            "judul" => "Smart Governance",
            "kategori" => "Tambah",
            "categories" => Category::all(),
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
            'slug' => 'required|unique:governances',
            'category_id' => 'required',
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required', // Menambahkan validasi untuk status
            'logo_sg' => 'nullable|mimes:png,jpg|file|image|max:1024',
            'deskripsi' => 'required',
        ]);

        // Jika file logo_sg diunggah, simpan file tersebut di direktori 'public/post-images'
        if ($request->hasFile('logo_sg')) {
            $validatedData['logo_sg'] = $request->file('logo_sg')->store('governance-images', 'public');
        }

        // Buat entri baru menggunakan model Governance
        $governance = new Governance($validatedData);
        $governance->save();

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect('/Admin-SmartGovernance')->with('success', 'Data berhasil disimpan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Governance $governance)
    {
        
        return view('Admin.Governance.viewsg', [
            "judul" => "Smart Governance",
            "kategori" => "Smart Governance",
            "governance" => $governance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Governance $governance)
    {
        return view('Admin.Governance.editsg',[
            "governance" => $governance,
            "judul" => "Smart Governance",
            "kategori" => "Edit",
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Governance $governance)
    {
        $validatedData = $request->validate([
            'portal' => 'required|max:255',
            'slug' => 'required|unique:governances,slug,' . $governance->id,
            'category_id' => 'required',
            'alamat' => 'required',
            'link' => 'required|url',
            'status' => 'required',
            'logo_sg' => 'nullable|mimes:png,jpg',
            'deskripsi' => 'required',
        ]);

        if ($request->file('logo_sg')) {
            // Delete old logo if exists
            if ($governance->logo_sg) {
                Storage::delete($governance->logo_sg);
            }
            
            // Store new logo
            $validatedData['logo_sg'] = $request->file('logo_sg')->store('governance-images');
        }

        $governance->update($validatedData);

        return redirect('/Admin-SmartGovernance')->with('success', 'Data Berhasil Terupdate');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Governance $governance)
    {
        // Hapus logo jika ada
        if ($governance->logo_sg) {
            Storage::delete($governance->logo_sg);
        }

        // Hapus data dari database
        $governance->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-SmartGovernance')->with('success', 'Post has been deleted!');
    }


    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Governance::class, 'slug', $request->portal);
        return response()->json(['slug' => $slug]);
    }

    public function governance(){

        return view('Guest.Dashboard.governance', [
            "judul" => "Smart Governance",
            "kategori" => "Dimensi",
            "governance" => Governance::all()
        ]);
    }
    public function showguest(Governance $governance)
    {
        
        return view('Guest.Dashboard.governanceshow', [
            "judul" => "Smart Governance",
            "kategori" => "Smart Governance",
            "governance" => $governance
        ]);
    }
}
