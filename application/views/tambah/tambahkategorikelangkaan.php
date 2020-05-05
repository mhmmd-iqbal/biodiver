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
			<h3>TAMBAH DATA KATEGORI KELANGKAAN</h3>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
				</div>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiTambah/kategori">
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Kategori</h5>
							</div>
							<div class="col-lg-6">
								<input type="text" name="nama" class="form-control" maxlength="50" placeholder="kategori..." >
							</div>
							<div class="col-lg-1">
								<h5>Singkatan</h5>
							</div>
							<div class="col-lg-2">
								<input type="text" name="singkatan" class="form-control" maxlength="5" >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Bahasa Umum</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama" class="form-control" maxlength="50" placeholder="Umum..." >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Keterangan</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" class="form-control" name="keterangan" maxlength="500"></textarea>
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
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-12">
							<table class="table table-bordered" id="tabel-data">
								<thead>
								<tr>
									<th>NO</th>
									<th colspan="2">KATEGORI</th>
									<th>UMUM</th>
								</tr>
								</thead>
								<tbody>
<?php $no = 1; foreach ($kategori as $key ): ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $key['nama']; ?></td>
									<td><?php echo $key['singkatan']; ?></td>	
									<td><?php echo $key['umum']; ?></td>
								</tr>
<?php $no++; endforeach; ?>	
								</tbody>						
							</table>
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
