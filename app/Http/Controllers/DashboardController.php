<?php

namespace App\Http\Controllers;

use App\Models\Branding;
use App\Models\Economy;
use App\Models\Environment;
use App\Models\Governance;
use App\Models\Living;
use App\Models\Society;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Guest.Dashboard.index',[
            "judul" => "Home",
        ]);
    }
    public function indexadmin()
    {
        return view('Admin.Dashboard.dashboard',[
            "judul" => "Dashboard",
            "Governance" => Governance::count(),
            "Branding" => Branding::count(),
            "Society" => Society::count(),
            "Economy" => Economy::count(),
            "Living" => Living::count(),
            "Environment" => Environment::count(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('Guest.About.index', [
            "judul" => "About",
            "kategori" => "Dimensi",
        ]);
    }

}
