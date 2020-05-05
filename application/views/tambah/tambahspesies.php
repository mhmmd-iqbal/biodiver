<html>
<head>
<style type="text/css">
	.row .form{
		padding-top: 4px;
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
			<h3>TAMBAH DATA SPESIES</h3>
			<p>Silahkan input data baru spesies</p>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
					<div class="row menuhome">
						<div class="col-lg-7">
							<p class="alert alert-success">Genus belum tersedia? tambah data genus</p>
						</div>
						<div class="col-lg-2">
							<a href="<?php echo site_url() ?>/C_CUD/create/genus" class="btn btn-success tambah">TAMBAH GENUS</a>
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
							<form class="form-group" action="<?php echo site_url() ?>/C_ImportExcel/UploadExcel/spesies" method="post" enctype="multipart/form-data">
							<div class="col-lg-3">
								<input type="file" class="form-control" name="file" accept=".xls, .xlsx, .csv" >
							</div>
							<div class="col-lg-9">
								<button type="submit" class="btn btn-default">Upload Data Excel</button>
							
								<a href="<?php echo site_url() ?>/C_ImportExcel/DownloadForm/spesies" class="btn btn-default">Download Format</a>
								<a href="<?php echo site_url() ?>/C_ImportExcel/CodeCheck/genusCode" class="btn btn-default">Cek Kode Class</a>
								<a href="<?php echo site_url() ?>/C_ImportExcel/CodeCheck/kategoriCode" class="btn btn-default">Cek Kode Kategori Kelangkaan</a>
							</div>
							</form>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-lg-12">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiTambah/spesies" enctype="multipart/form-data">
						<div class="row form">
							<div class="col-lg-3">
								<h5>Gambar Spesies</h5>
							</div>
							<div class="col-lg-4">
								<input type="file" name="img" class="form-control">
							</div>
							<!-- <div class="col-lg-3">
								<input type="file" name="img2" class="form-control">
							</div>
							<div class="col-lg-3">
								<input type="file" name="img3" class="form-control">
							</div>
							<div class="col-lg-12">
								<p style="font-style: italic;">*Minimal masukkan 1 gambar</p>
							</div>	 -->													
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Latin</h5>
							</div>
							<div class="col-lg-4">
								<input type="text" name="nama_latin" class="form-control" maxlength="60" required>
							</div>
							<div class="col-lg-1">
								<h5>Nama Umum</h5>
							</div>
							<div class="col-lg-4">
								<input type="text" name="nama_umum" class="form-control" maxlength="60" required >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Kategori Kelangkaan</h5>
							</div>
							<div class="col-lg-4">
								<select class="form-control" name="id_kategori">
									<option value="" disabled selected>---Pilih Kategori Kelangkaan---</option>
<?php foreach ($kategori as $data ): ?>
									<option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama']." : ".$data['umum'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
							<div class="col-lg-1">
								<h5>Status Konservasi</h5>
							</div>
							<div class="col-lg-4">
								<select class="form-control" name="stat">
									<option value="DILINDUNGI">--- SATWA YANG DILINDUNGI</option>
									<option value="TIDAK DILINDUNGI">--- SATWA YANG TIDAK DILINDUNGI</option>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Genus</h5>
							</div>
							<div class="col-lg-9">
								<select class="form-control select2" name="id_genus">
									<option value="" disabled selected>---Pilih Genus---</option>
<?php foreach ($genus as $data ): ?>
									<option value="<?php echo $data['id_genus'] ?>"><?php echo $data['nama_latin']." : ".$data['nama_umum'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Habitat</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" name="habitat" class="form-control"></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Karakteristik</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="4" name="karakteristik" class="form-control " maxlength="500" required></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Keterangan</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="4" name="keterangan" class="form-control " maxlength="500" required></textarea>
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