<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Governance.categorysg', [ 
            "judul" => "Category Smart Govenances",
            "kategori" => "Dimensi",
            "category" => Category::latest()->paginate(4)->withQueryString()
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        
        return view('Admin.Governance.categoryaddsg', [ 
            "judul" => "Category Smart Govenance",
            "kategori" => "Tambah",
        ]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:categories,slug',
        ]);

        Category::create($validatedData);
        
        return redirect('/Admin-CategorySmartGovernance')->with('success', 'Data berhasil disimpan.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('Admin.Governance.categoryviewsg', [ 
            "judul" => $category->nama,
            "governances" => $category->governances,
            "category" => $category->nama
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('Admin.Governance.categoryeditsg', [ 
            "category" => $category,
            "judul" => "Category Smart Govenance",
            "kategori" => "Edit",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:categories,slug,' . $category->id,
        ]);

        $category->update($validatedData);

        return redirect('/Admin-CategorySmartGovernance')->with('success', 'Data berhasil disimpan.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        // Menggunakan URL yang lebih konsisten untuk operasi penghapusan
        return redirect('/Admin-CategorySmartGovernance')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
