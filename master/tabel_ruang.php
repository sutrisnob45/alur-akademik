       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Ruang</h3>
            </div>
            <div class="box-header">
              <a href=".?page=tambah_ruang" class="btn btn-primary">Tambah</a>
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
                    while ($rgs= mysqli_fetch_array($rg)) {
                  ?>
                <tr>
                  <td><?php echo $rgs['id_ruang'];?></td>
                  <td><?php echo $rgs['nama_ruang'];?></td>
                  <td><?php echo $rgs['posisi'];?></td>
                  <td><center>
                    <a href="index.php?page=edit_ruang&id_ruang=<?php echo $rgs['id_ruang']?>" class="btn btn-primary">edit</a> 
                  <!-- |<a href="index.php?page=hapus_ruang&id_ruang=<?php echo $rgs['id_ruang']?>" class="btn btn-primary" onclick="return confirm('yakin akan menghapus?');">hapus</a> --> 
                </center></td>
                </tr>
                  <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
