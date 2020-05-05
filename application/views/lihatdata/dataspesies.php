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
			<h3>Lihat Data Spesies</h3>
			<p style="text-align: justify;">Spesies atau jenis adalah suatu takson yang dipakai dalam taksonomi untuk menunjuk pada satu atau beberapa kelompok individu (populasi) yang serupa dan dapat saling membuahi satu sama lain di dalam kelompoknya (saling membagi gen) namun tidak dapat dengan anggota kelompok yang lain. </p>
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
							<a href="<?php echo site_url() ?>/C_CUD/create/spesies" class="btn btn-success">TAMBAH DATA SPESIES</a>
							<p style="text-align: justify;"></p>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="alert alert-danger"><p align="justify">Data spesies dapat dihapus didalam menu UPDATE spesies yang dimaksud</p></div>
						</div>
					</div>
<?php endif; ?>
					<div class="row mt">
						<div class="col-lg-12 table-responsive">
							<table class="table table-bordered tabeldata" id="">
							<thead>
							<tr>
								<th width="20px">No</th>
								<th class="text-center">Nama Spesies</th>
								<th class="text-center">Nama Spesies</th>
								<th class="text-center">Gambar</th>
								<th class="text-center">Famili</th>
								<th class="text-center">Status</th>
								<th class="text-center">Lihat</th>
							</tr>
							</thead>
							<tbody>
<?php 
$no = 1;
foreach($spesies as $data):
	if ($data['stat'] == 'DILINDUNGI') { $alert = 'danger';	}
	else{ $alert = 'success';}	
?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nm_spesies']?></td>
								<td><?php echo $data['nmu_spesies']; ?></td>
								<td class="text-center"><img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gbr_spesies']; ?>" width="50px" height="70px"></td>
								<td><?php echo $data['nm_famili']; ?></td>
								<td class="text-center"><div class="label label-<?php echo $alert ?>"><?php echo $data['stat'] ?></div></td>
								<td><button class="btn btn-sm btn-success btn-block" data-toggle="modal" data-target="<?php echo '#Modal'.$data['id_spesies']; ?>"><i class="fa fa-search"></i></button></td>
							</tr>
<!-- Modal -->
	<div class="modal fade" id="<?php echo 'Modal'.$data['id_spesies']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-uppercase" id="myModalLabel" style="text-align: center"><?php echo $data['nm_spesies']; ?></h4>
				<h4 class="modal-title text-uppercase" id="myModalLabel" style="text-align: center"><?php echo $data['nmu_spesies']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gbr_spesies']; ?>" width="180px" height="240px">
						<div class="alert alert-<?php echo $alert ?> mt" ><h5 style="text-align: center;">SATWA <?php echo $data['stat']; ?></h5></div>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-12">
								<h4>KATEGORI IUCN RED LIST</h4>
								<div><p ><?php echo $data['nm_kategori']; ?></p></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
							<h4>ASAL GENUS</h4>
							<p style="text-align: justify;"><?php echo $data['nm_genus']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
							<h4>HABITAT</h4>
							<p style="text-align: justify;"><?php echo substr($data['habitat'], 0, 80)."....(Lihat Detail)"; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
							<h4>KARAKTERISTIK</h4>
							<p style="text-align: justify;"><?php echo substr($data['karakteristik'], 0, 80)."....(Lihat Detail)"; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
							<h4>KETERANGAN</h4>
							<p style="text-align: justify;"><?php echo substr($data['ket_spesies'], 0, 80)."....(Lihat Detail)"; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
<?php if(($level=='bksda')||($level=='lsm')): ?>				
				<a href="<?php echo site_url() ?>/C_CUD/update/spesies/<?php echo $data['id_spesies'] ?>" class="btn btn-primary">UPDATE</a>
<?php endif; ?>				
				<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/spesies/".$data['id_spesies'] ?>" class="btn btn-success">DETAIL</a>
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


