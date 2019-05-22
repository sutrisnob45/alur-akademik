<?php 
$els=$_GET['id_alur'];
?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah alur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST">
            <?php
            $el=mysqli_query($con,"SELECT * FROM alur WHERE id_alur='$els'");
            //menghitung hasil query apanbila nol maka kembali ke halaman sebelumnya
                 if (mysqli_num_rows($el) <= 0) {
                   echo "<script>alert('Data tidak ditemuk!');location='index.php?page=tabel_alur'</script>";
                 }else{
                   $elgs = mysqli_fetch_array($el);
               }
            ?>
            <!-- form start -->
          <form action="" method="POST">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="nama alur.."  value="<?php echo $elgs['nama_alur'] ?>">
                </div>
                <div class="form-group">
                  <label>Detail</label>
                  <textarea name="detail" id="detail" class="form-control" rows="20" placeholder="detail.."><?php echo $elgs['detail'] ?></textarea>
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
      $nms=$_POST['nama'];
      $detl=$_POST['detail'];
      mysqli_query($con,"UPDATE alur set nama_alur='$nms',detail='$detl' WHERE id_alur='$els'");
      echo "<script>alert('berhasil');location='index.php?page=tabel_alur'</script>";
    }
?>
