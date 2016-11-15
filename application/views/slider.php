<!-- slider.php -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-text">
								<h3>Assalamu-alaykum</h3>
							  <p>Selamat Datang Di Panti Bukhari Kami</p>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3> Insya Allah Masuk Sorga</h3>
								<p>Berkat Doa Dari Anak Yatim-Piatu </p>
							</div>
						</li>
						<li>
							<div class="banner-text">
								<h3>Pedulikanlah Kami</h3>
								<p>Anggaplah Kami Saudara Kalian Kami</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--FlexSlider-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flexslider.css" type="text/css" media="screen" />
	<script defer src="<?php echo base_url() ?>assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
	<!--End-slider-script-->
