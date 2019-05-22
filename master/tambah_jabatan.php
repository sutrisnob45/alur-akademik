 <?php 
 error_reporting(0);
?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="nama jabatan.." required="">
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>

        <?php
if ($_POST['simpan']) {
  $namas=$_POST['nama'];
  mysqli_query($con,"INSERT into jabatan VALUES('','$namas')");
}
?>