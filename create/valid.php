<?php

	include "../connect.php";

	if (isset($_POST['submit'])) {
		if (empty($_POST['familyasi'])) {
			echo "Familyasi bo'sh bo'lmasligi kerak";
			die();
		} else {
			$familyasi = $_POST['familyasi'];
			if (!preg_match("/^[a-zA-Z0-9'`’‘]*$/",$familyasi)) {
				echo "Familyasiga faqatgina `a-zA-Z0-9` shu ishoralarni berishingiz mumkin";
				die();
			}
		}
		if (empty($_POST['ismi'])) {
			echo "Ismi bo'sh bo'lmasligi kerak";
			die();
		} else {
			$ism = $_POST['ismi'];
			if (!preg_match("/^[a-zA-Z0-9'`’‘]*$/",$ismi)) {
				echo "Ismiga faqatgina `a-zA-Z0-9` shu ishoralarni berishingiz mumkin";
				die();
			}
		}
		if (empty($_POST['tugulgan_kuni'])) {
			echo "Tug'ulgan kuni bo'sh bo'lmasligi kerak";
			die();
		} else {
			$tugulgan_kuni = $_POST['tugulgan_kuni'];
			if (!preg_match("/^[0-9.]*$/",$tugulgan_kuni)) {
				echo "Tug'ulgan kuni faqatgina `xx.xx.xxxx` shu formatda berishi mumkin";
				die();
			}
		}
		if (empty($_POST['telefon_raqami'])) {
			echo "Telefon raqami bo'sh bo'lmasligi kerak";
			die();
		} else {
			$telefon_raqami = $_POST['telefon_raqami'];
			if (!preg_match("/^[0-9+]*$/",$telefon_raqami)) {
				echo "Telefon raqamini faqatgina `+998 XXX XX XX` shu formatda berishingiz mumkin";
				die();
			}
		}

		$sql = "INSERT INTO mijozlar (familyasi, ismi, tugulgan_kuni, telefon_raqami) VALUES('$familyasi', '$ism', '$tugulgan_kuni', '$telefon_raqami')";
				
				$result = mysqli_query($connect, $sql);
				if($result){
					header("Location: ../index.php");
				} else {
					echo "malumot tushirilmadi";
				}
	}
?>