<!-- Content Wrapper. Contains page content -->
<x-app-layout>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><span class="fa fa-pen"></span> Ubah Profil User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <li class="breadcrumb-item active"><span class="fa fa-home"></span> Beranda</li>
            <li class="breadcrumb-item active">Profil User</li>
            <li class="breadcrumb-item active">Ubah</li>
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
        <div class="col-12">  
          <div class="card">         
            <div class="card-body"> 
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label align="right" for="nama_obat" class="col-sm-2 col-form-label">Username :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="nama_obat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label align="right" for="jenis_obat" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="jenis_obat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <button type="submit" class="offset-sm-9 col-sm-3 btn btn-info">Simpan</button>                      
                    </div>
                    <div class="col-sm-7">
                      <button type="submit" class="col-sm-2 btn btn-default">Batal</button>   
                      <div class="col-sm-10"></div>                   
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
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
