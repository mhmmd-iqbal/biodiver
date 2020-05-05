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
		<h3>VERIFIKASI DATA</h3>
		<p class="alert alert-success">Halaman ini hanya akan tampil untuk  BKSDA</p>
		<p>Verifikasi Data ter Update oleh BKSDA</p>
		<p>Pilih menu dibawah ini untuk dapat melanjutkan ...</p>
		<div class="row">
			<div class="col-lg-12">
				<div class="row menuhome mt">
					<div class="col-lg-4">
						<h4><?php echo $jmltmpclass; ?> DATA CLASS BELUM DI VERIFIKASI</h4>
              		</div>
              		<div class="col-lg-2">
              			<div class="row ">
	              			<a href="<?php echo site_url() ?>/TugasAkhir/tableverif/class" class="btn btn-success btn-block" style="text-align: center;">LIHAT</a>
              			</div>
              		</div>
				</div>
				<div class="row menuhome mt">
					<div class="col-lg-4">
						<h4><?php echo $jmltmpordo; ?> DATA ORDO BELUM DI VERIFIKASI</h4>
              		</div>
              		<div class="col-lg-2">
          				<div class="row ">
	              			<a href="<?php echo site_url() ?>/TugasAkhir/tableverif/ordo" class="btn btn-success btn-block" style="text-align: center;">LIHAT</a>
              			</div>
              		</div>
				</div>
				<div class="row menuhome mt">
					<div class="col-lg-4">
						<h4><?php echo $jmltmpfamili; ?> DATA FAMILI BELUM DI VERIFIKASI</h4>
              		</div>
              		<div class="col-lg-2">
              			<div class="row ">
	              			<a href="<?php echo site_url() ?>/TugasAkhir/tableverif/famili" class="btn btn-success btn-block" style="text-align: center;">LIHAT</a>
              			</div>
              		</div>
				</div>
				<div class="row menuhome mt">
					<div class="col-lg-4">
						<h4><?php echo $jmltmpgenus; ?> DATA GENUS BELUM DI VERIFIKASI</h4>
              		</div>
              		<div class="col-lg-2">
              			<div class="row ">
	              			<a href="<?php echo site_url() ?>/TugasAkhir/tableverif/genus" class="btn btn-success btn-block" style="text-align: center;">LIHAT</a>
              			</div>
              		</div>
				</div>
				<div class="row menuhome mt">
					<div class="col-lg-4">
						<h4><?php echo $jmltmpspesies; ?> DATA SPESIES BELUM DI VERIFIKASI</h4>
              		</div>
              		<div class="col-lg-2">
              			<div class="row ">
	              			<a href="<?php echo site_url() ?>/TugasAkhir/tableverif/spesies" class="btn btn-success btn-block" style="text-align: center;">LIHAT</a>
              			</div>
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

