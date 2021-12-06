<!-- Content Wrapper. Contains page content -->
<x-app-layout>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><span class="fa fa-home"></span> Beranda</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <li class="breadcrumb-item active"><span class="fa fa-home"></span> Beranda</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="col-sm-12 mt-4 alert alert-success alert-dismissible fade show" role="alert">
        <span class="fa fa-user-o"></span> Selamat Datang <strong>{{auth()->user()->name}}</strong>  di Aplikasi Persediaan Obat.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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
              <h3>360</h3>

              <p>Data Obat</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-plus"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>15</h3>

              <p>Data Admin</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-circle"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-plus"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>10</h3>

              <p>Data Pengguna</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-plus"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

</x-app-layout>
