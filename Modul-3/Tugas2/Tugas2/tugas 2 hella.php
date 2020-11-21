<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>118140063 | Rasyidah Herawati</title>
</head>
<body>

<form method="post">
    Nama : <input type="text" name="huruf">
    <button type="submit" name="submit">Submit</button>
    <button onClick="window.location.reload();">Refresh</button>
</form>

<?php 

function jumlahhuruf($huruf){
    $jumlah = strlen($huruf);
    return $jumlah;
}

if(isset($_POST['submit'])){
    $huruf = $_POST['huruf'];
    if(jumlahhuruf($huruf)==" "){
        echo '<font color="red">Nama : Nama Kosong Belum Terisi </font>'; echo '<br>';
        echo '<font color="red">Harga : Harga Kosong Karena Nama Masih Kosong </font>';
    }

    else if(jumlahhuruf($huruf)<=10){
        $harga = 300;
        $tot = jumlahhuruf($huruf)*$harga;
        echo '<font color="blue">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="blue">Harga : '.$tot."</font>";
    }

    elseif(jumlahhuruf($huruf)<=20){
        $harga = 500;
        $tot = jumlahhuruf($huruf)*$harga;
        echo '<font color="yellow">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="yellow">Harga : '.$tot."</font>";
    }

    elseif(jumlahhuruf($huruf)>20){
        $harga = 700;
        $tot = jumlahhuruf($huruf)*$harga;
        echo '<font color="green">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="green">Harga : '.$tot."</font>";
    }
}

?>


</body>
</html>