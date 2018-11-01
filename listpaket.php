<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'databasepaket');
	$tanggaldatang = $_SESSION["tanggaldatang"];
	$query = "SELECT * FROM paket WHERE tanggaldatang = $tanggaldatang";
 	$view = mysqli_query($db,$query);
?>