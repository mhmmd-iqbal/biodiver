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
                 	<a style="background: #5cb85c; color: white" href="<?php echo site_url() ?>/TugasAkhir/aksiLaporan/1" class="btn btn-block">
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
		<div class="row mt">
			<div class="col-lg-12">
				<h4 class="text-center">TABEL AKTIVITAS INSTANSI</h4>
				<div class="row">
					<div class="col-md-10">
						<h4>Pilih Selang Waktu Kegiatan Yang Akan dicetak</h4>
					</div>
				</div>
				<form class="" method="post" action="<?php echo site_url() ?>/TugasAkhir/Report/1">
				<div class="row menuhome">
					
					<div class="col-md-3">
						<input type="text" value="<?php echo date('Y-m-d') ?>" name="datefrom" placeholder="Dimulai dari..." class="form-control datepicker">
					</div>
					<div class="col-md-3">
						<input type="text" value="<?php echo date('Y-m-d') ?>" name="dateto" placeholder="Hingga sampai..." class="form-control datepicker">
					</div>           
		           	<div class="col-lg-3 col-md-3 col-sm-3 mb">
		               	<button type="submit" class="btn btn-block btn-success">CETAK DATA</button>
		           	</div>            
	            </div>
				</form>
				<table class="table table-bordered table-hover" id="tabel-data">
					<thead>
					<tr>
						<th>No</th>
						<th>Kegiatan</th>
						<th class="text-center">Tanggal dan Waktu Kegiatan</th>
						<th class="text-center">Instansi yang Melakukan</th>
					</tr>
					</thead>
					<tbody>
<?php $no=1; foreach ($log as $data): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['kegiatan'] ?></td>
						<td class="text-center"><p><?php echo date('d-m-Y', strtotime($data['tanggal']))?></p><p><?php echo $data['waktu'] ?></p></td>
						<td><?php echo $data['institusi'] ?></td>
					</tr>
<?php $no++; endforeach; ?>	
					</tbody>				
				</table>
			</div>
		</div>
	</section>
</section>
<!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</script>
</body>
</html>