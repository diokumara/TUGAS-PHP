 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Pelanggan</i></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Data Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <!-- Input addon -->
     <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Ubah Data</h3>
              </div>
              <div class="card-body">
              <?php 
                      require_once 'controllers/class_pelanggan.php';
                      $obj = new Pelanggan($dbh);
                      // panggil method tampilkan data produk
                      $rs = $obj->getAllJenis();
                      // tangkap request id, di url
                      $id = $_REQUEST['id'];
                      $data_edit = $obj->getPelanggan($id);
              ?>
              <form action="controllers/ControllerPelanggan.php" method="POST">
              <h4>Kode Pelanggan</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input  value="<?= htmlspecialchars($data_edit['kode']); ?>" id="kode" name="kode" type="text" class="form-control" placeholder="Kode">
                </div>

                <h4>Nama Pelanggan</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input value="<?= htmlspecialchars($data_edit['nama']); ?>"  id="nama" name="nama" type="text" class="form-control" placeholder="Nama">
                </div>

                <h4>Jenis Kelamin</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-male"></i> &nbsp <i class="fas fa-female"></i></span>
                  </div>
                  <select value="<?= htmlspecialchars($data_edit['jk']); ?>" id="jk" name="jk" class="form-control">
                          <option class="text-muted"> -- Jenis Kelamin -- </option>
                          <option> L </option>
                          <option> P </option>
                        </select>
                </div>

                <h4>Tempat Lahir</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                  </div>
                  <input  value="<?= htmlspecialchars($data_edit['tmp_lahir']); ?>" id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" placeholder="Tempat Lahir">
                </div>

                <h4>Tanggal Lahir</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                  </div>
                  <input  value="<?= htmlspecialchars($data_edit['tgl_lahir']); ?>" id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                </div>

                <h4>Email</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input  value="<?= htmlspecialchars($data_edit['email']); ?>" id="email" name="email" type="text" class="form-control" placeholder="Email">
                </div>

                <h4>Kartu Pelanggan</h4>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                  </div>
                  <select id="kartu_id" name="kartu_id" class="form-control">
                  <?php 
                      foreach($rs as $j){
                      // edit jenis
                      $sel = ($data_edit['kartu_id'] == $j->id) ? "selected" : "";
                  ?> 
                      <option value="<?= $j->id ?>" <?= $sel ?> ><?= $j->nama ?></option>
                  <?php } ?>
                        </select>
                </div>

              </div>

              <div class="card-footer">
                  <button name="submit" value="ubah" type="submit" class="btn btn-primary">Submit</button>
                  <input type="hidden" name="idx" value="<?= $id ?>">
                </div>

              </form>
            </div>
          
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
        </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->