<?php

namespace App\Http\Controllers;
use App\User;
use App\Permohonan_Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('formlogin');
    }

    public function login(Request $request){
        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }
        return redirect()->route('home');
    }

    public function getregister(){
        return view('formregister');
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5'
        ]);
        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
       return redirect()->route('login');
    }

    public function home(){
        $users = User::get();
        return view('home', ['users' => $users]);
    }

    public function form_pengajuan_cuti(){
        return view('form_pengajuan_cuti');
    }
    public function profile(){
        return view('profile');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function update(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'nidn' => 'required | numeric | ',
            'ttl' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'kontak' => 'required | numeric',
            'jabatan' => 'required',

        ]);
        $update = User::find(Auth::user()->id);
        $update->nama = $request->nama;
        $update->nidn = $request->nidn;
        $update->ttl = $request->ttl;
        $update->alamat = $request->alamat;
        $update->jenis_kelamin = $request->jenis_kelamin;
        $update->kontak = $request->kontak;
        $update->jabatan = $request->jabatan;
        $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
        $update->avatar = $request->file('avatar')->getClientOriginalName();


        $update->save();
        return redirect()->back()->with('sukses', 'Pengisian Data Diri Berhasil');
    }

    public function passganti(Request $request)
    {

        $request->validate([
            'password' => 'required',
           

        ]);
        $update = User::find(Auth::user()->id);
        $update->password = bcrypt($request->password);
        


        $update->save();
        return redirect()->back()->with('pass', 'password berhasil diubah');
    }

    public function permohonan_cuti(Request $request)
    {
       
        $this->validate($request, [
            'jenis_cuti' => 'required',
            'alasan_cuti' => 'required',
            'awal_cuti' => 'required',
            'akhir_cuti' => 'required'


        ]);
        Permohonan_Cuti::create([
            'jenis_cuti' => $request->jenis_cuti,
            'alasan_cuti' => $request->alasan_cuti,
            'awal_cuti' => $request->awal_cuti,
            'akhir_cuti' => $request->akhir_cuti,


        ]);
        return redirect()->back()->with('permohonan', 'password berhasil diubah');
    }

 

}
