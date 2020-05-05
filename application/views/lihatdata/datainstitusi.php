<html>
<head>
<?php $this->load->view('template/head'); ?>
</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper site-min-height">
			<h3>Lihat Data Institusi</h3>
			<p>Institusi yang terdata didalam sistem adalah institusi konservasi alam yang diakui oleh pemerintah melalui Mitra maupum MoU.</p>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4">
							<div class="tambah">
							<a href="<?php echo site_url() ?>/C_CUD/create/institusi" class="btn btn-success">TAMBAH DATA INSTITUSI</a>
							</div>
						</div>
						<div class="col-lg-8">
							<?php if (isset($pesan)) { ?>
								<div class="alert alert-success">
									<?php echo $pesan; ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="row mt">
						<div class="col-lg-12">
							<table class="table table-bordered" id="tabel-data">
							<thead>
							<tr>
								<th>No</th>
								<th>Institusi</th>
								<th>Alamat</th>
								<th>Detail</th>
							</tr>
							</thead>
							<tbody>
<?php 
$no = 1;
foreach($institusi as $data):
?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama'] ?></td>
								<td><?php echo $data['alamat'] ?></td>
								<td><button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#Modal'.$data['id_institusi']; ?>">Detail</button></td>
							</tr>
<!-- Modal -->
<div class="modal fade" id="<?php echo 'Modal'.$data['id_institusi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel" style="text-align: center"><?php echo $data['nama']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">	
					<div class="col-lg-3"><b>INSTITUSI</b></div>
					<div class="col-lg-8"><?php echo $data['nama']; ?></div>
				</div>
				<div class="row">
					<div class="col-lg-3"><b>ALAMAT</b></div>
					<div class="col-lg-8"><?php echo $data['alamat']; ?></div>
				</div>
				<div class="row">
					<div class="col-lg-3"><b>LEVEL</b></div>
					<div class="col-lg-8 text-uppercase"><?php echo $data['nama_level']; ?></div>
				</div>
				<div class="row">
					<div class="col-lg-3"><b>USERNAME</b></div>
					<div class="col-lg-8"><?php echo $data['username']; ?></div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="<?php echo site_url() ?>/C_CUD/update/institusi/<?php echo $data['id_institusi']; ?>" class="btn btn-success">EDIT DATA</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
				<!-- <p style="text-align: left; padding-top: 10px;"><b>PERHATIAN :</b>RESET PASSWAORD akan mengembalikan PASSWORD sesuai dengan USERNAME INSTITUSI</p> -->
			</div>
			</div>
		</div>
	</div>      				
</div><!-- /showback -->							
<?php $no++; endforeach;?>							
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


