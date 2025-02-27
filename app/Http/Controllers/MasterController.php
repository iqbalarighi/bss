<?php

namespace App\Http\Controllers;

use App\Models\JabatanModel;
use App\Models\KantorModel;
use App\Models\PerusahaanModel;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        

        $perusahaan = PerusahaanModel::paginate(10);
        $kantor = KantorModel::paginate(10);
        $jabatan = JabatanModel::paginate(10);

        return view('master.index', compact('perusahaan', 'kantor', 'jabatan'));
    }
}
