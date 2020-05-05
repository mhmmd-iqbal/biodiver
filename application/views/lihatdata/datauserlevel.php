<html>
<head>
<?php $this->load->view('template/head'); ?>
<style type="text/css">
 
</style>
</head>
<body>
<section id="container" >
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper site-min-height">
			<h3>Lihat User Level</h3>
			<p>Data User Level merupakan Level Admin didalam Sistem</p>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<table class="table table-bordered">
							<tr>
								<th>No</th>
								<th>Level</th>
								<th>Keterangan</th>
								<th>Aksi</th>
								
							</tr>
<?php 
$no = 1;
foreach($leveluser as $data):
?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama_level'];  ?></td>
								<td><?php echo $data['ket']; ?></td>
								<td><a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
							</tr>							
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


