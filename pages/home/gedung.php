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
				left: 530px;
			}
			.gd1:hover{
				background-color: salmon;
			}
			.perpus:last-child{
				border-bottom: none;
			}
			.gd2,.gd3{
				top: 200px;
			}
			.gd2{
				left: 520px;
			}
			.gd3{
				left: 820px;
			}
			.ruang{
				height: 100px;
				border-bottom: 2px solid black;
				overflow: hidden;
			}
			.ruang:last-child{
				border-bottom: none;
			}
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
			.ruang:hover{
				background-color: salmon;
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
			$ruang=array("lab1","lab2","lab3","Ruang Dosen","Baak","Bauk");
		?>
		<div class="text">
			<p>Gedung Universitas Nurul Jadid Lantai 1</p>
		</div>
		<div class="gedung gd2">
			<?php foreach ($ruang as $r): ?>
				<div class="ruang">
					<p><?= $r ?></p>
			 	</div>
			<?php endforeach ?>
		</div>
	</body>
</html>