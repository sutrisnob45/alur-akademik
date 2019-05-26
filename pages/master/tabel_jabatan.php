
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Jabatan</h3>
            </div>
            <div class="box-header">
              <a href=<?= BASE_URL . "/tambah_jabatan" ?> class="btn btn-primary">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $jb=mysqli_query($con,"SELECT * FROM jabatan");
                    while ($jbs= mysqli_fetch_array($jb)) {
                  ?>
                <tr>
                  <td><?php echo $jbs['id_jabatan'];?></td>
                  <td><?php echo $jbs['nama_jabatan'];?></td>
                  <td><center>
                   <a href="index.php?page=edit_jabatan&id_jabatan=<?php echo $jbs['id_jabatan']?>" class="btn btn-primary">edit</a> 
                  | <a href="index.php?page=hapus_jabatan&id_jabatan=<?php echo $jbs['id_jabatan']?>" class="btn btn-danger">hapus</a>
                  </center></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>