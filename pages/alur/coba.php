	<img src=<?= BASE_URL . "/resource/image/arah.jpg" ?>  height="150" width="150">
<!-- 	<div class="gedung gd1">
		<p>pintu gerbang</p>
	</div> -->
	<div>
	<h3 style="text-align: center;">
		Gedung D
	</h3>
	<div class="gedung">
		<a href="#">
			1
		</a>
		<a href="#">
			2
		</a>
		<a href="#">
			3
		</a>
		<a href="#">
			4
		</a>
		<a href="#">
			5
		</a>
		<a href="#">
			6
		</a>
		<a href="#">
			7
		</a>
	</div>
	</div>
	<!-- <div class="gedung gd3">
		<div class="ruang">
			<p>1</p>
		</div>
		<div class="ruang">
			<p>2</p>
		</div>
		<div class="ruang">
			<p>3</p>
		</div>
		<div class="ruang">
			<p>4</p>
		</div>
		<div class="ruang">
			<p>5</p>
		</div>
		<div class="ruang">
			<p>6</p>
		</div>
		<div class="ruang">
			<p>7</p>
		</div>
	</div> -->
	
	<!-- <h3>
		Gedung C Lantai 1
	</h3> -->
<style>
	h3{
		width: 150px;
	}
	.gedung{
		display: flex;
		border: 2px solid black;
		flex-direction: column;
		width: 150px;
		height: 500px;
		justify-content: space-around;
		align-content: space-between;
	}

	.gedung>a{
		color: black;
		text-align: center;
		height: 100%;
		line-height: 70px;
	}
	.gedung>a:not(:last-child){
		border-bottom: 2px solid black;
	}


</style>	