<html>
<head>
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p style="text-align: right;">Tanggal Cetak : <?php echo namahari($nohari).", ".$tgl." ".namabulan($bln)." ".$thn;  ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4 class="text-center">SATWA ACEH YANG DILINDUNGI</h4>
				<p class="text-center">BERDASARKAN PERATURAN MENTERI LINGKUNGAN HIDUP DAN KEHUTANAN REPUBLIK INDONESIA</p>
				<p class="text-center">NOMOR P.20/MENLHK/SETJEN/KUM.1/6/2018</p>
				<table class="table table-bordered">
<?php foreach ($class as $data2) { ?>
					<thead>	
					<tr style="background: #5cb85c; color: white">
						<th class="text-center">No</th>
						<th class="text-center" colspan="2">Spesies</th>
						<th class="text-center" colspan="2">Status</th>
					</tr>
					<tr>
						<th></th>
						<th colspan="4" class="text-uppercase"><b><?php echo $data2['nama_latin'] ?></b></th>
					</tr>
					</thead>
					<tbody>	
<?php $no=1; foreach ($spesies as $data): 
	if($data['stat'] == 'DILINDUNGI') :
		if($data['nm_class'] == $data2['nama_latin']) :
?>
					<tr>
						<td class="text-center"><?php echo $no; ?></td>
						<td><?php echo $data['nmu_spesies']; ?></td>
						<td><?php echo $data['nm_spesies']; ?></td>
						<td><?php echo $data['nmu_kategori']; ?></td>
						<td class="text-center"><?php echo $data['singkatan']; ?></td>
					</tr>
<?php 
	$no++; 
		endif;	
	endif; 
endforeach; ?>						
					</tbody>
<?php } ?>					
				</table>
			</div>
		</div>
	</div>
</body>
</html>
