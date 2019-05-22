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
			top: 70px;
			left: 100px;
		}
		.gd1:hover{
			background-color: salmon;
		}
		.perpus:last-child{
			border-bottom: none;
		}
		.gd2,.gd3{
			top: 250px;
		}
		.gd3{
			left: 320px;
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

		}
	</style>
</head>
<body>

	<div class="text"> 
		<div class="text"><p>Gedung Universitas Nurul Jadid Lantai 2</p>
		</div>
	</div>
	<div class="gedung gd1">
		<div class="pps">
			<p>Perpus</p>
		</div>
	</div>
	<div class="gedung gd2">
		<div class="ruang">
			<p>G1.L2.lab3 elektro</p>
		</div>
		<div class="ruang">
			<p>G1.L2.lab4</p>
		</div>
		<div class="ruang">
			<p>G1.L2.lab5</p>
		</div>
		<div class="ruang">
			<p>Ruang Dosen</p>
		</div>
		<div class="ruang">
			<p>Kelas</p>
		</div>
		<div class="ruang">
			<p>Kelas</p>
		</div>
	</div>
	<div class="gedung gd3">
		<div class="ruang">
			<p>Kelas</p>
		</div>
		<div class="ruang">
			<p>Kelas</p>
		</div>
		<div class="ruang">
			<p>Kelas</p>
		</div>
		<div class="ruang">
			<p>Ruang Dosen</p>
		</div>
		<div class="ruang">
			<p>Kelas IAI</p>
		</div>
		<div class="ruang">
			<p>Kelas IAI</p>
		</div>
	</div>

</body>
</html>