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
		<h3>DATA AKUN</h3>
		<p>Sesuaikan password dan nama institusi akun anda</p>
		<div class="row">
			<div class="col-md-8">
				<div class="alert alert-danger">
					<p>Anda tidak dapat mengubah USERNAME. Silahkan hubungi BKSDA untuk keterangan mengganti username anda</p>
				</div>
			</div>
			<div class="col-md-4">
				<?php if (isset($sukses)): ?>		
					<div class="alert alert-success pesan">
						<p><?php echo $sukses;?></p>
					</div>
				<?php elseif(isset($gagal)): ?>
					<div class="alert alert-danger pesan">
						<p><?php echo $gagal;?></p>
					</div> 
				<?php endif; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<h4><?php echo $akun['nama']; ?></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<form class="form-group" method="post" action="<?php echo site_url() ?>/TugasAkhir/editAkun/<?php echo $akun['id_institusi'] ?>">
					<div class="row">
						<div class="col-md-1">
							<h5>INSTITUSI</h5>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control" name="nama" value="<?php echo $akun['nama'] ?>" >
						</div>
						<div class="col-md-1">
							<h5>USERNAME</h5>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control" name="username" value="<?php echo $akun['username'] ?>" disabled >
						</div>
					</div>
					<div class="row mt">
						<div class="col-md-1">
							<h5>PASSWORD</h5>
						</div>
						<div class="col-md-5">
							<input type="password" class="form-control" name="pass1" placeholder="Masukkan password...">
						</div>
						<div class="col-md-1">
							<h5>ULANGI PASSWORD</h5>
						</div>
						<div class="col-md-5">
							<input type="password" class="form-control" name="pass2" placeholder="Masukkan password...">
						</div>
					</div>
					<div class="row mt">
						<div class="col-md-1">
							<h5>ALAMAT</h5>
						</div>
						<div class="col-md-11">
							<textarea class="form-control" cols="2" name="alamat"><?php echo $akun['alamat']; ?></textarea>
						</div>
					</div>
					<div class="row mt">
						<div class="col-md-1"></div>
						<div class="col-md-11">
							<button type="submit" class="btn btn-success">UBAH DATA</button>
							<button type="reset" class="btn btn-danger">RESET DATA</button>
						</div>
					</div>
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