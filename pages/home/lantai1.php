<?php
	include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.text{

		}
		.gedung{
			width: 150px;
			height: 460px;
			border: 2px solid black;
			position: absolute;
		}
		.gd1{
			width: 300px;
			height: 150px;
			top: 40px;
			left: 830px;
		}
		/*warna gedung*/
		.gd1:hover{
			background-color: salmon;
		}
		.ruang:hover{
			background-color: salmon;
		}

		/* posisis gedung*/
		.gd2,.gd3{
			top: 200px;
		}
		.gd2{
			left: 420px;
		}
		.gd3{
			left: 790px;
		}
		/* warna garis table*/
		.ruang{
			height: 100px;
			border-bottom: 2px solid black;
			overflow: hidden;
		}
		/* text ke bawah*/
		.perpus:last-child{
			border-bottom: none;
		}
		.ruang:last-child{
			border-bottom: none;
		}
		/*ukuran gedung*/
		.gd1{
			width: 300px;
			height: 150px;
		}
		.gd2 .ruang{
			height: 75px;
		}
		.gd3 .ruang{
			height: 75px;
		}
		.ruang p{
			line-height: 75px;
			text-align: center;
			
		}
		.pps p{
			line-height: 100px;
			text-align: center;
		}
		.text p{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php 
		$ruang1= mysqli_query($conek,"SELECT * FROM ruangan");
		$ruang2= mysqli_query($conek,"SELECT * FROM ruangan");

		 while ($row = mysqli_fetch_assoc($ruang1) ){
 			}
	 ?>
	<div class="text"> 
		<p>Gedung Universitas Nurul Jadid Lantai 1</p>
	</div>
	<div class="gedung gd1" title="">
		<div class="pps">
			<p>Perpus 1 </p>
		</div>
	</div>
	<div class="gedung gd2">
		<?php foreach ($ruang1 as $row): ?>
			<div class="ruang">
				<p><?= $row["nama"] ?></p>
			</div>
		<?php endforeach ?>

	</div>
	<div class="gedung gd3">
		<?php foreach ($ruang2 as $row):?> 
			<div class="ruang">
				<p><?= $row["nama"] ?></p>
			</div>
		<?php endforeach ?>
	</div>

</body>
</html>