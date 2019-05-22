<?php 
$ejs=$_GET['id_jabatan'];
?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST">
            <?php
              $ej=mysqli_query($con,"SELECT * FROM jabatan WHERE id_jabatan='$ejs'");
              //menghitung hasil query apanbila nol maka kembali ke halaman sebelumnya
                    if (mysqli_num_rows($ej) <= 0) {
                      echo "<script>alert('Data tidak ditemukan !');location='index.php?page=tabel_jabatan'</script>";
                    }else{
                      $ejgs = mysqli_fetch_array($ej);
                    }
            ?>
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="nama jabatan.." value="<?php echo $ejgs['nama_jabatan'] ?>">
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
    mysqli_query($con,"UPDATE jabatan set nama_jabatan='$namas' WHERE id_jabatan='$ejs'");
    echo "<script>alert('berhasil');location='index.php?page=tabel_jabatan'</script>";
}
?>