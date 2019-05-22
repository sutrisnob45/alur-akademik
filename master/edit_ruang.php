 <?php 
 $ers=$_GET['id_ruang'];
?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Ruang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST">
            <?php
            $er=mysqli_query($con,"SELECT * FROM ruang WHERE id_ruang='$ers'");
            //menghitung hasil query apanbila nol maka kembali ke halaman sebelumnya
                 if (mysqli_num_rows($er) <= 0) {
                   echo "<script>alert('Data tidak ditemuk!');location='index.php?page=tabel_ruang'</script>";
                 }else{
                   $ergs = mysqli_fetch_array($er);
               }
            ?>
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label >nama</label>
                  <input type="text" name="nama" id="nama" class="form-control"  placeholder="nama ruang.." value="<?php echo $ergs['nama_ruang'] ?>">
                </div>
                <div class="form-group">
                  <label >posisi</label>
                  <input type="text" name="posisi" id="posisi" class="form-control"  placeholder="nama lantai.." value="<?php echo $ergs['posisi'] ?>">
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
              </div>
            </form>
          </div>
          <!-- /.box -->
<?php
    if ($_POST['simpan']) {
      $nm=$_POST['nama'];
      $pss=$_POST['posisi'];
      mysqli_query($con,"UPDATE ruang set nama_ruang='$nm',posisi='$pss' WHERE id_ruang='$ers'");
      echo "<script>alert('berhasil');location='index.php?page=tabel_ruang'</script>";
    }
?>

