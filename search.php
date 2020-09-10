<?php
	include "connect.php";

	if (isset($_GET['q']) AND !empty($_GET['q'])) {
		$q = $_GET['q'];
	} else {
		header("Location: index.php");
	}

	$sql = "SELECT * FROM `mijozlar` WHERE `telefon_raqami` LIKE '%$q%'";
	$result = mysqli_query($connect, $sql);
?>
<link rel="stylesheet" type="text/css" href="../css/min.css">
<form method="GET" action="search.php">
	<label>
		<input class="form-control" type="search" name="q" placeholder="Qidiruv...">
	</label>
	<span>
		<button class="btn btn-primary" type="submit">Qidirish</button>
	</span>
</form>
<?php
	echo "<a href='create/form.php'><button style='margin-bottom:5px' class='btn btn-success'>Yaratish</button></a>";
	echo "<table border=1 width=500>";
	echo "
	<thead>
		<tr>
			<th>Familyalar</th>
			<th>Ismlar</th>
			<th>Tug'ilgan kunlar</th>
			<th>Telefon raqamlari</th>
			<th>#</th>
		</tr>
	</thead>";
	while ($a = mysqli_fetch_assoc($result)) {
		echo "<tbody>";
			echo "<tr>";
				echo "<td>".$a['familyasi']."</td>";
				echo "<td>".$a['ismi']."</td>";
				echo "<td>".$a['tugulgan_kuni']."</td>";
				echo "<td>".$a['telefon_raqami']."</td>";
				echo "
				<td>
					<a href='update/form.php?id=".$a['id']."'><button style='margin:2px' class='btn btn-info'>Tahrirlash</button></a>
					<a href='delete.php?id=".$a['id']."'><button style='margin:2px' class='btn btn-danger'>O`chirish</button></a>
				</td>";
			echo "</tr>";
		echo "</tbody>";
	}
	echo "</table>"

?>