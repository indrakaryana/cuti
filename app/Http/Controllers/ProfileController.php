<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function update(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'nidn' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'kontak' => 'required',
            'jabatan' => 'required',

        ]);
        $update = User::find(Auth::users()->id);
        $update->nama = $request->nama;
        $update->nidn = $request->nidn;
        $update->ttl = $request->ttl;
        $update->alamat = $request->alamat;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->kontak = $request->kontak;
        $update->jabatan = $request->jabatan;


        $update->save();
        return redirect()->back();
    }
}
