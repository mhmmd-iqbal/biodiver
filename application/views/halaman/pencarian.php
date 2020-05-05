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
		<h3>PENCARIAN</h3>
		<p>Cari data Spesies, Genus, Famili, Ordo dan Class di dalam database sistem secara cepat</p>
		<p>Masukkan keterangan yang ingin dicari...</p>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form class="form-inline" role="form" method="post" action="<?php echo site_url('TugasAkhir/hasilPencarian') ?>">
				<div class="form-group">
					<label class="sr-only" for="exampleInputEmail2">Search...</label>
					<input type="text" class="form-control" name="cari" placeholder="Search..." style="width: 300px" minlength="3" required>
				</div>
				<button type="submit" class="btn btn-success">Cari</button>
				</form>

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