<?php
error_reporting(0);
//pemanggilan list jabatan
  $dpegawai = mysqli_query($con, "SELECT * from jabatan");
  $druang = mysqli_query($con, "SELECT * from ruang");
?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label >nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="nama pegawai..">
                </div>
              <div class="form-group">
                <label>jabatan</label>
                <select class="form-control" id="jabatan" name="jabatan" style="width: 100%;">
                  <option selected="selected">-Pilih Jabatan-</option>
                  <?php 
                  while ($pegawai = mysqli_fetch_array($dpegawai)) { 
                  ?>
                    <option value="<?php echo $pegawai['id_jabatan'] ?>">
                  <?php 
                    echo $pegawai['nama_jabatan']; 
                  ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
              <!-- /.form-group -->
                <div class="form-group">
                  <label>File input</label>
                  <input type="file" id="foto" name="foto">

                  <p class="help-block">masukkan foto.</p>
                </div>
                <div class="form-group">
                <label>ruang</label>
                <select class="form-control" id="ruang" name="ruang" style="width: 100%;">
                  <option selected="selected">-Pilih Ruang-</option>
                  <?php 
                  while ($ruangs = mysqli_fetch_array($druang)) { 
                  ?>
                    <option value="<?php echo $ruangs['id_ruang'] ?>">
                  <?php 
                    echo $ruangs['nama_ruang']; 
                  ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
              <!-- /.box-body -->

              <div >
                <input type="submit" id="simpan" name="simpan" class="btn btn-primary" value="Simpan">
              </div>

            </form>
          </div>
          <!-- /.box -->
<?php 
  $nama=$_POST['nama'];
  $jabatan=$_POST['jabatan'];
  $sruang=$_POST['ruang'];

  if ($_POST['simpan']){
      $p=$_FILES['foto']['name'];
      mysqli_query($con,"INSERT INTO pegawai VALUES ('','$nama','$p','$jabatan','$sruang')");
      move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$_FILES['foto']['name']);
      echo "<script>alert('berhasil');location='index.php?page=tabel_pegawai'</script>";
  }
               
?>