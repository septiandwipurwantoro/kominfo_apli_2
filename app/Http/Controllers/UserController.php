<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bidang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::where('is_admin', '0')->get();
        // return view('page.master-user', ['users' => $users]);
        $users = User::where('is_admin', 0)->where('is_active', 1)->get();
        return view('pages.master-user-page.master-user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bidang2x = Bidang::all();
        return view('pages.master-user-page.create-user', ['bidang2x' => $bidang2x]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:225',
            'username' => 'required|max:225',
            'password' => 'required|max:225',
            'bidang' => 'required|numeric',
        ]);

        User::create([
            'nama_lengkap' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'bidang_id' => $request->bidang,
            'is_admin' => false,
            'is_active' => true
        ]);

        return redirect()->route('master-user')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        $bidang2x = Bidang::all();
        return view('pages.master-user-page.edit-user', ['user' => $user, 'bidang2x' => $bidang2x]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:225',
            'username' => 'required|max:225',
            'password' => 'required|max:225',
            'bidang' => 'required|numeric',
        ]);

        User::where('id', $id)
        ->update([
            'nama_lengkap' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'bidang_id' => $request->bidang,
        ]);

        return redirect()->route('master-user')->with('success', 'User telah di-Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 
    }

    public function delete($id) {
        $user = User::find($id);
        $user->is_active = 0;
        $user->save();
        return back()->with('success', 'User telah dihapus');
    }
}
