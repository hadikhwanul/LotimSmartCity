<?php

namespace App\Http\Controllers;

use App\Models\Branding;
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
            "branding" => Branding::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Branding $branding)
    {
        return view('Admin.Branding.ViewSB', [
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandingRequest $request, Branding $branding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branding $branding)
    {
        //
    }
}
