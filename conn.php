<?php

$conn=mysqli_connect("localhost","root","","mahasiswa");


function insert($nama,$nim,$tanggal,$jeniskelamin,$prodi,$fakultas,$asal,$moto)
{
	Global $conn;
	mysqli_query($conn,"INSERT INTO profl VALUES('$nama','$nim','$tanggal','$jeniskelamin','$prodi','$fakultas','$asal','$moto')");

}
function cek($nim){
		Global $conn;
	$query=mysqli_query($conn,"SELECT * FROM profl WHERE nim='$nim'");
	$hasil=mysqli_num_rows($query);
	if ($hasil>0) {
		# code...

		return false;
	}
	else{
		return true;
	}

}

function cari($nim)
{
	# code...
	Global $conn;
	$query=mysqli_query($conn,"SELECT * FROM profl WHERE nim like '%$nim'");
	$hasil=mysqli_num_rows($query);
	$data =mysqli_fetch_array($query);
	if ($hasil>0) {
		# code...
		return $data;
 
		
	}
		
	else{
		return false;
	}
	}

	function get()
	{
		# code...
		Global $conn;
		$data=[];
		$query=mysqli_query($conn,"SELECT * FROM profl ");
		$data =mysqli_fetch_array($query);
		return $data;

	}

	function del($nim)
	{
		# code...
		Global $conn;
		mysqli_query($conn,"DELETE * FROM profl WHERE nim='$nim' ");
		

	}










?>