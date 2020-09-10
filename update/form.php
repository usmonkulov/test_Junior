<?php

	include "../connect.php";

	$sql = "SELECT * FROM mijozlar where id = ".$_GET['id'];

	$result = mysqli_query($connect, $sql);

	while($a = mysqli_fetch_assoc($result)){
		$id = $a['id'];
		$familyasi = $a['familyasi'];
		$ismi = $a['ismi'];
		$tugulgan_kuni = $a['tugulgan_kuni'];
		$telefon_raqami = $a['telefon_raqami'];

	}

?>
<link rel="stylesheet" type="text/css" href="../css/min.css">
<div style="margin: 15px">
<h1><?=$familyasi.' '.$ismi?>ni tahrirlash</h1>
<form action="valid.php" method="POST">

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	<div class="form-group">
		<label class="control-label" for="familyasi"> Familyasi</label><br>
		<input class="form-control" type="text" name="familyasi" id="familyasi" value="<?php echo $familyasi; ?>"><br>
	</div>

	<div class="form-group">
		<label class="control-label" for="ismi"> Ismi</label><br>
		<input class="form-control" type="text" name="ismi" id="ismi" value="<?php echo $ismi; ?>"><br>
	</div>

	<div class="form-group">
		<label class="control-label" for="tugulgan_kuni"> Tug'ilgan kuni</label><br>
		<input class="form-control" type="text" name="tugulgan_kuni" id="tugulgan_kuni" value="<?php echo $tugulgan_kuni; ?>"><br>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="telefon_raqami"> Telefon raqami</label><br>
		<input class="form-control" type="text" name="telefon_raqami" id="telefon_raqami" value="<?php echo $telefon_raqami; ?>"><br>
	</div>

	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-success">Yangilash</button>
		<a href="../index.php" class="btn btn-primary"> Qaytish</a>
	</div>
</form>
</div>
