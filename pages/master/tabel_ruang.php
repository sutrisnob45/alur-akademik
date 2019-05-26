       <div class="box satu">
        <div class="box-header">
          <h3 class="box-title">Tabel Ruang</h3>
        </div>
        <div class="box-header">
          <button type="button" class="btn btn-primary toggle">
            Tambah
          </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>no</th>
                <th>nama</th>
                <th>posisi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $rg=mysqli_query($con,"SELECT * FROM ruang");
              $i=1;
              while ($rgs= mysqli_fetch_array($rg)) :?>
                <tr>
                  <td><?= $i;?></td>
                  <td><?= $rgs['nama_ruang'];?></td>
                  <td><?= $rgs['posisi'];?></td>
                  <td><center>
                    <button type="button" class="btn btn-primary" onclick="setModal(this.id)" id="<?= baris . $i;?>" data-toggle="modal" data-target="#myModal">
                      edit
                    </button>
                    <button type="button" class="btn btn-danger" onclick="confirm('Hapus?')">
                      hapus
                    </button>
                    <!-- <a href="index.php?page=edit_ruang&id_ruang=<?php echo $rgs['id_ruang']?>" class="btn btn-primary">edit</a>  -->
                    <!-- |<a href="index.php?page=hapus_ruang&id_ruang=<?php echo $rgs['id_ruang']?>" class="btn btn-primary" onclick="return confirm('yakin akan menghapus?');">hapus</a> --> 
                  </center></td>
                </tr>
                <?php
                $i++;
              endwhile; ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <div class="box dua" style="display: none;">
          <div class="box-header">
            <h3 class="box-title">Tambah Ruang</h3>
          </div>
          <div class="box-header">
           <div class="form-group">
            <label for="nama_ruang">Nama</label>
            <form action="" method="post">
              <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" placeholder="Nama Ruangan">
              <div class="form-group">
                <label for="kode_posisi">Kode</label>
                <input type="text" class="form-control" id="kode_posisi" name="kode_posisi" placeholder="Kode Posisi">
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
          </form>
          <button type="button" class="btn btn-secondary toggle">Batal</button>
        </div>
      </div>
      <?php
        if (isset($_POST['simpan'])) {
          $nm=$_POST['nama_ruang'];
          $pss=$_POST['kode_posisi'];
          mysqli_query($con,"INSERT into ruang VALUES(DEFAULT,'$nm','$pss')");
          header("Location: http://alur-akademik.com/master/tabel_ruang");
        }
      ?>
      <script>
        function displayEdit() {
          $(".box.satu").toggle();
          $(".box.dua").toggle();
        }

        $("button.toggle").each(function (){
          $(this).on('click', function() {
            displayEdit();
          });
        });
      </script>
      
