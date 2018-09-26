<?php
	echo "Tempat Wisata : "."<br>";
	$tempatwst = array($_POST['tempat']);

	foreach($_POST['tempat'] as $tempatwst) {

	echo "-".$tempatwst."<br>" ;
	}

	echo "<br>Genre Film : "."<br>";
	$genreflm = array($_POST['genre']);

	foreach($_POST['genre'] as $genreflm) {

	echo "-".$genreflm."<br>" ;
	}

	echo "<br>Daftar Hobi : "."<br>";
	$hobby = array($_POST['hobi']);

	foreach($_POST['hobi'] as $hobby) {

	echo "-".$hobby."<br>" ;
	}

	echo "<br>"."Upload Foto : ";
	
	$file=$_FILES['dokumen'];
	$nama_file=$file['name'];
	$nama_tmp=$file['tmp_name'];
	$upload_dir= "upload/";
	move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
	

?>
<br><img width = "500" src="upload/<?php echo $nama_file; ?>"><br>



<br><a href="hal.html"><input type="submit" name="Delete" value="Delete" ></a>

<br><br><a href="masuk1.html"><input type="submit" name="Logout" value="Logout" ></a>

