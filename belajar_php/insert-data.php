<?php
	include "koneksi.php";

	$sql = "INSERT INTO user
	(
		id,
		nama,
		role,
		availability,
		age,
		location,
		years_expereince,
		email
) VALUE 
(
	'1',
	'Irfan Oktafian',
	'Enterpreneur',
	'Full Time',
	'17',
	'Konoha',
	'3',
	'irfanoktafian903@gmail.com'
)";

	if($koneksi->query($sql) == TRUE){
		echo "Insert data telah berhasil";
	} else {
		echo "Insert data gagal";
	}
?>
