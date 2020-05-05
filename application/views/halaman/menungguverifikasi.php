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
		<p class="alert alert-warning">Harap menunggu hasil verifikasi dari BKSDA.</p>
		<p>Apabila data yang dibuat tidak benar, anda dapat menghapus data yang anda tambahkan</p>
		<div class="row">
			<div class="col-lg-12">
				<div class="row tabmenu">
					<div class="col-md-4">
						<p>Jumlah Data Class yang belum di verifikasi : <?php echo $jmltmpclass; ?></p>
              		</div>
				</div>
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
<?php if ($institusi == $data['id_institusi']) : ?>
							<td class="text-center">
								<a href="<?php echo site_url() ?>/C_CUD/deltmp/class/<?php echo $data['id'] ?>" class="btn btn-danger"><span class="fa fa-times"></span></a>
								<button class="btn btn-info" data-toggle="modal" data-target="#modalclass<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button>
							</td>
<?php else : ?>							
							<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#modalclass<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button></td>
<?php endif; ?>							
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
<!-- ORDO			 -->
			<div class="col-lg-12">
				<div class="row tabmenu">
					<div class="col-md-4">
						<p>Jumlah Data ordo yang belum di verifikasi : <?php echo $jmltmpordo; ?></p>
              		</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th colspan="2">ordo</th>
							<!-- <th>Tanggal Input</th> -->
							<th>Institusi</th>
							<th class="text-center">Aksi</th>
						</tr>
<?php $no=1; foreach ($tmpordo as $data ) : ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['latin']; ?></td>
							<td><?php echo $data['umum'] ?></td>
							<!-- <td></td> -->
							<td><?php echo $data['nama']; ?></td>
<?php if ($institusi == $data['id_institusi']) : ?>
							<td class="text-center">
								<a href="<?php echo site_url() ?>/C_CUD/deltmp/ordo/<?php echo $data['id'] ?>" class="btn btn-danger"><span class="fa fa-times"></span></a>
								<button class="btn btn-info" data-toggle="modal" data-target="#modalordo<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button>
							</td>
<?php else : ?>							
							<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#modalordo<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button></td>
<?php endif; ?>							
						</tr>
<div class="modal fade" id="modalordo<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['latin']; ?></h4>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['umum']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-5"><img src="<?php echo  base_url().'assets/img/gambar/ordo/'.$data['gmb']; ?>" width="200px" height="240px"></div>
					<div class="col-lg-7">
						<div class="row">
							<div class="col-md-4">Institusi</div>
							<div class="col-md-8"><?php echo $data['nama']; ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">Class</div>
							<div class="col-md-8"><?php echo $data['nama_latin']; ?></div>
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
<!-- FMILI			 -->
			<div class="col-lg-12">
				<div class="row tabmenu">
					<div class="col-md-4">
						<p>Jumlah Data famili yang belum di verifikasi : <?php echo $jmltmpfamili; ?></p>
              		</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th colspan="2">Famili</th>
							<!-- <th>Tanggal Input</th> -->
							<th>Institusi</th>
							<th class="text-center">Aksi</th>
						</tr>
<?php $no=1; foreach ($tmpfamili as $data ) : ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['latin']; ?></td>
							<td><?php echo $data['umum'] ?></td>
							<!-- <td></td> -->
							<td><?php echo $data['nama']; ?></td>
<?php if ($institusi == $data['id_institusi']) : ?>
							<td class="text-center">
								<a href="<?php echo site_url() ?>/C_CUD/deltmp/famili/<?php echo $data['id'] ?>" class="btn btn-danger"><span class="fa fa-times"></span></a>
								<button class="btn btn-info" data-toggle="modal" data-target="#modalfamili<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button>
							</td>
<?php else : ?>							
							<td class="text-center"><button class="btn btn-info" data-toggle="modalfamili" data-target="#modal<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button></td>
<?php endif; ?>							
						</tr>
<div class="modal fade" id="modalfamili<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['latin']; ?></h4>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['umum']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-5"><img src="<?php echo  base_url().'assets/img/gambar/famili/'.$data['gmb']; ?>" width="200px" height="240px"></div>
					<div class="col-lg-7">
						<div class="row">
							<div class="col-md-4">Institusi</div>
							<div class="col-md-8"><?php echo $data['nama']; ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">Ordo</div>
							<div class="col-md-8"><?php echo $data['nama_latin']; ?></div>
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
<!-- END FAMILI			 -->
<!-- GENUS -->
			<div class="col-lg-12">
				<div class="row tabmenu">
					<div class="col-md-4">
						<p>Jumlah Data genus yang belum di verifikasi : <?php echo $jmltmpgenus; ?></p>
              		</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th colspan="2">Famili</th>
							<!-- <th>Tanggal Input</th> -->
							<th>Institusi</th>
							<th class="text-center">Aksi</th>
						</tr>
<?php $no=1; foreach ($tmpgenus as $data ) : ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['latin']; ?></td>
							<td><?php echo $data['umum'] ?></td>
							<!-- <td></td> -->
							<td><?php echo $data['nama']; ?></td>
<?php if ($institusi == $data['id_institusi']) : ?>
							<td class="text-center">
								<a href="<?php echo site_url() ?>/C_CUD/deltmp/genus/<?php echo $data['id'] ?>" class="btn btn-danger"><span class="fa fa-times"></span></a>
								<button class="btn btn-info" data-toggle="modal" data-target="#modalgenus<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button>
							</td>
<?php else : ?>							
							<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#modalgenus<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button></td>
<?php endif; ?>							
						</tr>
<div class="modal fade" id="modalgenus<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: #228B22;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['latin']; ?></h4>
				<h4 class="modal-tittle" style="text-align: center; color: white"><?php echo $data['umum']; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-5"><img src="<?php echo  base_url().'assets/img/gambar/genus/'.$data['gmb']; ?>" width="200px" height="240px"></div>
					<div class="col-lg-7">
						<div class="row">
							<div class="col-md-4">Institusi</div>
							<div class="col-md-8"><?php echo $data['nama']; ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">Famili</div>
							<div class="col-md-8"><?php echo $data['nama_latin']; ?></div>
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
<!-- END GENUS			 -->
			<div class="col-lg-12">
				<div class="row tabmenu">
					<div class="col-md-4">
						<p>Jumlah Data spesies yang belum di verifikasi : <?php echo $jmltmpspesies; ?></p>
              		</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th colspan="2">Famili</th>
							<!-- <th>Tanggal Input</th> -->
							<th>Institusi</th>
							<th>Keterangan</th>
							<th class="text-center">Aksi</th>
						</tr>
<?php $no=1; foreach ($tmpspesies as $data ) : ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['latin']; ?></td>
							<td><?php echo $data['umum'] ?></td>
							<td><?php echo $data['nama']; ?>  </td>
							<td>
								<?php if (isset($data['komentar'])) :?>
									<div class="label label-danger">Evaluasi Kembali</div>
								<?php else:?>
									<div class="label label-primary">Belum Dievaluasi</div>
								<?php endif; ?>
							</td>
<?php if ($institusi == $data['id_institusi']) : ?>
							<td class="text-center">
								<a href="<?php echo site_url() ?>/C_CUD/deltmp/spesies/<?php echo $data['id'] ?>" class="btn btn-danger"><span class="fa fa-times"></span></a>
								<button class="btn btn-info" data-toggle="modal" data-target="#modalspesies<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button>
							</td>
<?php else : ?>							
							<td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#modalspesies<?php echo $data['id'] ?>"><span class="fa fa-search"></span></button></td>
<?php endif; ?>							
						</tr>
<div class="modal fade" id="modalspesies<?php echo $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					<?php if (isset($data['komentar'])): ?>
						<div class="alert alert-danger">
							<h5 class="text-center">Data Perlu Di Evaluasi Kembali Oleh <?php echo $data['nama'] ?></h5>
						</div>
					<?php endif ?>
						<label>KOMENTAR DARI ADMIN</label>
						<h4><b><?php echo $data['komentar'] ?></b></h4>
					</div>
				</div>
			</div>
			<div class="modal-footer">
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