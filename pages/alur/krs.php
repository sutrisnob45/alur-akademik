<?php
	$sql = "SELECT * FROM ruang WHERE SUBSTRING(posisi,2,2) = 1";
	$rs = mysqli_query($con, $sql);
	$ruang = mysqli_fetch_all($rs, MYSQLI_ASSOC);
	$gedung_c = [];
	$gedung_d = [];
	foreach ($ruang as $r) {
		$ruang=substr($r["posisi"], 4, 5);
		if (substr($r["posisi"], 0, 1) == 'c'){
			$gedung_c[$ruang] = $r;
		}elseif (substr($r["posisi"], 0, 1) == 'd'){
			$gedung_d[$ruang] = $r;
		}
	}
	$gedung_c = array_reverse($gedung_c);
	$gedung_d = array_reverse($gedung_d);
?>
<!-- pemanggilan deskripsi -->
<?php
	$tam=mysqli_query($con,"Select * from alur where nama_alur='krs'");
	//memanggil dan menjadikan array tetapi belum bentuk array 
	$tam = mysqli_fetch_all($tam, MYSQLI_ASSOC);
	$tam = $tam[0]
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
		<div class="ruang aktif">
			<div class="color">
				<a href=".?page=baak"><p><?= $gedung_d[5]["nama_ruang"] ?></p></a>

			</div>
		</div>
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
			<div class="ruang aktif">
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
			Gedung D Lantai 1
	</div>
	<div class="gedung gd5">
			Gedung C Lantai 1
	</div>
<img src=<?= BASE_URL . "/resource/image/arah.jpg" ?>  height="150" width="150">
<br><br>
<style>
	pre{
		border: none;
		background-color: inherit;
	}
</style>
<!-- menampilkan deskripsi -->
	<pre>
		<?= $tam["detail"] ?>
	</pre>

