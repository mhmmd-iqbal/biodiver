<html>
<head>
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p style="text-align: right;">Tanggal Laporan : <?php echo namahari($nohari).", ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center">TABEL AKTIVITAS INSTANSI</h4>
				<h5 class="text-center">Dari Tanggal <?php echo date('d-m-Y', strtotime($date['datefrom'])) ; ?> Sampai Dengan Tanggal <?php echo date('d-m-Y', strtotime($date['dateto'])); ?></h5>
				<table class="table table-bordered table-hover">
					<thead>	
					<tr style="background: #5cb85c; color: white">
						<th class="text-center">No</th>
						<th class="text-center">Kegiatan</th>
						<th class="text-center">Tanggal dan Waktu Kegiatan</th>
						<th class="text-center">Instansi yang Melakukan</th>
					</tr>
					</thead>
					<tbody>	
<?php $no=1; 
	foreach ($log as $data): 
		if (($date['datefrom'] <= $data['tanggal'])&&($date['dateto'] >= $data['tanggal'])) :
?>
					<tr>
						<td class="text-center"><?php echo $no; ?></td>
						<td><?php echo $data['kegiatan'] ?></td>
						<td class="text-center"><p><?php echo date('d-m-Y', strtotime($data['tanggal']))?></p><p><?php echo $data['waktu'] ?></p></td>
						<td><?php echo $data['institusi'] ?></td>
					</tr>
<?php $no++; 
		endif;
	endforeach; ?>					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
