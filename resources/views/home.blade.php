@extends('master')
@section('title')
Home
@endsection
@section('alamat')
        <li><a href="#">Home</a></li>
@endsection
@if(Auth::user()->akses=='pegawai')
@section('navigasi')
    <li class="nav-header">Main</li>
        <li><a class="ajax-link" href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
        </li>
        <li><a class="ajax-link" href="{{route('form_pengajuan_cuti')}}"><i class="glyphicon glyphicon-envelope"></i><span> Form Pengajuan Cuti</span></a>
    </li>
@endsection
@endif
@if(Auth::user()->akses=='pegawai')
@section('button_atas')
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editprofile"><i class="glyphicon glyphicon-pencil"></i> Edit Profile</button><br><br>
@endsection
@endif
@if(Auth::user()->akses=='pegawai')

@section('isi')
@if(session('pass'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Berhasil</strong>    {{session('pass')}}
                    </div>
                @endif
                @if(session('sukses'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Berhasil</strong>    {{session('sukses')}}
                    </div>
                @endif
<div class="box col-md-4 ">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon user"></i> Profile</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content text-center">
                <img class="" src="{{ Auth::user()->getavata()}}" style="width:50%" >
                <h2>{{ Auth::user()->nama}}<h2>
                <h4>{{ Auth::user()->email}}<h4>
                <hr>
                </div>
            </div>
        </div>

        <div class="box col-md-8 ">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon user"></i> Biodata Pegawai</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content ">
                <table class="table table-striped responsive">
                
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <td>
                        {{ Auth::user()->nama}}
                            </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <th>NIDN</th>
                            <td>
                            {{ Auth::user()->nidn}}
                            </td>
                    </tr>
                    <th>Jenis Kelamin</th>
                        <td>
                        {{ Auth::user()->jenis_kelamin}}
                            </td>
                    </tr>
                    <tr>
                    <th>Tanggal Lahir</th>
                        <td>
                        {{ Auth::user()->ttl}}
                            </td>
                    </tr>
                    <tr>
                    <th>Alamat</th>
                        <td>
                        {{ Auth::user()->alamat}}
                            </td>
                    </tr>
                    <tr>
                    <th>No/Kontak</th>
                        <td>
                        {{ Auth::user()->kontak}}
                            </td>
                    </tr>
                    <tr>
                    <th>Jabatan</th>
                            <td>
                            {{ Auth::user()->jabatan}}
                            </td>
                    </tr>
                    </tbody>
                    
                </table>
                </div>
            </div>
            
        </div>
        <div class="col-md-8">
        <button type="button" class="btn btn-primary btn-lg btn-block">Edit Profile</button>
        </div>
@endsection
@endif






















 
