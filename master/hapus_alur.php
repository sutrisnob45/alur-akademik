<?php
	$ha=$_GET['id_alur'];
	$hal=mysqli_query($con,"DELETE from alur WHERE id_alur='$ha'");
	if($hal){
		echo "<script>location='index.php?page=tabel_alur'</script>";
	}else{
		echo "<script>alert('Gagal di hapus');location='index.php?page=tabel_alur'</script>";
	}

?>