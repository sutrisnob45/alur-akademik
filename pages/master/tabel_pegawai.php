      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Pegawai</h3>
            </div>
            <div class="box-header">
              <a href=".?page=tambah_pegawai" class="btn btn-primary">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>no</th>
                  <th>nama</th>
                  <th>foto</th>
                  <th>jabatan</th>
                  <th>ruang</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php
                  //mengambil 2 tabel dan mencocokkan id jabatan
                    $pg=mysqli_query($con,"SELECT a.id_pegawai,a.nama_pegawai,a.foto,b.nama_jabatan,c.nama_ruang FROM pegawai a
                      LEFT OUTER JOIN jabatan b on a.id_jabatan = b.id_jabatan
                      LEFT OUTER JOIN ruang c on a.id_ruang = c.id_ruang");
                    //mengurutkan
                    while ($pgs= mysqli_fetch_array($pg)) {
                  ?>
                  <!-- menampilkan -->
                  <td><?php echo $pgs['id_pegawai'];?></td>
                  <td><?php echo $pgs['nama_pegawai'];?></td>
                  <td><img src="img/<?php echo $pgs['foto'];?>" width="50" height="50"></td>
                  <td><?php echo $pgs['nama_jabatan'];?></td>
                  <td><?php echo $pgs['nama_ruang'];?></td>
                  <td><center>
                   <a href="index.php?page=edit_pegawai&id_pegawai=<?php echo $pgs['id_pegawai']?>" class="btn btn-primary">edit</a>
                  | <a href="index.php?page=hapus_pegawai&id_pegawai=<?php echo $pgs['id_pegawai']?>" class="btn btn-danger">hapus</a>
                  </center></td>
                </tr>
         <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>