<?php

namespace App\Http\Controllers;

use App\Models\CatatanAset;
use Illuminate\Http\Request;

class LogPenyesuaianBarangController extends Controller
{
    public function index()
    {
        $logs = CatatanAset::all();
        return view('pages.log-page.log-adjestment', ['logs' => $logs]);
    }

}
