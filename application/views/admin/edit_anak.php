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
            <i class="fa fa-file"></i> Edit Anak
          </li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12">
        <h2>Update Data Anak</h2>
        <?php echo validation_errors() ?>
        <?php echo form_open_multipart('admin/welcome/update_profile'); ?>
        <?php foreach ($record as $list) { ?>
          <input type="hidden" name="id" placeholder="id" value="<?php echo $list->id;?>">
        <div class="form-group">
          <label>Nama Anak</label>
          <input class="form-control" name="nama_anak" value="<?php echo $list->nama_profile?>">
        </div>
        <div class="form-group">
          <label>Deskripsi Anak</label>
          <textarea class="ckeditor" placeholder="Deskripsi" name="deskripsi" required><?php echo $list->deskripsi; ?></textarea>
        </div>
        <div class="form-group">
          <label>Foto Lama</label>
          <img style="height: 400px; width: 500px" class="img-responsive" src="<?php echo base_url();?>uploads/profile/<?php echo $list->profile;?>" alt="">
        </div>
        <div class="form-group">
          <label>Foto Baru</label>
          <input type="file" name="profile">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <?php }; ?>
        <?php echo form_close(); ?>
      </div>
    </div>

    <!-- <div class="row" style="margin-top:20px;">
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
                <tbody>
                  <tr>
                    <td>AzizSudrajat</td>
                    <td>lala</td>
                    <td>path gambar</td>
                    <td>
                      <p class="btn btn-primary">Ubah</p>
                      <p class="btn btn-primary">Hapus</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> -->
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
