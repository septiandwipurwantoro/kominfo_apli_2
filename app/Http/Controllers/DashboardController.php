<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        // return view('page.dashboard');
        $aset['tersimpan_bidang'] = Aset::where('is_deleted', 0)->where('bidang_id', Auth::user()->bidang_id)->count();
        $aset['tersimpan'] = Aset::where('is_deleted', 0)->count();
        $aset['terhapus'] = Aset::where('is_deleted', 1)->count();
        return view('pages.dashboard', ['aset' => $aset]);
    }
}
