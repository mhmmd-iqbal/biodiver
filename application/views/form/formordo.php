<?php
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Form Data Ordo.xls");
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
				<td>NAMA LATIN ORDO</td>
				<td>NAMA UMUM ORDO</td>
				<td>KODE CLASS</td>
				<td>CIRI-CIRI</td>
				<td>KETERANGAN</td>
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
			</tr>	
			<?php } ?>
		</tbody>
	</table>
</body>
</html>