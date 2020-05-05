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
				<h4 class="text-center">DATA SPESIES DI ACEH</h4>
				<table class="table table-bordered table-hover">
					<thead>	
					<tr style="background: #5cb85c; color: white">
						<th class="text-center">No</th>
						<th class="text-center" colspan="2">Spesies</th>
						<th class="text-center">Kelompok</th>
						<th class="text-center" colspan="2">Status</th>
					</tr>
					</thead>
					<tbody>	
<?php $no=1; foreach ($spesies as $data): ?>
					<tr>
						<td class="text-center"><?php echo $no; ?></td>
						<td><?php echo $data['nmu_spesies']; ?></td>
						<td><?php echo $data['nm_spesies']; ?></td>
						<td class="text-center"><?php echo $data['nm_class']; ?></td>
						<td><?php echo $data['nmu_kategori']; ?></td>
						<td><?php echo $data['singkatan']; ?></td>
					</tr>
<?php $no++; endforeach; ?>						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
