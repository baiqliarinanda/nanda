<?php
$angka_pertama = "";
$angka_kedua = "";
$angka_hasil = "";

if(isset($_POST["Hitung"])) {
	if(isset($_POST["angka_pertama"])) $angka_pertama = $_POST["angka_pertama"];
	else $angka_pertama = 0;
	if(isset($_POST["angka_kedua"])) $angka_kedua = $_POST["angka_kedua"];
	else $angka_kedua = 0;
	$angka_hasil = ($angka_pertama+$angka_kedua);
}
?>
<form action="rumus.php" method="POST">
	<div align="center">
		<input type="text" name="angka_pertama" id="angka_pertama" value="<?php echo $angka_pertama;?>"> + <input type="text" name="angka_kedua" id="angka_kedua" value="<?php echo $angka_kedua;?>"> = <input type="text" name="angka_hasil" id="angka_hasil" value="<?php echo $angka_hasil;?>"><br>
		<button type="submit" name="Hitung" id="Hitung">Hitung</button>
	</div>
</form>