<!-- isi item -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pengelolahan
                            <small>Profile Anak</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file"></i> Data Anak
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <a class="btn btn-primary"  href="<?php echo base_url() ?>index.php/admin/welcome/tambah_anak">Tambah Profile Anak</a>
                <h2>Data Anak</h2>
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Nama Anak</th>
                          <th>Deskripsi</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php
                      foreach ($record->result_array() as $list) { ?>
                      <tbody>
                        <tr>
                          <td><?php echo $list['nama_profile']; ?></td>
                          <td><?php echo $list['deskripsi']; ?></td>
                          <td><?php echo $list['profile']; ?></td>
                          <td>
                            <a href="<?php echo base_url() ?>index.php/admin/welcome/editprofile/<?php echo $list['id']; ?>" class="btn btn-primary" role="button">Ubah</a>
                            <a href="<?php echo base_url() ?>index.php/admin/welcome/do_hapus_profile/<?php echo $list['id']; ?>" class="btn btn-primary" role="button">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php } ?>
                    </table>
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
