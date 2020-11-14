<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana Dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="kalkulator.css">
</head>
<body>
<article>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case '+':
				$hasil = $bil1 + $bil2;
			break;
			case '-':
				$hasil = $bil1 - $bil2;
			break;
			case '*':
				$hasil = $bil1 * $bil2;
			break;
			case '/':
				$hasil = $bil1 / $bil2;
			break;
			case '%':
				$hasil = $bil1 % $bil2;
			break;
			default:
				$hasil = "Please, Choose the Operation";
			break;
		}
	}
	?>
	<div class="kalkulator">
		<h1 class="judul">CALCULATOR</h1>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Input the First Number"><br><br>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Input the Second Number"><br><br>
			<select class="opt" name="operasi">
				<option value="#">Choose the Operation</option>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
				<option value="%">% (mod)</option>
			</select>
			<input type="submit" name="hitung" value="Count" class="tombol"><br><br>										
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php } else { ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</article>
</body>
</html>