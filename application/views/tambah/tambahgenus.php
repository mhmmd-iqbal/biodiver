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
			<h3>TAMBAH DATA GENUS</h3>
			<p>Silahkan input data baru takson genus</p>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
					<div class="row menuhome">
						<div class="col-lg-6">
							<p class="alert alert-success">Famili belum tersedia? tambah data Famili</p>
						</div>
						<div class="col-lg-2">
							<a href="<?php echo site_url() ?>/C_CUD/create/famili"  class="btn btn-success tambah">TAMBAH FAMILI</a>
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
							<form class="form-group" action="<?php echo site_url() ?>/C_ImportExcel/UploadExcel/genus" method="post" enctype="multipart/form-data">
							<div class="col-lg-3">
								<input type="file" class="form-control" name="file" accept=".xls, .xlsx, .csv" >
							</div>
							<div class="col-lg-9">
								<button type="submit" class="btn btn-default">Upload Data Excel</button>
							
								<a href="<?php echo site_url() ?>/C_ImportExcel/DownloadForm/genus" class="btn btn-default">Download Format</a>
								<a href="<?php echo site_url() ?>/C_ImportExcel/CodeCheck/familiCode" class="btn btn-default">Cek Kode Class</a>
							</div>
							</form>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiTambah/genus" enctype="multipart/form-data">
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
								<h5>Famili</h5>
							</div>
							<div class="col-lg-9">
								<select class="form-control select2" name="id_famili">
									<option value="" disabled selected>---Pilih famili---</option>
<?php foreach ($famili as $dataC ): ?>
									<option value="<?php echo $dataC['id_famili'] ?>"><?php echo $dataC['nama_latin']." : ".$dataC['nama_umum'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Ciri - Ciri</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" name="ciri_ciri" class="form-control " maxlength="500" ></textarea>
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
				<!--div class="col-lg-4">
					<div class="row">
						<div class="col-lg-12">
							<table class="table table-bordered">
								<tr>
									<th>NO</th>
									<th>Ordo</th>
									<th>Umum</th>
								</tr>
<?php 
$no = 1;
foreach ($ordo as $data ) {
	echo "<tr>";
	echo "<td>".$no."</td>";
	echo "<td>".$data['nama_latin']."</td>";
	echo "<td>".$data['nama_umum']."</td>";
	echo "</tr>";
	$no++;
}
?>					
							</table>
						</div>
					</div>
				</div>
			</div-->
		</section>
	</section>
	<!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</body>
</html>