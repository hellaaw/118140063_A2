<html>
<head>
  <title>Menentukan Bilangan Prima</title>
  <link rel="stylesheet" type="text/css" href="prima.css">
</head>
<body>
<?php
if (isset($_POST['submit'])) {
  $bil = $_POST['bil'];
  $prima = true;
  for ($i = 2; $i < $bil; $i++) {
    if ($bil % $i == 0)
      $prima = false;
  }
    if ($prima) {
      $hasil = "PRIMA";
    } else {
      $hasil = "Bukan PRIMA";
    }
}
?>

<div class="prima">
  <h2 class="judul">Menentukan Bilangan Prima</h2>
  <form method='post' action='PRIMA.php'>
    <input type='text' name='bil' class='bil' autocomplete='off' placeholder='Masukkan Bilangan '>
    <input type='submit' name='submit' value='Cek' class='tombol'>
  </form>
  <?php if (isset($_POST['submit'])) { ?>
    <input type="text" value="<?php echo $hasil; ?>" class="bil">
  <?php } else { ?>
    <input type="text" class="bil" autocomplete='off' placeholder='Hasil kelompok bilangan'>
  <?php } ?>
</div>
</body>

</html>