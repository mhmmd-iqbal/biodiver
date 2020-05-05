<html>
<head>
<style type="text/css">
	/*.tambah a:hover{
		background: transparent;
		border: 1px solid #000;
		color: #000;
	} */
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
			<h3>Lihat Data Ordo</h3>
			<p style="text-align: justify;">Ordo (Bangsa) dalam klasifikasi ilmiah adalah suatu takson yang berada antara class dan famili. Anggota pada takson setiap Class dikelompokkan lagi menjadi beberapa Ordo dengan berdasarkan suatu persamaan ciri-ciri tertentu. Dalam bahasa Indonesia, Ordo diartikan Bangsa yang bisa dicontohkan Bangsa-bangsa seperti Bangsa Indonesia,Malaysia,US dsb. Dalam Taksonomi, Contoh Ordo yaitu Herbivora,Carnivora, Primata.</p>
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
						<div class="col-lg-2">
							<div class="tambah">
							<a href="<?php echo site_url() ?>C_CUD/create/ordo" class="btn btn-success">TAMBAH DATA ORDO</a>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="alert alert-danger"><p align="justify">Anda tidak dapat menghapus Ordo apabila terdapat Famili didalamnya. Pastikan anda telah menyesuaikan Famili-Famili dari Ordo yang akan dihapus!</p></div>
						</div>
					</div>
					<?php endif; ?>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 table-responsive">
							<table class="table table-bordered tabeldata" id="">
							<thead>
							<tr>
								<th width="30px">No</th>
								<th>Nama Ilmiah</th>
								<th>Bahasa Umum</th>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
<?php 
$no = 1;
foreach($ordo as $data):
?>
							<tr>
								<td width="50px"><?php echo $no; ?></td>
								<td><?php echo $data['nama_latin'] ?></td>
								<td><?php echo $data['nama_umum'] ?></td>
								<td>
									<button class="btn btn-sm btn-success" data-toggle="modal" data-target="<?php echo '#Modal'.$data['id_ordo']; ?>"><i class="fa fa-search"></i></button>
								<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/ordo/".$data['id_ordo'] ?>" class="btn btn-sm btn-info"><i class="fa fa-arrow-right"></i></a>
<?php if($level=='bksda'): ?>
									<a href="<?php echo site_url() ?>/C_CUD/update/ordo/<?php echo $data['id_ordo'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i></a>
									<a href="<?php echo site_url() ?>/C_CUD/delete/ordo/<?php echo $data['id_ordo']; ?>" onclick="return confirm('Apakah anda akan menghapus data <?php echo $data['nama_latin'] ?>?')" class="btn btn-sm btn-sm btn-danger"><i class="fa fa-times-circle"></i></a>
<?php elseif($level=='lsm') : ?>	
									<a href="<?php echo site_url() ?>/C_CUD/update/ordo/<?php echo $data['id_ordo'] ?>" class="btn btn-sm btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i></a>
<?php endif; ?>
								</td>
							</tr>
<!-- Modal -->
<div class="modal fade" id="<?php echo 'Modal'.$data['id_ordo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
						<img src="<?php echo  base_url().'assets/img/gambar/ordo/'.$data['gambar']; ?>" width="180px" height="240px">
						
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-12">
							<h4>KETERANGAN</h4>
							<p style="text-align: justify;"><?php echo substr($data['keterangan'], 0, 300)."....(Lihat Detail)"; ?></p>
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
				<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/ordo/".$data['id_ordo'] ?>" class="btn btn-success">DETAIL</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
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


