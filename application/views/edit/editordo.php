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
			<h3>EDIT DATA ORDO</h3>
			<h4><?php echo $ordo['nama_latin']; ?></h4>
			<h4><?php echo $ordo['nama_umum']; ?></h4>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
				</div>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiEdit/ordo/<?php echo $ordo['id_ordo'] ?>" enctype="multipart/form-data">
						<div class="row form">
							<div class="col-lg-2">
								<h5>Gambar</h5>
							</div>
							<div class="col-lg-9">
								<img src="<?php echo  base_url().'assets/img/gambar/ordo/'.$ordo['gambar']; ?>" width="200px" height="240px">
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Ganti Gambar</h5>
							</div>
							<div class="col-lg-9">
								<input type="file" name="img" class="form-control" placeholder="" >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Latin</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama_latin" class="form-control" maxlength="60" value="<?php echo $ordo['nama_latin']; ?>" required>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Umum</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama_umum" class="form-control" maxlength="60" value="<?php echo $ordo['nama_umum']; ?>" required>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Class</h5>
							</div>
							<div class="col-lg-9">
								<select class="form-control select2" name="id_class">
									<option value="" disabled >---Pilih class---</option>
<?php 
	foreach ($class as $dataC ): 
	$selected = ''; 
	if ($ordo['id_class'] == $dataC['id_class']) {
		$selected = 'selected';
	}
	?>
									<option value="<?php echo $dataC['id_class'] ?>" <?php echo $selected; ?>><?php echo $dataC['nama_latin']." : ".$dataC['nama_umum'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Ciri - Ciri</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" name="ciri_ciri" class="form-control " maxlength="500" ><?php echo $ordo['ciri_ciri']; ?></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Keterangan</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="6" name="keterangan" class="form-control " maxlength="500" required><?php echo $ordo['keterangan']; ?></textarea>
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
<?php if($level=='bksda') :?>												
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger"><p align="justify">Data akan dihapus secara permanen apabila tombol HAPUS DATA ditekan. Silahkan periksa kembali untuk memastikan pilihan anda </p></div>
						</div>
						<div class="col-lg-12">
							<div class="hapus">
								<a href="<?php echo site_url() ?>/C_CUD/delete/ordo/<?php echo $ordo['id_ordo']; ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $ordo['nama_latin'] ?>?')" class="btn btn-danger btn-block">HAPUS DATA</a>
							</div>
						</div>
						<div class="col-lg-12 mt">
							<div class="alert alert-danger"><p align="justify"><b>PERHATIAN:</b> Anda tidak dapat menghapus data ini apabila terdapat takson famili yang menggunakan ordo <?php echo $ordo['nama_latin']; ?> </p></div>
						</div>
					</div>
				</div>
<?php endif; ?>				
			</div>
		</section>
	</section>
	<!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</body>
</html>
