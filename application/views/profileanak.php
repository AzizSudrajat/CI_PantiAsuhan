<div class="container">
  <h2>Profile Anak</h2>
  <br><br>

  <?php
  foreach ($record->result_array() as $list) { ?>
  <div class="row">
    <div class="col-lg-4">
      <img style="padding:20px 0 20px 0;" class="img-responsive" src="<?php echo base_url() ?>uploads/profile/<?php echo $list['profile']; ?>" />
    </div>
    <div class="col-lg-8">
      <h3><?php echo $list['nama_profile']; ?></h3>
      <p>
        <?php echo $list['deskripsi']; ?>
      </p>
      <a class="btn btn-primary" href="#">Selengkapnya..</a>
    </div>
  </div>
  <?php } ?>
</div>
