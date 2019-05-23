<?php
	$hp=$_GET['id_pegawai'];
	$hps=mysqli_query($con,"DELETE from pegawai WHERE id_pegawai='$hp'");
	if($hps){
		echo "<script>location='index.php?page=tabel_pegawai'</script>";
	}else{
		echo "<script>alert('Gagal di hapus');location='index.php?page=tabel_pegawai'</script>";
	}

?>