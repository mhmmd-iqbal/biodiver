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
		<h3>VERIFIKASI DATA</h3>
		<p>Anda login sebagai <?php echo $nminstitusi ?></p>
		<p class="alert alert-warning"></p>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th colspan="2">class</th>
							<!-- <th>Tanggal Input</th> -->
							<th>Institusi</th>
							<th class="text-center">Aksi</th>
						</tr>
<?php $no=1; foreach ($tmpclass as $data ) : ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['latin']; ?></td>
							<td><?php echo $data['umum'] ?></td>
							<!-- <td></td> -->
							<td><?php echo $data['nama']; ?></td>							
							<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#modalclass<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button></td>
						</tr>
<div class="modal fade" id="modalclass<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['latin']; ?></h4>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['umum']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-5"><img src="<?php echo  base_url().'assets/img/gambar/class/'.$data['gmb']; ?>" width="200px" height="240px"></div>
					<div class="col-lg-7">
						<div class="row">
							<div class="col-md-4">Institusi</div>
							<div class="col-md-8"><?php echo $data['nama']; ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">ciri-ciri</div>
							<div class="col-md-8"><?php echo $data['ciri']; ?></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">Keterangan</div>
					<div class="col-lg-8"><?php echo $data['ket']; ?></div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="<?php echo site_url() ?>/C_CUD/aksiverif/class/<?php echo $data['id'] ?>" class="btn btn-danger">VERIFIKASI</a>
				<button class="btn btn-info" data-dismiss="modal">TUTUP</button>
			</div>
		</div>
	</div>
</div>
<?php $no++; endforeach; ?>						
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