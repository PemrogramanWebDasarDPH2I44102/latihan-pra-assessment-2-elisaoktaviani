<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Aplikasi Penerimaan Paket Pos </h2>
	<form method="POST">
		<table>
			<tr>
				<td>Nama:</td>
				<td><input type="date" name="nama"></td>
			</tr>
			<tr>
				<td>Unit:</td>
				<td><input type="text" name="unit"></td>
			</tr>
			<tr>
				<td>No Ktp:</td>
				<td><input type="text" name="noktp">
			</tr>
			<tr>
			<td><input type="submit" name="submit" value="Kirim"></td>
		</tr>
</table>
</form>
</body>
</html>

<?php
$db = mysqli_connect('localhost','root','','databasepaket');
 
 if (isset($_POST['submit'])) {
 	$nama = $_POST['nama'];
 	$unit = $_POST['unit'];
 	$noktp = $_POST['noktp'];

 	$insert = "INSERT INTO pemghuni VALUES('$nama','$unit','$noktp')";
		$sql = mysqli_query($databasepaket,$insert);

		if ($sql) {
			echo "data berhasil diinputkan";
			header("location:.php");
		}else{
			echo "Maaf anda gagal menginputkan data";
			header("Location:inputpenghuni.php");
		}

	}

?>