<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<table>
		<h2>Create User</h2>
		<form method="POST">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>

			<tr>
				<td>Re-type Password</td>
				<td><input type="text" name="repassword"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="newData.php">Isi data diri</a></td>
			</tr>
			
		</form>
	</table>

</body>
</html>

<?php

session_start();
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$cek = "INSERT INTO user VALUES('$username', $password, '$email')";
	$sql = mysqli_query($con,$cek);
	if($sql){
		echo "Berhasil";
	}else{
		echo "Gagal";
	}
}

?>