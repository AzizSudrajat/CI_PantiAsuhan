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
            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url() ?>index.php/admin/welcome/profile_anak">Anak</a>
          </li>
          <li class="active">
            <i class="fa fa-file"></i> Tambah Anak
          </li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <h2>Tambah Data Anak</h2>
        <?php echo validation_errors() ?>
        <?php echo form_open_multipart('admin/welcome/insert_profile'); ?>
        <div class="form-group">
          <label>Nama Anak</label>
          <input name="nama_anak" class="form-control" placeholder="Masukan Nama Anak Baru">
        </div>
        <div class="form-group">
          <label>Deskripsi Anak</label>
          <textarea class="ckeditor" placeholder="Deskripsi" name="deskripsi"></textarea>
        </div>
        <div class="form-group">
          <label>Foto Anak</label>
          <input type="file" name="profile" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <!-- <input type="submit" value="simpan"> -->
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
                      <p class="btn btn-primary">Hapus</p>
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
