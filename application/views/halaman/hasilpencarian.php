<html lang="en">
 <head>
 	<style type="text/css">
 	/*button di pencarian data*/
	.row .col-lg-12 button:hover{
      color: #4cae4c;
      background-color: transparent;
      border-color: #4cae4c;
      transition: all 0.3s ease;
 	}
 	.row .col-lg-8{
 		text-align: justify;
 	}
 	</style>
<?php $this->load->view('template/head'); ?>

</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
<section id="main-content">
	<section class="wrapper site-min-height">
		<h3>PENCARIAN</h3>
		<p>Cari data Spesies, Genus, Famili, Ordo dan Class di dalam database sistem secara cepat</p>
		<p>Pencarian berdasarkan <b><?php echo $dicari; ?>.... </b></p>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form class="form-inline" role="form" method="post" action="<?php echo site_url('TugasAkhir/hasilPencarian') ?>">
				<div class="form-group">
					<label class="sr-only" for="exampleInputEmail2">Search...</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="Search..." style="width: 300px" minlength="4">
				</div>
				<button type="submit" class="btn btn-success">Cari</button>
				</form>
			</div>
		</div>
<!-- Spesies	 --> 
		<div class="row mt">
			<div class="col-lg-12">
				<h4>DATA SPESIES YANG DITEMUKAN</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<h5>Jumlah Yang didapatkan</h5>
			</div>
			<div class="col-lg-9">
				<h5><?php echo $JmlCariSpesies; ?> Spesies</h5>
			</div>
		</div>
		<div class="row">
<!-- Perdata tampil		-->
<?php foreach ($CariSpesies as $data) :
	if ($data['stat'] == 'DILINDUNGI') { $alert = 'danger';	}
	else{ $alert = 'success';} ?>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo  base_url().'assets/img/gambar/spesies/'.$data['gbr_spesies']; ?>" width="100px" height="140px">
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4"><b>ILMIAH</b></div>
							<div class="col-lg-8"><?php echo $data['nm_spesies']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-4"><b>UMUM</b></div>
							<div class="col-lg-8"><?php echo $data['nmu_spesies']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<!-- <a href="<?php echo site_url()."/TugasAkhir/LihatDataById/spesies/".$data['id_class'] ?>" class="btn btn-success btn-block tambah">DETAIL</a> -->
								<td><button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#ModalClass'.$data['id_spesies']; ?>">DETAIL</button></td>
							</div>
						</div>
					</div>
				</div>
			</div>
	<div class="modal fade" id="<?php echo 'ModalClass'.$data['id_spesies']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/spesies/".$data['id_spesies'] ?>" class="btn btn-success">DETAIL</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
			</div>
			</div>
		</div>
	</div>			
<?php endforeach; ?>			
<!-- end data -->
		</div>
<!-- endspesies		 -->		
<!-- class	 --> 
		<div class="row mt">
			<div class="col-lg-12">
				<h4>DATA CLASS YANG DITEMUKAN</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<h5>Jumlah Yang didapatkan</h5>
			</div>
			<div class="col-lg-9">
				<h5><?php echo $JmlCariClass; ?> Class</h5>
			</div>
		</div>
		<div class="row">
<!-- Perdata tampil		-->
<?php foreach ($CariClass as $data) : ?>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo  base_url().'assets/img/gambar/class/'.$data['gambar']; ?>" width="100px" height="140px">
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4"><b>ILMIAH</b></div>
							<div class="col-lg-8"><?php echo $data['nama_latin']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-4"><b>UMUM</b></div>
							<div class="col-lg-8"><?php echo $data['nama_umum']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<!-- <a href="<?php echo site_url()."/TugasAkhir/LihatDataById/class/".$data['id_class'] ?>" class="btn btn-success btn-block tambah">DETAIL</a> -->
								<td><button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#ModalClass'.$data['id_class']; ?>">DETAIL</button></td>
							</div>
						</div>
					</div>
				</div>
			</div>
<div class="modal fade" id="<?php echo 'ModalClass'.$data['id_class']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
						<img src="<?php echo  base_url().'assets/img/gambar/class/'.$data['gambar']; ?>" width="180px" height="240px">
						
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
				<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/class/".$data['id_class'] ?>" class="btn btn-success">DETAIL</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
			</div>
			</div>
		</div>
	</div>			
<?php endforeach; ?>			
<!-- end data -->
		</div>
<!-- endclass		 -->
<!-- Ordo	 -->
		<div class="row mt">
			<div class="col-lg-12">
				<h4>DATA ORDO YANG DITEMUKAN</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<h5>Jumlah Yang didapatkan</h5>
			</div>
			<div class="col-lg-9">
				<h5><?php echo $JmlCariOrdo; ?> Ordo</h5>
			</div>
		</div>
		<div class="row">
<!-- Perdata tampil			 -->
<?php foreach ($CariOrdo as $data) : ?>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo  base_url().'assets/img/gambar/ordo/'.$data['gambar']; ?>" width="100px" height="140px">
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4"><b>ILMIAH</b></div>
							<div class="col-lg-8"><?php echo $data['nama_latin']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-4"><b>UMUM</b></div>
							<div class="col-lg-8"><?php echo $data['nama_umum']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<!-- <a href="<?php echo site_url()."/TugasAkhir/LihatDataById/ordo/".$data['id_ordo'] ?>" class="btn btn-success btn-block tambah">DETAIL</a> -->
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#ModalOrdo'.$data['id_ordo']; ?>">DETAIL</button>
							</div>
						</div>
					</div>
				</div>
			</div>
	<div class="modal fade" id="<?php echo 'ModalOrdo'.$data['id_ordo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/ordo/".$data['id_ordo'] ?>" class="btn btn-success">DETAIL</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
			</div>
			</div>
		</div>
	</div>   			
<?php endforeach; ?>			
<!-- end data -->
		</div>
<!-- end Ordo	 -->
<!-- Famili	 -->
		<div class="row mt">
			<div class="col-lg-12">
				<h4>DATA FAMILI YANG DITEMUKAN</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<h5>Jumlah Yang didapatkan</h5>
			</div>
			<div class="col-lg-9">
				<h5><?php echo $JmlCariFamili; ?> Famili</h5>
			</div>
		</div>
		<div class="row">
<!-- Perdata tampil			 -->
<?php foreach ($CariFamili as $data) : ?>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo  base_url().'assets/img/gambar/famili/'.$data['gambar']; ?>" width="100px" height="140px">
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4"><b>ILMIAH</b></div>
							<div class="col-lg-8"><?php echo $data['nama_latin']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-4"><b>UMUM</b></div>
							<div class="col-lg-8"><?php echo $data['nama_umum']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<!-- <a href="<?php echo site_url()."/TugasAkhir/LihatDataById/class/".$data['id_famili'] ?>" class="btn btn-success btn-block tambah">DETAIL</a> -->
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#ModalFamili'.$data['id_famili']; ?>">DETAIL</button>
							</div>
						</div>
					</div>
				</div>
			</div>
<div class="modal fade" id="<?php echo 'ModalFamili'.$data['id_famili']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
						<img src="<?php echo  base_url().'assets/img/gambar/famili/'.$data['gambar']; ?>" width="180px" height="240px">
						
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
				<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/famili/".$data['id_famili'] ?>" class="btn btn-success">DETAIL</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
			</div>
			</div>
		</div>
	</div> 			
<?php endforeach; ?>			
<!-- end data -->
		</div>
<!-- end Famili -->
<!-- Genus	 -->
		<div class="row mt">
			<div class="col-lg-12">
				<h4>DATA GENUS YANG DITEMUKAN</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<h5>Jumlah Yang didapatkan</h5>
			</div>
			<div class="col-lg-9">
				<h5><?php echo $JmlCariGenus; ?> Genus</h5>
			</div>
		</div>
		<div class="row">
<!-- Perdata tampil			 -->
<?php foreach ($CariGenus as $data) : ?>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-4">
						<img src="<?php echo  base_url().'assets/img/gambar/genus/'.$data['gambar']; ?>" width="100px" height="140px">
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4"><b>ILMIAH</b></div>
							<div class="col-lg-8"><?php echo $data['nama_latin']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-4"><b>UMUM</b></div>
							<div class="col-lg-8"><?php echo $data['nama_umum']; ?></div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<!-- <a href="<?php echo site_url()."/TugasAkhir/LihatDataById/genus/".$data['id_genus'] ?>" class="btn btn-success btn-block tambah">DETAIL</a> -->
								<button class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo '#ModalGenus'.$data['id_genus']; ?>">DETAIL</button>
							</div>
						</div>
					</div>
				</div>
			</div>

	<div class="modal fade" id="<?php echo 'ModalGenus'.$data['id_genus']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
				<a href="<?php echo site_url()."/TugasAkhir/LihatDataById/genus/".$data['id_genus'] ?>" class="btn btn-success">DETAIL</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">TUTUP</button>
			</div>
			</div>
		</div>
	</div>			
<?php endforeach; ?>			
<!-- end data -->
		</div>
<!-- end Genus -->
	</section>
</section>
<!--main content end-->
<?php $this->load->view('template/footer.php'); ?>
</section>
<?php $this->load->view('template/scriptbody'); ?>
</body>
</html>
<script type="text/javascript">
	getElementByCari('')
</script>