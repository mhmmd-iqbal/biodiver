<html>
 <head>
<?php $this->load->view('template/head'); ?>
</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
<section id="main-content">
	<section class="wrapper site-min-height">
		<h3>REPORT</h3>
		<p class="alert alert-success">Halaman ini hanya akan tampil untuk kepala BKSDA</p>
		<p>Halaman report berisi report dari Spesies, Data LSM dan Aktifitas LSM di dalam sistem</p>
		<div class="row">
			<div class="col-lg-12">
				<div class="row tabmenu">
					<div class="col-md-4">
                 	<a href="<?php echo site_url() ?>/TugasAkhir/aksiLaporan/1" class="btn btn-block">
                   		<h4 class="text-center">LIHAT</h4>
                   		<h5 class="text-center">LOG AKTIFITAS PENGGUNA</h5>
                 	</a>
              	</div>
	              <div class="col-md-4">
	                 <a href="<?php echo site_url() ?>/TugasAkhir/aksiLaporan/2" class="btn btn-block">
	                   <h4 class="text-center">LIHAT DAN CETAK</h4>
	                   <h5 class="text-center">DATA SPESIES LANGKA</h5>
	                 </a>
	              </div>
	              <div class="col-md-4">
	                 <a href="<?php echo site_url() ?>/TugasAkhir/aksiLaporan/3" class="btn btn-block">
	                   <h4 class="text-center">LIHAT DAN CETAK</h4>
	                   <h5 class="text-center">DATA LSM</h5>
	                 </a>
	              </div>
				</div>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</body>
</html>