<?php
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Kode Kategori Kelangkaan Satwa.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="100%">
	<caption>KODE KATEGORI KELANGKAAN BERDASARKAN IUCN REDLIST</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kategori</th>
				<th colspan="2">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php $no =1; foreach ($kategori as $data ) :?>
			<tr>
				<td align="center"><?php echo $no; ?> </td>
				<td align="center"><?php echo $data['id_kategori']; ?> </td>
				<td><?php echo $data['nama']; ?> </td>
				<td><?php echo $data['umum']; ?> </td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
</body>
</html>