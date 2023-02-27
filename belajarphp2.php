<?php
//membuat variables 
$nama_depan = "Nico";
$namaDepan = "Nur";
$namaBelakang = "wow";
$umur = 17;
$ipk = 3.91; //float//double
$hadir = false; //boolean
$salary = null;
$image_url='https://i.kym-cdn.com/entries/icons/mobile/000/009/803/spongebob-squarepants-patrick-spongebob-patrick-star-background-225039.jpg';
echo "$image_url <br> Nama Lengkap : " . $nama_depan . " " . $namaBelakang;
echo "<br>";
 echo "<img src='foto/puppy.jpg' alt='photo of my dog' />";
 echo "<img src='foto/puppy.jpg' alt='photo of my dog' />";
 echo "Nama Lengkap : $namaDepan $namaBelakang";
echo "<br>";
echo "Nama Lengkap : ${namaDepan} ${namaBelakang}";
echo "Umur : $umur Tahun";
$umur = 21;

echo "Umur Sekarang : $umur Tahun";
unset($umur); //menghapus variable dinamis yang pake dollar
//misal undefined berarti dak ado variablenyo

// variabel statis (static vvariabel) (pake define) BIASONYO PAKE HURUF KAPITAL
define("TEMPATLAHIR", "Palembang");
echo "<br>";
echo "Tempat Lahir : ". TEMPATLAHIR;

//Varible Global, pada umumnya tipe datanya array
/*
1. Session -> $_SESSION['nama']
2. Cookie -> $_COOKIE['namacookie']
3. Post -> $POST['npm']
4. Get -> $_GET['npm']
5. Post -> $_SERVER[]
*/
?>

// titik itu untuk spasi, misal mau tambah tambahken be