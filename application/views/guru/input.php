<!DOCTYPE html>
<html>
<head>
	<title>Input Guru</title>
</head>
<body>
	<?php echo form_open('guru/save') ?>
	<?php echo $judul ?>
	<table width="289" border="1">
		<form>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip" id="nip"></td>
			</tr>

			<tr>
				<td>Nama Guru</td>
				<td><input type="text" name="nama" id="nama" placeholder="Masukan Nama Guru"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
				<input type="radio" name="jk" value="L">Laki-Laki
				<br>
  				<input type="radio" name="jk" value="P">Perempuan
  				<br>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email" placeholder="Masukan Email Guru"></td>
			</tr>

			<tr align="center">
				<td><input type="submit" name="button" id="button" value="Simpan"></td>
				<td><input type="reset" name="button2" id="button2" value="Batal"></td>
			</tr>
		</form>
	</table>
	<?php echo form_close() ?>
</body>
</html>