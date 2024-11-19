 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Login Database Gagal</i></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- Horizontal Form -->
      <div class="card card-danger">
              <div class="card-header">
                <h4>Username atau Password Salah</h4>
                <p class="card-title">Silahkan Login Ulang</p>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="controllers/ControllerLogin.php" class="form-horizontal" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-6  ">
                      <input type="username" id="username" name="username" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-6">
                      <input type="password"id="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="login" class="btn btn-warning">Masuk</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->