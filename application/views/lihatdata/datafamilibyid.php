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
			<h3>DATA FAMILI</h3>
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12">
							<img src="<?php echo  base_url().'assets/img/gambar/famili/'.$famili['gambar']; ?>" width="200px" height="240px">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="text-uppercase"><?php echo $famili['nama_latin'] ?></h3>
							<h4 class="text-uppercase"><?php echo $famili['nama_umum'] ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12"><h3>KETERANGAN</h3></div>
						<div class="col-lg-12"><p><?php echo $famili['keterangan']; ?></p></div>
					</div>
					<div class="row">
						<div class="col-lg-12"><h3>CIRI-CIRI</h3></div>
						<div class="col-lg-12"><p><?php echo $famili['ciri_ciri']; ?></p></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h4 >TAKSONOMI</h4>
						</div>
						<div class="col-lg-12">
							<table class="table table-bordered" id="tabel-data">
								<tr>
									<th>Kingdom</th>
									<td>Animalia</td>
								</tr>
								<tr>
									<th>Filum</th>
									<td>Chordata</td>
								</tr>
								<tr>
									<th>Class</th>
									<td><a href="<?php echo site_url() ?>/TugasAkhir/LihatDataById/class/<?php echo $takson['id_class'] ?>"><?php echo $takson['nm_class']; ?></a></td>
								</tr>
								<tr>
									<th>Ordo</th>
									<td><a href="<?php echo site_url() ?>/TugasAkhir/LihatDataById/ordo/<?php echo $takson['id_ordo'] ?>"><?php echo $takson['nm_ordo']; ?></a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
<?php if(($level=='bksda')||($level=='lsm')): ?>					
					<div class="row">
						<div class="col-lg-12">
							<div class="tambah">
							<a href="<?php echo site_url() ?>/C_CUD/update/famili/<?php echo $famili['id_famili'] ?>" class="btn btn-success" class="btn btn-success text-uppercase">EDIT DATA FAMILI <?php echo $famili['nama_latin']; ?></a>
							<a href="<?php echo site_url() ?>/C_CUD/create/genus" class="btn btn-success text-uppercase">TAMBAH GENUS DARI FAMILI <?php echo $famili['nama_latin']; ?> </a>
							</div>
						</div>
					</div>
<?php endif; ?>					
					<div class="row">
						<div class="col-lg-12">
							<h4>Berikut Genus didalam <?php echo $famili['nama_latin']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 table-responsive">
							<table class="table table-bordered tabeldata">
								<thead>
								<tr>
									<th>No</th>
									<th>Nama Genus</th>
									<th>Nama Umum</th>
									<th>Aksi</th>
								</tr>
								</thead>
								<tbody>
<?php  
	$no=1;
	foreach ($genusbyfamili as $data): 
?>
								<tr>
									<td><?php echo $no ?></td>
									<td><?php echo $data['nama_latin']; ?></td>
									<td><?php echo $data['nama_umum']; ?></td>
									<td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="<?php echo '#Modal'.$data['id_genus']; ?>"><i class="fa fa-search"></i></button>
									    <a href="<?php echo site_url()."TugasAkhir/LihatDataById/genus/".$data['id_genus'] ?>" class="btn btn-sm btn-info"><i class="fa fa-arrow-right"></i></a></td>
<!-- Modal -->
<div class="modal fade" id="<?php echo 'Modal'.$data['id_genus']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-uppercase" id="myModalLabel" style="text-align: center"><?php echo $data['nama_latin']; ?></h4>
				<h4 class="modal-title text-uppercase" id="myModalLabel" style="text-align: center"><?php echo $data['nama_umum']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4">
						<!-- ambil manual dulu sebentar -->
						<img src="<?php echo  base_url().'assets/img/gambar/genus/'.$data['gambar']; ?>" width="180px" height="240px">
						
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-12">
							<h4>KETERANGAN</h4>
							<p style="text-align: justify;"><?php echo $data['keterangan']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
							<h4>CIRI-CIRI</h4>
							<p style="text-align: justify;"><?php echo $data['ciri_ciri']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="<?php echo site_url()."TugasAkhir/LihatDataById/genus/".$data['id_genus'] ?>" class="btn btn-success">DETAIL</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
			</div>
			</div>
		</div>
	</div>      				
</div><!-- /showback -->
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


