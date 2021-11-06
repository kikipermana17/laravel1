<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css')}}">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('layouts.bagian.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.bagian.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th style="width: 40px">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>100023</td>
                <td>Kiki Permana</td>
                <td>L</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>100022</td>
                <td>Restha</td>
                <td>L</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>100021</td>
                <td>Bima</td>
                <td>L</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>100024</td>
                <td>Arif</td>
                <td>L</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>100025</td>
                <td>Azis</td>
                <td>L</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>100026</td>
                <td>Azhar</td>
                <td>L</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>100027</td>
                <td>Anggi</td>
                <td>P</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>100028</td>
                <td>Alya</td>
                <td>P</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>100029</td>
                <td>Anisa</td>
                <td>P</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>100030</td>
                <td>Astri</td>
                <td>P</td>
            </tr>

        </tbody>
    </table>
</div>

 <div class="card card-warning">
     <div class="card-header">
         <h3 class="card-title">General Elements</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <form>
             <div class="row">
                 <div class="col-sm-6">
                     <!-- text input -->
                     <div class="form-group">
                         <label>Nama</label>
                         <input type="text" class="form-control" placeholder="Enter ...">
                     </div>
                 </div>

             </div>

             <div class="row">
                 <div class="col-sm-6">
                     <!-- textarea -->
                     <div class="form-group">
                         <label>Jenis Kelamin</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected"> </option>
                            <option>laki-Laki</option>
                            <option>Perempuan</option>
                        </select>

                     </div>
                 </div>

             </div>

            <div class="form-group">
                <label>Date and time:</label>
                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="datetimepicker" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>



             <!-- input states -->


             <div class="row">
                 <div class="col-sm-6">
                     <!-- checkbox -->
                     <div class="form-group">
                         <div class="form-check">
                         <label>Agama</label><br>
                             <input class="form-check-input" type="checkbox">
                             <label class="form-check-label">Islam</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" >
                             <label class="form-check-label">Kristen</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" >
                             <label class="form-check-label">Hindu</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="checkbox" >
                             <label class="form-check-label">Budha</label>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6">
                     <!-- radio -->
                     <div class="form-group">
                         <div class="form-check">
                         <label>Hobi</label><br>
                             <input class="form-check-input" type="radio" name="radio1">
                             <label class="form-check-label">Main Game</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" name="radio1">
                             <label class="form-check-label">Programmer</label>
                         </div>
                         <div class="form-check">
                             <input class="form-check-input" type="radio" >
                             <label class="form-check-label">Sepak Bola</label>
                         </div>
                     </div>
                 </div>
             </div>





         </form>
     </div>
     <!-- /.card-body -->
 </div>



                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/assets/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/assets/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ asset('/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/assets/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/assets/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/assets/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>

