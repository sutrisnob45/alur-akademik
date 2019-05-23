<?php
//ambil tabel posisi dengan indek [c0.]01 2 dan yang diambil 2 [01] 
	$sql = "SELECT * FROM ruang WHERE SUBSTRING(posisi,2,2) = 3";
	$rs = mysqli_query($con, $sql);
	//mengambil dan mengurutkan , dan sekaligus mengelompokkan berdasarkan nama kolom
	$ruang = mysqli_fetch_all($rs, MYSQLI_ASSOC);
	$gedung_c = [];
	$gedung_d = [];
	//ulangi semua isi di varibel ruang
	foreach ($ruang as $r) {
		//ambil posisi hanya 1 karakter 0 = c
		$ruang=substr($r["posisi"], 4, 5); 
		if (substr($r["posisi"], 0, 1) == 'c'){
			$gedung_c[$ruang] = $r;
		}elseif (substr($r["posisi"], 0, 1) == 'd'){
			$gedung_d[$ruang] = $r;
		}
	}
	// mengurutkan ruang dari bawah ke atas
	$gedung_c = array_reverse($gedung_c);
	$gedung_d = array_reverse($gedung_d);
?>
	<!-- <div class="text"> 
		<h4>Gedung C dan D Universitas Nurul Jadid Lantai 1</h4>
	</div> -->
	<div class="gedung gd1">
			<p>pintu gerbang</p>
	</div>
		<div class="gedung gd2">
		<div class="ruang">
			<p><?= $gedung_d[0]["nama_ruang"] ?></p>
		</div>
		<div class="ruang">
			<p><?= $gedung_d[1]["nama_ruang"] ?></p>
		</div>
		<div class="ruang">
			<p><?= $gedung_d[2]["nama_ruang"] ?></p>
		</div>
		<div class="ruang">
			<p><?= $gedung_d[3]["nama_ruang"] ?></p>
		</div>
		<div class="ruang">
			<p><?= $gedung_d[4]["nama_ruang"] ?></p>
		</div>
		<div class="ruang">
			<!-- <div class="color"> -->
				<!-- <a href=".?page=baak"> --><p><?= $gedung_d[5]["nama_ruang"] ?></p><!-- </a> -->
			</div>
<!-- 		</div> -->
		<div class="ruang">
			<p><?= $gedung_d[6]["nama_ruang"] ?></p>
		</div>
	</div>
	<div class="gedung gd3">
			<div class="ruang">
				<p><?= $gedung_c[0]["nama_ruang"] ?></p>
			</div>
			<div class="ruang">
				<p><?= $gedung_c[1]["nama_ruang"] ?></p>
			</div>
			<div class="ruang">
				<p><?= $gedung_c[2]["nama_ruang"] ?></p>
			</div>
			<div class="ruang">
				<p><?= $gedung_c[3]["nama_ruang"] ?></p>
			</div>
			<div class="ruang">
				<p><?= $gedung_c[4]["nama_ruang"] ?></p>
			</div>
			<div class="ruang">
				<p><?= $gedung_c[5]["nama_ruang"] ?></p>
			</div>
			<div class="ruang">
				<p><?= $gedung_c[6]["nama_ruang"] ?></p>
			</div>
	</div>
	<div class="gedung gd4">
			Gedung D
	</div>
	<div class="gedung gd5">
			Gedung C
	</div>
<img src=<?= BASE_URL . "/resource/image/arah.jpg" ?>  height="150" width="150">