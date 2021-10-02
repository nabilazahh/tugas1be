<?php

// Nabila Nur Azizah, Sistem Informasi 2021 Back End

//nama
$namaDepan = "Nabila";
$namaTengah = "Nur";
$namaBelakang = "Azizah";

//tempat, tanggal lahir
$tempatLahir = "Jakarta";
$tanggalLahir = "29";
$bulanLahir = "Januari";
$tahunLahir = "2003";

//alamat
$namaJalan = "Komp. Timah Blok CC/V No. 84";
$kelurahan = "Tugu";
$kecamatan = "Cimanggis";
$kota = "Depok";

//status pernikahan
$statuspernikahan = "belum menikah";

//target IPK
$ip1 = 3.70;
$ip2 = 3.75;
$ip3 = 3.70;
$ip4 = 3.75;
$ip5 = 3.80;
$ip6 = 3.80;
$ip7 = 3.90;
$ip8 = 3.90;
$targetIPK = $ip1 + $ip2 + $ip3 + $ip4 + $ip5 + $ip6 + $ip7 + $ip8;
$targetIPK = $targetIPK*1/8;

//hasil
echo "Nama : " . $namaDepan . " " . $namaTengah ." " . $namaBelakang;
echo "<br>";
echo "Tempat, tanggal lahir : " . $tempatLahir . ", " . $tanggalLahir . " " . $bulanLahir . " " . $tahunLahir;
echo "<br>";
echo "Alamat : " . $namaJalan . ", " . $kelurahan . ", " . $kecamatan . ", " . $kota;
echo "<br>";
echo "Status pernikahan : " .$statuspernikahan . ", ";
echo var_dump (false);
echo "<br>";
echo "Tahun lahir kabisat : " . $tahunLahir*1/4 . ", ";
echo var_dump (false);
echo "<br>";
echo "Target indeks prestasi kumulatif : " . $targetIPK;