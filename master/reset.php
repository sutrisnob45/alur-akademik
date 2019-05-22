<?php
include("koneksi.php");

/*<h2>PILIH USERNAME YANG INGIN DI RESET</h2>
<form name="fff" method="POST">
<select name="a" class="">
	<?php
	$querynya=mysqli_query($con,"SELECT * from user");
	while($tampil=mysqli_fetch_array($querynya)){
	?>
<option value="<?php echo $tampil['id_user']; ?>"><?php echo $tampil['username']; ?></option>
<?php } ?>
</select>
<input type="submit" name="r" value="Reset" class="btn-primary">
</form>*/
// $a=$_POST['a'];
// if($_POST['r']){
mysqli_query($con,"UPDATE user set pasword='admin'");
echo "<script>alert('pasword berhasil di reset');location='login.php'</script>";

?>