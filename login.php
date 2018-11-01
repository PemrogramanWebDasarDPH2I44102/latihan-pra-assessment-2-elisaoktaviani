<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<center>
		<h1>Welcome to Login Page</h1>
		<table>
			<form method="POST" action="" enctype="multipart/form-data">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NIP</td>
					<td>:</td>
					<td><input type="password" name="nip"></td>
				</tr>
				<tr>
					<td colspan="3"><center><br><input type="submit" name="submit" value="Login"></center></td>
				</tr>
				<tr>
					<br>
					<td colspan="3"><center><a href="inputpaket.php"></a></center></td>
				</tr>
			</form>
		</table>
	</center>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
	 	$nip = $_POST['nip'];
		$db = mysqli_connect('localhost', 'root', '', 'databasepaket');
		if ($nip == is_numeric($nip)) {
					$query = mysqli_query($db,"SELECT * FROM karyawan WHERE nip = '".$nip."' AND nama = '".$nama."'");
					if (mysqli_fetch_row($query)) {
						$_SESSION['nip'] = $nip;
						echo "<script languange = 'javascript'>alert('Login Success!');
 						document.location=('inputpaket.php');</script>";
					}
					else{
						echo "<script languange = 'javascript'>alert('Username atau Password salah');
 						document.location=('Login.php');</script>";
 					}
 				}
 			}
?>