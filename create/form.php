<link rel="stylesheet" type="text/css" href="../css/min.css">
<div style="margin: 15px">
	<form action="valid.php" method="POST">
		<h1>Mijoz qo'shish</h1>
		<div class="form-group">
			<label class="control-label" for="familyasi"> Familyasi</label><br>
			<input class="form-control" type="text" name="familyasi" id="familyasi"><br>	
		</div>

		<div class="form-group">
			<label class="control-label" for="ismi"> Ismi</label><br>
			<input class="form-control" type="text" name="ismi" id="ismi"><br>
		</div>

		<div class="form-group">
			<label class="control-label" for="tugulgan_kuni"> Tug'ilgan kuni</label><br>
			<input class="form-control" type="text" name="tugulgan_kuni" id="tugulgan_kuni"><br>
		</div>
		
		<div class="form-group">
			<label class="control-label" for="telefon_raqami"> Telefon raqami </label><br>
			<input class="form-control" type="text" name="telefon_raqami" id="telefon_raqami"><br>
		</div>

		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-success">Saqlash</button>
			<a href="../index.php" class="btn btn-primary"> Qaytish</a>
		</div>
	</form>
</div>