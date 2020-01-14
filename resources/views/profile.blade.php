@extends('master')

@section('title')
Profile | E-Cuti Unper
@endsection
@section('dash')
Profile
@endsection
@section('pagetitle')
Profile
@endsection

@section('isi')
    <div class="container-fluid">
        <div class="row el-element-overlay">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="assets/images/big/img1.jpg" alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="assets/images/big/img1.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Nama</h4> <span class="text-muted">POSISI</span>
                        </div>
                    </div>
                </div>
            </div>  
            <div class=" col-md-9">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Profle Personal</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Nama Lengkap" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">NIDN</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lname" placeholder="NIDN" disabled="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="lname" placeholder="Alamat Email" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email1" placeholder="Jenis Kelamin" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">No Kontak/Wa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="cono1" placeholder="No Kontak/Wa" readonly>
                                </div>
                            </div>
                           
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalprofile">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
</div>
    </div>

    <div class="modal fade" id="modalprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
        
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required >
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="NIDN" name="nidn"  required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="Email" name="email"  required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  placeholder="Jenis Kelamin" name="jenis_kelamin"  required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="No Kontak/Wa" name="kontak"  required>
          </div>
          <div class="form-group">
              <input type="file" class="form-control" name="foto" required>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

@endsection