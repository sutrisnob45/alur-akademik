<?php
	$hj=$_GET['id_jabatan'];
	$hjs=mysqli_query($con,"DELETE from jabatan WHERE id_jabatan='$hj'");
	if($hjs){
		echo "<script>location='index.php?page=tabel_jabatan'</script>";
	}else{
		echo "<script>alert('Gagal di hapus');location='index.php?page=tabel_jabatan'</script>";
	}

?>