<?php
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Kode Takson Class.xls");
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
	<caption>KODE TAKSONOMI CLASS ACEH BIODIVERSITY</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Class</th>
				<th colspan="2">Nama Class</th>
			</tr>
		</thead>
		<tbody>
			<?php $no =1; foreach ($class as $data ) :?>
			<tr>
				<td align="center"><?php echo $no; ?> </td>
				<td align="center"><?php echo $data['id_class']; ?> </td>
				<td><?php echo $data['nama_latin']; ?> </td>
				<td><?php echo $data['nama_umum']; ?> </td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
</body>
</html>