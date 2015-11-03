<?php

 	if(isset($_POST["add"]))
 	{
 		include('config.php');

 		$No_KTP = $_POST['no_KTP'];
		$Nama = $_POST['nama']; 		
		$Username = $_POST['username'];
		$Password = $_POST['password'];

 		$sql = mysql_query("INSERT INTO rfq
 		VALUES ('$No_KTP','$Nama','$Username','
 			$Password')",$con) or die (mysql_error());			

 
}
?>
