
<html>
<head>
<style type="text/css">
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
			<h3>Lihat Data Kategori Kelangkaan</h3>
			<p>Kategori kelangkaan berdasarkan IUCN Red List untuk spesies-spesies yang terancam</p>
			<div class="row">
				<div class="col-lg-12">
<?php if(($level=='bksda')||($level=='lsm')): ?>
					<div class="row">
						<div class="col-lg-12">
							<?php if (isset($pesan)) {?>
							<div class="alert alert-success">
								<p class="text-uppercase" align="center"><?php echo $pesan; ?></p>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="tambah">
							<a href="<?php echo site_url() ?>/C_CUD/create/kategori" class="btn btn-success">TAMBAH DATA KATEGORI KELANGKAAN</a>
							</div>
						</div>
					</div>
<?php endif; ?>
					<div class="row mt">
						<div class="col-lg-12">
							<table class="table table-bordered">
							<tr>
								<th>No</th>
								<th>Kategori</th>
								<th>Tanda</th>
								<th>Detail</th>
							</tr>
<?php 
$no = 1;
foreach($kelangkaan as $data):
?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama'] ?></td>							
								<td><?php echo $data['singkatan'] ?></td>
								<td><button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#Modal'.$data['id_kategori']; ?>"><i class="fa fa-search"></i></button></td>
							</tr>
<!-- Modal -->
<div class="modal fade" id="<?php echo 'Modal'.$data['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-uppercase" id="myModalLabel" style="text-align: center"><?php echo $data['nama']." - ".$data['umum'];; ?> </h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<h4>KETERANGAN</h4>
						<?php echo $data['keterangan']; ?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
<?php if($level=='bksda'): ?>				
					<a href="<?php echo site_url() ?>/C_CUD/update/kategori/<?php echo $data['id_kategori'] ?>" class="btn btn-success">EDIT DATA</a>
<?php endif; ?>
					<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
			</div>
		</div>
	</div>      				
</div><!-- /showback -->							
<?php $no++; endforeach;?>							
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


