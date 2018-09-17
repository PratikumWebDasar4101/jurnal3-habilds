<?php 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);

if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
	$nama_file = basename($_FILES["fileUpload"]["name"]);
	echo "Berhasil Upload ". $nama_file . "<br>";
}else {
	echo "Gagal Upload";
}
?>

<img src="uploads/<?php echo $nama_file; ?>" alt="">