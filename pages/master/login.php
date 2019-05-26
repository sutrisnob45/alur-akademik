<?php
session_start();
// jika session aktif maka ke master 
if(isset($_SESSION['id_user'])){
  echo "<script>location='" . BASE_URL . "' </script>";
}

$us=$_POST['user'];
$ps=$_POST['pas'];
$q=mysqli_query($con,"select * from user where username='$us' and pasword='$ps'");
$ql=mysqli_fetch_array($q);
// cek data
$qp=mysqli_num_rows($q);
if($_POST['login']){
  //untuk di kirim ke home
  if($qp > 0){
    $_SESSION['id_user']=$ql['id_user'];
    header("location: " . BASE_URL);
  }else{
    echo "<script>alert('username atau password salah');</script>";
  }
}
?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="login-box-msg">LOGIN</h3>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="user" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pas" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-5" style="float: ;">
          <a href="reset.php" style="float: ;text-align: ;" class="btn btn-primary btn-block btn-flat">Reset Password</a>
        </div>
        <div class="col-xs-4" style="float: right;">
          <input type="submit" name="login"  style="float: ;" class="btn btn-primary btn-block btn-flat" value="LOGIN">
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
