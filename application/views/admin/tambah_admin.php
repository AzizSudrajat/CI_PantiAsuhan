        <!-- isi item -->
        <div id="page-wrapper">
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">
                  Pengelolahan
                  <small>Admin</small>
                </h1>
                <ol class="breadcrumb">
                  <li>
                    <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url() ?>index.php/admin">Admin</a>
                  </li>
                  <li class="active">
                    <i class="fa fa-file"></i> Tambah Admin
                  </li>
                </ol>
              </div>
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-lg-12">
                <h2>Tambah Data Admin</h2>
                <?php echo validation_errors() ?>
                <?php echo form_open_multipart('admin/welcome/insert_admin'); ?>
                <div class="form-group">
                  <label>Username</label>
                  <input name="username" class="form-control" placeholder="Masukan Username Baru">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input name="password" class="form-control" placeholder="Masukan Password Baru">
                </div>
                <input type="hidden" name="id">
                <button type="submit" name="btnSubmit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
              </div>
            </div>

            <div class="row" style="margin-top:20px;">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Data Admin</h3>
                  </div>
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover table-striped">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php
                        foreach ($record->result_array() as $list) { ?>
                        <tbody>
                          <tr>
                            <td><?php echo $list['username'] ?></td>
                            <td><?php echo $list['password'] ?></td>
                            <td>
                              <a href="<?php echo base_url() ?>index.php/admin/welcome/editadmin/<?php echo $list['id']; ?>" class="btn btn-primary" role="button">Ubah</a>
                              <a href="<?php echo base_url() ?>index.php/admin/welcome/do_hapus_admin/<?php echo $list['id']; ?>" class="btn btn-primary" role="button">Hapus</a>
                            </td>
                          </tr>
                        </tbody>
                        <?php } ?>
                      </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->
      </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
