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
			<h3>EDIT DATA INSTITUSI</h3>
			<h4><?php echo $institusi['nama']; ?></h4>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
				</div>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiEdit/institusi/<?php echo $institusi['id_institusi'] ?>">
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Institusi</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama" class="form-control" maxlength="50" value="<?php echo $institusi['nama']; ?>" >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Level User</h5>
							</div>
							<div class="col-lg-9">
								<select class="form-control" name="id_level">
									<option value="" disabled >---Pilih Level User---</option>
<?php 
	foreach ($level_user as $data ):
	$selected = ''; 
	if ($data['id_level'] == $institusi['id_level']) {
		$selected = 'selected';
	}
?>
									<option value="<?php echo $data['id_level'];?>" <?php echo $selected; ?>><?php echo $data['ket'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Username</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="username" class="form-control" maxlength="50" value="<?php echo $institusi['username']?>">
								<span class="help-block">PERHATIAN: PASSWORD akan disesuaikan dengan USERNAME apabila tombol RESET PASSWORD ditekan</span>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Alamat</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" name="alamat" class="form-control " maxlength="400" ><?php echo $institusi['alamat'] ?></textarea>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">								
							</div>
							<div class="col-lg-10">
								<button type="submit" class="btn btn-success">PERBARUI DATA</button>
								<a href="<?php echo site_url() ?>/C_CUD/RPASS/<?php echo $institusi['id_institusi']; ?>" class="btn btn-info" onclick="return confirm('Apakah anda akan me RESET PASSWORD data <?php echo $institusi['nama'] ?>?')">RESET PASSWORD</a>
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
								<a href="<?php echo site_url() ?>/C_CUD/delete/institusi/<?php echo $institusi['id_institusi']; ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $institusi['nama'] ?>?')" class="btn btn-danger btn-block">HAPUS DATA</a>
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
