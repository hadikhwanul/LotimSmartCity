<?php

namespace App\Http\Controllers;

use App\Models\Governance;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGovernanceRequest;
use App\Http\Requests\UpdateGovernanceRequest;

class GovernanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Governance.governance',[
            "judul" => "Smart Governance",
            "kategori" => "Dimensi",
            "governance" => Governance::all()
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
    public function store(StoreGovernanceRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGovernanceRequest $request, Governance $governance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Governance $governance)
    {
        //
    }
}
