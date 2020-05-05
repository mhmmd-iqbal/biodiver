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
	                 <a style="background: #5cb85c; color: white" href="<?php echo site_url() ?>/TugasAkhir/aksiLaporan/2" class="btn btn-block">
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
		<div class="row mt">
			<div class="col-lg-12">
				<table class="table table-bordered table-hover">
					<h4 class="text-center">TABEL SPESIES ACEH LANGKA</h4>
					<div class="row menuhome">            
		             	<div class="col-lg-3 col-md-3 col-sm-3 mb">
		                	<a href="<?php echo site_url() ?>/TugasAkhir/Report/2" class="btn btn-block btn-success">CETAK DATA SEMUA SPESIES</a>
		             	</div>            
		              	<div class="col-lg-3 col-md-3 col-sm-3 mb">
		                	<a href="<?php echo site_url() ?>/TugasAkhir/Report/3" class="btn btn-block btn-success">CETAK DATA SATWA DILINDUNGI</a>
		             	</div> 
	            	</div>
					<tr>
						<th>No</th>
						<th class="text-center" colspan="2">Spesies</th>
						<th class="text-center">Kelompok</th>
						<th class="text-center" colspan="2">Status</th>
					</tr>
<?php $no=1; foreach ($spesies as $data): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['nmu_spesies']; ?></td>
						<td><?php echo $data['nm_spesies']; ?></td>
						<td class="text-center"><?php echo $data['nm_class']; ?></td>
						<td><?php echo $data['nmu_kategori']; ?></td>
						<td><?php echo $data['singkatan']; ?></td>
					</tr>
<?php $no++; endforeach; ?>					
				</table>
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