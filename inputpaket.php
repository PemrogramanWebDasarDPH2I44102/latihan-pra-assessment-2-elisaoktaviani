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
				<td>Tanggal Datang:</td>
				<td><input type="date" name="tanggaldatang"></td>
			</tr>
			<tr>
				<td>Sasaran Penghuni:</td>
				<td><select name="sasaran">
						<option value="Elisa">Elisa</option>
						<option value="Della">Della</option>
						<option value="Ryan">Ryan</option>
						<option value="Hasby">Hasby</option>
					</select></td>
			</tr>
			<tr>
				<td>Penerima:</td>
				<td><input type="text" name="penerima">
			</tr>
			<tr>
				<td>Isi Paket:</td>
				<td><input type="text" name="isispaket"></td>
			</tr>
			<tr>
				<td>Tanggal Ambil:</td>
				<td><input type="date" name="tanggalambil"></td>
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
 	$tanggaldatang = $_POST['tanggaldatang'];
 	$sasaran = $_POST['sasaran'];
 	$penerima = $_POST['penerima'];
 	$isipaket = $_POST['isipaket'];
 	$tanggaldatang = $_POST['tanggalambil'];

 	$insert = "INSERT INTO dataprofil VALUES('$tanggaldatang','$sasaran','$penerima','$isipaket','$tanggalambil')";
		$sql = mysqli_query($databasepaket,$insert);

		if ($sql) {
			echo "data berhasil diinputkan";
			header("location:inputpenghuni.php");
		}else{
			echo "Maaf anda gagal menginputkan data";
			header("Location:inputpaket.php");
		}

	}

?>