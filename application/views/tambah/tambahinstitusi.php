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
			<h3>TAMBAH DATA INSTITUSI</h3>
			<div class="row">
				<div class="col-lg-12">
					<p><?php echo namahari($nohari)." | ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
					<p>Anda login sebagai : <?php echo $nama; ?></p>
				</div>
				<div class="col-lg-8">
					<form class="form-group" method="post" action="<?php echo site_url() ?>/C_CUD/aksiTambah/institusi">
						<div class="row form">
							<div class="col-lg-2">
								<h5>Nama Institusi</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="nama" class="form-control" maxlength="50" placeholder="Institusi..." >
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Level User</h5>
							</div>
							<div class="col-lg-9">
								<select class="form-control" name="id_level">
									<option value="">---Pilih Level User---</option>
<?php foreach ($level_user as $data ): ?>
									<option value="<?php echo $data['id_level'] ?>"><?php echo $data['ket'] ?></option>
<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Username</h5>
							</div>
							<div class="col-lg-9">
								<input type="text" name="username" class="form-control" maxlength="50" placeholder="Username...">
								<span class="help-block">PERHATIAN: Secara default, PASSWORD akan disesuaikan dengan USERNAME</span>
							</div>
						</div>
						<div class="row form">
							<div class="col-lg-2">
								<h5>Alamat</h5>
							</div>
							<div class="col-lg-9">
								<textarea rows="3" name="alamat" class="form-control " maxlength="400" placeholder="Alamat Instansi..."></textarea>
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
									<th>INSTITUSI</th>
									<th>LEVEL</th>
								</tr>
								</thead>
								<tbody>
<?php $no = 1; foreach ($institusi as $key ): ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $key['nama']; ?></td>
									<td><?php echo $key['nama_level']; ?></td>
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
