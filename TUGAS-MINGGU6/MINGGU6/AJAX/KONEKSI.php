<?php
$host="localhost";
$user="root";
$password="";
$db="minggu6";

$kon = mysqli_connect($host,$user,$password,$db);
if(!$kon){
    die("koneksi gagal : ".mysqli_connect_error());
}
