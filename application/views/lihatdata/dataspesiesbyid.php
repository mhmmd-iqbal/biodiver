<?php 
	if ($spesies['stat'] == 'DILINDUNGI') { $alert = 'danger';	}
	else{ $alert = 'success';}
?>
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
			<h3><?php echo $spesies['nm_spesies'] ?></h3>
			<h4><?php echo $spesies['nmu_spesies']; ?></h4>
<?php if(($level=='bksda')||($level=='lsm')): ?>
			<h4><a href="<?php echo site_url() ?>C_CUD/update/spesies/<?php echo $spesies['id_spesies'] ?>" class="btn btn-success" style="margin-bottom: 2px">UPDATE DATA</a></h4>
<?php endif; ?>
			<div class="row">
				<div class="col-lg-3">
					<div class="row">
						<div class="col-lg-12">
							<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$spesies['gbr_spesies']; ?>" width="220px" height="300px">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-12">
										<div class="alert alert-<?php echo $alert ?> mt" ><h4 style="text-align: center">SATWA <?php echo $spesies['stat'] ?></h4></div>
									</div>
									<div class="col-lg-12">
										<h4>KATEGORI KELANGKAAN</h4>
										<h5>BERDASARKAN IUCN RED LIST</h5>
										<h5 style="text-align: center;"><?php echo $spesies['nm_kategori']. " (".$spesies['nmu_kategori'].")"; ?></h5>
										<p align="justify"><?php echo $spesies['ket_kategori']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<h4>HABITAT SPESIES</h4>
									<p><?php echo $spesies['habitat']; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<h4>KARAKTERISTIK SPESIES</h4>
									<p><?php echo $spesies['karakteristik']; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<h4>CIRI - CIRI</h4>
									<?php if(($spesies['ciri_class'] != '')&&($spesies['ciri_class'] != ' ')&&($spesies['ciri_class'] != NULL)): ?>
									<p>1. <?php echo $spesies['ciri_class']; ?></p>
									<?php endif; ?>
									<?php if(($spesies['ciri_ordo'] != '')&&($spesies['ciri_ordo'] != ' ')&&($spesies['ciri_ordo'] != NULL)): ?>
									<p>2. <?php echo $spesies['ciri_ordo']; ?></p>
									<?php endif; ?>
									<?php if(($spesies['ciri_famili'] != '')&&($spesies['ciri_famili'] != ' ')&&($spesies['ciri_famili'] != NULL)): ?>
									<p>3. <?php echo $spesies['ciri_famili']; ?></p>
									<?php endif; ?>
									<?php if(($spesies['ciri_genus'] != '')&&($spesies['ciri_genus'] != ' ')&&($spesies['ciri_genus'] != NULL)): ?>
									<p>4. <?php print$spesies['ciri_genus']; ?></p>
									<?php endif; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<h4>KETERANGAN</h4>
									<p><?php echo $spesies['ket_spesies']; ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							
						</div>
					</div>
				</div>
				<div class="col-lg-4">
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
									<td><a href="<?php echo site_url() ?>TugasAkhir/LihatDataById/class/<?php echo $spesies['id_class'] ?>"><?php echo $spesies['nm_class'] ?></a></td>
								</tr>
								<tr>
									<th>Ordo</th>
									<td><a href="<?php echo site_url() ?>TugasAkhir/LihatDataById/ordo/<?php echo $spesies['id_ordo'] ?>"><?php echo $spesies['nm_ordo'] ?></a></td>
								</tr>
								<tr>
									<th>Famili</th>
									<td><a href="<?php echo site_url() ?>TugasAkhir/LihatDataById/famili/<?php echo $spesies['id_famili'] ?>"><?php echo $spesies['nm_famili'] ?></a></td>
								</tr>
								<tr>
									<th>Genus</th>
									<td><a href="<?php echo site_url() ?>TugasAkhir/LihatDataById/genus/<?php echo $spesies['id_genus'] ?>"><?php echo $spesies['nm_genus'] ?></a></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12"><h4 class="text-uppercase text-center">KERABAT DEKAT <?php echo $spesies['nm_spesies']; ?> </h4></div>
						<div class="col-lg-12">
							<table class="table table-bordered">
								<tr>
									<th colspan="2" class="text-center">Spesies</th>
									<th>Lihat Detail</th>
								</tr>
					<?php 
					foreach ($kerabat as $data) :
						if ($data['id_spesies'] != $spesies['id_spesies']) :
					?>			
													<tr>
														<td><?php echo $data['nm_spesies']; ?></td>
														<td><?php echo $data['nmu_spesies']; ?></td>
														<td><a href="<?php echo site_url() ?>TugasAkhir/LihatDataById/spesies/<?php echo $data['id_spesies'] ?>" class="btn btn-success btn-block"><i class="fa fa-search"></i></a></td>
													</tr>					
					<?php 
						endif; 	
					endforeach;	
					?>
							</table>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-2">
					<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$spesies['gbr2_spesies']; ?>" width="160px" height="240px">
				</div>
				<div class="col-lg-2">
					<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$spesies['gbr3_spesies']; ?>" width="160px" height="240px">
				</div> -->
			</div>
			
		</section>
	</section>
	<!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</body>
</html>


