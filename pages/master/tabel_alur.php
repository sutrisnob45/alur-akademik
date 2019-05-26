       <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel alur</h3>
        </div>
        <div class="box-header">
          <a href=<?= BASE_URL . "/tambah_alur" ?> class="btn btn-primary">Tambah</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>no</th>
                <th>nama</th>
                <th width="300px">detail</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $al=mysqli_query($con,"SELECT * FROM alur");
              while ($als= mysqli_fetch_array($al)) {
                ?>
                <tr>
                  <td><?php echo $als['id_alur'];?></td>
                  <td><?php echo $als['nama_alur'];?></td>
                  <td><?php echo $als['detail'];?></td>
                  <td><center>
                    <a href="index.php?page=edit_alur&id_alur=<?php echo $als['id_alur']?>" class="btn btn-primary">edit</a> 
                    | <a href="index.php?page=hapus_alur&id_alur=<?php echo $als['id_alur']?>" class="btn btn-danger" onclick="return confirm('yakin akan menghapus?');">hapus</a> 
                  </center></td>
                </tr>
              <?php } ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
