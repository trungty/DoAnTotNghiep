<?php
	require"config.php";
	$noidung=mysqli_query($link,"select * from footer where id='1'");
	$row=mysqli_fetch_array($noidung);
	echo $row['noidung'];
?>