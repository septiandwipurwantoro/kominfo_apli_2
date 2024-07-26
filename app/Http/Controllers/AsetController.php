<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $aset2x = Aset::where('is_confirmed', '1')->where('is_deleted', 0)->paginate(5);
        // return view('page.daftar-aset', ['aset2x' => $aset2x]);
        $aset2x = Aset::where('is_confirmed', 1)->where('is_deleted', 0)->get();
        return view('pages.asset-page.asset', ['aset2x' => $aset2x]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('page.buat-aset');
        return view('pages.asset-page.create-asset');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|max:225',
            'diskripsi' => 'required',
            'nominal' => 'required|numeric',
            'sumber' => 'required|max:225',
            'kuantitas' => 'required|numeric'
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('gambar_aset'), $imageName);

        $lastAset = Aset::create([
            'foto' => $imageName,
            'nama_aset' => $request->nama,
            'diskripsi' => $request->diskripsi,
            'nominal_aset' => $request->nominal,	
            'sumber_aset' => $request->sumber,
            'is_deleted' => 0,
            'tahun' => date("Y"),
            'kuantitas' => $request->kuantitas,	
            'is_confirmed' => Auth::user()->is_admin ? 1 : 0,
        ]);

        Log::create([
            'aset_id' => $lastAset->id,
            'user_id' => Auth::user()->id,
            'aktivitas_id' => 1
        ]);

        return redirect()->route('asset');
    }

    /**
     * Display the specified resource.
     */
    public function show_asset_pending() 
    {
        $aset2x = Aset::where('is_confirmed', 0)->where('is_deleted', 0)->get();
        return view('pages.asset-page.asset-pending', ['aset2x' => $aset2x]);
    }
    
    public function show_asset_removed() 
    {
        $aset2x = Aset::where('is_confirmed', 1)->where('is_deleted', 1)->get();
        return view('pages.asset-page.asset-removed', ['aset2x' => $aset2x]);
    }

    public function show_asset_pending_user($id)
    {
        $logs = Log::where('user_id', $id)
        ->whereHas('aset', function ($query) {
            $query->where('is_confirmed', 0);
        })
        ->get()
        ->pluck('aset_id')
        ->toArray();
        $aset2x = Aset::whereIn('id', $logs)->get();
        return view('pages.asset-page.asset-pending', ['aset2x' => $aset2x]);
    }

    // public function show_req_status($id)
    // {
    //     $logs = Log::where('user_id', $id)
    //     ->whereHas('aset', function ($query) {
    //         $query->where('is_confirmed', 0);
    //     })
    //     ->get();
    //     return view('page.aset-status', ['logs' => $logs]);
    // }

    // public function show_confirm_aset()
    // {
    //     $aset2x = Aset::where('is_confirmed', 0)->where('is_deleted', 0)->get();
    //     return view('page.confirm-aset', ['aset2x' => $aset2x]);
    // }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $aset= Aset::find($id);
        // return view('page.edit-aset', ['aset' => $aset]);
        $aset= Aset::find($id);
        return view('pages.asset-page.edit-asset', ['aset' => $aset]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $aset = Aset::find($id);

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required|max:225',
            'diskripsi' => 'required',
            'nominal' => 'required|numeric',
            'sumber' => 'required|max:225',
            'kuantitas' => 'required|numeric'
        ]);

        if ($request->hasFile('image')) {
            $fileImage = 'gambar_aset/' . $aset->foto;
            if(File::exists($fileImage)) {
                File::delete($fileImage);
            }
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('gambar_aset'), $imageName);
            $aset->foto = $imageName;
            $aset->save();
        }
        Aset::where('id', $id)
        ->update([
            'nama_aset' => $request->nama,
            'diskripsi' => $request->diskripsi,
            'nominal_aset' => $request->nominal,	
            'sumber_aset' => $request->sumber,
            'is_deleted' => 0,
            // 'tahun' => date("Y"),
            'kuantitas' => $request->kuantitas,	
            'is_confirmed' => Auth::user()->is_admin ? 1 : 0,
        ]);

        Log::create([
            'aset_id' => $id,
            'user_id' => Auth::user()->id,
            'aktivitas_id' => 2
        ]);

        return redirect()->route('asset');
    }

    public function update_asset_status_confirm(Request $request)
    {
        $ids = $request->input('checkboxInput');

        if (empty($ids)) {
            return back()->with('error', 'Tidak ada aset yang dipilih');
        }
        
        $asets = Aset::whereIn('id', $ids)->get();

        foreach ($asets as $aset) {
            $aset->is_confirmed = 1;
            $aset->save();

            Log::create([
                'aset_id' => $aset->id,
                'user_id' => Auth::user()->id,
                'aktivitas_id' => 4
            ]);
        }

    return back()->with('success', 'Aset telah dikonfirmasi');
    }

    public function update_asset_status_reject(Request $request)
    {
        $ids = $request->input('checkboxInput');

        if (empty($ids)) {
            return back()->with('error', 'Tidak ada aset yang dipilih');
        }

        $asets = Aset::whereIn('id', $ids)->get();

        foreach ($asets as $aset) {
            $aset->is_deleted = 1;
            $aset->save();

            Log::create([
                'aset_id' => $aset->id,
                'user_id' => Auth::user()->id,
                'aktivitas_id' => 3
            ]);
        }

        return back()->with('success', 'Aset telah dihapus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aset $aset)
    {
        //
    }

    public function delete($id) 
    {
        $aset = Aset::find($id);
        $aset->is_deleted = 1;
        $aset->save();

        Log::create([
            'aset_id' => $id,
            'user_id' => Auth::user()->id,
            'aktivitas_id' => 3
        ]);

        return $aset->is_confirmed ? redirect()->route('asset') : back();
    }

    public function restore(Request $request) {
        $ids = $request->input('checkboxInput');

        if (empty($ids)) {
            return back()->with('error', 'Tidak ada aset yang dipilih');
        }

        $asets = Aset::whereIn('id', $ids)->get();
        foreach ($asets as $aset) {
            $aset->is_deleted = 0;
            $aset->save();

            Log::create([
                'aset_id' => $aset->id,
                'user_id' => Auth::user()->id,
                'aktivitas_id' => 5
            ]);
        }

        return back()->with('success', 'Aset telah dipulihkan');
    }

    public function get_data_record() {
        $asets = Aset::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $result = $asets->map(function ($aset) {
            return [
                'x' => $aset->date,
                'y' => $aset->count
            ];
        });
        
        return response()->json($result);
    }
}
