<html>
<head>
<style type="text/css">
	.row .form{
		padding-top: 1%;
	}
</style>
<?php $this->load->view('template/head'); ?>
</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper site-min-height">
			<h3>TAMBAH DATA FAMILI</h3>
			<p>Silahkan input data baru takson famiii</p>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
					<div class="row menuhome">
						<div class="col-lg-6">
							<p class="alert alert-success">Ordo belum tersedia? tambah data Ordo</p>
						</div>
						<div class="col-lg-2">
							<a href="<?php echo site_url() ?>/C_CUD/create/ordo"  class="btn btn-success tambah">TAMBAH ORDO</a>
						</div>
					</div>
				</div>
				<?php if ($level == 'bksda') :?>
				<div class="col-lg-12">
					<div class="alert alert-success">
						<div class="row">
							<div class="col-lg-12">
								<p> Untuk menginput data secara bersamaan, silahkan gunakan menu berikut </p>
							</div>
						</div>
						<div class="row">
							<form class="form-group" action="<?php echo site_url() ?>/C_ImportExcel/UploadExcel/famili" method="post" enctype="multipart/form-data">
							<div class="col-lg-3">
								<input type="file" class="form-control" name="file" accept=".xls, .xlsx, .csv" >
							</div>
							<div class="col-lg-9">
								<button type="submit" class="btn btn-default">Upload Data Excel</button>
							
								<a href="<?php echo site_url() ?>/C_ImportExcel/DownloadForm/famili" class="btn btn-default">Download Format</a>
								<a href="<?php echo site_url() ?>/C_ImportExcel/CodeCheck/ordoCode" class="btn btn-default">Cek Kode Class</a>
							</div>
							</form>
						</div>
					</div>
				</div>
			<?php endif; ?>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiTambah/famili" enctype="multipart/form-data">
						<div class="row form">
							<div class="col-lg-2">
								<h5>Gambar</h5>
							</div>
							<div class="col-lg-9">
								<input type="file" name="img" class="form-control">
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Latin</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama_latin" class="form-control" maxlength="60" required>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Umum</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama_umum" class="form-control" maxlength="60" required >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Ordo</h5>
							</div>
							<div class="col-lg-9">
								<select class="form-control select2" name="id_ordo">
									<option value="" disabled selected>---Pilih Ordo---</option>
<?php foreach ($ordo as $dataC ): ?>
									<option value="<?php echo $dataC['id_ordo'] ?>"><?php echo $dataC['nama_latin']." : ".$dataC['nama_umum'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Ciri - Ciri</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" name="ciri_ciri" class="form-control " maxlength="300" ></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Keterangan</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="6" name="keterangan" class="form-control " maxlength="500" required></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-12">
								<button type="submit" class="btn btn-success">TAMBAH</button>
								<button type="reset" class="btn btn-danger">RESET</button>
							</div>
						</div>
					</form>
				</div>
		</section>
	</section>
	<!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</body>
</html>