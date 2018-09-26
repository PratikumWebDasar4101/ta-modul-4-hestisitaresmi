<?php
	echo "=================================================================================<br>";
	$nama = array($_POST['nama']);

	foreach($_POST['nama'] as $nama) {

	echo "Nama : ".$nama."<br>" ;
	}

	echo "<br>";


	$tanggal = array($_POST['tanggal']);

	foreach($_POST['tanggal'] as $tanggal) {

	echo "Tanggal : ".$tanggal."<br>" ;
	}


	echo "<br>";

	echo "Daftar Barang Belanjaan : ";

	$daftarblj = array($_POST['daftar']);

	foreach($_POST['daftar'] as $daftarblj) {

	echo "<br>"."-".$daftarblj."<br>" ;

	if($daftarblj == "Baju"){
		$harga1 = 100000;
		echo "Harga : ". "Rp.".$harga1;
	}else if($daftarblj == "Celana"){
		$harga2 = 150000;
		echo "Harga : "."Rp.".$harga2;
	}else if($daftarblj == "Tas"){
		$harga3 = 50000;
		echo "Harga : "."Rp.".$harga3;
	}else{
		$harga4 = 200000;
		echo "Harga : "."Rp.".$harga4;
	}
	
	}
	@$semua= $harga1+$harga2+$harga3+$harga4;
	echo "<br>*Total : ". $semua;
	

	echo "<br><br>";

	echo "Jenis Pengiriman : "."<br>";
	$myrdo = $_POST['myradio'];

	foreach($_POST['myradio'] as $myrdo) {

	echo "-".$myrdo."<br>" ;

	if($myrdo == "Kantor Pos"){
		$tarif = 10000;
		echo "Tarif : "."Rp.". $tarif;
	}else if($daftarblj == "JNA"){
		$tarif = 20000;
		echo "Tarif : "."Rp.".$tarif;
	}else if($daftarblj == "TIKI"){
		$tarif = 25000;
		echo "Tarif : "."Rp.".$tarif;
	}else{
		$tarif = 30000;
		echo "*Tarif : "."Rp.".$tarif;
	}

	}

	echo "<br><br>";

	$alamat = array($_POST['alamat']);

	foreach($_POST['alamat'] as $alamat) {

	echo "Alamat : ".$alamat."<br>" ;
	}



	echo "<br><br>";
	$total= $semua+$tarif;
	echo "**Total Pembayaran : "."(".$semua."+".$tarif.")"." = " .$total;

	echo "<br>=================================================================================<br>";



	

?>