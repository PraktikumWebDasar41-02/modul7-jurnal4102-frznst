

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<table>
	
			<tr><td>Cari nim </td><td><input type="text" name="nim"></td></tr>
			
			<tr><td></td><td><input type="submit" name="submit" value="submit"> </td></tr>
		</table>


	</form>

</body>
</html>

<?php
include('conn.php');

if(isset($_POST['submit'])){
	$nim=$_POST['nim'];
	if(is_numeric($nim)==false){
				 echo"<script>alert('nim harus angka')</script>";
			}
			else{
	$data= cari($nim);
	if($data!=false){
		//print_r($data);
echo"<table border='1'>";
		echo "<tr><td>Nama :</td><td>".$data['nama']."</td></tr><br>";
		echo "<tr><td>Nim :</td><td>".$data['nim']."</td></tr>";
		echo "<tr><td>Tanggal Lahir :</td><td>".$data['tanggal']."</td></tr>";
		echo "<tr><td>Jenis Kelamin :</td><td>".$data['jk']."</td></tr>";
		echo "<tr><td>Prodi :</td><td>".$data['prodi']."</td></tr>";
		echo "<tr><td>Fakultas :</td><td>".$data['fakultas']."</td></tr>";
		echo "<tr><td>Asal :</td><td>".$data['asal']."</td></tr>";
		echo "<tr><td>Moto :</td><td>".$data['moto']."</td></tr>";
echo"</table>";

	}
	else{
		 echo"<script>alert('Data  kosong')</script>";
	}


}
}


?>