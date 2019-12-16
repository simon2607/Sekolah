<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
</head>
<body>
	<?php echo anchor('guru/input','Tambah Baru'); ?>
		<table width='600' border="1">
						<tr>
							<td>NIP</td>
							<td>Nama Guru</td>
							<td>Jenis Kelamin</td>
							<td>Email</td>
							<td colspan="2" style="text-align: center">Aksi</td>
						</tr>

						 <?php foreach ($tampil as $key => $value) { ?>  <!-- untuk menampilkan database dengan perulangan -->
								
						<tr> <!-- untuk menapilkan database-->
							<td>
									<?php echo 	$value->nip ?> 
							</td> 

							 <td>
									<?php echo 	$value->nama ?>
							 </td>

							 <td>
									<?php echo 	$value->jk ?>
							 </td>

							 <td>
									<?php echo 	$value->email ?>
							 </td>


							<td>
									<?php echo anchor('guru/delete/' .$value->nip,'Hapus'); ?> 
									<?php echo anchor('guru/edit/' .$value->nip,'Edit'); ?>
							</td>

						</tr>

					<?php } ?>

		</table>
</body>
</html>