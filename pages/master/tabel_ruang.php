       <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Ruang</h3>
        </div>
        <div class="box-header">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="fillFormEdit('TAMBAH', this.id)">Tambah</button>
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
              if (isset($_POST['tambah'])) {
                $nama = $_POST['nama_ruang'];
                $kode = $_POST['kode_posisi'];
                mysqli_query($con,"INSERT into ruang VALUES(DEFAULT,'$nama','$kode')");
              }
              if (isset($_POST['edit'])) {
                $id = $_POST['id_ruang'];
                $nama = $_POST['nama_ruang'];
                $kode = $_POST['kode_posisi'];
                mysqli_query($con,"UPDATE ruang SET nama_ruang='$nama', posisi='$kode' WHERE id_ruang=$id");
              }
              if (isset($_POST['hapus'])) {
                $id = $_POST['id_ruang'];
                mysqli_query($con,"DELETE from ruang WHERE id_ruang='$id'");
              }


              $rg=mysqli_query($con,"SELECT * FROM ruang");
              $i=1;
              while ($rgs= mysqli_fetch_array($rg)) :?>
                <tr>
                  <td><?= $i;?></td>
                  <input type="hidden" value="<?= $rgs['id_ruang']?>">
                  <td><?= $rgs['nama_ruang'];?></td>
                  <td><?= $rgs['posisi'];?></td>
                  <td><center>
                    <button type="button" class="btn btn-primary" onclick="fillFormEdit('EDIT', this.id)" id="<?= 'baris' . $i;?>" data-toggle="modal" data-target="#myModal">edit</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" id="<?= 'baris' . $i;?>" data-target="#hapusModal" onclick="fillFormHapus(this.id)">hapus</button>
                    <!-- <a href="index.php?page=edit_ruang&id_ruang=<?php echo $rgs['id_ruang']?>" class="btn btn-primary">edit</a>  -->
                    <!-- <a href="http://alur-akademik.com/master/hapus_ruang.php?id=<?= $rgs['id_ruang']?>" class="btn btn-danger" onclick="return confirm('yakin akan menghapus?');">hapus</a>  -->
                  </center></td>
                </tr>
                <?php
                $i++;
              endwhile; ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- Modal konfimasi hapus -->
        <div class="modal fade" id="hapusModal" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                Yakin untuk menghapus?
              </div>
              <div class="modal-footer">
                <form action="" method="post">
                  <input type="hidden" id="id_hapus" name="id_ruang">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal kelola-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" style="float: left;">Kelola Ruang</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <form action="" method="post">
                    <input type="hidden" id="id_ruang" name="id_ruang">
                    <div class="form-group">
                      <label for="nama_ruang">Nama</label>
                      <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" placeholder="Nama Ruangan">
                    </div>
                    <div class="form-group">
                      <label for="kode_posisi">Kode</label>
                      <input type="text" class="form-control" id="kode_posisi" name="kode_posisi" placeholder="Kode Posisi">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <script>
          function fillFormEdit(mode = "DEFAULT", data_baris) {
            if (mode === "EDIT") {
              baris = $("#" + data_baris).parent().parent().siblings()
              $("#id_ruang").val(baris[1].value)
              $("#nama_ruang").val(baris[2].innerText)
              $("#kode_posisi").val(baris[3].innerText)
              $(":submit").attr("name","edit")
            }else{
              $("#id_ruang").val("")
              $("#nama_ruang").val("")
              $("#kode_posisi").val("")
              $(":submit").attr("name","tambah")
            }
          }
          function fillFormHapus(data_baris){
            baris = $("#" + data_baris).parent().parent().siblings()
            $("#id_hapus").val(baris[1].value)
          }
        </script>