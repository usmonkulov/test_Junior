<?php

	include "connect.php";

	if(isset($_GET['id'])){
		$id = $_GET['id'];
 
		$sql = "DELETE FROM mijozlar WHERE id = $id";
		$result = mysqli_query($connect, $sql);

		if($result){
			header("Location: index.php");
		}
	}

?>