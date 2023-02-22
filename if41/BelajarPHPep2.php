<?php
// Membuat variabel dinamis
$nama_Depan = "christian"; // String
$name_Tengah = "Richie";
$name_Belakang = "Wijaya";

// echo $nama_Depan, " " ,$name_Tengah, " " ,$name_Belakang;
// echo $nama_Depan. " " .$name_Tengah. " " .$name_Belakang;
echo "$nama_Depan $name_Tengah $name_Belakang";

$namaLengkap = $nama_Depan ." ". $name_Tengah ." ".$name_Belakang;
echo "<br   />". $namaLengkap;

$umur = 19; //Integer
echo "<br />".$umur;
echo "<br />";
var_dump($umur);

$ipk = 6.9; //Float
$isActive = true; //Boolean
$gajiBulanIni = null; //null
$hobi = ["Gaming", "Turu", "Makan", "Ngememe", "Satir"]; //Array
$quotes = array("Kalo orang lain bisa, kenapa harus saya", "Orang lain bilang gapailah mimpimu, makanya setiap hari saya tidur");

echo "<br />".count($hobi); //Menghitung hobi

$gabungArray = array_merge($hobi, $quotes);
echo "<br>";
print_r($gabungArray);

// Membuat variabel statis

// CAPS LOCK = KONSTANTA
define("TEMPATLAHIR", "Berlin");
echo "<br/>".TEMPATLAHIR;

// Menghapus variabel dinamis
unset($ipk);

// Variabel Global
/* 
1) POST --> tipe : array
$_POST["npm"];

2) GET --> $_GET["npm"];

3) SESSION --> $_SESSION["username"];

4) COOKIE --> $_COOKIE["email"];

5) SERVER --> $_SERVER['];
*/

echo "<br/>";

// Ubah value ke Huruf Kapital 
echo ucfirst($nama_Depan);
echo "<br/>";
echo ucwords($namaLengkap);
echo "<br/>";
echo strtoupper($namaLengkap);
echo "<br/>";
echo strtolower($namaLengkap);
echo "<br/>";

// Membuat variabel npm
$npm = 2125250007;
echo substr($npm,4,2)
;




?>