<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<center>
		<h3>Data User</h3>
		<table border="1" cellpadding="5">
			<form method="">
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>NIM</th>
				<th>Kelas</th>
				<th>Hobi</th>
				<th>Genre Film</th>
				<th>Tempat Wisata</th>
				<th>Tanggal Lahir</th>

				<?php
				while($data = mysql_fetch_array($sql)){
					echo "<tr>";
					echo"<td>".$data['nama_depan']."</td>";
					echo"<td>".$data['nama_belakang']."</td>";
					echo"<td>".$data['nim']."</td>";
					echo"<td>".$data['kelas']."</td>";
					echo"<td>".$data['hobi']."</td>";
					echo"<td>".$data['genre']."</td>";
					echo"<td>".$data['tempat_wisata']."</td>";
					echo"<td>".$data['Tanggal_lahir']."</td>";
				}
				?>
			</form>
		</table>
	</center>

</body>
</html>

<?php


?>