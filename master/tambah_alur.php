 <?php 
 error_reporting(0);
?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah alur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="nama alur.." required="">
                </div>
                <div class="form-group">
                  <label>Detail</label>
                  <textarea type="text" name="detail" id="detail" class="form-control" rows="20" placeholder="detail.."></textarea>
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
  $details=$_POST['detail'];
  mysqli_query($con,"INSERT into alur VALUES('','$namas','$details')");
}
?>