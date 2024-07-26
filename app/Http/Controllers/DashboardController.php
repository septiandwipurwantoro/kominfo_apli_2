<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class DashboardController extends Controller
{
    public function index() {
        // return view('page.dashboard');
        $aset['tersimpan'] = Aset::where('is_confirmed', 1)->where('is_deleted', 0)->count();
        $aset['tertunda'] = Aset::where('is_confirmed', 0)->where('is_deleted', 0)->count();
        $aset['terhapus'] = Aset::where('is_confirmed', 1)->where('is_deleted', 1)->count();
        return view('pages.dashboard', ['aset' => $aset]);
    }
}
