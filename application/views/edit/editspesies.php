<html>
<head>
<style type="text/css">
	.row .form{
		padding-top: 1%;
	}
</style>
<?php $this->load->view('template/head'); ?>
<link rel="stylesheet" href="dist/css/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper site-min-height">
			<h3>EDIT DATA SPESIES</h3>
			<h4><?php echo $spesies['nama_latin']; ?></h4>
			<h4><?php echo $spesies['nama_umum']; ?></h4>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
				</div>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiEdit/spesies/<?php echo $spesies['id_spesies'] ?>" enctype="multipart/form-data">
						<div class="row form">
							<div class="col-lg-2">
								<h5>Gambar</h5>
							</div>
							<div class="col-lg-10">
								<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$spesies['gambar']; ?>" width="200px" height="240px">
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Ganti Gambar</h5>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-12">
								<input type="file" name="img" class="form-control" placeholder="" >
							</div>
							<!-- <div class="col-lg-4">
								<input type="file" name="img2" class="form-control" placeholder="" >
							</div>
							<div class="col-lg-4">
								<input type="file" name="img3" class="form-control" placeholder="" >
							</div> -->
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Latin</h5>
							</div>
							<div class="col-lg-10">
								<input type="text" name="nama_latin" class="form-control" maxlength="60" value="<?php echo $spesies['nama_latin']; ?>" required>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Umum</h5>
							</div>
							<div class="col-lg-10">
								<input type="text" name="nama_umum" class="form-control" maxlength="60" value="<?php echo $spesies['nama_umum']; ?>" required>
							</div>
						</div>
<?php 
$opsi1=''; $opsi2='';
if($spesies['stat']=='DILINDUNGI'){
	$opsi1 = 'selected'; }
else{ 
	$opsi2 = 'selected';} 
?>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Status</h5>
							</div>
							<div class="col-lg-10">
								<select class="form-control" name="stat">
									<option value="DILINDUNGI" <?php echo $opsi1; ?>>--- SATWA YANG DILINDUNGI</option>
									<option value="TIDAK DILINDUNGI" <?php echo $opsi2; ?>>--- SATWA YANG TIDAK DILINDUNGI</option>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Genus</h5>
							</div>
							<div class="col-lg-10">
								<select class="form-control select2" name="id_genus">
									<option value="" disabled >---Pilih genus---</option>
<?php 
	foreach ($genus as $dataC ): 
	$selected = ''; 
	if ($spesies['id_genus'] == $dataC['id_genus']) {
		$selected = 'selected';
	}
	?>
									<option value="<?php echo $dataC['id_genus'] ?>" <?php echo $selected; ?>><?php echo $dataC['nama_latin']." : ".$dataC['nama_umum'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Kategori Kelangkaan</h5>
							</div>
							<div class="col-lg-10">
								<select class="form-control" name="id_kategori">
									<option value="" disabled >---Pilih Kategori---</option>
<?php 
	foreach ($kategori as $dataC ): 
	$selected = ''; 
	if ($spesies['id_kategori'] == $dataC['id_kategori']) {
		$selected = 'selected';
	}
	?>
									<option value="<?php echo $dataC['id_kategori'] ?>" <?php echo $selected; ?>><?php echo $dataC['nama']." : ".$dataC['umum'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Habitat</h5>
							</div>
							<div class="col-lg-10">
								<!-- <input type="text" name="habitat" class="form-control" value=""> -->
								<textarea rows="3" name="habitat" class="form-control"><?php echo $spesies['habitat']; ?></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Karakteristik</h5>
							</div>
							<div class="col-lg-10">
								<textarea rows="4" name="karakteristik" class="form-control " maxlength="500" required><?php echo $spesies['karakteristik']; ?></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Keterangan</h5>
							</div>
							<div class="col-lg-10">
								<textarea rows="6" name="keterangan" class="form-control " maxlength="500" required><?php echo $spesies['keterangan']; ?></textarea>
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
								<a href="<?php echo site_url() ?>/C_CUD/delete/spesies/<?php echo $spesies['id_spesies']; ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $spesies['nama_latin'] ?>?')" class="btn btn-danger btn-block">HAPUS DATA</a>
							</div>
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
