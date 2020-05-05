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
			<h3>EDIT DATA KATEGORI</h3>
			<h4><?php echo $kategori['nama']; ?></h4>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
				</div>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiEdit/kategori/<?php echo $kategori['id_kategori'] ?>">
						<div class="row form">
							<div class="col-lg-2">
								<h5>Kategori</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama" class="form-control" maxlength="60" value="<?php echo $kategori['nama']; ?>" >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Bahasa Umum</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="umum" class="form-control" maxlength="60" value="<?php echo $kategori['umum']; ?>" >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Singkatan</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="singkatan" class="form-control" maxlength="5" value="<?php echo $kategori['singkatan']; ?>" >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Keterangan</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" name="keterangan" class="form-control " maxlength="500"><?php echo $kategori['keterangan']; ?></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">								
							</div>
							<div class="col-lg-10">
								<button type="submit" class="btn btn-success">PERBARUI DATA</button>
								<button type="reset" class="btn btn-danger">RESET FORM</button>
							</div>							
						</div>
					</form>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger"><p align="justify">Data akan dihapus secara permanen apabila tombol HAPUS DATA ditekan. Silahkan periksa kembali untuk memastikan pilihan anda </p></div>
						</div>
						<div class="col-lg-12">
							<div class="hapus">
								<a href="<?php echo site_url() ?>/C_CUD/delete/kategori/<?php echo $kategori['id_kategori']; ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $kategori['nama'] ?>?')" class="btn btn-danger btn-block">HAPUS DATA</a>
							</div>
						</div>
						<div class="col-lg-12 mt">
							<div class="alert alert-danger"><p align="justify"><b>PERHATIAN:</b> Anda tidak dapat menghapus data ini apabila terdapat spesies yang menggunakan kategori kelangkaan <?php echo $kategori['nama']; ?> </p></div>
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
