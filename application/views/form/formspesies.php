<?php
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Form Data Famili.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	td{
		text-align: center;
		font-weight: bold;
	}
</style>
</head>
<body>
	<table border="1" width="100%" >
		<thead>
			<tr>
				<td>NAMA LATIN SPESIES</td>
				<td>NAMA UMUM SPESIES</td>
				<td>KODE GENUS</td>
				<td>KODE KATEGORI KELANGKAAN</td>
				<td>HABITAT</td>
				<td>KARAKTERISTIK</td>
				<td>STATUS DILINDUNGI</td>
			</tr>
		</thead>
		<tbody>
			<?php for ($i=0; $i < 100 ; $i++) { ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>DILINDUNGI / TIDAK DILINDUNGI</td>
			</tr>	
			<?php } ?>
		</tbody>
	</table>
</body>
</html>