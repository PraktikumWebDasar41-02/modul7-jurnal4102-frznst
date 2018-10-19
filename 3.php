

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<table>
	
			<tr><td>Hapus data </td><td><input type="text" name="nim" placeholder="Masukan nim"></td></tr>
			
			<tr><td></td><td><input type="submit" name="submit" value="submit"> </td></tr>
		</table>


	</form>

</body>
</html>
<?php
include('conn.php');
$data = get();
print_r($data);

echo "<table>";
echo "</table>";



if(isset($_POST['submit'])){
	$nim=$_POST['nim'];
	if(is_numeric($nim)==false){
				 echo"<script>alert('nim harus angka')</script>";
			}
			else{
	del($nim);
	}



}



?>