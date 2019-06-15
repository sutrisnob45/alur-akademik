       <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Tahun</h3>
        </div>
        <div class="box-header">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="fillFormEdit('TAMBAH', this.id)">Tambah</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (isset($_POST['tambah'])) {
                $tahun = $_POST['tahun'];
                $status = $_POST['tahun_status'];
                if ($status !== "YA") {
                  $status = "TIDAK";
                }
                mysqli_query($con,"INSERT INTO tahun VALUES(DEFAULT,'$tahun','$status')");
              }
              if (isset($_POST['edit'])) {
                $id = $_POST['id_tahun'];
                $tahun = $_POST['tahun'];
                $status = $_POST['tahun_status'];
                if ($status !== "YA") {
                  $status = "TIDAK";
                }
                mysqli_query($con,"UPDATE tahun SET tahun='$tahun', aktif='$status' WHERE id_tahun=$id");
              }


              $rg=mysqli_query($con,"SELECT * FROM tahun");
              $i=1;
              while ($rgs= mysqli_fetch_array($rg)) :?>
                <tr>
                  <td><?= $i;?></td>
                  <input type="hidden" value="<?= $rgs['id_tahun']?>">
                  <td><?= $rgs['tahun'];?></td>
                  <td><?= $rgs['aktif'];?></td>
                  <td><center>
                    <button type="button" class="btn btn-primary" onclick="fillFormEdit('EDIT', this.id)" id="<?= 'baris' . $i;?>" data-toggle="modal" data-target="#myModal">edit</button>
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
        <!-- Modal kelola-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" style="float: left;">Kelola Tahun</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                  <div class="form-group">
                    <input type="hidden" id="id_tahun" name="id_tahun">
                    <div class="form-group">
                      <label for="nama_ruang">Tahun</label>
                      <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
                    </div>
                    <div class="form-group">
                      <label for="kode_posisi">Status</label>
                      <br>
                      <label class="switch">
                        <input name="tahun_status" id="tahun_status" type="checkbox" value="YA">
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <link rel="stylesheet" href="<?= BASE_URL . "/resource/css/switch.css"?>">
        <script>
          function fillFormEdit(mode = "DEFAULT", data_baris) {
            if (mode === "EDIT") {
              baris = $("#" + data_baris).parent().parent().siblings()
              $("#id_tahun").val(baris[1].value)
              $("#tahun").val(baris[2].innerHTML)
              if ( baris[3].innerHTML==="TIDAK") {
                $("#tahun_status").removeAttr("checked")
                $("#tahun_status").attr("unchecked", "true");
              }else{
                $("#tahun_status").removeAttr("unchecked")
                $("#tahun_status").attr("checked", "true");
              }
              $(":submit").attr("name","edit")
            }else{
              $("#tahun").val("")
              $("#tahun_status").removeAttr("checked")
              $("#tahun_status").attr("unchecked", "true");
              $(":submit").attr("name","tambah")
            }
          }
        </script>