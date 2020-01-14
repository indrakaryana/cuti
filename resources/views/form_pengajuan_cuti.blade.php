@extends('master')
@section('title')
Form Pengajuan Cuti
@endsection
@section('alamat')
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="#">Form Pengajuan Cuti</a></li>
@endsection
@section('navigasi')
    <li class="nav-header">Main</li>
        <li><a class="ajax-link" href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
        </li>
        <li><a class="ajax-link" href="{{route('form_pengajuan_cuti')}}"><i class="glyphicon glyphicon-envelope"></i><span> Form Pengajuan Cuti</span></a>
    </li>
@endsection
@section('button_atas')
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addcuti"><i class="glyphicon glyphicon-plus-sign"></i> Add Cuti</button>
@endsection
@section('isi')
<div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-user"></i> Data Pengajuan Cuti</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            
                            <th>Jenis Cuti</th>
                            <th>Alasan Cuti</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                           
                        <tr>
                            <td></td>
                            <td class="center">2012/03/01</td>
                            <td class="center">Member</td>
                            <td class="center">
                                <span class="label-warning label label-default">Pending</span>
                            </td>
                            <td class="center">
                                <a class="btn btn-success" href="#">
                                    <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                    View
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection