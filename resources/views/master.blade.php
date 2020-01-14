<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

   <!-- The styles -->
   <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

<link href="css/charisma-app.css" rel="stylesheet">
<link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
<link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
<link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
<link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
<link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
<link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
<link href='css/jquery.noty.css' rel='stylesheet'>
<link href='css/noty_theme_default.css' rel='stylesheet'>
<link href='css/elfinder.min.css' rel='stylesheet'>
<link href='css/elfinder.theme.css' rel='stylesheet'>
<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
<link href='css/uploadify.css' rel='stylesheet'>
<link href='css/animate.min.css' rel='stylesheet'>
    <link href='datepicker/css/bootstrap-datepicker.css' rel='stylesheet'>
    
    <!-- jQuery-->
    <script src="bower_components/jquery/jquery.min.js"></script>
    <!-- <script src="datepicker/js/jquery-3.4.1.min.js"></script> -->
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script>
        $(function(){
            $('.datepicker').datepicker({
                format: 'dd-mm-yyyy',
            });
        });
    </script> 

    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Cuti</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> {{ Auth::user()->email}}</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li data-toggle="modal" data-target="#changepass"><a href="#"><i class="glyphicon glyphicon-lock"></i> change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="unper.ac.id"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
    <div class="ch-container">
        <div class="row">
                <!-- left menu starts -->
                <div class="col-sm-2 col-lg-2">
                    <div class="sidebar-nav">
                        <div class="nav-canvas">
                            <div class="nav-sm nav nav-stacked">
                            </div>
                            <ul class="nav nav-pills nav-stacked main-menu">
                            @yield('navigasi')
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/span-->
                <!-- left menu ends -->

                <noscript>
                    <div class="alert alert-block col-md-12">
                        <h4 class="alert-heading">Warning!</h4>

                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                            enabled to use this site.</p>
                    </div>
                </noscript>

                <div id="content" class="col-lg-10 col-sm-10">
                    <!-- content starts -->
                        <div>
                <ul class="breadcrumb">
                @yield('alamat')
                </ul>
            </div>
            @yield('button_atas')
            <div class="row">
                @yield('isi')
            </div>
            <!-- content ends -->
            </div><!--/#content.col-md-0-->
        </div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
        <div class="row">
                <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 2 -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:728px;height:90px"
                        data-ad-client="ca-pub-5108790028230107"
                        data-ad-slot="3193373905"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            <div class="col-md-2 col-lg-3 col-sm-12 col-xs-12 email-subscription-footer">

                <!--End mc_embed_signup-->
            </div>

        </div>
    <!-- Ad ends -->

            <footer class="row">
                <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Tim IT Unper</a> 2020-2021</p>

                <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                        href="unper.ac.id">Unper,ac,id</a></p>
            </footer>

    </div><!--/.fluid-container-->


            <!-- modal -->
                <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3>Edit Profile</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="box col-md-12">
                                        <div class="box-inner">
                                            <div class="box-header well" data-original-title="">
                                                <h2><i class="glyphicon glyphicon-edit"></i> Form </h2>

                                                <div class="box-icon">
                                                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                                                            class="glyphicon glyphicon-cog"></i></a>
                                                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                            class="glyphicon glyphicon-chevron-up"></i></a>
                                                    <a href="#" class="btn btn-close btn-round btn-default"><i
                                                            class="glyphicon glyphicon-remove"></i></a>
                                                </div>
                                            </div>
                                            <div class="box-content">
                                                <form role="form" action="{{route('update')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="form-group ">
                                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                                        <input type="text" class="form-control " name="nama" placeholder="Nama Lengkap" value="{{old('nidn')}}" required>
                                                    </div>
                                                    <div class="form-group @if ($errors->has('nidn')) has-error @endif ">
                                                        <label for="exampleInputEmail1">NIDN</label>
                                                        <input type="text" class="form-control {{$errors->has('nidn') ? 'is-invalid': ''}}" name="nidn" placeholder="NIDN"  value="{{old('nidn')}}" required>
                                                        @if ($errors->has('nidn'))
                                                        <div class="invalid-feedback">
                                                            {{$errors->first('nidn')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                        <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </div>
                                                                <input type="text" class="form-control datepicker" name="ttl" placeholder="Tempat Tanggal Lahir"  required>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                                                    </div>
                                                    <label for="exampleInputEmail1">Jenis Kelamin</label><br>
                                                        <label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki"> Laki-Laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan"> Perempuan
                                                </label><br><br>
                                                    <div class="form-group @if ($errors->has('kontak')) has-error @endif">
                                                        <label for="exampleInputEmail1">No/Kontak</label>
                                                        <input type="text" class="form-control" name="kontak" placeholder="No/Kontak" value="{{old('nidn')}}" required>
                                                        @if ($errors->has('kontak'))
                                                        <div class="invalid-feedback">
                                                            {{$errors->first('kontak')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Pas Foto</label>
                                                        <input type="file" id="exampleInputFile" name="avatar" class="form-control">

                                                        <p class="help-block">File JPG or PNG</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
                 <!-- modal -->
                 <div class="modal fade" id="addcuti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3>Permohonan Cuti</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="box col-md-12">
                                        <div class="box-inner">
                                            <div class="box-header well" data-original-title="">
                                                <h2><i class="glyphicon glyphicon-edit"></i> Form </h2>

                                                <div class="box-icon">
                                                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                                                            class="glyphicon glyphicon-cog"></i></a>
                                                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                            class="glyphicon glyphicon-chevron-up"></i></a>
                                                    <a href="#" class="btn btn-close btn-round btn-default"><i
                                                            class="glyphicon glyphicon-remove"></i></a>
                                                </div>
                                            </div>
                                            <div class="box-content">
                                                <form method="POST" action="{{route('permohonan_cuti')}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Jenis Cuti</label>
                                                        <select class="form-control" name="jenis_cuti">
                                                        <option>Kesehatan</option>
                                                        <option>Kepentingan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <labe>  Alasan Cuti</labe>
                                                        <input type="text" class="form-control" name="alasan_cuti" placeholder="Alasan Cuti">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                        <label>Mulai Cuti</label>
                                                            <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </div>
                                                                <input placeholder="masukkan tanggal Mulai Cuti" type="text" class="form-control datepicker" name="awal_cuti">
                                                            </div>
                                                             </div>
                                                             <div class="col-md-6">
                                                            <label>Takhir Cuti</label>
                                                            <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </div>
                                                                <input placeholder="masukkan tanggal Akhir Cuti" type="text" class="form-control datepicker" name="akhir_cuti">
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                                </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->

                <!-- modal -->
                <div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3>Change Password</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="box col-md-12">
                                        <div class="box-inner">
                                            <div class="box-header well" data-original-title="">
                                                <h2><i class="glyphicon glyphicon-edit"></i> Form </h2>

                                                <div class="box-icon">
                                                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                                                            class="glyphicon glyphicon-cog"></i></a>
                                                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                            class="glyphicon glyphicon-chevron-up"></i></a>
                                                    <a href="#" class="btn btn-close btn-round btn-default"><i
                                                            class="glyphicon glyphicon-remove"></i></a>
                                                </div>
                                            </div>
                                            <div class="box-content">
                                                <form  action="{{route('passganti')}}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">  Password Baru</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Password Baru">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">  Confirm Password</label>
                                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                                    </div>
                                                    <div class="modal-footer">
                                                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                                </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->



<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

</body>
</html>
 