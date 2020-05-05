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
				<h4 class="text-center">TABEL LEMBAGA SWADAYA MASYARAKAT</h4>
				<table class="table table-bordered table-hover">
					<thead>	
					<tr style="background: #5cb85c; color: white">
						<th class="text-center">No</th>
						<th class="text-center">Instansi</th>
						<th class="text-center">Alamat</th>
					</tr>
					</thead>
					<tbody>	
<?php 
$no=1; 
foreach ($instansi as $data): 
if ($data['nama_level'] =='lsm') :
?>
					<tr>
						<td class="text-center"><?php echo $no;?></td>
						<td><?php echo $data['nama'];?></td>
						<td><?php echo $data['alamat'];?></td>
					</tr>
<?php 
$no++; 
endif;
endforeach; ?>					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
