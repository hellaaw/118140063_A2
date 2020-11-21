<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Faktorial - 118140063 | Rasyidah Herawati</title>
</head>
<body>

<?php 

function faktorial($n){
    $bil = 1;
    $faktorial = 1;
    while($bil <= $n){
        $faktorial = $faktorial * $bil;
        $bil = $bil + 1;
    }
    return $faktorial;
}

if(isset($_POST['hitung'])){
    $n = $_POST['faktorial'];
    echo 'Hasil = '.faktorial($n);
}

?>

<form method="POST">
    <input type="number" name="faktorial" required>
    <button type="submit" name="hitung">Hitung Angka</button>
</form>

</body>
</html>