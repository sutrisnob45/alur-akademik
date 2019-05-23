<?php
error_reporting(0);
$eps=$_GET['id_pegawai'];
$dpegawaiz = mysqli_query($con, "SELECT * from jabatan");
// pemanggilan ruang
$druangz= mysqli_query($con, "SELECT * from ruang");
// $epr = mysqli_query($con, "SELECT * from ruang,pegawai WHERE pegawai.id_ruang = ruang.id_ruang and pegawai.id_pegawai='$eps'");
// $gg=mysqli_fetch_array($epr);
?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST" enctype="multipart/form-data">
                <?php
                //mencocokkan atribut id yang sama dari kedua tabel
                  $epg=mysqli_query($con,"SELECT a.id_pegawai,a.nama_pegawai,a.foto,
                    b.id_jabatan,b.nama_jabatan,c.id_ruang,c.nama_ruang FROM pegawai a
                    LEFT OUTER JOIN jabatan b on a.id_jabatan = b.id_jabatan
                    LEFT OUTER JOIN ruang c on a.id_ruang = c.id_ruang where a.id_pegawai = '$eps'");
                    if (mysqli_num_rows($epg) <= 0) {
                      echo "<script>alert('Data tidak ditemukan !');location='index.php?page=tabel_pegawai'</script>";
                    }else{
                      $epgs = mysqli_fetch_array($epg);
                    }
                ?>

            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="nama pegawai.." value="<?php echo $epgs['nama_pegawai'] ?>">
                </div>
              <div class="form-group">
                <label>jabatan</label>
                <select class="form-control" id="jabatan" name="jabatan" style="width: 100%;">
                  <option selected="selected" value="<?php echo $epgs['id_jabatan'] ?>"><?php echo $epgs['nama_jabatan'] ?></option>
                    <?php 
                      while ($fpegawai = mysqli_fetch_array($dpegawaiz)) { 
                    ?>
                     <option value="<?php echo $fpegawai['id_jabatan'] ?>">
                    <!-- dimana yang di munculkan nama jabatan -->
                    <?php 
                      echo $fpegawai['nama_jabatan']; }
                    ?>
                    </option>
                </select>
              </div>
              <!-- ruang -->
              <div class="form-group">
                <label>ruang</label>
                <select class="form-control" id="ruang" name="ruang" style="width: 100%;">
                  <option selected="selected" value="<?php echo $epgs['id_ruang'] ?>"><?php echo $epgs['nama_ruang'] ?>
                  </option>
                    <?php 
                      while ($fruang = mysqli_fetch_array($druangz)) { 
                    ?>
                    <!-- pemanggilan echo id jabatan -->
                    <option value="<?php echo $fruang['id_ruang'] ?>">
                    <!-- dimana yang di munculkan nama jabatan -->
                    <?php 
                      echo $fruang['nama_ruang']; }
                    ?>
                    </option>
                </select>
              </div>
              <!-- /.foto -->
              <div>
                <img src="img/<?php echo $epgs['foto']; ?>" class="edit_mini_foto">
              </div>
                <div class="form-group">
                  <label>Ubah Foto</label>
                  <input type="file" id="foto" name="foto">
                  <p class="help-block">masukkan foto.</p>
                </div>
          <!-- /.box-body -->      
              <div >
                <input type="submit" id="simpan" name="simpan" class="btn btn-primary" value="Simpan">
              </div>
            </form>
          </div>
          <!-- /.box -->
<!-- code edit -->
<?php 
  if ($_POST['simpan']){
      $nama=$_POST['nama'];
      $jabatan=$_POST['jabatan'];
      $ruang = $_POST['ruang'];
      $p=$_FILES['foto']['name'];
      if ($p =="") {
        mysqli_query($con,"UPDATE pegawai set nama_pegawai='$nama',id_jabatan='$jabatan', id_ruang = '$ruang' WHERE id_pegawai='$eps'");
        echo "<script>alert('berhasil');location='index.php?page=tabel_pegawai'</script>";

      }else{
        mysqli_query($con,"UPDATE pegawai set nama_pegawai='$nama',foto='$p',id_jabatan='$jabatan', id_ruang = '$ruang' WHERE id_pegawai='$eps'");
        move_uploaded_file($_FILES['foto']['tmp_name'],"img/".$_FILES['foto']['name']);
        echo "<script>alert('berhasil');location='index.php?page=tabel_pegawai'</script>";
             
      }

  }
               
?>