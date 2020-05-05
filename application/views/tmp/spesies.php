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
		
		<?php if (isset($pesan)) {?>
			<div class="alert alert-warning">
				<p class="text-uppercase" align="center"><?php echo $pesan; ?></p>
			</div>
		<?php } ?>

		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th colspan="2">Spesies</th>
							<!-- <th>Tanggal Input</th> -->
							<th>Genus</th>
							<th>Institusi Yang Menambahkan</th>
							<th class="text-center">Aksi</th>
						</tr>
<?php $no=1; foreach ($tmpspesies as $data ) : ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['latin']; ?></td>
							<td><?php echo $data['umum'] ?></td>
							<td><?php echo $data['nama_latin']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#modalgenus<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button></td>
						</tr>
<div class="modal fade" id="modalgenus<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['latin']; ?></h4>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['umum']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gmb']; ?>" width="160px" height="200px">
							</div>
							<div class="col-md-3">
								<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gmb2']; ?>" width="160px" height="200px">
							</div>
							<div class="col-md-3">
								<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gmb3']; ?>" width="160px" height="200px">
							</div>
						</div>
						<div class="row mt">
							<div class="col-md-5">Institusi Yang Menambahkan</div>
							<div class="col-md-7 text-uppercase"><?php echo $data['nama']; ?></div>
						</div>
						<div class="row">
							<div class="col-md-5">Kategori IUCN</div>
							<div class="col-md-7"><?php echo $data['singkatan']." - ".$data['nm_kategori']; ?></div>
						</div>
						<div class="row">
							<div class="col-md-5">Status Satwa</div>
							<div class="col-md-7 text-uppercase">SATWA YANG <?php echo $data['stat']; ?></div>
						</div>
						<div class="row">
							<div class="col-md-5">Genus</div>
							<div class="col-md-7"><?php echo $data['nama_latin']; ?></div>
						</div>
						<div class="row mt">
							<div class="col-md-5">Habitat</div>
							<div class="col-md-7"><?php echo $data['habitat']; ?></div>
						</div>
						<div class="row mt">
							<div class="col-lg-5">Karakteristik</div>
							<div class="col-lg-7"><?php echo $data['karakteristik']; ?></div>
						</div>
						<div class="row mt">
							<div class="col-lg-5">Keterangan</div>
							<div class="col-lg-7"><?php echo $data['ket']; ?></div>
						</div>
					</div>
					<div class="col-md-12">
						<form class="form-group" method="post" action="<?php echo site_url()?>/C_CUD/komentar/spesies/<?php echo $data['id'] ?>">
							<label>KOMENTAR</label>
							<p class="small" style="font-style: italic;">*Silahkan beri komentar untuk data ini apabila data belum dapat diverifikasi</p>
							<textarea class="form-control" cols="5" rows="5" maxlength="500" name="komentar"><?php echo $data['komentar'] ?></textarea>
							<button type="submit" class="btn btn-success mt">Masukkan Komentar</button>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="<?php echo site_url() ?>/C_CUD/aksiverif/spesies/<?php echo $data['id'] ?>" class="btn btn-danger">VERIFIKASI</a>
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