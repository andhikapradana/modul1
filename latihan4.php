<?php
$nama = "Firdausa";
$kelas = "XIRPL2";
$absen = "6";

function tampil_nama() 
{
		global $nama;
		echo "Nama Saya : ".$nama;
		echo "<br>";
}
tampil_nama();

function tampil_kelas()
{
		global $kelas;
		echo "Kelas Saya : ".$kelas;
		echo "<br>";
}
tampil_kelas();


function tampil_absen()
{
		global $absen;
		echo "Absen Saya : ".$absen;
		echo "<br>";
}
tampil_absen();

?>