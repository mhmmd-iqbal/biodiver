<?php 
	$session_nama = $this->session->userdata('nama');
	 $disabled ='';
	 if (($level == 'bksda')||($level == 'lsm')) {
	 	$disabled = '';
	 }
	 else{
	 	$disabled= 'disabled';
	 }
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
		<h3>Lihat Data</h3>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php if(isset($session_nama)): ?>
				<p>Anda telah Login sebagai <?php echo $session_nama ?></p>
				<?php endif; ?>
				<p>Berikut Data-Data yang dapat dilihat oleh anda : </p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8">
				<table class="table table-hover">
<?php if ($level=='bksda') : ?>	
					<tr>
						<td> DATA LEVEL USER </td>
						<td><?php echo $leveluser." DATA" ; ?></td>
						<td colspan="2" class="tambah"><a href="<?php echo site_url() ?>/TugasAkhir/LihatData/leveluser" class="btn btn-success btn-block">LIHAT</a></td>
						<!-- <td class="tambah"><a href="#" class="btn btn-success btn-block">TAMBAH</a></td> -->
					</tr>			
					<tr>
						<td> DATA INSTITUSI </td>
						<td><?php echo $institusi." DATA" ; ?></td>
						<td class="tambah"><a href="<?php echo site_url() ?>/TugasAkhir/LihatData/institusi" class="btn btn-success btn-block">LIHAT</a></td>
						<td class="tambah"><a href="<?php echo site_url() ?>/C_CUD/create/institusi" class="btn btn-success btn-block" <?php echo $disabled; ?> >TAMBAH</a></td>
					</tr>
<?php endif; ?>
					<tr>
						<td> DATA KATEGORI KELANGKAAN </td>
						<td><?php echo $kelangkaan. " DATA" ; ?></td>
<?php if(($level=='bksda')): ?>
						<td class="tambah"><a href="<?php echo site_url('/TugasAkhir/LihatData/kelangkaan') ?>" class="btn btn-success btn-block">LIHAT</a></td>
						<td class="tambah"><a href="" class="btn btn-success btn-block">TAMBAH</a></td>
<?php else : ?>
						<td class="tambah" colspan="2"><a href="<?php echo site_url('/TugasAkhir/LihatData/kelangkaan') ?>" class="btn btn-success btn-block">LIHAT</a></td>
					</tr>
<?php endif; ?>					
					<tr>
						<td> DATA CLASS </td>
						<td><?php echo $class." DATA" ; ?></td>
						<td class="tambah"><a href="<?php echo site_url() ?>/TugasAkhir/LihatData/class" class="btn btn-success btn-block">LIHAT</a></td>
						
<?php if(($level=='bksda')||($level=='lsm')): ?>
						<td class="tambah"><a href="<?php echo site_url() ?>/C_CUD/create/class" class="btn btn-success btn-block">TAMBAH</a></td>
<?php endif; ?>						
					</tr>
					<tr>
						<td> DATA ORDO </td>
						<td><?php echo $ordo." DATA" ; ?></td>
						<td class="tambah"><a href="<?php echo site_url() ?>/TugasAkhir/LihatData/ordo" class="btn btn-success btn-block">LIHAT</a></td>
<?php if(($level=='bksda')||($level=='lsm')): ?>
						<td class="tambah"><a href="<?php echo site_url() ?>/C_CUD/create/ordo" class="btn btn-success btn-block">TAMBAH</a></td>
<?php endif; ?>						
					</tr>
					<tr>
						<td> DATA FAMILI </td>
						<td><?php echo $famili." DATA" ; ?></td>
						<td class="tambah"><a href="<?php echo site_url() ?>/TugasAkhir/LihatData/famili" class="btn btn-success btn-block">LIHAT</a></td>
<?php if(($level=='bksda')||($level=='lsm')): ?>
						<td class="tambah"><a href="<?php echo site_url() ?>/C_CUD/create/famili" class="btn btn-success btn-block">TAMBAH</a></td>
<?php endif; ?>						
					</tr>
					<tr>
						<td> DATA GENUS </td>
						<td><?php echo $genus." DATA" ; ?></td>
						<td class="tambah"><a href="<?php echo site_url() ?>/TugasAkhir/LihatData/genus" class="btn btn-success btn-block">LIHAT</a></td>
<?php if(($level=='bksda')||($level=='lsm')): ?>
						<td class="tambah"><a href="<?php echo site_url() ?>/C_CUD/create/genus" class="btn btn-success btn-block">TAMBAH</a></td>
<?php endif; ?>						
					</tr>
					<tr>
						<td> DATA SPESIES </td>
						<td><?php echo $spesies." DATA" ; ?></td>
						<td class="tambah"><a href="<?php echo site_url() ?>/TugasAkhir/LihatData/spesies" class="btn btn-success btn-block">LIHAT</a></td>
<?php if(($level=='bksda')||($level=='lsm')): ?>
						<td class="tambah"><a href="<?php echo site_url() ?>/C_CUD/create/spesies" class="btn btn-success btn-block">TAMBAH</a></td>
<?php endif; ?>						
					</tr>
				</table>
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