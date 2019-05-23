<?php
	$hr=$_GET['id_ruang'];
	$hrs=mysqli_query($con,"DELETE from ruang WHERE id_ruang='$hr'");
	if($hrs){
		echo "<script>location='index.php?page=tabel_ruang'</script>";
	}else{
		echo "<script>alert('Gagal di hapus');location='index.php?page=tabel_ruang'</script>";
	}

?>